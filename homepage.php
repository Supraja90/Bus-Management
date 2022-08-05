<?php
include 'connection.php';
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

    <title>BUS</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient(to left, #42275a, #734b6d);">

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
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(to top, #42275a, #734b6d);">
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
            <li class="nav-item">
          <a class="nav-link" href="usercsbox.php">
            <i class="fas fa-fw fa-comment-alt   "></i>
            <span>Suggestion Box</span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Breadcrumbs-->
          <ol class="breadcrumb"
            <li class="breadcrumb-item" style="background-image: linear-gradient();">
              <a href="homepage.php"> <h2> BUS SERVICES </h2> </a>
            </li>
           
          </ol>

          <!-- Page Content -->
          <div class="bus_logo">

<img id="myImg" src="image/bus2.jpg" alt="BUS" style="width:100%;max-width:410px">
<img id="myImg" src="image/bus1.png" alt="BUS1" style="width:100%;max-width:460px">
<img id="myImg" src="image/bus3.jpg" alt="BUS2" style="width:90%;max-width:350px">
<br> </br>
<h2>Contact Details</h2>
<p>
1. Dr. R.P. Chowdary
<br>
Associate Professor of Mechanical Department.
<br>
Phone: 9177220635( 4.30 to 6.30PM)
<br>
e-mail: cbitstudenttransport@gmail.com</p>
<p>
2. S. Sateesh Reddy (Transport Supervisor)
<br>
Ph: 99081 76475</p>
<p>
The Students Transport Centre is located in the ground floor of K Block (near Canteen)
</p>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>

<?php include 'footer.php'; ?>