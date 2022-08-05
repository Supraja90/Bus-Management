<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">

<?php 
$query = 'SELECT * FROM driver
              WHERE
              DRIVER_ID ='.$_POST['DRIVER_ID'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              { 
                $did= $row['DRIVER_ID'];
                $dname= $row['DRIVER_NAME'];
						$dnum= $row['MOBILE_NUMBER'];
						$demail= $row['EMAIL'];
						$daadhaar= $row['AADHAAR_NUMBER'];
						$dbus= $row['BUS_NUM'];
						$edate= $row['EMPLOY_DATE'];
						$dsal= $row['SALARY'];
              }
              
              $id = $_POST['DRIVER_ID'];
?>
<style>
.containers  {
  display: flex-flow;
  position: top;
  top: 0;
  left: 100;
  height: 50%;
  width: 100%;
}
.containers .row {
  margin: 0 auto;
} 
body {  
font-size: 100%;  
}    
h2 { font-family: sans-serif; }  
h6  { font-family: sans-serif; }    
}  
</style>
<div class="containers"> 
<div class="card card-register mx-auto mt-0">
<div class="card-header"style="background-image: linear-gradient(to bottom,#eacda3, #d6ae7b)"><h2>Edit Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(to top,#eacda3, #d6ae7b);">
                 

<form action="driveredit1.php?action=add" method="post">
    <div>
        <label for="DRIVER_ID">DRIVER ID:</label>
        <input type="DRIVER_ID" id="DRIVER_ID" name="DRIVER_ID" value="<?php echo $did; ?>">
    </div>
    <div>
        <label for="DRIVER_NAME">DRIVER NAME:</label>
        <input type="DRIVER_NAME" id="DRIVER_NAME" name="DRIVER_NAME" value="<?php echo $dname; ?>">
    </div>
    <div>
        <label for="MOBILE_NUMBER">MOBILE NUMBER:</label>
        <input type="MOBILE_NUMBER" id="MOBILE_NUMBER" name="MOBILE_NUMBER"  value="<?php echo $dnum; ?>">
    </div>
    <div>
        <label for="EMAIL">EMAIL:</label>
        <input type="EMAIL" id="EMAIL" name="EMAIL"  value="<?php echo $demail; ?>">
    </div>
    <div>
        <label for="AADHAAR_NUMBER">AADHAAR NUMBER:</label>
        <input type="AADHAAR_NUMBER" id="AADHAAR_NUMBER" name="AADHAAR_NUMBER"  value="<?php echo $daadhaar; ?>">
    </div>
    <div>
        <label for="BUS_NUM">BUS NUMBER:</label>
        <input type="BUS_NUM" id="BUS_NUM" name="BUS_NUM"  value="<?php echo $dbus; ?>">
    </div>
    <div>
        <label for="EMPLOY_DATE">EMPLOY DATE:</label>
        <input type="EMPLOY_DATE" id="EMPLOY_DATE" name="EMPLOY_DATE"  value="<?php echo $edate; ?>">
    </div>
    <div>
        <label for="SALARY">SALARY:</label>
        <input type="SALARY" id="SALARY" name="SALARY"  value="<?php echo $dsal; ?>">
    </div> <br>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button> </br>
  </form>  
  </div>
  </div>
  </div>
  </div>

  <?php include 'footer.php'; ?>