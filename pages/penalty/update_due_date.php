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
$id = $_POST['id'];
$dueDate = $_POST['dueDate'];
$penalAmount = 0;
$penalDays = 0;

// Update the table with the new dueDate
$sql = "UPDATE opr_invoice SET dueDate = '$dueDate', penaltyFee = '$penalAmount', penalDays = '$penalDays' WHERE id = $id";

if ($connection->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $connection->error]);
}

$connection->close();
?>
