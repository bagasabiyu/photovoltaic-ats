<?php include 'connection.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
    <title>MONITORING</title>
  </head>
  <body>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed top" style="background-color: #f56503;">
          <a class="navbar-brand" href="#">SMART HOME SYSTEM | <b>ELECTRICAL</b></a>
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
              </li>-->
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
          <div class="col-md-10 mt-2 p-5 pt-3" style="background-color:#0d4050;">
              <div id="voltatsalert" class="alert text-center alert-danger" role="alert" style="display: none;">
                  Tegangan PLTS tidak ada!!!
                </div>

                <div id="voltplnalert" class="alert text-center alert-danger" role="alert" style="display: none;">
                  Tegangan PLN tidak ada!!!
                </div>
            <ol class="breadcrumb ml-1">
              <h4><i class="fas fa-desktop mr-2"></i>REAL TIME MONITORING</h4>
              </ol>
              <!-- kotak2 tampilan dashboard-->
                    <div class="block">
                    <center>
                    <br>
<!-- Kotak realtime -->
                    <div class="card bg-secondary">
                      <div class="card-header text-black">
                        MONITORING TEGANGAN ARUS BEBAN
                      </div>
                      <div class="card-body">
                           <meta http-equiv="refresh" content="60">
    
                        <?php
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            
                            $voltats = 0;
                            $voltpln = 0;
                            
                            $sql = "SELECT * FROM data ORDER by id DESC LIMIT 5";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0) {
                                echo "<table style= 'background-color: white; border='4' width='95%' height='20%' ><tr class= 'text-center' style= 'background-color: white;' width='80%' height='20%'><th>No</th><th>Waktu</th><th>Voltage PV</th><th>Current PV</th><th>Power PV</th><th>Voltage PLN</th><th>Current PLN</th><th>POWER PLN</th><th>TEGANGAN PV</th><th>TEGANGAN BATERRY</th><th>CURENT PV</th>";
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<th class= 'text-center'>".$row['id']."</th>";
                                    echo "<th>".$row['waktu']."</th>";
                                    echo "<th class= 'text-center'>".$row['voltats']."</th>";
                                    echo "<th class= 'text-center'>".$row['currentats']."</th>";
                                    echo "<th class= 'text-center'>".$row['powerats']."</th>";
                                    
                                    echo "<th class= 'text-center'>".$row['voltpln']."</th>";
                                    echo "<th class= 'text-center'>".$row['currentpln']."</th>";
                                    echo "<th class= 'text-center'>".$row['powerpln']."</th>";
                                    echo "<th class= 'text-center'>".$row['tegangandc1']."</th>";
                                    echo "<th class= 'text-center'>".$row['tegangandc2']."</th>";
                                    echo "<th class= 'text-center'>".$row['currentdc']."</th>";
                                    echo "</tr>";
                                    
                                    if ($row['voltats'] < 100) {
                                        $voltats = 1;
                                    }

                                    if ($row['voltpln'] < 100) {
                                        $voltpln = 1;
                                    }
                                }
                                echo "</table>";
                            } else {
                                echo "No Data";
                            }
                            if ($voltats == 1 ) {
                                echo '<script type="text/javascript">',
                                '$( document ).ready(function() {
                                    $("#voltatsalert").show();
                                });',
                                '</script>'
                                ;
                            }

                            if ($voltpln == 1  ) {
                                echo '<script type="text/javascript">',
                                '$( document ).ready(function() {
                                    $("#voltplnalert").show();
                                });',
                                '</script>'
                                ;
                            }  
                            ?><br>
                          </div>
                    </div>
                    <br>
                    <div class="row text-black ml-5">
                    <div class="card bg-warning" style="width: 20rem;">
                      <div class="card-body">
                          <div class="card-body-icon"></div>
                            <div class="card-header">
                            TARIF PLN</div>
                    
                           <?php
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 

                            $sql = "SELECT * FROM data ORDER by id DESC LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows >0) {
                                echo "<table style= 'background-color: bg-warning; border='4' width='80%' height='20%' >";
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<th class= 'text-center'>".$row['tarif']."</th>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No Data";
                            }
                            
                            ?>
                            <br>
                          <div class="card text-center order-visitor-card" >
                                <button onclick="window.location.href='kontrol.php?id=3&nilai=1'">RESET</button>   
                                <button onclick="window.location.href='kontrol.php?id=3&nilai=0'">ON</button>
                                                                
                                <?php
                                include 'connection.php';
                                $data = mysqli_query($conn, "SELECT * FROM kontrolrelay WHERE id='3'");
                                if($val=mysqli_fetch_array($data)){
                                $hasil = $val['nilai'];
                                if($hasil == 1){
                                $status = "RESET";
                                }
                                else {
                                $status = "ON";
                                }
                                echo "<font color='blue'>TARIF $status</font>";
                                }
                                ?>
                        </div>
                        </div>
                    </div> 
                    
                    <div class="card bg-success ml-5" style="width: 20rem;">
                      <div class="card-body">
                          <div class="card-body-icon"></div>
                          <div class="card-header">
                            BUTTON PV </div>
                            <br>
                            <div class="card text-center order-visitor-card" >
                                <button onclick="window.location.href='kontrol.php?id=1&nilai=1'">ON</button>   
                                <button onclick="window.location.href='kontrol.php?id=1&nilai=0'">OFF</button>
                                                                
                                <?php
                                include 'connection.php';
                                $data = mysqli_query($conn, "SELECT * FROM kontrolrelay WHERE id='1'");
                                if($val=mysqli_fetch_array($data)){
                                $hasil = $val['nilai'];
                                if($hasil == 1){
                                $status = "ON";
                                }
                                else {
                                $status = "OFF";
                                }
                                echo "<font color='blue'>RELAY $status</font>";
                                }
                                ?>
                        </div>
                      </div>
                    </div> 
                    
                    <div class="card bg-info ml-5" style="width: 20rem;">
                        <div class="card-body">
                          <div class="card-body-icon"></div>
                          <div class="card-header">
                            BUTTON PLN </div>
                            <br>
                            <div class="card text-center order-visitor-card" >
                            <button onclick="window.location.href='kontrol.php?id=2&nilai=1'">ON</button>   
                            <button onclick="window.location.href='kontrol.php?id=2&nilai=0'">OFF</button>
                                                                
                            <?php
                            include 'connection.php';
                            $data = mysqli_query($conn, "SELECT * FROM kontrolrelay WHERE id='2'");
                            if($val=mysqli_fetch_array($data)){
                            $hasil = $val['nilai'];
                            if($hasil == 1){
                            $status = "ON";
                            }
                            else {
                            $status = "OFF";
                            }
                            echo "<font color='blue'>RELAY $status</font>";
                            }
                            ?>
                        </div>
                      </div>
                    </div>
                    <!-- Modall  -->
                        <div class="modal fade" id="voltatsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">voltatsModal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="modal fade" id="voltplnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">powerplnModal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        <br>
                            <br>
                        <br>
                            <br>
                        <br>
                            <br>
                        <br>
                            <br>
                        <br>
                            <br>
                        
          </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Javascript! -->
      
  </body>
</html>