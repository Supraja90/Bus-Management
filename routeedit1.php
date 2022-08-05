<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$rroute= $_POST['ROUTE_NUMBER'];
			$rname= $_POST['ROUTE_NAME'];
			$rstages= $_POST['ENROUTE_STAGES'];
			$stime= $_POST['START_TIME'];
			$departure= $_POST['DEPARTURE'];


	 			$query = 'UPDATE route set ROUTE_NUMBER ="'.$rroute.'",
				 ROUTE_NAME ="'.$rname.'",ENROUTE_STAGES ="'.$rstages.'", START_TIME="'.$stime.'", DEPARTURE="'.$departure.'" 
					WHERE ROUTE_NUMBER=' . $_POST['ROUTE_NUMBER'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				



?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "route.php";
		</script>
 <?php include 'footer.php'; ?>