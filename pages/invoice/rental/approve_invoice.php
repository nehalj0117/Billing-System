<?php
// Database connection details
$servername = '10.180.116.161';
$username = 'ikas';
$password = 'Ikas!7232';
$database = 'billing_system';

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID from the request
$id = $_POST['id'];

// Get the current year and month
$currentYearMonth = date("ym");

// Get the last invoice ID from the database
$sql = "SELECT MAX(invoiceId) AS last_invoice_id FROM `rental_invoice` WHERE `invoiceId` NOT LIKE 'Waiting'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$lastInvoiceID = $row['last_invoice_id'];

// Extract the year and month from the last invoice ID
$lastYearMonth = substr($lastInvoiceID, 0, 4);

// Extract the consecutive digit from the last invoice ID
$lastDigit = (int)substr($lastInvoiceID, -5);

// Generate the next consecutive digit or reset to 1 if the month has changed
$nextDigit = ($currentYearMonth === $lastYearMonth) ? $lastDigit + 1 : 1;

// Pad the digit with leading zeros
$paddedNextDigit = sprintf("%05d", $nextDigit);

// Create the new invoice ID
$invoiceID = $currentYearMonth . "-S-" . $paddedNextDigit;
echo $lastInvoiceID;
echo $invoiceID;

// Update the invoice with the given ID
$stmt = $connection->prepare("UPDATE `rental_invoice` SET `invoiceId` = ? WHERE `id` = ?");
$stmt->bind_param("si", $invoiceID, $id); // "si" indicates that the first parameter is a string and the second is an integer

if ($stmt->execute()) {
    echo "Invoice approved successfully!";
} else {
    echo "Error approving invoice: " . $stmt->error;
}

$stmt->close();
?>
