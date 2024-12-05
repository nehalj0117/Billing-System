<?php
$servername = '10.180.116.161';
$username = 'ikas';
$password = 'Ikas!7232';
$database = 'billing_system';

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id = $_POST['id'];
$regNo = $_POST['regNo'];
$flightNo = $_POST['flightNo'];
$flightDate = $_POST['flightDate'];
$actualTime = $_POST['actualTime'];
$linkFlightNo = $_POST['linkFlightNo'];
$linkDate = $_POST['linkDate'];
$linkActualDateTime = $_POST['linkActualDateTime'];
$type = $_POST['type'];

$stmt = $connection->prepare("UPDATE flight_data SET Reg_No = ?, Flt_No = ?, Flt_Date = ?, Actual_Time = ?, Link_Flt_No = ?, Link_Date = ?, Link_Actual_DateTime = ?, Type = ? WHERE id = ?");
$stmt->bind_param("ssssssssi", $regNo, $flightNo, $flightDate, $actualTime, $linkFlightNo, $linkDate, $linkActualDateTime, $type, $id);

if ($stmt->execute()) {
    echo "Data updated successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
