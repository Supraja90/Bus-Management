<?php include 'connection.php';
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CBIT BUS TRANSPORT</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient();">

      <a class="navbar-brand mr-1" href="homepage.php">CBIT BUS TRANSPORT</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="logout.php"  data-target="#logoutModal">Logout</a>
            
          </div>
        </li>
      </ul>

    </nav>


    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient();">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-user-circle"></i>
            <span>Student</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item " href="userstudent.php">My Info</a> 
            <a class="dropdown-item " href="userstudentfee.php">Fee Details</a> 
            
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="userbus.php">
            <i class="fas fa-fw fa-bus"></i>
            <span>Bus</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdriver.php">
            <i class="fas fa-fw fa-users    "></i>
            <span>Driver</span></a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userroute.php">
            <i class="fas fa-fw fa-route   "></i>
            <span>Route</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usercsbox.php">
            <i class="fas fa-fw fa-comment-alt   "></i>
            <span>Suggestion Box</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

           <div class="col-lg-12">

            <div>
            <h1> Student Fee Record</h1>
           <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                <th>Roll No.</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Bus No.</th>
                                        <th>Fee</th>
                                        <th>Amount Paid</th>
                                        <th>Payment Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = $query = "SELECT * FROM admin Where id='".$_SESSION['MEMBER_ID']."'"  ;
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                                         
                            echo '<tr>';
                            echo '<td>'. $row['rnum'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['mobilenum'].'</td>';
                            echo '<td>'. $row['route_number'].'</td>';
                            echo '<td>'. $row['fee'].'</td>';
                            echo '<td>'. $row['amount_paid'].'</td>';
                            echo '<td>'. $row['pay_method'].'</td>';
                          //  echo '<td>'. $row['file_name'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>