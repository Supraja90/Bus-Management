<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$broute= $_POST['ROUTE_NUMBER'];
						$bname= $_POST['ROUTE_NAME'];
					    $bdriver= $_POST['DRIVER_ID'];
						$capacity= $_POST['SEATING_CAPACITY'];
						$occupancy= $_POST['OCCUPANCY'];
						$regnum= $_POST['REG_NUMBER'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO bus
								(ROUTE_NUMBER,ROUTE_NAME,DRIVER_ID, SEATING_CAPACITY, OCCUPANCY,REG_NUMBER)
								VALUES ('".$broute."','".$bname."','".$bdriver."','".$capacity."','".$occupancy."','".$regnum."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "bus.php";
		</script>
                    </div>