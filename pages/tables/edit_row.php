<?php
header('Content-Type: application/json');
// Database connection parameters
$servername = '10.180.116.161';
$username = 'ikas';
$password = 'Ikas!7232';
$database = 'billing_system';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get POST data
$id = $_POST['id']; // You need to send the ID from the AJAX call to know which row to update
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$contractDate = $_POST['contractDate'];
$payment = $_POST['payment'];
$paymentTerm = $_POST['paymentTerm'];
$status = $_POST['status'] === "Enabled" ? 1 : 0; // Assuming status is stored as 1 for Enabled and 0 for Disabled

// Update the rental_contracts table
$sql = "UPDATE rental_contracts SET 
            startDate = '$startDate',
            endDate = '$endDate',
            contractDate = '$contractDate',
            unitPrice = '$payment',
            Term = '$paymentTerm',
            status = '$status'
        WHERE id = $id";

if ($connection->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $connection->error]);
}

$connection->close();
?>
