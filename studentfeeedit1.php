<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$rnum= $_POST['rnum'];
			$name= $_POST['name'];
			$mobilenum= $_POST['mobilenum'];
			$route_number= $_POST['route_number'];
            $fee= $_POST['fee'];
            $amount_paid= $_POST['amount_paid'];
            $pay_method= $_POST['pay_method'];
            $file_name= $_POST['file_name'];


	 			$query = 'UPDATE admin set rnum ="'.$rnum.'",
				 name ="'.$name.'",mobilenum="'.$mobilenum.'"
				,route_number="'.$route_number.'",
				 fee="'.$fee.'",amount_paid="'.$amount_paid.'" ,pay_method="'.$pay_method.'" ,file_name="'.$file_name.'"
					WHERE rnum=' . $_POST['rnum'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				



?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "studentfee.php";
		</script>
 <?php include 'footer.php'; ?>