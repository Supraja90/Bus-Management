
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	
					$query = 'DELETE FROM route
							WHERE
							ROUTE_NUMBER = ' . $_POST['ROUTE_NUMBER'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " route.php";
			</script>				
				
			<?php
?>

</body>
</html>