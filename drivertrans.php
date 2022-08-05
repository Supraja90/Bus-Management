<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$did= $_POST['DRIVER_ID'];
						$dname= $_POST['DRIVER_NAME'];
						$dnum= $_POST['MOBILE_NUMBER'];
						$demail= $_POST['EMAIL'];
						$daadhaar= $_POST['AADHAAR_NUMBER'];
						$dbus= $_POST['BUS_NUM'];
						$edate= $_POST['EMPLOY_DATE'];
						$dsal= $_POST['SALARY'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO driver
								(DRIVER_ID,DRIVER_NAME,MOBILE_NUMBER, EMAIL,AADHAAR_NUMBER,BUS_NUM,EMPLOY_DATE,SALARY)
								VALUES ('".$did."','".$dname."','".$dnum."','".$demail."','".$daadhaar."','".$dbus."','".$edate."','".$dsal."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "driver.php";
		</script>
                    </div>