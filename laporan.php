<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">  
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css"> 
   
      
    <title>Hello, world!</title>
  </head>
  <body>
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #f56503;">
          <a class="navbar-brand" href="#">SMART HOME SYSTEM | <b>ELECTRICAL AUTOMATION</b></a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
              </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="user.php"><i class="fas fa-users mr-2"></i>
                    User</a><hr class="secondary">
              </li> -->
                <li class="nav-item">
                <a class="nav-link text-white" href="logout.php"><i class="fas fa-users mr-2"></i>
                    Logout</a><hr class="secondary">
              </li>
            </ul>
          </div>
          <!-- ISI DASHBOARD -->
              <div class="col-md-10 mt-2 p-5 pt-3" style="background-color: #9b9693;">
                <ol class="breadcrumb ml-1">
                  <h4><i class="fas fa-tachometer-alt mr-2"></i>LAPORAN</h4>
                  </ol>
                  <!-- kotak2 tampilan grafik-->
             
              
              <!-- batas isi grafik5-->
              
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