<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RVM Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="../../index.html"><img src="../../images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              ADMIN <img src="../../images/faces/face28.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.php">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Registration Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Informations</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Monitoring Locations</h4>
                  <p class="card-description">
                    SITUATIONS OF RVM MACHINE
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>RVM ID</th>
                          <th>Location</th>
                          <th>Weight Status</th>
                          <th>Coins Remaining</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>R1920</td>
                          <td>CITY HALL, STA. ROSA</td>
                          <td>35KG</td>
                          <td>130 COINS</td>
                        </tr>
                        <tr>
                          <td>R7283</td>
                          <td>CARMONA, CAVITE</td>
                          <td class="text-danger">49KG</td>
                          <td>102 COINS</td>
                        </tr>
                        <tr>
                          <td>R1297</td>
                          <td>BRGY. DITA, STA. ROSA</td>
                          <td>20KG</td>
                          <td>160 COINS</td>
                        </tr>
                        <tr>
                          <td>R4583</td>
                          <td>PUP STA. ROSA</td>
                          <td>10KG</td>
                          <td>180 COINS</td>
                        </tr>
                        <tr>
                          <td>R3480</td>
                          <td>BRGY. MESA HOMES, DON JOSE</td>
                          <td>5KG</td>
                          <td>190 COINS</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employee's Information Sheet</h4>
                  <p class="card-description">
                    ASSIGNED EMPLOYEES IN DIFFERENT LOCATIONS
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
			  <th>RVM ID</th>
                          <th>User ID</th>
                          <th>Name</th>
                          <th>Barangay</th>
			  <th>City</th>
                          <th>Contact No.</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
			  <td>R1920</td>
                          <td>lalalalisa_m</td>
                          <td>LALISA DELA CUESTA</td>
                          <td>MALUSAK</td>
                          <td>SANTA ROSA, LAGUNA</td>
			  <td>09165928659</td>
                        </tr>
                        <tr>
                          <td>R7283</td>
			  <td>jennierubyjane</td>
                          <td>JENNIE CATACUTAN</td>
                          <td>MARKET AREA</td>
                          <td>CARMONA, CAVITE</td>
			  <td>09557303586</td>
                        </tr>
                        <tr>
                          <td>R1297</td>
			  <td>roses_are_rosie</td>
                          <td>ROSIE FLORES</td>
                          <td>DITA</td>
                          <td>SANTA ROSA, LAGUNA</td>
			  <td>09557303584</td>
                        </tr>
                        <tr>
                          <td>R4583</td>
			  <td>sooyaaa__</td>
                          <td>JISOO SAN JOSE</td>
                          <td>KANLURAN</td>
                          <td>SANTA ROSA, LAGUNA</td>
			  <td>09384602238</td>
                        </tr>
                        <tr>
                          <td>R3480</td>
			  <td>odettecantswim</td>
                          <td>ODETTE RIVERA</td>
                          <td>DON JOSE</td>
                          <td>SANTA ROSA, LAGUNA</td>
			  <td>09559176371</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recyclables Collected</h4>
                  <p class="card-description">
                    SITUATIONS OF RVM MACHINE
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            RVM ID
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Total Recyclables Returns
                          </th>
                          <th>
                            Target Recyclables
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>R1920</td>
                          <td>CITY HALL, STA. ROSA</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            1000 KG
                          </td>
                        </tr>
                        <tr>
                          <td>R7283</td>
                          <td>CARMONA, CAVITE</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            1000 KG
                          </td>
                        </tr>
                        <tr>
                          <td>R1297</td>
                          <td>BRGY. DITA, STA. ROSA</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            1000 KG
                          </td>
                        </tr>
                        <tr>
                          <td>R4583</td>
                          <td>PUP STA. ROSA</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            1000 KG
                          </td>
                        </tr>
                        <tr>
                          <td>R3480</td>
                          <td>BRGY. MESA HOMES, DON JOSE</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            1000 KG
                          </td>
                        </tr>
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>