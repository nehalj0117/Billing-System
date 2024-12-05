<?php

// Database connection
$conn = new mysqli("10.180.116.161", "ikas", "Ikas!7232", "billing_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) { //get the post value from invoice_approved
  $invoiceID = $_GET['id'];
  $sql = "SELECT * FROM rental_invoice WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $invoiceID);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows == 1) {
    $row = $result->fetch_assoc(); 
    // Set the parameter values
    $id = $row["invoiceId"];// get data from DB
    $cusFullName = $row["customerName"];// get data from DB
    $invoiceDate = $row["invoiceDate"];// get data from DB
    $dueDate = $row["dueDate"];
    $period = $row["invoiceId"];//get period from DB
    $invoiceType =  $row["feeName"];// get data from DB
    $feeCode = $row["feeCode"];
    $feeName = $row["feeName"];
    $Amount =  $row["amount"];// get data from DB
    $overDue =  $row["overDue"];// get data from DB
    $total =  $row["totalAmount"];// get data from DB
    $notice1 =  $row["notice1"];// get data from DB
    $notice2 =  $row["notice3"];// get data from DB
    $notice3 =  $row["notice2"];// get data from DB
    $feeDescription = $row["feeDescription"];
    $invoicePeriod = $row["invoicePeriod"];
    $exemption = $row["exemption"];
}else{
  echo "no data";
}
// Close the database connection
$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Invoice Air</title>
  <style>
    body {
      background: rgb(255, 255, 255);
      font-family: Malgun Gothic;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      }
    page {
      background: white;
      display: block;
      margin: 0 auto;
      margin-bottom: 0cm;
      box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }
    page[size="A4"] {
      width: 21cm;
      height: 29.7cm;
    }
    .page-content {
      padding: 30px;
      padding-left: 60px;
      flex: 1;
    }
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0px;
    }
    .logo {
      width: 200px;
    }
    .invoice-title {
      font-size: 45px;
      font-weight: bold;
    }
    .address {
      margin-top: 40px;
      margin-bottom: 20px;
      font-size: 12px;
      font-family: Arial;
    }
    .section-heading {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .bankdetails-heading {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 5px;
      color: #ff0101;
    }
    .invoice-heading {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .item-heading {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
      background-color: #FF9900;
      color: white;
      padding: 1px;
    }
    .customer-section {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 5px;
      border-top: 1px solid #000;
      border-bottom: 1px solid #000;
      padding: 5px 0;
    }
    .customer-details {
      font-size: 13px;
      font-family: Arial;
    }
    .table-container {
      width: 100%;
      overflow-x: auto;
    }
    table.fee-details {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
    }
    th,
    td {
      padding: 5px;
      text-align: left;
      font-weight: lighter;
    }
    .feehead {
      background-color: #CCCCCC;
      font-weight: bold;
      color: black;
      text-align:  center;
      white-space: nowrap;
    }
    .fee-details tr {
      height: 30px; /* Adjust the height as per your preference */
      font-size: 13px;
      white-space: nowrap;
    }

    td.total-cell {
      background-color: #FF9900;
      color: white;
      font-weight: solid;
      border: none;
    }
    td.other-amount{
      font-weight: solid;
      border: none;
    }
    td.total-amount {
      border: none;
      font-weight: bold;
    }
    td.itemscell {
      border-right: 1px solid #000; /* Border on the right side */
      border-bottom: 1px solid #000;
      text-align: left;

    }
    td.itemscell2 {
      border-left: 1px solid #000; /* Border on the right side */
      border-bottom: 1px solid #000;
      border-right: 1px solid #000;
      text-align: right;
    }
    td.itemscell3 {
      border-left: 1px solid #000; /* Border on the right side */
      border-bottom: 1px solid #000; /* Border on the bottom side */
      text-align: right;
    }
    .footer {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      font-size: 12px;
    }
    .bank-details {
      width: 50%;
    }
    .notice-box {
      width: 45%;
      border: 1px solid #ccc;
      padding: 5px;
      background-color: #CCCCCC;
    }
    .invoice-details {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
    }
    .sign{
      padding-top: 10px;
      text-align: center;
      font-weight: bold;
    }
    .customer-details {
      display: flex;
      width: 50%;
    }
    .invoiceperiod {
      width: 45%;
      padding: 5px;
      align-items: center;
    }
    .invoicedate{
      text-align: right;
    }
    .spacer-10 {
      margin-left: 10px;
    }
    .spacer-15 {
      margin-left: 15px;
    }
    .spacer-20 {
      margin-left: 20px;
    }
    .spacer-30 {
      margin-left: 30px;
    }
    .spacer-40 {
      margin-left: 40px;
    }
    .spacer-50 {
      margin-left: 50px;
    }
    .spacer-70 {
      margin-left: 70px;
    }
    .spacer-88 {
      margin-left: 88px;
    }
    .spacer-100 {
      margin-left: 120px;
    }
    @media print {
      body * {
        visibility: hidden;
      }
      .page-content,
      .page-content * {
        visibility: visible;
      }
      .page-content {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
</head>
<page size="A4">
  <body>
    <div class="page-content">
      <div class="header">
        <div>
          <img class="logo" src="../../../../assets/images/invoice-logo.png" alt="Logo 1">
        </div>
        <div class="invoice-title">INVOICE</div>
      </div>
      <div class="address">
        Finance Department / Kuwait Incheon Airport Corp.<br>
        Kuwait Int'l Airport, T4, Farwaniya, Kuwait<br>
        Tel. 965-2207-4175 / FAX. 965-2207-4451
      </div>
      <div class="customer-section">
          <div class="invoice-details">
            <table class="customer-details">
              <tr>
                <th>Invoice Number</th>
                <td><?php echo $id ?></td>
              </tr>
              <tr>
                <th>Customer Name</th>
                <td><?php echo $cusFullName; ?></td>
              </tr>
              <tr>
                <th>Invoice Date</th>
                <td><?php echo $invoiceDate; ?></td>
              </tr>
              <tr>
                <th>Due Date</th>
                <td><?php echo $dueDate; ?></td>
              </tr>
            </table>
          <div class="invoiceperiod">
            <div class="invoicedate"></br></br></br></br><?php echo $invoiceType; ?></div>
          </div>
        </div>
      </div>
      <div class="item-heading">&ensp;<?php echo "AIRPORT USER CHARGE"?></div>
      <div class="table-container">
      <table class="fee-details" style="width: 100%;">
        <tr style ="background-color: #CCCCCC; font-weight: solid;">
          <th colspan="2" class="feehead">Description</th>
          <th class="feehead">Amount (KD)</th>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"><?php 
          if($feeCode ==503){
            echo "Penalty for Late Payment of Invoice : ".$feeDescription;
          }
          else {
            echo $feeName;
          }        
          ?>
          <td class="itemscell3">
            <?php 
            if($feeCode ==503){
            echo "";
          }else{
           echo $Amount;} ?></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell">
          <?php 
          if($feeCode ==503){
            echo "Period (".$invoicePeriod.")";
          }      
          ?>            
          </td>
          <td class="itemscell3">
          <?php 
            if($feeCode ==503){
            echo number_format($Amount,3);
          } ?>
          </td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
        <tr>
          <td colspan="2" class="itemscell"></td>
          <td class="itemscell3"></td>
        </tr>
                <tr><td></td></tr>
              </table>
        </div>
        <div class="table-container">
        <table class="fee-details" style="width: 100%;">
        <tr class="total-row">
          <td colspan="2"></td>
          <td></td>
          <td class="other-amount" style="font-weight: bold; text-align:right">Current Amount</td>
          <td style="font-weight: bold;">KD</td>
          <td class="total-amount"><?php echo number_format($Amount,3); ?></td>
        </tr>
      <tr class="total-row">
        <td colspan="2"></td>
        <td colspan="2" class="other-amount" style="font-weight: bold; text-align:right">
        <?php
        if($feeCode ==503){
            echo "Exemption";
          }
          else{echo "Over Due";} ?>
        <td style="font-weight: bold;">
        <?php 
          if($feeCode ==503){
            echo number_format($exemption,1)."%";
          }
          else{echo "KD";} ?> 
      </td>
        <td class="total-amount"><?php
        if($exemption>0 && $feeCode ==503){
          $exemptedFee = $Amount*$exemption/100;
          echo number_format($exemptedFee,3);
          }
          else if($exemption==0 && $feeCode ==503){
            $exemptedFee = 0;
            echo number_format($exemptedFee,3);
          
        }else{echo number_format($overDue,3);} ?></td>
      </tr>
        <tr class="total-row">
          <td colspan="2"></td>
          <td></td>
          <td class="total-cell" style="background-color: #FF9900; color: white; font-weight: bold; text-align:right">Total Amount</td>
          <td style="font-weight: bold;">KD</td>
          <td class="total-amount"><?php
          if($feeCode ==503){
          $total = $Amount-$exemptedFee;
            echo number_format($total,3);
          } else{
            $total = $Amount + $overDue;
            echo number_format($total,3);} ?></td>
        </tr>
      </table>
    </div>

      <div style="padding-top: 60px;"></div>
      <div class="footer">
        <div class="bank-details">
          <div class="bankdetails-heading">Bank Account Details</div>
          <strong>Bank Name:</strong><span class="spacer-50"></span>National Bank of Kuwait<br>
          <strong>Account Number:</strong><span class="spacer-20"></span>2019850731<br>
          <strong>Account Holder:</strong><span class="spacer-20"></span>&ensp;DGCA<br>
          <strong>Swift Code:</strong><span class="spacer-50"></span>&nbsp;NBOK KWKW<br>
          <strong>IBAN:</strong><span class="spacer-88"></span>KW50NBOK0000000000002019850731<br>
          <strong>Address:</strong><span class="spacer-70"></span>Finance Department / DGCA<br>
          <span class="spacer-100"></span>Ghazali Rd., Farwaniya, Kuwait<br>
          <span class="spacer-100"></span>TEL: 965-2474-177<br>
          <span class="spacer-100"></span>FAX: 965-2474-166<br>
        </div>
        <div class="notice-box">
          <div class="section-heading">※ Notice</div>
          <?php echo $notice1; ?><br>
          <?php echo $notice2; ?><br>
          <?php echo $notice3; ?><br>
        </div>
      </div>
      <div class="sign">Signature</div>
  </body>
</page>
</html>
