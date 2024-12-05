<?php
if (isset($_POST['filter'])) {
  $fromDate = $_POST['fromDate'];
  $toDate = $_POST['toDate'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Plus Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../../assets/css/demo_1/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <!-- Modal CSS -->
  <style>
    body {
      background-attachment: fixed;
    }

    .depositModalContainer {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px;
      /* Increased width */
      padding: 20px;
      background: inherit;
      border-radius: 10px;
    }

    .depositModalContainer:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      box-shadow: inset 0 0 2000px rgba(255, 255, 255, .8);
      filter: blur(10px);
      background: inherit;
      border-radius: 10px;
    }

    .modal-content {
      position: relative;
      z-index: 1;
      padding: 20px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
          <a href="#" class="nav-link flex-column">
            <div class="nav-profile-image">
              <img src="../../../assets/images/faces/face1.jpg" alt="profile" />
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
              <span class="font-weight-semibold mb-1 mt-2 text-center">Walid</span>
              <span class="text-secondary icon-sm text-center">Finance Deaprtment</span>
            </div>
          </a>
        </li>
        <li class="nav-item pt-3">
          <a class="nav-link d-block" href="../../index.html">
            <img class="sidebar-brand-logo" src="../../../assets/images/Incheon_Airport_Logo_full.svg" alt="" />
            <img class="sidebar-brand-logomini" src="../../../assets/images/Incheon_Airport_Logo_mini.svg" alt="" />
            <div class="small font-weight-light pt-1">Commercial Billing System</div>
          </a>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head"></span>
        </li>
        <!-- Flight Data -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#flight-data-menu" aria-expanded="false"
            aria-controls="flight-data-menu">
            <i class="mdi mdi-hospital-building menu-icon"></i>
            <span class="menu-title">Rentals</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="flight-data-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/rental/rentals.php">Rental Data</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-blur-linear menu-icon"></i>
            <span class="menu-title">Charges</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/rental-charges.php">Rental Charges</a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Invoice -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#invoice-menu" aria-expanded="false"
            aria-controls="invoice-menu">
            <i class="mdi mdi-file-document-box menu-icon"></i>
            <span class="menu-title">Invoice</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="invoice-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/invoice/rental/invoice-table.php">Invoice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/invoice/rental/invoice-approved.php">Approved Invoice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/invoice/rental/penalty-invoice.php">Penalty Invoice</a>
              </li>
            </ul>
          </div>
        </li>

        <!-- Penalty -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#penalty-menu" aria-expanded="false"
            aria-controls="penalty-menu">
            <i class="mdi mdi-gavel menu-icon"></i>
            <span class="menu-title">Penalty</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="penalty-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/penalty/rental/penalty-data.php">Penalty Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/penalty/rental/create-invoice.php">Generate Penalty Invoice</a>
              </li>
            </ul>
          </div>
        </li>

        <!-- Aircraft Data -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#aircraft-menu" aria-expanded="false"
            aria-controls="aircraft-menu">
            <i class="mdi mdi-airplane menu-icon"></i>
            <span class="menu-title">Configure Data</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="aircraft-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-spaces.php">Edit Spaces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-contracts.php">Edit Contracts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-invoice-comments.php">Edit Invoice Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-charges.php">Edit Charges</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-default-theme">
          <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
        </div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme">
          <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles default primary"></div>
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles light"></div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
          </button>
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                src="../../../assets/images/Incheon_Airport_Logo_mini.svg" alt="logo" /></a>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list"
                aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face1.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Test</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face6.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Test</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face7.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Test</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown ml-3">
              <a class="nav-link" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-logout d-none d-md-block">
              <button class="btn btn-sm btn-info">Commercial</button>
            </li>
            <li class="nav-item nav-logout d-none d-md-block mr-3">
              <a class="nav-link" href="../../pages/flight-data/flight-data.php">Airline</a>
            </li>
            <li class="nav-item nav-profile dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                aria-expanded="false">
                <div class="nav-profile-text">English </div>
              </a>
              <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="flag-icon flag-icon-kw mr-3"></i> Arabic </a>
            </li>
            <li class="nav-item nav-logout d-none d-md-block">
              <button class="btn btn-sm btn-danger">Logout</button>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">Basic Tables</h3>

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Basic tables </li>
              </ol>
            </nav>
          </div>
          <form method="post" action="">
            <div class="row justify-content-between">
              <div class="col-md-8">
                <div class="row">
                  <!-- From Date -->
                  <div class="col-md-4">
                    <label for="fromDate">From Date:</label>
                    <input type="date" name="fromDate" id="fromDate" class="form-control"
                      value="<?php echo $fromDateValue; ?>" required>
                  </div>

                  <!-- To Date -->
                  <div class="col-md-4">
                    <label for="toDate">To Date:</label>
                    <input type="date" name="toDate" id="toDate" class="form-control"
                      value="<?php echo $fromDateValue; ?>" required>
                  </div>

                  <!-- Filter Button -->
                  <div class="col-md-4 align-self-end">
                    <button type="submit" name="filter" class="btn btn-primary btn-icon-text">
                      <i class="mdi mdi-file-find"></i> Filter
                    </button>
                  </div>
                </div>
              </div>

              <!-- Search Box -->
              <div class="col-md-4">
                <label for="fromDate">Find</label>
                <input type="text" id="searchInput" placeholder="Find with Contract & Customer Name or ID..."
                  onkeyup="searchRows()" class="form-control">
              </div>
            </div>
          </form>

          <div class="col-lg-12 stretch-card">

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Flight Charges</h4>
                <p class="card-description"> Data fetched from the database with exception reasons.
                </p>

                <?php
                function console_log($output, $with_script_tags = true) {
                $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
                ');';
                if ($with_script_tags) {
                $js_code = '<script>' . $js_code . '</script>';
                }
                echo $js_code;
                }

                if (isset($_POST['filter'])) {
                  $fromDate = $_POST['fromDate'];
                  $toDate = $_POST['toDate'];
                  $fromDate = date('Y-m-d H:i:s', strtotime($fromDate));
                  $toDate = date('Y-m-d H:i:s', strtotime($toDate . ' +1 day'));
                } else {
                  // Default date range (you can adjust this as needed)
                  $currentYear = date('Y');
                  $currentMonth = date('m');

                  // Create a DateTime object for the first day of the current month and year
                  $startDate = new DateTime("2018-01-01 00:00:00");
                  $endDate = new DateTime("$currentYear-$currentMonth-01 00:00:00");

                  // Clone the start date and modify it to get the last day of the month
                  // $endDate = clone $startDate;
                  $endDate->modify('last day of this month');
                  $endDate->setTime(23, 59, 59); // Set time to 23:59:59
                
                  $fromDate = $startDate->format('Y-m-d H:i:s');
                  $toDate = $endDate->format('Y-m-d H:i:s');
                }
                // Your PHP code for retrieving and displaying table data goes here
                
                // Example PHP code for retrieving data
                $servername = '10.180.116.161';
                $username = 'ikas';
                $password = 'Ikas!7232';
                $database = 'billing_system';

                $connection = mysqli_connect($servername, $username, $password, $database); // Database connection
                
                // Check connection
                if (!$connection) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                // Set $toDate to the last day of the current month at 23:59:59

                $sql = "SELECT rc.id, rc.contractId, rc.contractName, rc.Term, rc.startDate, rc.endDate, rc.contractDate, rc.customerId, rc.customerName, rc.servicetype, rc.rentalSpaceId, rc.rentalSpace, rc.effectiveStartDate, rc.effectiveEndDate, rc.unitPrice, rc.Area, rc.status
                            FROM rental_contracts rc
                            WHERE rc.startDate BETWEEN '$fromDate' AND '$toDate'
                            ORDER BY rc.id ASC";

                $result = $connection->query($sql);


                echo '<div class="table-responsive">';
                echo '<table class="table table-bordered">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Customer ID</th>';
                echo '<th>Customer Name</th>';
                echo '<th>Contract Name</th>';
                echo '<th>Start Date</th>';
                echo '<th>End Date</th>';
                echo '<th>Contract Date</th>';
                echo '<th>Effective Start Date</th>';
                echo '<th>Effective End Date</th>';
                echo '<th>Payment</th>';
                echo '<th>Payment term</th>';
                echo '<th>Status</th>';
                echo '<th>Actions</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $searchData = $row["contractName"] . " " . $row["customerName"] . " " . $row["customerId"] . " " . $row["contractId"];
                    echo '<tr data-id="' . $row["id"] . '" data-search="' . htmlspecialchars($searchData, ENT_QUOTES, 'UTF-8') . '">';
                    echo "<td data-Cusid=" . $row["customerId"] . ">" . $row["customerId"] . "</td>";
                    echo "<td>" . $row["customerName"] . "</td>";
                    echo "<td>" . $row["contractName"] . "</td>";
                    echo "<td>" . $row["startDate"] . "</td>";
                    echo "<td>" . $row["endDate"] . "</td>";
                    echo "<td>" . $row["contractDate"] . "</td>";
                    echo "<td>" . $row["effectiveStartDate"] . "</td>";
                    echo "<td>" . $row["effectiveEndDate"] . "</td>";
                    echo "<td>" . $row["unitPrice"] . "</td>";
                    echo "<td>" . $row["Term"] . "</td>";
                    if ($row["status"] != 1) {
                      echo "<td>Disabled</td>";
                    } else {
                      echo "<td>Enabled</td>";
                    }
                    echo "<td>
                            <button type='button' class='btn btn-dark btn-icon-text' onclick='editRow(" . $row['id'] . ")'>
                              <i class='mdi mdi-file-check btn-icon-prepend'></i> Edit
                            </button>
                            <button type='button' class='btn btn-success btn-icon-text' onclick='createInvoice(" . $row['id'] . ")'>
                              <i class='mdi mdi-check btn-icon-prepend'></i> Create Invoice
                            </button>
                          </td>";
                  }
                } else {
                  echo "<tr><td colspan='18'>No data found</td></tr>";
                }

                ?>
                </tbody>
                </table>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Row</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- You can add input fields here for each column you want to edit. 
                    For example, for the Customer ID: -->
                        <div class="form-group">
                          <input type="hidden" id="editRowId">
                          <label for="editStartDate">Start Date</label>
                          <input type="date" class="form-control" id="editStartDate" name="startDate">

                          <label for="editEndDate">End Date</label>
                          <input type="date" class="form-control" id="editEndDate" name="endDate">

                          <label for="editContractDate">Contract Date</label>
                          <input type="date" class="form-control" id="editContractDate" name="contractDate">

                          <label for="editPayment">Payment</label>
                          <input type="text" class="form-control" id="editPayment" name="payment">

                          <label for="editPaymentTerm">Payment Term</label>
                          <select class="form-control" id="editPaymentTerm" name="paymentTerm">
                            <option value="Monthly">Monthly</option>
                            <option value="Quarterly">Quarterly</option>
                            <!-- Add other terms as needed -->
                          </select>
                          <label for="editStatus">Status</label>
                          <select class="form-control" id="editStatus" name="status">
                            <option value="Enabled">Enabled</option>
                            <option value="Disabled">Disabled</option>
                          </select>
                        </div>
                        <!-- Repeat for other columns -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="saveChanges()">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Create Invoice Modal -->
                <div class="modal fade" id="createInvoiceModal" tabindex="-1" role="dialog"
                  aria-labelledby="createInvoiceModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="createInvoiceModalLabel">Create Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form id="invoiceForm">
                          <!-- Invoice Date -->
                          <div class="form-group">
                            <label for="invoiceDate">Invoice Date</label>
                            <input type="date" class="form-control" id="invoiceDate" name="invoiceDate">
                          </div>

                          <!-- Amount -->
                          <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount">
                          </div>

                          <!-- Period -->
                          <div class="form-group">
                            <label for="period">Period</label>
                            <select class="form-control" id="period" name="period" onchange="toggleCustomPeriod()">
                              <option value="Q1">1st January to 31st March</option>
                              <option value="Q2">1st April to 30th June</option>
                              <option value="Q3">1st July to 30th September</option>
                              <option value="Q4">1st October to 31st December</option>
                              <option value="custom">Custom Period</option>
                            </select>
                          </div>

                          <!-- Custom Period Date Pickers -->
                          <div class="form-group" id="customPeriodGroup" style="display: none;">
                            <label for="customStartDate">Custom Start Date</label>
                            <input type="date" class="form-control" id="customStartDate" name="customStartDate">

                            <label for="customEndDate">Custom End Date</label>
                            <input type="date" class="form-control" id="customEndDate" name="customEndDate">
                          </div>

                          <!-- Due Date -->
                          <div class="form-group">
                            <label for="dueDate">Due Date</label>
                            <input type="date" class="form-control" id="dueDate" name="dueDate">
                          </div>

                          <!-- Exemption -->
                          <div class="form-group">
                            <label for="exemption">Exemption</label>
                            <input type="text" class="form-control" id="exemption" name="exemption">
                          </div>

                          <!-- Fee Type -->
                          <div class="form-group">
                            <label for="feeType">Fee Type</label>
                            <select class="form-control" id="feeType" name="feeType">
                              <!-- Add options for fee type here -->
                              <option value="501">Rent Fee</option>
                              <option value="502">Concession Fee</option>
                              <!-- ... -->
                            </select>
                          </div>

                          <!-- Notices -->
                          <div class="form-group">
                            <label for="notices1">1st Notices</label>
                            <select class="form-control" id="notices1" name="notices1">
                              <!-- Add options for notices here -->
                              <option value="None">None</option>
                              <option value="notice1">Notice 1</option>
                              <option value="notice2">Notice 2</option>
                              <option value="notice3">Notice 3</option>
                              <!-- ... -->
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="notices2">2nd Notices </label>
                            <select class="form-control" id="notices2" name="notices2">
                              <!-- Add options for notices here -->
                              <option value="None">None</option>
                              <option value="notice1">Notice 1</option>
                              <option value="notice2">Notice 2</option>
                              <option value="notice3">Notice 3</option>
                              <!-- ... -->
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="notices3">3rd Notices</label>
                            <select class="form-control" id="notices3" name="notices3">
                              <!-- Add options for notices here -->
                              <option value="None">None</option>
                              <option value="notice1">Notice 1</option>
                              <option value="notice2">Notice 2</option>
                              <option value="notice3">Notice 3</option>
                              <!-- ... -->
                            </select>
                          </div>

                          <!-- Hidden fields for values from the selected row -->
                          <input type="hidden" id="customerName" name="customerName">
                          <input type="hidden" id="contractNo" name="contractNo">
                          <input type="hidden" id="contractStartDate" name="contractStartDate">
                          <input type="hidden" id="contractEndDate" name="contractEndDate">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitInvoice()">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->

      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <footer class="footer" style="position: fixed; left: 0;  bottom: 0;  width: 100%;">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © IKAS Kuwait</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Billing Managent System <a href=""
          target="_blank">From IKAS </a> ICT Department</span>
    </div>
  </footer>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../assets/js/off-canvas.js"></script>
  <script src="../../../assets/js/hoverable-collapse.js"></script>
  <script src="../../../assets/js/misc.js"></script>
  <script src="../../../assets/js/settings.js"></script>
  <script src="../../../assets/js/todolist.js"></script>
  <script>
    // Function to find/search row
    function searchRows() {
      const query = document.getElementById('searchInput').value.toLowerCase();
      const rows = document.querySelectorAll("table tbody tr");

      rows.forEach(row => {
        const rowData = row.getAttribute("data-search").toLowerCase();
        if (rowData.includes(query)) {
          row.style.display = ""; // Show row
        } else {
          row.style.display = "none"; // Hide row
        }
      });
    }

    function editRow(id) {
      // Fetch the data from the row using the id or directly from the row elements
      const row = document.querySelector(`tr[data-id="${id}"]`);
      document.getElementById('editStartDate').value = row.querySelector('td:nth-child(4)').textContent;
      document.getElementById('editEndDate').value = row.querySelector('td:nth-child(5)').textContent;
      document.getElementById('editContractDate').value = row.querySelector('td:nth-child(6)').textContent;
      document.getElementById('editPayment').value = row.querySelector('td:nth-child(9)').textContent;
      // For dropdowns, you need to set the value and then dispatch an event to update the UI
      const paymentTermSelect = document.getElementById('editPaymentTerm');
      paymentTermSelect.value = row.querySelector('td:nth-child(10)').textContent;
      paymentTermSelect.dispatchEvent(new Event('change'));

      const statusSelect = document.getElementById('editStatus');
      statusSelect.value = row.querySelector('td:nth-child(12)').textContent === "Enabled" ? "Enabled" : "Disabled";
      statusSelect.dispatchEvent(new Event('change'));
      // Store the id in a hidden input field in the modal so it can be used later when saving changes
      document.getElementById('editRowId').value = id;
      // Show the modal
      $('#editModal').modal('show');
    }

    // Function to save row
    function saveChanges() {
      const id = $('#editRowId').val();
      const startDate = $('#editStartDate').val();
      const endDate = $('#editEndDate').val();
      const contractDate = $('#editContractDate').val();
      const payment = $('#editPayment').val();
      const paymentTerm = $('#editPaymentTerm').val();
      const status = $('#editStatus').val();

      $.ajax({
        url: 'edit_row.php',
        type: 'POST',
        datatype: 'json',
        data: {
          id: id,
          startDate: startDate,
          endDate: endDate,
          contractDate: contractDate,
          payment: payment,
          paymentTerm: paymentTerm,
          status: status
        },
        success: function (response) {
          console.log(response);
          if (response.success) {
            alert('Data updated successfully!');
            location.reload(); // Reload the page to reflect the changes
          } else {
            alert('Error updating data.');
          }
        }
      });
    }

    function createInvoice(rowId) {
      console.log("Row ID:", rowId);
      // Fetch the data from the row using the rowId
      const row = document.querySelector(`tr[data-id="${rowId}"]`);
      console.log("Row:", row);

      console.log("Customer Name:", row.querySelector('td:nth-child(8)'));
      console.log("Contract ID:", row.querySelector('td:nth-child(2)'));

      // Populate the modal fields
      // Populate the modal fields
      document.getElementById('invoiceDate').value = new Date().toISOString().split('T')[0]; // Today's date

      const unitPriceColumn = row.querySelector('td:nth-child(9)'); // Corrected to 9th column for unitPrice
      if (unitPriceColumn) {
        document.getElementById('amount').value = unitPriceColumn.textContent;
      } else {
        console.error("Payment (unitPrice) column not found!");
      }

      document.getElementById('dueDate').value = new Date(new Date().setMonth(new Date().getMonth() + 1)).toISOString().split('T')[0]; // Invoice date + 1 month

      // Populate hidden fields from the selected row
      document.getElementById('customerName').value = row.querySelector('td:nth-child(2)').textContent; // Customer Name is in the 2nd column
      document.getElementById('contractNo').value = row.querySelector('td:nth-child(3)').textContent; // Contract Name is in the 3rd column
      document.getElementById('contractStartDate').value = row.querySelector('td:nth-child(4)').textContent;
      document.getElementById('contractEndDate').value = row.querySelector('td:nth-child(5)').textContent;

      const currentDate = new Date();
      const lastMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
      const firstDay = new Date(lastMonth.getFullYear(), lastMonth.getMonth(), 1).toISOString().split('T')[0];
      const lastDay = new Date(lastMonth.getFullYear(), lastMonth.getMonth() + 1, 0).toISOString().split('T')[0];

      document.getElementById('customStartDate').value = firstDay;
      document.getElementById('customEndDate').value = lastDay;

      // Show the modal
      $('#createInvoiceModal').modal('show');
    }

    function submitInvoice() {
      // Fetch values from the modal
      const invoiceDate = document.getElementById('invoiceDate').value;
      const amount = document.getElementById('amount').value;
      const period = document.getElementById('period').value;
      const dueDate = document.getElementById('dueDate').value;
      const exemption = document.getElementById('exemption').value;
      const feeType = document.getElementById('feeType').value;
      let notices1 = document.getElementById('notices1').value;
      let notices2 = document.getElementById('notices2').value;
      let notices3 = document.getElementById('notices3').value;
      const customerName = document.getElementById('customerName').value;
      const contractNo = document.getElementById('contractNo').value;
      const contractStartDate = document.getElementById('contractStartDate').value;
      const contractEndDate = document.getElementById('contractEndDate').value;

      // Modify notices based on selection
      function getNoticeMessage(noticeValue) {
        switch (noticeValue) {
          case "notice1":
            return "•After due date, late payment charges =100 KD Per Day";
          case "notice2":
            return `•${exemption}% exemption effective from April 5th,2022`;
          case "notice3":
            return "";
          default:
            return noticeValue;
        }
      }
      // Modify feeName based on selection
      let feeName = "";
      switch (feeType) {
        case "501":
          feeName = "Rent Fee";
          break;
        case "502":
          feeName = "Concession Fee";
          break;
        }

      notices1 = getNoticeMessage(notices1);
      notices2 = getNoticeMessage(notices2);
      notices3 = getNoticeMessage(notices3);

      // Modify period based on selection
      let invoicePeriod = "";
      switch (period) {
        case "Q1":
          invoicePeriod = "1st January to 31st March";
          break;
        case "Q2":
          invoicePeriod = "1st April to 30th June";
          break;
        case "Q3":
          invoicePeriod = "1st July to 30th September";
          break;
        case "Q4":
          invoicePeriod = "1st October to 31st December";
          break;
        case "custom":
          const customStartDate = new Date(document.getElementById('customStartDate').value);
          const customEndDate = new Date(document.getElementById('customEndDate').value);
          invoicePeriod = `${customStartDate.getDate()} ${customStartDate.toLocaleString('default', { month: 'long' })} to ${customEndDate.getDate()} ${customEndDate.toLocaleString('default', { month: 'long' })}`;
          break;
      }

      // Here, you can send the fetched values to the server using AJAX .
      const postData = {
        invoiceDate,
        amount,
        feeName,
        invoicePeriod, // string based to reflect the formatted period
        dueDate,
        exemption,
        feeType,
        notices1,
        notices2,
        notices3,
        customerName,
        contractNo,
        contractStartDate,
        contractEndDate
      };
      // Make the AJAX POST request
      $.ajax({
        url: 'create_invoice.php', // The server-side script to handle the insertion
        type: 'POST',
        data: postData,
        success: function (response) {
          // Handle the response from the server
          if (response.success) {
            alert('Invoice created successfully!');
            location.reload(); // Reload the page to reflect the changes
          } else {
            alert('Error creating invoice. ' + response.message);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          // Handle any errors during the request
          alert('An error occurred: ' + textStatus + ' ' + errorThrown);
        }
      });
      // Close the modal after submission
      $('#createInvoiceModal').modal('hide');
    }
    function toggleCustomPeriod() {
      const periodSelect = document.getElementById('period');
      const customPeriodGroup = document.getElementById('customPeriodGroup');

      if (periodSelect.value === "custom") {
        customPeriodGroup.style.display = "block";
      } else {
        customPeriodGroup.style.display = "none";
      }
    }

    function checkPaymentTermAndTogglePeriod(rowId) {
      const row = document.querySelector(`tr[data-id="${rowId}"]`);
      const paymentTerm = row.querySelector('td:nth-child(10)').textContent; // Assuming payment term is in the 10th column
      const periodSelect = document.getElementById('period');

      if (paymentTerm === "Monthly") {
        periodSelect.disabled = true;
        periodSelect.value = "custom";
        toggleCustomPeriod(); // This will show the custom date pickers
      } else {
        periodSelect.disabled = false;
      }
    }




  </script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>