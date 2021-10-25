<!doctype html>
<!-- autorefresh  -->

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">  
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css"> 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
    <title>Hello, world!</title>
  </head>
  <body>
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #f56503;">
          <a class="navbar-brand" href="#">SMART HOME SYSTEM | <b>ELECTRICAL AUTOMATION</b></a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
              
            </form>
            
            <div class="icon ml-4">
                <h5>
                    <i class="fas fa-envelope-open-text mr-3" data-toggle="tooltip" title="Pesan Masuk"></i>
                    <i class="far fa-bell mr-3" data-toggle="tooltip" title="Peringatan"></i>
                    <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i>
                </h5>
          </div>
        </nav>
      <!-- Menubar -->
      <div class="row no-gutters">
          <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color: #9b9693;">
            <ul class="nav flex-column ml-2 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>
                    Dashboard</a><hr class="secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="monitoring.php"><i class="fas fa-desktop mr-2"></i>
                    Monitoring Real Time</a><hr class="secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="grafik.php"><i class="fas fa-chart-line mr-2"></i>
                    Grafik</a><hr class="secondary">
              </li>
              <!-- 
                <li class="nav-item">
                <a class="nav-link text-white" href="laporan.php"><i class="fas fa-columns mr-2"></i>
                    Laporan</a><hr class="secondary">
              </li> -->
                <li class="nav-item">
                <a class="nav-link text-white" href="user.php"><i class="fas fa-users mr-2"></i>
                    User</a><hr class="secondary">
              </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="logout.php"><i class="fas fa-users mr-2"></i>
                    Logout</a><hr class="secondary">
              </li>
            </ul>
          </div>
          <!-- ISI DASHBOARD -->
          <div class="col-md-10 mt-2 p-5 pt-3" style="background-color:#0d4050 ;">
            <ol class="breadcrumb ml-1">
              <h4><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h4>
              </ol>
              <!-- kotak2 tampilan dashboard-->
                <div class="row text-white ml-1">
                    <div class="card bg-warning" style="width: 15rem;">
                      <div class="card-body">
                          <div class="card-body-icon"> <i class="fas fa-desktop mr-2"></i></div>
                            <h5 class="card-title">MONITORING</h5>
                          <div class="display-5">ATS</div>
                          <a href="monitoring.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                      </div>
                    </div> 
                    
                    <div class="card bg-success ml-3" style="width: 15rem;">
                      <div class="card-body">
                          <div class="card-body-icon"><i class="fas fa-chart-line mr-2"></i></div>
                            <h5 class="card-title">MONITORING</h5>
                          <div class="display-5">GRAFIK</div>
                          <a href="grafik.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                      </div>
                    </div> 
                    <!--
                    <div class="card bg-primary ml-3" style="width: 15rem;">
                      <div class="card-body">
                          <div class="card-body-icon"><i class="fas fa-columns mr-2"></i></div>
                            <h5 class="card-title">MONITORING</h5>
                          <div class="display-5">LAPORAN</div>
                          <a href="laporan.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                      </div>
                    </div> 
                    -->
                    <div class="card bg-primary ml-3" style="width: 15rem;">
                      <div class="card-body">
                          <div class="card-body-icon"> <i class="fas fa-users mr-2"></i></div>
                            <h5 class="card-title">MONITORING</h5>
                          <div class="display-5">USER</div>
                          <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                      </div>
                    </div> 
                </div>
              <br>
 <!-- kotak2 tampilan dashboard sampai video 43:35-->
              <div class="row mt-4  ml-1">
                <div class="card" style="width: 20rem;">
                  <div class="card-header">
                    Informasi
                  </div>
                  <div class="card-body">
                    <p class="card-text" align="justify">Automatic Transfer Switch (ATS) merupakan saklar listrik/elektronik yang dapat beralih ketika sumber daya utama terganggu dan secara otomatis menggeser beban ke sumber kedua. Hal tersebut bisa terjadi selama parameter tegangan dan frekuensi berada dalam batas yang ditentukan</p>
                    
                  </div>
                </div>
                  <div class="ml-2">
                <div class="card" style="width: 20rem;">
                  <div class="card-header">
                    Informasi
                  </div>
                  <div class="card-body">
                    <p class="card-text">Iqbal Aulia Lazuardi</p>
                      <p class="card-text">10311710003022</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
              </div>
               
<br>
          </div>
      
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Javascript! -->
    <script type="text/javascript" src="admin.js"></script>
      
  </body>
</html>