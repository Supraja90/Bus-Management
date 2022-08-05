<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$rroute= $_POST['ROUTE_NUMBER'];
						$rname= $_POST['ROUTE_NAME'];
					    $rstages= $_POST['ENROUTE_STAGES'];
						$stime= $_POST['START_TIME'];
						$departure= $_POST['DEPARTURE'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO route
								(ROUTE_NUMBER,ROUTE_NAME,ENROUTE_STAGES, START_TIME, DEPARTURE)
								VALUES ('".$rroute."','".$rname."','".$rstages."','".$stime."','".$departure."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "route.php";
		</script>
                    </div>