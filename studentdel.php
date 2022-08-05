<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php
					$query = 'DELETE FROM admin
							WHERE
							rnum = ' . $_POST['rnum'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " student.php";
			</script>				

</body>
</html>