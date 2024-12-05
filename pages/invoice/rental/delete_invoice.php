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

// Delete the invoice with the given ID
$sql = "DELETE FROM rental_invoice WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result) {
    echo "Invoice deleted successfully!";
} else {
    echo "Error deleting invoice: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
