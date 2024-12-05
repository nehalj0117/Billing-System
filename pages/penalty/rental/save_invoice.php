<?php
$host = '10.180.116.161';
$dbname = 'billing_system';
$user = 'ikas';
$pass = 'Ikas!7232';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);


    // ... (your POST data retrieval code)
    if (!isset($_POST['invoiceDate'], $_POST['amount'], $_POST['period'], $_POST['contractName'])) {
        throw new Exception("Required POST keys are missing.");
    }
    $invoiceDate = $_POST['invoiceDate'];
    $amount = $_POST['amount'];
    $dueDate = $_POST['dueDate'];
    $duePeriod = $_POST['period'];
    $exemption = $_POST['exemption'];
    $feeType = $_POST['feeType'];
    $notices1 = $_POST['notices1'];
    $notices2 = $_POST['notices2'];
    $notices3 = $_POST['notices3'];
    if($notices1=='None'){$notices1='';}
    if($notices2=='None'){$notices2='';}
    if($notices3=='None'){$notices3='';}
    if($exemption== ''){$exemption= '0.0';}
    $contractName = $_POST['contractName'];
    $invoicedescript = $_POST['invoiceIdDec'];

    // Fetch missing values from the rental_contracts table using customerName
    $query = "SELECT * FROM rental_contracts WHERE contractName = ? LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$contractName]);
    $contractData = $stmt->fetch();
    $feeName= "Late Payment Charges";

    $sql = "SELECT MAX(invoiceId) AS last_invoice_id FROM `rental_invoice` WHERE `invoiceId` NOT LIKE 'Waiting'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();

    $lastInvoiceID = $row['last_invoice_id'];
    // Extract the year and month from the last invoice ID
    $lastYearMonth = substr($lastInvoiceID, 0, 4);

    // Extract the consecutive digit from the last invoice ID
    $lastDigit = (int)substr($lastInvoiceID, -5);

    // Generate the next consecutive digit or reset to 1 if the month has changed
    $currentYearMonth = date('Ym');
    $nextDigit = ($currentYearMonth === $lastYearMonth) ? $lastDigit + 1 : 1;

    // Pad the digit with leading zeros
    $paddedNextDigit = sprintf("%05d", $nextDigit);

    // Create the new invoice ID
    $invoiceID = 'Waiting';
    $totalAmount = $amount;
    $dueAmount = 0;
    $penalAmount = 0;
    $occType="Penalty";

    if ($contractData) {
        $query = "INSERT INTO rental_invoice (invoiceId, invoiceDate, occurenceType, amount, dueDate, invoicePeriod, exemption, feeCode, feeName, notice1, notice2, notice3, contractName,totalAmount, overDue, penalAmount, contractNo, customerName, customerId, feeDescription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            $invoiceID,
            $invoiceDate, 
            $occType,
            $amount, 
            $dueDate, 
            $duePeriod, 
            $exemption, 
            $feeType, 
            $feeName,
            $notices1, 
            $notices2, 
            $notices3, 
            $contractName,
            $totalAmount,
            $dueAmount,
            $penalAmount,
            $contractData['contractId'], 
            $contractData['customerName'],
            $contractData['customerId'],
            $invoicedescript
        ]);
        echo "Penalty invoice created for Invoice :".$invoicedescript;
    } else {
        echo "No matching contract data found for the customer name.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
} catch (Exception $e) {
    echo "General error: " . $e->getMessage();
}
