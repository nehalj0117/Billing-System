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
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item nav-logout d-none d-md-block">
              <button class="btn btn-sm btn-danger">Logout</button>
            </li>
            <li class="nav-item nav-profile dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-text">English </div>
              </a>
              <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="flag-icon flag-icon-kw mr-3"></i> Arabic </a>
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
            <h3 class="page-title">Invoice</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Invoice Data </li>
              </ol>
            </nav>
          </div>
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
                        // Create a MySQLi connection
                        $conn = new mysqli("10.180.116.161", "ikas", "Ikas!7232", "billing_system");

                        // Check the connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch invoices data from the database
                        $sql = "SELECT * FROM opr_invoice";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          echo '<div class="table-responsive">
                                <table class="table table-striped table-hover">
                                  <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Invoice ID</th>
                                    <th>Invoice Date</th>
                                    <th>Invoice Period</th>
                                    <th>Customer Name</th>
                                    <th>Customer ID</th>
                                    <th>Invoice Type</th>
                                    <th>Charges</th>
                                    <th>Amount</th>
                                    <th>Exception %</th>
                                    <th>Total Fee</th>
                                    <th>Due Date</th>
                                    <th>Notice</th>
                                    <th>Action</th>
                                    </tr>';

                          while ($row = $result->fetch_assoc()) {
                            // Calculate the percentage paid
                            $percentagePaid = 0; // Default to 0 to avoid division by zero
                            if ($row['totalFee'] > 0) {
                              $percentagePaid = ($row['totalFee'] / $row['totalFee']) * 100;
                            }
                            $invoicefee = $row['totalFee'];
                            if ($row['discount'] != 0.00) {
                              $invoicefee = ($row['discount'] / 100) * $row['totalFee'];
                            }
                            $searchData = $row["invoice_id"] . " " . $row["cusName"] . " " . $row["invoiceType"];
                            $percentagePaid = 0; // Default to 0 to avoid division by zero
                            if ($row['totalPaid'] > 0) {
                              $percentagePaid = ($row['totalPaid'] / $invoicefee) * 100;
                            }
                            $invoicefeeAfterDiscount = $row['totalFee'];
                            if ($row['discount'] != 0.00) {
                              $discountAmount = ($row['discount'] / 100) * $row['totalFee'];
                              $invoicefeeAfterDiscount = $row['totalFee'] - $discountAmount;
                            }
                            $disableApprove = "";
                            $buttonStyle = "btn-success";
                            if ($row['invoice_id'] != "Waiting") {
                              $disableApprove = "disabled";
                              $buttonStyle = "btn-secondary";
                            }
                            $Charges = "";

                            echo '<tr " data-search="' . htmlspecialchars($searchData, ENT_QUOTES, 'UTF-8') . '">';
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["invoice_id"] . "</td>";
                            echo "<td>" . $row["invoiceDate"] . "</td>";
                            echo "<td>" . $row["invoicePeriod"] . "</td>";
                            echo "<td>" . $row["cusName"] . "</td>";
                            echo "<td>" . $row["cusID"] . "</td>";
                            echo "<td>" . $row["invoiceType"] . "</td>";
                            if ($row["invoiceType"]) {
                              if ($row["invoiceType"] == "AIRCRAFT CHARGES") {
                                echo "<td>Approch Fee  :" . number_format($row['approchFee'],3) . "<br>Landing Fee  :" .number_format( $row['landFee'],3) . "<br>Parking Fee  :" . number_format($row['parkFee'],3) . "<br>Boarding Fee  :" . number_format($row['pbbFee'],3) . "</td>";
                              }
                              if ($row["invoiceType"] == "PENALTY") {
                                echo "<td>Penalty For :  " . $row['invoicedescription'] . "</td>  ";
                              }
                              if ($row["invoiceType"] == "PASSENGER CHARGES") {
                                echo "<td>Departing Passenger Fee  :" . number_format($row['depPaxFee'],3) . "<br>Departing Passenger Fee  :" . number_format($row['arrPaxFee'],3) . "</td>";
                              }
                              if ($row["invoiceType"] == "PASSENGER TAX") {
                                echo "<td>Check-in Fee  :" . number_format($row['checkFee'],3) . "<br>Transit Fee  :" . number_format($row['transitFee'],3) . "<br>Passenger TAX Fee  :" . number_format($row['taxFee'],3) . "</td>";
                              }
                            } else {
                              echo "<td>Type not defined</td>";
                            }
                            echo "<td>" . $row["totalFee"] . "</td>";
                            echo "<td>" . $row["discount"] . "</td>";
                            echo "<td>" . $invoicefeeAfterDiscount . "</td>";
                            echo "<td>" . $row["dueDate"] . "</td>";
                            echo "<td>" . $row["notice1"] . "<br>" . $row["notice2"] . "<br>" . $row["notice3"] . "</td>";
                            echo "<td>
                                  <button type='button' class='btn btn-danger btn-icon-text' onclick='deleteRow(" . $row['id'] . ")'>
                                  <i class='mdi mdi-cash-multiple btn-icon-prepend'></i> Delete
                                  </button>";
                            echo "<button type='button' class='btn btn-info btn-icon-text' onclick='openEditModal(" . $row['id'] . ", \"" . $row['invoiceDate'] . "\", \"" . $row['dueDate'] . "\", " . $row['discount'] . ", \"" . addslashes($row['notice1']) . "\", \"" . addslashes($row['notice2']) . "\", \"" . addslashes($row['notice3']) . "\")'>
                                  <i class='mdi mdi-cash-multiple btn-icon-prepend'></i> Edit
                                  </button>";

                            echo "<button type='button'" . $disableApprove . " class='btn " . $buttonStyle . " btn-icon-text' onclick='approveRow(" . $row['id'] . ")'>
                                  <i class='mdi mdi-check btn-icon-prepend'></i> Approve
                                  </button>
                                  </td>";
                            echo "</tr>";
                          }

                          echo '</table>';
                        } else {
                          echo 'No invoices found.';
                        }

                        // Close the MySQLi connection
                        $conn->close();
                        ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this invoice?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
              </div>
            </div>
          </div>
        </div>
        <!-- edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Invoice Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label hidden for="id">ID:</label>
                <input hidden type="number" id="id" class="form-control">
                <label for="invoiceDate">Invoice Date:</label>
                <input type="Date" id="invoiceDate" class="form-control">
                <label for="dueDate">Due Date:</label>
                <input type="Date" id="dueDate" class="form-control">
                <label for="discount">Exception %:</label>
                <input type="number" id="discount" class="form-control">
                <label for="Notice1">Notice 1:</label>
                <input type="text" id="Notice1" class="form-control">
                <label for="Notice2">Notice 2:</label>
                <input type="text" id="Notice2" class="form-control">
                <label for="Notice3">Notice 3:</label>
                <input type="text" id="Notice3" class="form-control">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmEdit" onclick="confirmEdit()">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Approve Modal -->
        <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="approveModalLabel">Approve Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to approve this invoice and generate a new Invoice ID?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmApprove">Approve</button>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
    //Open delete modal
    function deleteRow(id) {
      selectedRowId = id;
      console.log(selectedRowId);
      $('#deleteModal').modal('show');
    }
    //confirm delet
    document.getElementById('confirmDelete').addEventListener('click', function() {
      $.ajax({
        type: "POST",
        url: "delete_invoice.php",
        data: {
          id: selectedRowId
        },
        success: function(response) {
          alert(response);
          location.reload();
        },
        error: function() {
          alert("An error occurred while deleting the invoice.");
        }
      });
      $('#deleteModal').modal('hide');
    });

    function confirmEdit() {
      var id = $('#editModal #id').val();
      var invoiceDate = $('#editModal #invoiceDate').val();
      var dueDate = $('#editModal #dueDate').val();
      var discount = $('#editModal #discount').val();
      var notice1 = $('#editModal #Notice1').val();
      var notice2 = $('#editModal #Notice2').val();
      var notice3 = $('#editModal #Notice3').val();
      var Data = {
        id: id,
        invoiceDate: invoiceDate,
        dueDate: dueDate,
        discount: discount,
        notice1: notice1,
        notice2: notice2,
        notice3: notice3
      };

      console.log(Data);

      $.ajax({
        url: 'edit_invoice.php',
        type: 'POST',
        data: {
          Id: id,
          InvoiceDate: invoiceDate,
          DueDate: dueDate,
          Discount: discount,
          Notice1: notice1,
          Notice2: notice2,
          Notice3: notice3
        },

        success: function(response) {
          alert("Invoice updated successfully.");
          $('#editModal').modal('hide');
          location.reload(); // Or update the table row dynamically

        },
        error: function(xhr, status, errorMsg) {
          alert("Error updating invoice: " + errorMsg);
          // Here, errorMsg will contain the error message
        }
      });
    }

    function approveRow(id) {
      selectedRowId = id;
      console.log(selectedRowId)
      $('#approveModal').modal('show');
    }
    document.getElementById('confirmApprove').addEventListener('click', function() {
      $.ajax({
        type: "POST",
        url: "approve_invoice.php",
        data: {
          id: selectedRowId
        },
        success: function(response) {
          alert(response);
          location.reload();
        },
        error: function() {
          alert("An error occurred while generating new invoice Id.");
        }
      });
      $('#approveModal').modal('hide');
    });
    //Below are the function to call the modals
    function openEditModal(id, invoiceDate, dueDate, discount, notice1, notice2, notice3) {
      $('#editModal #id').val(id);
      $('#editModal #invoiceDate').val(invoiceDate);
      $('#editModal #dueDate').val(dueDate);
      $('#editModal #discount').val(discount);
      $('#editModal #Notice1').val(notice1);
      $('#editModal #Notice2').val(notice2);
      $('#editModal #Notice3').val(notice3);
      $('#editModal').modal('show');
    }
  </script>

  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>