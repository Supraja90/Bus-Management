
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php
					$query = 'DELETE FROM bus
							WHERE
							ROUTE_NUMBER = ' . $_POST['ROUTE_NUMBER'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " bus.php";
			</script>				

</body>
</html>