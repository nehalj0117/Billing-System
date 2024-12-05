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
  <link rel="stylesheet" href="../../../assets/css/loader.css" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../../assets/css/demo_1/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <script>
    window.addEventListener("load", function() {
      var loaderWrapper = document.getElementById("loader-wrapper");
      loaderWrapper.style.display = "none";
    });
  </script>
  <script>
    function openEditModal(id, regNo, fltNo, fltDate, actualTime, linkFltNo, linkDate, linkActualDateTime, type) {
      $('#editId').val(id);
      $('#regNo').val(regNo);
      $('#fltNo').val(fltNo);
      $('#fltDate').val(fltDate);
      $('#actualTime').val(actualTime);
      $('#linkFltNo').val(linkFltNo);
      $('#linkDate').val(linkDate);
      $('#linkActualDateTime').val(linkActualDateTime);
      $('#type').val(type);

      $('#editModal').modal('show');
    }

    function saveEdits() {
      var id = $('#editId').val();
      var regNo = $('#regNo').val();
      var flightNo = $('#fltNo').val();
      var flightDate = $('#fltDate').val();
      var actualTime = $('#actualTime').val();
      var linkFlightNo = $('#linkFltNo').val();
      var linkDate = $('#linkDate').val();
      var linkActualDateTime = $('#linkActualDateTime').val();
      var type = $('#type').val();

      $.ajax({
        type: "POST",
        url: "updateFlightData.php",
        data: {
          id: id,
          regNo: regNo,
          flightNo: flightNo,
          flightDate: flightDate,
          actualTime: actualTime,
          linkFlightNo: linkFlightNo,
          linkDate: linkDate,
          linkActualDateTime: linkActualDateTime,
          type: type
        },
        success: function(response) {
          alert(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error updating data: ' + textStatus);
        }
      });
    }
  </script>
</head>

<body>
  <div id="loader-wrapper">
    <div id="loader"></div>
  </div>
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
                        <th>AorD</th>
                        <th>ID</th>
                        <th>Reg No</th>
                        <th>Flight No</th>
                        <th>Flight Date</th>
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
                        $currentYear = date('Y');
                        $currentMonth = date('m');

                        // Create a DateTime object for the first day of the current month and year
                        // $startDate = new DateTime("$currentYear-$currentMonth-01 00:00:00");
                        $startDate = new DateTime("$currentYear-09-01 00:00:00");

                        // Clone the start date and modify it to get the last day of the month
                        $endDate = clone $startDate;
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

                      $connection = mysqli_connect($servername, $username, $password, $database);

                      if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      // Set $toDate to the last day of the current month at 23:59:59

                      $sql = "SELECT fd.AorD,fd.id, fd.Reg_No, fd.Flt_Date, fd.Flt_No, fd.Flt_DateOnly, fd.Actual_Time, at.Type, fd.Link_Date, fd.Link_Flt_No, fd.Link_Actual_DateTime
                        FROM flight_data fd
                        LEFT JOIN aircraft_type at ON fd.Reg_No = at.Registration
                        WHERE fd.Flt_Date BETWEEN '$fromDate' AND '$toDate'
                        ORDER BY fd.id ASC";

                      $result = $connection->query($sql);

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
                          if ($row["AorD"] === "A" && strtotime($row["Flt_Date"]) > strtotime($row["Link_Actual_DateTime"])) {
                            $reasons[] = "Wrong link Arrival";
                          }
                          if ($row["AorD"] === "D" && strtotime($row["Flt_Date"]) < strtotime($row["Link_Actual_DateTime"])) {
                            $reasons[] = "Wrong link Departure";
                          }

                          // Display row with exception reasons
                          if (!empty($reasons)) {
                            echo "<tr>";
                            echo "<td>" . $row["AorD"] . "</td>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["Reg_No"] . "</td>";
                            echo "<td>" . $row["Flt_No"] . "</td>";
                            echo "<td>" . $row["Flt_Date"] . "</td>";
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
                            echo "<a href='javascript:void(0);' class='btn btn-info btn-icon-text edit-link' data-id='" . $row["id"] . "' data-regno='" . $row["Reg_No"] . "'   data-fltno='" . $row["Flt_No"] . "' onclick='openEditModal(\"" . $row["id"] . "\", \"" . $row["Reg_No"] . "\", \"" . $row["Flt_No"] . "\", \"" . $row["Flt_Date"] . "\", \"" . $row["Actual_Time"] . "\", \"" . $row["Link_Flt_No"] . "\", \"" . $row["Link_Date"] . "\", \"" . $row["Link_Actual_DateTime"] . "\", \"" . $row["Type"] . "\")'>
                            <i class='mdi mdi-check btn-icon-prepend'></i>Edit
                            </a>";
                            echo "<a href='javascript:void(0);' class='btn btn-danger btn-icon-text delete-link' data-id='" . $row["id"] . "' data-fltno='" . $row["Flt_No"] . "' onclick='deleteFunction(" . $row["id"] . ")'>
                            <i class='mdi mdi-delete btn-icon-prepend'></i>Delete
                            </a>";
                            echo "</td>";
                            echo "</tr>";
                          }
                        }
                      } else {
                        echo "<tr><td colspan='7'>No data found</td></tr>";
                      }

                      // Close database connection
                      $connection->close();

                      // Function to check for duplicate entries
                      function is_duplicate_entry($id, $fltNo, $connection)
                      {
                        $sql = "SELECT id FROM flight_data WHERE id != '$id' AND Flt_No = '$fltNo' GROUP BY id, Flt_No HAVING COUNT(*) > 1";
                        $result = $connection->query($sql);
                        return ($result->num_rows > 0);
                      }

                      // Function to check for duplicate flights
                      function is_duplicate_flight($fltNo, $fltDate, $connection)
                      {
                        $sql = "SELECT COUNT(*) AS count FROM flight_data WHERE Flt_No = ? AND Flt_DateOnly = ?";
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
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Flight Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!--id, regNo, fltNo, fltDate, actualTime, linkFltNo, linkDate, linkActualDateTime, type-->
                <div class="modal-body">
                  <form id="editForm">
                    <input type="hidden" id="editId" name="id">
                    <div class="form-group">
                      <label for="fltNo">Flight Id</label>
                      <input type="text" class="form-control" id="fltNo" name="fltNo">
                    </div>
                    <div class="form-group">
                      <label for="regNo">Registration number</label>
                      <input type="text" class="form-control" id="regNo" name="regNo">
                    </div>
                    <div class="form-group">
                      <label for="fltDate">Flight Date</label>
                      <input type="datetime-local" class="form-control" id="fltDate" name="fltDate">
                    </div>
                    <div class="form-group">
                      <label for="actualTime">Actual Time</label>
                      <input type="datetime-local" class="form-control" id="actualTime" name="actualTime">
                    </div>
                    <div class="form-group">
                      <label for="linkFltNo">Linked Date</label>
                      <input type="text" class="form-control" id="linkFltNo" name="linkFltNo">
                    </div>
                    <div class="form-group">
                      <label for="linkActualDateTime">Linked Actual DateTime</label>
                      <input type="datetime-local" class="form-control" id="linkActualDateTime" name="linkActualDateTime">
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" id="type" name="type">
                    </div>
                    <!-- Add other input fields similarly -->
                    <!-- ... -->
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
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