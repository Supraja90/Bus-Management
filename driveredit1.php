<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$did= $_POST['DRIVER_ID'];
			$dname= $_POST['DRIVER_NAME'];
			$dnum= $_POST['MOBILE_NUMBER'];
			$demail= $_POST['EMAIL'];
			$daadhaar= $_POST['AADHAAR_NUMBER'];
			$dbus= $_POST['BUS_NUM'];
			$edate= $_POST['EMPLOY_DATE'];
			$dsal= $_POST['SALARY'];


	 			$query = 'UPDATE driver set DRIVER_ID ="'.$did.'",
				 DRIVER_NAME ="'.$dname.'", MOBILE_NUMBER="'.$dnum.'", EMAIL="'.$demail.'",AADHAAR_NUMBER="'.$daadhaar.'",BUS_NUM="'.$dbus.'" ,EMPLOY_DATE="'.$edate.'" ,SALARY="'.$dsal.'" 
					WHERE DRIVER_ID=' . $_POST['DRIVER_ID'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				



?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "driver.php";
		</script>
 <?php include 'footer.php'; ?>