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
$id = $_POST['Id'];
$discount = $_POST['Discount'];
$notice1 = $_POST['Notice1'];
$notice2 = $_POST['Notice2'];
$notice3 = $_POST['Notice3'];
$dueDate = $_POST['DueDate'];
$invoiceDate = $_POST['InvoiceDate'];

// Delete the invoice with the given ID
$sql = "UPDATE opr_invoice SET discount = ?, dueDate = ?, invoiceDate = ?, notice1 = ?, notice2 = ?, notice3 = ? WHERE id = ?";
$stmt = $connection->prepare($sql);

// Bind parameters
$stmt->bind_param("dsssssi", $discount, $dueDate, $invoiceDate, $notice1, $notice2, $notice3, $id);

if ($stmt->execute()) {
    echo "Updated successfully!";
} else {
    echo "Error updating : " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$connection->close();
?>