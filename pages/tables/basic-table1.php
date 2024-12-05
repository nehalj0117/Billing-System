<!DOCTYPE html>
<?php
if (isset($_POST['filter'])) {
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];
  }
?>
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
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-airplane menu-icon"></i>
              <span class="menu-title">Flight Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-blur-linear menu-icon"></i>
              <span class="menu-title">Flight Charges</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-receipt menu-icon"></i>
              <span class="menu-title">Invoice</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
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
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
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
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                      <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../assets/images/faces/face6.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                      <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../assets/images/faces/face7.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
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
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                      <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                      <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                      <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-logout d-none d-md-block mr-3">
                <a class="nav-link" href="#">Status</a>
              </li>
              <li class="nav-item nav-logout d-none d-md-block">
                <button class="btn btn-sm btn-danger">Trailing</button>
              </li>
              <li class="nav-item nav-profile dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-text">English </div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                </div>
              </li>
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="../../index.html">
                  <i class="mdi mdi-home-circle"></i>
                </a>
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
            <input type="date" name="fromDate" id="fromDate" class="form-control" value="<?php echo $fromDateValue; ?>"required>
        </div>

        <!-- To Date -->
        <div class="col-md-2">
            <label for="toDate">To Date:</label>
            <input type="date" name="toDate" id="toDate" class="form-control" value="<?php echo $fromDateValue; ?>"required>
        </div>

        <!-- Filter Button -->
        <div class="col-md-4 align-self-end">
            <button type="submit" name="filter" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-file-find"></i> Filter
            </button>
        </div>
    </div>
</form>

              <div class="col-lg-12 stretch-card">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Flight Data with Exceptions</h4>
            <p class="card-description"> Data fetched from the database with exception reasons.
            </p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Reg No</th>
                            <th>Flight No</th>
                            <th>Flight Date</th>
                            <th>Flight Date Only</th>
                            <th>Actual Time</th>
                            <th>Link Flight No</th>
                            <th>Link Date</th>
                            <th>Link Actual DateTime</th>
                            <th>Type</th>
                            <th>Reasons</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                if (isset($_POST['filter'])) {
                    $fromDate = $_POST['fromDate'];
                    $toDate = $_POST['toDate'];
                    $fromDate = date('Y-m-d H:i:s', strtotime($fromDate));
                    $toDate = date('Y-m-d H:i:s', strtotime($toDate . ' +1 day'));
                } else {
                    // Default date range (you can adjust this as needed)
                    $toDate = '2023-11-01 00:00:00';
                    $fromDate = '2023-06-01 23:59:59';
                }
                // Your PHP code for retrieving and displaying table data goes here

                // Example PHP code for retrieving data
                $servername = '10.180.116.161';
                $username = 'ikas';
                $password = 'Ikas!7232';
                $database = 'billing_system';

                $connection = mysqli_connect($servername, $username, $password, $database);

                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                // Set $toDate to the last day of the current month at 23:59:59

                $sql = "SELECT fd.id, fd.Reg_No, fd.Flt_Date, fd.Flt_No, fd.Flt_DateOnly, fd.Actual_Time, at.Type, fd.Link_Date, fd.Link_Flt_No, fd.Link_Actual_DateTime
                        FROM flight_data fd
                        LEFT JOIN aircraft_type at ON fd.Reg_No = at.Registration
                        WHERE fd.Flt_Date BETWEEN '$fromDate' AND '$toDate'
                        ORDER BY fd.Flt_Date ASC";
                        $result = mysqli_query($connection, $sql);

                        if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $reasons = array();

                        if (is_duplicate_entry($row["id"], $row["Flt_No"], $connection)) {
                            $reasons[] = "Duplicate entry";
                        }
                        if (is_duplicate_flight($row["Flt_No"], $row["Flt_DateOnly"], $connection)) {
                            $reasons[] = "Duplicate flight";
                        }
                        if ($row["Flt_No"] === "KU0000") {
                            $reasons[] = "Dummy flight";
                        }
                        if (empty($row["Flt_No"]) || is_null($row["Flt_No"])) {
                            $reasons[] = "Missing Flight ID";
                        }
                        if (empty($row["Type"])) {
                            $reasons[] = "Aircraft not in service";
                        }
                        if (empty($row["Reg_No"]) || is_null($row["Reg_No"])) {
                            $reasons[] = "Aircraft registration not available";
                        }
                        if (empty($row["Actual_Time"]) || is_null($row["Actual_Time"])) {
                            $reasons[] = "Actual time missing";
                        }

                        if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["Reg_No"] . "</td>";
                            echo "<td>" . $row["Flt_No"] . "</td>";
                            echo "<td>" . $row["Flt_Date"] . "</td>";
                            echo "<td>" . $row["Flt_DateOnly"] . "</td>";
                            echo "<td>" . $row["Actual_Time"] . "</td>";
                            echo "<td>" . $row["Link_Flt_No"] . "</td>";
                            echo "<td>" . $row["Link_Date"] . "</td>";
                            echo "<td>" . $row["Link_Actual_DateTime"] . "</td>";
                            echo "<td>" . $row["Type"] . "</td>";
                            echo "<td>";
                            foreach ($reasons as $reason) {
                                echo $reason . "<br>";
                            }
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='javascript:void(0);' class='edit-link' data-id='" . $row["id"] . "' data-regno='" . $row["Reg_No"] . "' data-fltno='" . $row["Flt_No"] . "'>Edit</a> | ";
                            echo "<a href='javascript:void(0);' class='delete-link' data-id='" . $row["id"] . "' data-fltno='" . $row["Flt_No"] . "'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                  }
                }
                else {
                    echo "<tr><td colspan='7'>No data found</td></tr>";
                }

                // Close database connection
                        mysqli_close($connection);
                    function is_duplicate_entry($id, $fltNo, $connection) {
                        $sql = "SELECT id FROM flight_data WHERE id != '$id' AND Flt_No = '$fltNo' GROUP BY id, Flt_No HAVING COUNT(*) > 1";
                        $result = $connection->query($sql);
                        return ($result->num_rows > 0);
                    }

                    // Function to check for duplicate flights
                    function is_duplicate_flight($fltNo, $fltDate, $connection) {
                        $sql = "SELECT COUNT(*) AS count FROM flight_data WHERE Flt_No = ? AND Flt_No != 'KU0000' AND Flt_DateOnly = ?";
                        $stmt = $connection->prepare($sql);
                        $stmt->bind_param("ss", $fltNo, $fltDate);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row = $result->fetch_assoc();
                        return ($row['count'] > 1);
                    }
                            ?>
                    </tbody>
                </table>
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
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
