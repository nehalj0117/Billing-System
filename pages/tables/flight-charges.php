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
            <div class="small font-weight-light pt-1">Airline Billing System</div>
          </a>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head"></span>
        </li>
        <!-- Flight Data -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#flight-data-menu" aria-expanded="false" aria-controls="flight-data-menu">
            <i class="mdi mdi-airplane-takeoff menu-icon"></i>
            <span class="menu-title">Flight Data</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="flight-data-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/flight-data/flight-data.php">Flight Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/flight-data/flight-exceptions.php">Flight Exceptions</a>
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
                <a class="nav-link" href="../../pages/tables/flight-charges.php">Aircraft</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/passenger-charges.php">Passenger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/additional-charges.php">Additional</a>
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
                <a class="nav-link" href="../../pages/invoice/invoice-table.php">Invoice Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/invoice/invoice-approved.php">Approved Invoice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/invoice/penalty-invoice.php">Penalty Invoice</a>
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
                <a class="nav-link" href="../../pages/penalty/penalty-data.php">Penalty Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/penalty/create-invoice.php">Generate Penalty Invoice</a>
              </li>
            </ul>
          </div>
        </li>

        <!-- Aircraft Data -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#aircraft-menu" aria-expanded="false" aria-controls="aircraft-menu">
            <i class="mdi mdi-airplane menu-icon"></i>
            <span class="menu-title">Aircraft Data</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="aircraft-menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-aircrafts.php">Add/Edit Aircrafts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-aircrafts.php">Edit Invoice Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/aircraft/add-edit-aircrafts.php">Edit Charges</a>
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
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../../assets/images/Incheon_Airport_Logo_mini.svg" alt="logo" /></a>
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
            <li class="nav-item nav-logout d-none d-md-block mr-3">
              <a class="nav-link" href="#">Commerial</a>
            </li>
            <li class="nav-item nav-logout d-none d-md-block">
              <button class="btn btn-sm btn-info">Airline</button>
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
            <h3 class="page-title">Basic Tables</h3>

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Basic tables </li>
              </ol>
            </nav>
          </div>
          <form method="post" action="">
            <div class="row">
              <!-- From Date -->
              <div class="col-md-2">
                <label for="fromDate">From Date:</label>
                <input type="date" name="fromDate" id="fromDate" class="form-control" value="<?php echo $fromDateValue; ?>" required>
              </div>

              <!-- To Date -->
              <div class="col-md-2">
                <label for="toDate">To Date:</label>
                <input type="date" name="toDate" id="toDate" class="form-control" value="<?php echo $fromDateValue; ?>" required>
              </div>

              <!-- Filter Button -->
              <div class="col-md-4 align-self-end">
                <button type="submit" name="filter" class="btn btn-primary btn-icon-text">
                  <i class="mdi mdi-file-find"></i>
                  Filter
                </button>
                <a href="#" id="export" name="export" class="btn btn-success btn-icon-text">
                  <i class="mdi mdi-export"></i>Export to Excel
                </a>
                <form method="POST" action="export-fCharges.php" id="convert_form" style="display:none;">
                  <textarea hidden name="file_content" id="file_content"></textarea>
                </form>
                <button type="button" id="createInvoiceBtn" class="btn btn-primary btn-icon-text">
                  <i class="mdi mdi-plus-box"></i>
                  Create Invoice
                </button>
              </div>
            </div>
          </form>

          <div class="col-lg-12 stretch-card">

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Flight Charges</h4>
                <p class="card-description"> Data fetched from the database with exception reasons.
                </p>

                <div class="table-responsive">
                  <table class="table table-bordered" id="table-content">
                    <thead>
                      <tr>
                        <th>Invoice Date</th>
                        <th>Flt Date</th>
                        <th>Flt No</th>
                        <th>A/D</th>
                        <th>Schd Time</th>
                        <th>Reg No</th>
                        <th>Approch Fee</th>
                        <th>MTOW</th>
                        <th>Landing Fee</th>
                        <th>Pax/Cgo</th>
                        <th>Body Type</th>
                        <th>Calcu Time(m)</th>
                        <th>Calcu Time(h)</th>
                        <th>Parking Fee</th>
                        <th>PBB Yn</th>
                        <th>PBB Fee</th>
                        <th>Total Fee</th>
                        <th>Exempt</th>
                        <th>Actual Time</th>
                        <th>Link Date</th>
                        <th>Link Flt No</th>
                        <th>Aircraft Type</th>
                        <th>Gate</th>
                        <th>Route</th>
                        <th>Customer No</th>
                        <th>Customer Name</th>
                        <th>Terminal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Database connection
                      $conn = new mysqli("10.180.116.161", "ikas", "Ikas!7232", "billing_system");

                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                      $totallandingFees = 0.000;
                      $totalapproachFees = 0.000;
                      $totalparkingFees = 0.000;
                      $totalboardingCharges = 0.000;
                      $subTotal = 0.000;

                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fromDate = $_POST["fromDate"];
                        $toDate = $_POST["toDate"];

                        // Convert the dates to datetime format
                        $fromDate = date('Y-m-d H:i:s', strtotime($fromDate));
                        $toDate = date('Y-m-d H:i:s', strtotime($toDate . ' +1 day'));
                      } else {
                        // Get current year and month from system
                        $currentYear = date('Y');
                        $currentMonth = date('m');

                        // Set $fromDate to the first day of the current month at 00:00:00
                        $fromDate = date($currentYear . '-09-01 00:00:00');

                        // Set $toDate to the last day of the current month at 23:59:59
                        $toDate = date($currentYear . '-' . $currentMonth . '-t 23:59:59');

                        // Assuming $fromDate and $toDate are already set and in 'Y-m-d H:i:s' format
                        $fromDateTime = new DateTime($fromDate);
                        $toDateTime = new DateTime($toDate);

                        // If you need the period to represent a range
                        $fromMonthYear = $fromDateTime->format('F Y');
                        $toMonthYear = $toDateTime->format('F Y');
                        $period = $fromMonthYear . ' - ' . $toMonthYear;

                        // If you just need the month and year of $fromDate
                        $periodSingle = $fromDateTime->format('F Y');
                      }

                      // Fetch data and calculate charges
                      $sql = "SELECT fd.id, fd.AorD, fd.Flt_DateOnly, fd.Flt_Date, fd.Reg_No, fd.Gate, fd.Flt_No, fd.Link_Flt_No, at.Aircraft_Type, fd.ob, fd.tx_pd, fd.tx_exm, fd.trfr, fd.chd, fd.inf, fd.dip, fd.depo, fd.Crew, fd.Gov, fd.XXD, fd.PBB_Yn, fd.MTOW, fd.AorD, fd.Actual_Time, fd.Link_Date, fd.Link_Actual_DateTime, fd.Aircraft_type, fd.Route
                              FROM flight_data fd
                              LEFT JOIN aircraft_type at ON fd.Reg_No = at.Registration
                              WHERE fd.Flt_Date BETWEEN '$fromDate' AND '$toDate'
                              ORDER BY fd.id ASC";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          if ($row['Gate'] !== "HGR" && $row['Gate'] !== "R/U") {
                            // Calculate charges
                            $landingFees = ($row['AorD'] === 'A') ? (($row['MTOW'] / 1000) * 1.2) : 0;
                            $approachFees = ($row['AorD'] === 'A') ? (($row['Aircraft_type'] === 'N') ? 30 : 40) : 0;
                          } else {
                            $landingFees = 0;
                            $approachFees = 0;
                          }

                          $parkingFeePerHour = ($row['Aircraft_type'] === 'N') ? 10 : 15;
                          $freeHours = 2;
                          if ($row['AorD'] === 'A') {
                            $totalHours = calculateTotalHours($row['Actual_Time'], $row['Link_Actual_DateTime']);
                            $totalhourround = ceil($totalHours);
                            $calcuTimeM = ceil($totalHours * 60);
                            $calcuTimeH = ceil($totalHours);
                          } else {
                            $totalHours = calculateTotalHours($row['Link_Actual_DateTime'], $row['Actual_Time']);
                            $totalhourround = ceil($totalHours);
                            $calcuTimeM = ceil($totalHours * 60);
                            $calcuTimeH = ceil($totalHours);
                          }
                          $parkingFees = ($row['AorD'] === 'A') ? (($totalhourround > $freeHours) ? ($totalhourround - $freeHours) * $parkingFeePerHour : 0) : 0;

                          $taxChargePerPassenger = 2;
                          $taxCharges = ($row['AorD'] === 'D') ? ($row['tx_pd'] * $taxChargePerPassenger) : 0;
                          $tax = ($row['AorD'] === 'D') ? ($row['tx_pd']) : 0;

                          $transitChargePerPassenger = 1;
                          $transitPax = ($row['AorD'] === 'D') ? ($row['trfr']) : 0;
                          $transitCharges = ($row['AorD'] === 'D') ? ($row['trfr'] * $transitChargePerPassenger) : 0;

                          $checkInChargePerPassenger = 1;
                          $checkInPax = ($row['AorD'] === 'D') ? (($row['ob'] - $row['trfr'])) : 0;
                          $checkInCharges = ($row['AorD'] === 'D') ? (($row['ob'] - $row['trfr']) * $checkInChargePerPassenger) : 0;

                          $boardingCharges = ($row['PBB_Yn'] === 'Y') ? 50 : 0;

                          $additionalDepartureChargePerPassenger = 3;
                          $additionalDepartureCharges = ($row['AorD'] === 'D') ? ($row['tx_pd'] * $additionalDepartureChargePerPassenger) : 0;

                          $additionalArrivalChargePerPassenger = 2;
                          $additionalArrivalCharges = ($row['AorD'] === 'A') ? ($row['tx_pd'] * $additionalArrivalChargePerPassenger) : 0;

                          $schdTime = date("H:i:s", strtotime($row['Flt_Date']));
                          $totalPaxFee = $taxCharges + $checkInCharges + $transitCharges;

                          //TOTAL
                          // Increment total values
                          $totalapproachFees += $approachFees;
                          $totallandingFees += $landingFees;
                          $totalboardingCharges += $boardingCharges;
                          $totalparkingFees += $parkingFees;
                          $totalFee = $approachFees + $landingFees + $boardingCharges + $parkingFees;
                          $subTotal += $totalFee;

                          //Fltdate only
                          $datetime = new DateTime($row['Flt_Date']);

                          // Display the row with charges
                          echo "<tr>";
                          echo "<td>" . date("Y-m-d") . "</td>";
                          echo "<td>" . $datetime->format('Y-m-d') . "</td>";
                          echo "<td>" . $row['Flt_No'] . "</td>";
                          echo "<td>" . $row['AorD'] . "</td>";
                          echo "<td>" . $schdTime . "</td>";
                          echo "<td>" . $row['Reg_No'] . "</td>";
                          echo "<td>" . $approachFees . "</td>";
                          echo "<td>" . ($row['MTOW'] / 1000) . "</td>";
                          echo "<td>" . $landingFees . "</td>";
                          echo "<td>Y</td>";
                          if ($row['Aircraft_Type'] == "N") {
                            echo "<td>Narrow</td>";
                          } else {
                            echo "<td>Wide</td>";
                          }
                          echo "<td>" . $calcuTimeM . "</td>";
                          echo "<td>" . $calcuTimeH . "</td>";
                          echo "<td>" . $parkingFees . "</td>";
                          echo "<td>" . $row['PBB_Yn'] . "</td>";
                          echo "<td>" . $boardingCharges . "</td>";
                          echo "<td>" . $totalFee . "</td>";
                          echo "<td></td>";
                          echo "<td>" . $row['Actual_Time'] . "</td>";
                          echo "<td>" . $row['Link_Date'] . "</td>";
                          echo "<td>" . $row['Link_Flt_No'] . "</td>";
                          echo "<td>" . $row['Aircraft_Type'] . "</td>";
                          echo "<td>" . $row['Gate'] . "</td>";
                          echo "<td>" . $row['Route'] . "</td>";
                          echo "<td>100001</td>";
                          echo "<td>KAC</td>";
                          echo "<td>T4</td>";
                          echo "</tr>";
                        }
                        // Display the row with total values
                        echo "<tr>";
                        echo "<td colspan='6'><strong>TOTAL</strong></td>";
                        echo "<td><strong>" . $totalapproachFees . "</strong></td>";
                        echo "<td></td>";
                        echo "<td><strong>" . $totallandingFees . "</strong></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td><strong>" . $totalparkingFees . "</strong></td>";
                        echo "<td></td>";
                        echo "<td><strong>" . $totalboardingCharges . "</strong></td>";
                        echo "<td><strong>" . number_format($subTotal, 3) . "</strong></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "</tr>";
                        echo "</tbody>";
                        echo "</table>";
                      } else {
                        echo "<p>No data found.</p>";
                      }
                      // Close database connection
                      $conn->close();
                      //Calculate total hours
                      function calculateTotalHours($actualTime, $linkActualTime)
                      {
                        $actualTimestamp = strtotime($actualTime);
                        $departureTimestamp = strtotime($linkActualTime);
                        $difference = $departureTimestamp - $actualTimestamp;
                        $totalHours = $difference / (60 * 60);
                        return $totalHours;
                      }
                      ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
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
    document.getElementById('export').addEventListener('click', function() {
      var table = document.getElementById('table-content');
      var html = table.outerHTML;
      var url = 'data:application/vnd.ms-excel,' + encodeURIComponent(html);
      this.href = url;
      this.download = 'aircraft_charges.xls';
    });
  </script>
  <!-- Create invoice function -->
  <script>
    $(document).ready(function() {
      $('#createInvoiceBtn').click(function() {
        // Collect the data you want to send to the server
        var invoiceData = {
          approachFee: <?php echo json_encode($totalapproachFees); ?>,
          landFee: <?php echo json_encode($totallandingFees); ?>,
          pbbFee: <?php echo json_encode($totalboardingCharges); ?>,
          parkFee: <?php echo json_encode($totalparkingFees); ?>,
          totalFee: <?php echo json_encode($subTotal, 3); ?>,
          period: <?php echo json_encode($periodSingle); ?>, 
          cusName: "KAC",
          cusID: "103001",
          invoiceType: "AIRCRAFT CHARGES"
        };
        console.log(invoiceData);

        $.ajax({
          type: 'POST',
          url: 'create_airinvoice.php', // Update this URL to your PHP script
          data: invoiceData,
          success: function(response) {
            // You can modify this part to display a success message or update part of your page
            alert("Passenger Invoice Created Successfully!");
          },
          error: function(xhr, status, error) {
            // You can modify this part to display an error message
            alert("An error occurred: " + xhr.responseText);
          }
        });
      });
    });
  </script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>