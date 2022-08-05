<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$rnum= $_POST['rnum'];
			$name= $_POST['name'];
			$program= $_POST['program'];
			$branch= $_POST['branch'];
			$sem= $_POST['sem'];
			$mobilenum= $_POST['mobilenum'];
			$user= $_POST['user'];
			$route_number= $_POST['route_number'];
			$seat_number= $_POST['seat_number'];
			$pickup_point= $_POST['pickup_point'];
			$pname= $_POST['pname'];
			$pnum= $_POST['pnum'];


	 			$query = 'UPDATE admin set rnum ="'.$rnum.'",
				 name ="'.$name.'",program ="'.$program.'", branch="'.$branch.'", sem="'.$sem.'",mobilenum="'.$mobilenum.'" ,
				 user="'.$user.'",route_number="'.$route_number.'",seat_number="'.$seat_number.'" ,
				 pickup_point="'.$pickup_point.'",pname="'.$pname.'" ,pnum="'.$pnum.'" 
					WHERE rnum=' . $_POST['rnum'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				



?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "student.php";
		</script>
 <?php include 'footer.php'; ?>