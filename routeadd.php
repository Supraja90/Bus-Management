<?php include 'connection.php';
include 'topnav.php'; ?>
<style>
.containers  {
  display: flex-flow;
  position: abstract;
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
<div class="card card-register mx-auto mt-5">
<div class="card border-dark" >
<div class="card-header"style="background-image: linear-gradient(to bottom,#eacda3, #d6ae7b)"><h2>Add new Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(to top,#eacda3, #d6ae7b);">
                 


<form action="routetrans.php?action=add" method="post">
    <div>
        <label for="ROUTE_NUMBER">ROUTE NUMBER:</label>
        <input type="ROUTE_NUMBER" id="ROUTE_NUMBER" name="ROUTE_NUMBER" />
    </div>
    <div>
        <label for="ROUTE_NAME">ROUTE NAME:</label>
        <input type="ROUTE_NAME" id="ROUTE_NAME" name="ROUTE_NAME" />
    </div>
    <div>
        <label for="ENROUTE_STAGES">ENROUTE STAGES:</label>
        <input type="ENROUTE_STAGES" id="ENROUTE_STAGES" name="ENROUTE_STAGES" />
    </div>
    <div>
        <label for="START_TIME">START TIME:</label>
        <input type="START_TIME" id="START_TIME" name="START_TIME" />
    </div>
    <div>
        <label for="DEPARTURE">DEPARTURE:</label>
        <input type="DEPARTURE" id="DEPARTURE" name="DEPARTURE" />
    </div><br>
    <button type="submit" class="btn btn-default"> <h6> Submit </h6> </button></br>
  </form>  
  </div>
  </div>
  </div>
  </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>