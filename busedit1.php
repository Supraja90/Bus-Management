<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$route_number = $_POST['ROUTE_NUMBER'];
			$route_name = $_POST['ROUTE_NAME'];
		    $driver_id = $_POST['DRIVER_ID'];
			$seating_capacity= $_POST['SEATING_CAPACITY'];
			$occupancy= $_POST['OCCUPANCY'];
			$reg_number= $_POST['REG_NUMBER'];
		
	 			$query = 'UPDATE bus set route_name ="'.$route_name.'",
					driver_id ="'.$driver_id.'", seating_capacity="'.$seating_capacity.'", occupancy ="'.$occupancy.'", reg_number="'.$reg_number.'" WHERE
					route_number ="'.$route_number.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "bus.php";
		</script>
 <?php include 'footer.php'; ?>