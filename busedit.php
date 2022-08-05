<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">

<?php 
$query = 'SELECT * FROM bus
              WHERE
              ROUTE_NUMBER ='.$_POST['ROUTE_NUMBER'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              { 
                $broute= $row['ROUTE_NUMBER'];
                $bname= $row['ROUTE_NAME'];
                $bdriver= $row['DRIVER_ID'];
                $capacity= $row['SEATING_CAPACITY'];
                $occupancy= $row['OCCUPANCY'];
                $regnum= $row['REG_NUMBER'];
              }
              
              $id = $_POST['ROUTE_NUMBER'];
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
                 

<form action="busedit1.php?action=add" method="post">
    <div>
        <label for="ROUTE_NUMBER">ROUTE NUMBER:</label>
        <input type="ROUTE_NUMBER" id="ROUTE_NUMBER" name="ROUTE_NUMBER" value="<?php echo $broute; ?>">
    </div>
    <div>
        <label for="ROUTE_NAME">ROUTE NAME:</label>
        <input type="ROUTE_NAME" id="ROUTE_NAME" name="ROUTE_NAME" value="<?php echo $bname; ?>">
    </div>
    <div>
        <label for="DRIVER_ID">DRIVER:</label>
        <input type="DRIVER_ID" id="DRIVER_ID" name="DRIVER_ID"  value="<?php echo $bdriver; ?>">
    </div>
    <div>
        <label for="SEATING_CAPACITY">SEATING CAPACITY:</label>
        <input type="SEATING_CAPACITY" id="SEATING_CAPACITY" name="SEATING_CAPACITY"  value="<?php echo $capacity; ?>">
    </div>
    <div>
        <label for="OCCUPANCY">OCCUPANCY:</label>
        <input type="OCCUPANCY" id="OCCUPANCY" name="OCCUPANCY"  value="<?php echo $occupancy; ?>">
    </div>
    <div>
        <label for="REG_NUMBER">REGISTRATION NUMBER:</label>
        <input type="REG_NUMBER" id="REG_NUMBER" name="REG_NUMBER"  value="<?php echo $regnum; ?>">
    </div> <br>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button></br>
  </form>  
  </div>
  </div>
  </div>
  </div>

  <?php include 'footer.php'; ?>