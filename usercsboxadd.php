<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$csrollnum= $_POST['Rollnumber'];
						$cstype= $_POST['Type'];
					    $cssub= trim($_POST['Subject']);
						
								$query = "INSERT INTO csbox
								(Rollnumber,Type,Subject)
								VALUES ('".$csrollnum."','".$cstype."','".$cssub."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
					
				?>
    	<script type="text/javascript">
			alert("Successfully sent.");
			window.location = "usercsbox.php";
		</script>
                    </div>