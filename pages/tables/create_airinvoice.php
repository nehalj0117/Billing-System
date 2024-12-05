<?php

$servername = '10.180.116.161';
$username = 'ikas';
$password = 'Ikas!7232';
$database = 'billing_system';

// Database connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare an INSERT statement
    $stmt = $conn->prepare("INSERT INTO opr_invoice (cusID, cusName, invoiceDate, dueDate, invoiceType, approchFee, landFee, parkFee, pbbFee, totalFee, invoicePeriod) VALUES (?, ?, CURDATE(), DATE_ADD(CURDATE(), INTERVAL 30 DAY), ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssddddds", 
        $_POST['cusID'], 
        $_POST['cusName'], 
        $_POST['invoiceType'],
        $_POST['approachFee'], 
        $_POST['landFee'], 
        $_POST['parkFee'], 
        $_POST['pbbFee'], 
        $_POST['totalFee'],
        $_POST['period']
    );

    // Execute the prepared statement
// After executing the statement
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Invoice created successfully."]);
} else {
    echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
}

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No data received.";
}
?>
