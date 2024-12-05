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
$overDue = $_POST['overDue'];

// Delete the invoice with the given ID
$sql = "UPDATE rental_invoice SET overDue = $overDue WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result) {
    echo "Over Due updated successfully!";
} else {
    echo "Error updating over due: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
