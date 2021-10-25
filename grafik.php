<!doctype html>
<html lang="en">
    <script src="jquery-latest.js"></script> 
    <script>
    var refreshId = setInterval(function()
    {
        $('#responsecontainer').load('grafik.php');
    }, 1000);
    </script>

    <!-- Begin page content -->
    <div class="container">

      <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
      <script type="text/javascript" src="assets/js/mdb.min.js"></script>
        
      <div id="responsecontainer">

      </div>	
</div>
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
              <div class="col-md-10 mt-2 p-5 pt-3" style="background-color: #0d4050;">
                <ol class="breadcrumb ml-1">
                  <h4><i class="fas fa-tachometer-alt mr-2"></i>GRAFIK MONITORING</h4>
                  </ol>
                  <!-- kotak2 tampilan grafik-->
                    
              <?php
                include "connection.php";
                ?>

                <?php
                  $x_tanggal  = mysqli_query($conn, 'SELECT waktu FROM ( SELECT * FROM data ORDER BY id DESC LIMIT 20) Var1 ORDER BY ID ASC');
                  $y_metana   = mysqli_query($conn, 'SELECT voltats FROM ( SELECT * FROM data ORDER BY id DESC LIMIT 20) Var1 ORDER BY ID ASC');
                  $y_co   = mysqli_query($conn, 'SELECT voltpln FROM ( SELECT * FROM data ORDER BY id DESC LIMIT 20) Var1 ORDER BY ID ASC');
                  $y_dc   = mysqli_query($conn, 'SELECT tegangandc1 FROM ( SELECT * FROM data ORDER BY id DESC LIMIT 20) Var1 ORDER BY ID ASC');
                  ?>
                 <div class="card bg-secondary"> 
                  <div class="panel  panel-primary col-md-15 mt-2 p-5 pt-3" style="background-color: white;">
                    <div class="panel-heading">
                      <h3 class="panel-title"><center>Grafik Presentase</h3>
                    </div>
                        
                    <div class="panel-body">
                        <meta http-equiv="refresh" content="10">
                      <canvas id="myChart"></canvas>
                      <script>
                       var canvas = document.getElementById('myChart');
                        var data = {
                            labels: [<?php while ($b = mysqli_fetch_array($x_tanggal)) { echo '"' . $b['waktu'] . '",';}?>],
                            datasets: [
                            {
                                label: "Voltage ATS",
                                fill: true,
                                lineTension: 0.1,
                                backgroundColor: "transparent",
                                borderColor: "rgba(200, 99, 132, .7)",
                                borderCapStyle: 'butt',
                                borderDash: [],
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "rgba(200, 99, 132, .7)",
                                pointBackgroundColor: "#fff",
                                pointBorderWidth: 1,
                                pointHoverRadius: 5,
                                pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                                pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                                pointHoverBorderWidth: 2,
                                pointRadius: 5,
                                pointHitRadius: 10,
                                data: [<?php while ($b = mysqli_fetch_array($y_metana)) { echo  $b['voltats'] . ',';}?>],
                            },
                            {
                                label: "Voltage PLN", 
                                fill: true,
                                lineTension: 0.1,
                                backgroundColor: "transparent",
                                borderColor: "rgba(0, 10, 130, .7)",
                                borderCapStyle: 'butt',
                                borderDash: [],
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "rgba(0, 10, 130, .7)",
                                pointBackgroundColor: "#fff",
                                pointBorderWidth: 1,
                                pointHoverRadius: 5,
                                pointHoverBackgroundColor: "rgba(0, 10, 130, .7)",
                                pointHoverBorderColor: "rgba(0, 10, 130, .7)",
                                pointHoverBorderWidth: 2,
                                pointRadius: 5,
                                pointHitRadius: 10,
                                data: [<?php while ($b = mysqli_fetch_array($y_co)) { echo  $b['voltpln'] . ',';}?>],
                            },
                                {
                                label: "Voltage DC", 
                                fill: true,
                                lineTension: 0.1,
                                backgroundColor: "transparent",
                                borderColor: "red",
                                borderCapStyle: 'butt',
                                borderDash: [],
                                borderDashOffset: 0.0,
                                borderJoinStyle: 'miter',
                                pointBorderColor: "rgba(0, 10, 130, .7)",
                                pointBackgroundColor: "#fff",
                                pointBorderWidth: 1,
                                pointHoverRadius: 5,
                                pointHoverBackgroundColor: "rgba(0, 10, 130, .7)",
                                pointHoverBorderColor: "rgba(0, 10, 130, .7)",
                                pointHoverBorderWidth: 2,
                                pointRadius: 5,
                                pointHitRadius: 10,
                                data: [<?php while ($b = mysqli_fetch_array($y_dc)) { echo  $b['tegangandc1'] . ',';}?>],
                            }
                            ]
                        };

                        var option = 
                        {
                          showLines: true,
                          animation: {duration: 0}
                        };

                        var myLineChart = Chart.Line(canvas,{
                          data:data,
                          options:option
                        });

                      </script>          
                    </div>    
                  </div>
</div>         
                     <br>
                     <div class="card bg-light"> 
                     <div class="panel panel-primary col-md-15 mt-2 p-5 pt-3">
                    <div class="panel-heading">
                      <h3 class="panel-title"><center>Tabel Presentase</h3>
                    </div>
                    <div class="panel-body">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr >
                            <th class='text-center'>Tanggal</th>
                            <th class='text-center'>Voltage (V)</th>
                            <th class='text-center'>Arus (A)</th>
                              <th class='text-center'>VoltageDC (VDC)</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                            $sqlAdmin = mysqli_query($conn, "SELECT waktu,voltats,voltpln,tegangandc1 FROM data ORDER BY ID DESC LIMIT 0,10");
                            while($data=mysqli_fetch_array($sqlAdmin))
                            {
                              echo "<tr >
                                <td><center>$data[waktu]</center></td> 
                                <td><center>$data[voltats]</td>
                                <td><center>$data[voltpln]</td>
                                <td><center>$data[tegangandc1]</td>
                              </tr>";
                            }
                          ?>
                        </tbody>
                      </table>   
                    </div>
                  </div>
                         </div>
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