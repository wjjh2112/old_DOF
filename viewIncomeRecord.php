<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Water Quality Monitoring | Income Record</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  </head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="Water Quality Monitoring" height="60" width="60">
        </div>
        
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li>
              <div class="user-panel mt-1 d-flex">
                <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <h5 class="d-block">Santubong Viewer</h5>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li>
              <button type="button" class="btn btn-block btn-primary">LogOut</button>
            </li>
          </ul>
        </nav>
    
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <a href="index.html" class="brand-link">
            <div class="row mb-4 justify-content-center">
              <img style="height: 80px; width: auto;" src="SBDLogo.jpeg">
            </div>
            <div class="row justify-content-center">
              <span class="brand-text">Water Quality Monitoring</span>
            </div>
          </a>
    
          <div class="sidebar">
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Data Telemetry</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="history.html" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>History</p>
                  </a>
                </li>
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Accounting
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="accountingExpenses.html" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Expenses</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="accountingIncome.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Income</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>Gallery</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="about.html" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>About</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="settings.html" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Settings</p>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-4 align-items-center">
                <div class="col-sm-3">
                    <ol class="breadcrumb float-sm-left">
                      <li class="breadcrumb-item"><a href="accountingIncome.html"><i class="fas fa-arrow-left"></i></a></li>
                    </ol>
                  </div>
                <div class="col-sm-6">
                    <center><h1 class="m-4">View Income Record</h1></center>
                </div><!-- /.col -->
            </div>
            </div>
          </div>
    
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col">
                <div class="card card-primary">
                  <div class="card-header">
                  <h3 class="card-title">Income Record Details</h3>
                  </div>
                  <div class="card-body">
                      <!-- PHP code to fetch and display record details -->
                      <?php
                        // Example data (replace with actual data retrieval logic)
                        $expenseItem = "Fingerling feed";
                        $amount = "$120";
                        $date = "30/01/2024";
                        $category = "Feed";
                        $remarks = "-";
                      ?>
                      <div class="form-group">
                        <label for="inputName">Income Item</label>
                        <input type="text" id="inputName" class="form-control" value="<?php echo $expenseItem; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="inputAmount">Amount</label>
                        <input type="text" id="inputAmount" class="form-control" value="<?php echo $amount; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" value="<?php echo $date; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Category</label>
                        <input type="text" id="inputStatus" class="form-control" value="<?php echo $category; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="inputRemarks">Remarks</label>
                        <textarea id="inputRemarks" class="form-control" rows="4" readonly><?php echo $remarks; ?></textarea>
                      </div>

                      <!-- Display uploaded files (if any) -->
                      <div class="form-group">
                        <label>Uploaded Files</label>
                        <div id="fileDisplayContainer" class="file-display-container">
                          <div id="fileDisplayArea" class="file-display-area">
                            <!-- Replace with logic to display uploaded files -->
                            <p>No files uploaded.</p>
                          </div>
                        </div>
                      </div>
                  </div>
          </section>
        </div>
    
        <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
          </div>
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    
        <aside class="control-sidebar control-sidebar-dark"></aside>
      </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<!-- inputmask -->
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- tempusdominus bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- bootstrap switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- bs-stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>