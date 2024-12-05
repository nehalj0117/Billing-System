<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="../../../../assets/images/faces/face1.jpg" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">Walid</span>
                <span class="text-secondary icon-sm text-center">Finance Deaprtment</span>
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="../../../index.html">
              <img class="sidebar-brand-logo" src="../../../../assets/images/Incheon_Airport_Logo_full.svg" alt="" />
              <img class="sidebar-brand-logomini" src="../../../../assets/images/Incheon_Airport_Logo_mini.svg" alt="" />
              <div class="small font-weight-light pt-1">Commercial Billing System</div>
            </a>
          </li>
          <li class="pt-2 pb-1">
            <span class="nav-item-head"></span>
          </li>
          <!-- Flight Data -->
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#flight-data-menu" aria-expanded="false" aria-controls="flight-data-menu">
                  <i class="mdi mdi-hospital-building menu-icon"></i>
                  <span class="menu-title">Rentals</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="flight-data-menu">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/rental/rentals.php">Rental Data</a>
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
                  <a class="nav-link" href="../../../pages/tables/rental-charges.php">Rental Charges</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Invoice -->
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#invoice-menu" aria-expanded="false" aria-controls="invoice-menu">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Invoice</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="invoice-menu">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/invoice/rental/invoice-table.php">Invoice</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/invoice/rental/invoice-approved.php">Approved Invoice</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/invoice/rental/penalty-invoice.php">Penalty Invoice</a>
                      </li>
                  </ul>
              </div>
          </li>

          <!-- Penalty -->
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#penalty-menu" aria-expanded="false" aria-controls="penalty-menu">
                  <i class="mdi mdi-gavel menu-icon"></i>
                  <span class="menu-title">Penalty</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="penalty-menu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../pages/penalty/rental/penalty-data.php">Penalty Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../pages/penalty/rental/create-invoice.php">Generate Penalty Invoice</a>
                    </li>
                  </ul>
              </div>
          </li>

          <!-- Aircraft Data -->
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#aircraft-menu" aria-expanded="false" aria-controls="aircraft-menu">
                  <i class="mdi mdi-airplane menu-icon"></i>
                  <span class="menu-title">Configure Data</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="aircraft-menu">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/aircraft/add-edit-spaces.php">Edit Spaces</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/aircraft/add-edit-contracts.php">Edit Contracts</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/aircraft/add-edit-invoice-comments.php">Edit Invoice Comments</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../../../pages/aircraft/add-edit-charges.php">Edit Charges</a>
                      </li>
                  </ul>
              </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../../partials/_settings-panel.html -->
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
        <!-- partial:../../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="../../../index.html"><img src="../../../../assets/images/Incheon_Airport_Logo_mini.svg" alt="logo" /></a>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email-outline"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../../assets/images/faces/face1.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Test</h6>
                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../../assets/images/faces/face6.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Test</h6>
                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../../assets/images/faces/face7.jpg" alt="image" class="profile-pic">
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
                <a class="nav-link" href="../../../pages/flight-data/flight-data.php">Airline</a>
              </li>
              <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
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
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Invoice</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Invoice Data </li>
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
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Invoice Data</h4>
                  <p class="card-description"> List of all invoices for Kuwait Airways </p>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <?php
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
                          $startDate = new DateTime("$currentYear-05-$currentMonth-01 00:00:00");
                          $endDate = new DateTime("$currentYear-$currentMonth-01 00:00:00");
                          // Clone the start date and modify it to get the last day of the month
                          // $endDate = clone $startDate;
                          $endDate->modify('last day of this month');
                          $endDate->setTime(23, 59, 59); // Set time to 23:59:59
                          $fromDate = $startDate->format('Y-m-d H:i:s');
                          $toDate = $endDate->format('Y-m-d H:i:s');
                        }
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
                        $sql = "SELECT ri.id, ri.invoiceId, ri.exemption, ri.overDue, ri.invoiceDate, ri.paid, ri.dueDate, ri.occurenceType, ri.customerName, ri.feeCode, ri.feeName, ri.contractNo, ri.contractName, ri.contractStartDate, ri.contractEndDate, ri.amount, ri.charged
                                FROM rental_invoice ri
                                WHERE ri.invoiceDate BETWEEN '$fromDate' AND '$toDate' AND ri.invoiceId NOT LIKE 'Waiting'
                                ORDER BY ri.id ASC";

                        $result = $connection->query($sql);


                        echo '<div class="table-responsive">';
                        echo '<table class="table table-bordered">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Invoice ID</th>';
                        echo '<th>Invoice Date</th>';
                        echo '<th>Customer Name</th>';
                        echo '<th>Contract Name</th>';
                        echo '<th>Amount</th>';
                        echo '<th>Over Due</th>';
                        echo '<th>Exemption</th>';
                        echo '<th>Total</th>';
                        echo '<th>Paid</th>';
                        echo '<th>Due Date</th>';
                        echo '<th>Progress</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            $searchData = $row["invoiceId"] . " " . $row["customerName"] . " " . $row["contractName"];
                            $invoicefee = $row['amount'];
                            if ($row['overDue'] != 0) {
                              $invoicefee = ($row['overDue'] + $row["amount"]);
                            }
                            if ($row['exemption'] != 0.00) {
                              $invoicefee = $invoicefee - (($row['exemption'] / 100) * $row["amount"]);
                            }
                            $percentagePaid = 0; // Default to 0 to avoid division by zero
                            if ($row['paid'] > 0) {
                              $percentagePaid = ($row['paid'] / $invoicefee) * 100;
                            }
                            echo '<tr " data-search="' . htmlspecialchars($searchData, ENT_QUOTES, 'UTF-8') . '">';
                            echo "<td>" . $row["invoiceId"] . "</td>";
                            echo "<td>" . $row["invoiceDate"] . "</td>";
                            echo "<td>" . $row["customerName"] . "</td>";
                            echo "<td>" . $row["contractName"] . "</td>";
                            echo "<td>" . $row["amount"] . "</td>";
                            echo "<td>" . $row["overDue"] . "</td>";
                            echo "<td>" . $row["exemption"] . "</td>";
                            echo "<td>" . $invoicefee . "</td>";
                            echo "<td id='paidCell_" . $row["id"] . "'>" . $row["paid"] . "</td>";
                            echo "<td>" . $row["dueDate"] . "</td>";
                            echo '<td><div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: ' . $percentagePaid . '%;" aria-valuenow="' . $percentagePaid . '" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div></td>';
                            }
                        } else {
                          echo "<tr><td colspan='18'>No data found</td></tr>";
                        }

                        ?>
                  </div>
                  <!-- Deposit Modal -->
                  <div id="depositModal" class="depositModalContainer" style="display: none;">
                    <div class="modal-content">
                      <h3>Enter Deposit Amount</h3>
                      <input type="text" id="depositAmount" placeholder="Enter amount...">
                      <input type="hidden" id="depositRowId" value="">
                      <button onclick="updateDeposit()" class="btn btn-success btn-fw">Confirm</button>
                      <button onclick="closeModal()" class="btn btn-danger btn-fw">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../../assets/js/off-canvas.js"></script>
  <script src="../../../../assets/js/hoverable-collapse.js"></script>
  <script src="../../../../assets/js/misc.js"></script>
  <script src="../../../../assets/js/settings.js"></script>
  <script src="../../../../assets/js/todolist.js"></script>
  <script>
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
    function openInvoicePage(id) {
      window.open('../../../pages/invoice/rental/invoice.php?id=' + id, '_blank');
    }

    function deposit(rowId) {
      document.getElementById('depositRowId').value = rowId;
      document.getElementById('depositModal').style.display = 'block';
    }

    function updateDeposit() {
      let amount = document.getElementById('depositAmount').value;
      let rowId = document.getElementById('depositRowId').value;

      // Perform an AJAX request to update the database
      fetch('../../../pages/invoice/rental/deposit.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'id=' + rowId + '&amount=' + amount
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Update the cell in the table for the 'paid' column
            document.getElementById('paidCell_' + rowId).innerText = data.newPaidValue;
            closeModal();
          } else {
            alert('Error updating deposit.');
          }
        });
    }

    function closeModal() {
      document.getElementById('depositModal').style.display = 'none';
    }
  </script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>