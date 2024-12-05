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
$invoiceDate = $_POST['invoiceDate'];
$amount = $_POST['amount'];
$invoicePeriod = $_POST['invoicePeriod'];
$dueDate = $_POST['dueDate'];
$exemption = $_POST['exemption'];
$feeType = $_POST['feeType'];
$feeName = $_POST['feeName'];
$notices1 = $_POST['notices1'];
$notices2 = $_POST['notices2'];
$notices3 = $_POST['notices3'];
if($notices1=='None'){$notices1='';}
if($notices2=='None'){$notices2='';}
if($notices3=='None'){$notices3='';}
$customerName = $_POST['customerName'];
$contractNo = $_POST['contractNo'];
$contractStartDate = $_POST['contractStartDate'];
$contractEndDate = $_POST['contractEndDate'];
$invoiceID = "Waiting";

// Insert data into rental_invoice table
$stmt = $connection->prepare("INSERT INTO rental_invoice (invoiceId, invoiceDate, amount, invoicePeriod, exemption, dueDate, customerName, contractName, contractStartDate, contractEndDate, notice1, notice2, notice3, feeName, feeCode)
        VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "sssssssssssssss",
    $invoiceID,
    $invoiceDate,
    $amount,
    $invoicePeriod,
    $exemption,
    $dueDate,
    $customerName,
    $contractNo,
    $contractStartDate,
    $contractEndDate,
    $notices1,
    $notices2,
    $notices3,
    $feeName,
    $feeType
);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}

$stmt->close();

?>