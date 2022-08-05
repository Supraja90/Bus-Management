<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	
					$query = 'DELETE FROM driver
							WHERE
							DRIVER_ID = ' . $_POST['DRIVER_ID'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " driver.php";
			</script>				
				
			<?php
?>

</body>
</html>