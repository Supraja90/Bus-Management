<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">

<?php 
$query = 'SELECT * FROM route
              WHERE
              ROUTE_NUMBER ='.$_POST['ROUTE_NUMBER'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              { 
                $rroute= $row['ROUTE_NUMBER'];
                $rname= $row['ROUTE_NAME'];
                $rstages= $row['ENROUTE_STAGES'];
                $stime= $row['START_TIME'];
                $departure= $row['DEPARTURE'];
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
                 

<form action="routeedit1.php?action=add" method="post">
    <div>
        <label for="ROUTE_NUMBER">ROUTE NUMBER:</label>
        <input type="ROUTE_NUMBER" id="ROUTE_NUMBER" name="ROUTE_NUMBER" value="<?php echo $rroute; ?>">
    </div>
    <div>
        <label for="ROUTE_NAME">ROUTE NAME:</label>
        <input type="ROUTE_NAME" id="ROUTE_NAME" name="ROUTE_NAME" value="<?php echo $rname; ?>">
    </div>
    <div>
        <label for="ENROUTE_STAGES">ENROUTE STAGES:</label>
        <input type="ENROUTE_STAGES" id="ENROUTE_STAGES" name="ENROUTE_STAGES"  value="<?php echo $rstages; ?>">
    </div>
    <div>
        <label for="START_TIME">START TIME:</label>
        <input type="START_TIME" id="START_TIME" name="START_TIME"  value="<?php echo $stime; ?>">
    </div>
    <div>
        <label for="DEPARTURE">DEPARTURE:</label>
        <input type="DEPARTURE" id="DEPARTURE" name="DEPARTURE"  value="<?php echo $departure; ?>">
    </div> <br>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button></br>
  </form>  
  </div>
  </div>
  </div>
  </div>

  <?php include 'footer.php'; ?>