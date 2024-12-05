<?php
$servername = '10.180.116.161';
$username = 'ikas';
$password = 'Ikas!7232';
$database = 'billing_system';

$mysqli = new mysqli($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $amount = $_POST['amount'];

    // Validate the input data
    if (!is_numeric($id) || !is_numeric($amount) || $amount <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
        exit;
    }

    // Fetch the current paid amount and total fee
    $selectQuery = "SELECT paid, amount FROM rental_invoice WHERE id = ?";
    $stmt = $mysqli->prepare($selectQuery);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentPaid = $row['paid'];
        $totalFee = $row['amount'];

        // Check if the deposit amount is valid
        if ($amount > ($totalFee - $currentPaid)) {
            echo json_encode(['success' => false, 'message' => 'Deposit amount exceeds allowable amount.']);
            exit;
        }

        // Update the database using prepared statements
        $query = "UPDATE rental_invoice SET paid = paid + ? WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("di", $amount, $id);

        if ($stmt->execute()) {
            // Fetch the updated value
            $stmt->close();
            $stmt = $mysqli->prepare($selectQuery);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $newPaidValue = $row['paid'];
            echo json_encode(['success' => true, 'newPaidValue' => $newPaidValue]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error updating deposit.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invoice not found.']);
    }
}
?>
