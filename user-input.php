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
        
      <!-- Menubar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
  <nav class="navbar navbar-light bg-secondary">
  <div class="container"> 
    <a class="navbar-brand" href="#">
    </a>

  </div>
</nav>
    <a class="navbar-brand" href="#">INPUT DATA BARU </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="monitoring.php"><i class="fas fa-desktop mr-1"></i>
          Monitoring Real Time</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grafik.php"><i class="fas fa-chart-line mr-1"></i>
          Grafik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php"><i class="fas fa-users mr-1"></i>
          User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt mr-1"></i>
          Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

          <!-- ISI DASHBOARD -->
          <div class="col-md-20 mt-0 p-5 pt-10" style="background-color:#AAAAAA ;">
            <ol class="breadcrumb ml-1">
              <h4><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h4>
              </ol>
                  <!-- kotak2 tampilan grafik-->
                  <div class="card">
                  <h5 class="card-header">DATA USER</h5>
                  <div class="card-body">
                    <a href="user.php">Lihat Semua Data</a>
                        <br/>
                        <h3>Input data baru</h3>
                        <form action="user-aksi.php" method="post">		
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td><input type="text" name="nama"></td>					
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text" name="username"></td>					
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="text" name="password"></td>					
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td><input type="text" name="level"></td>					
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><input type="text" name="alamat"></td>					
                                </tr>		
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Simpan"></td>					
                                </tr>				
                            </table>
                        </form>
                  </div>
                </div>
                    <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>          
              
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