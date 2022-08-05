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
<div class="contaniers"> 
<div class="card card-register mx-auto mt-5">
<div class="card border-dark" >
<div class="card-header"style="background-image: linear-gradient(to bottom,#eacda3, #d6ae7b)"><h2>Add New Record</h2> </div>

<div class="card-body" style="background-image: linear-gradient(to top,#eacda3, #d6ae7b);">
                 

                        <form role="form" method="post" action="bustrans.php?action=add">
                            
                        <div>
        <label for="ROUTE_NUMBER">Route Number:</label>
        <input type="ROUTE_NUMBER" id="ROUTE_NUMBER" name="ROUTE_NUMBER" />
    </div>
    <div>
        <label for="ROUTE_NAME">Route Name:</label>
        <input type="ROUTE_NAME" id="ROUTE_NAME" name="ROUTE_NAME" />
    </div>
    <div>
        <label for="DRIVER_ID">Driver ID:</label>
        <input type="DRIVER_ID" id="DRIVER_ID" name="DRIVER_ID" />
    </div>
    <div>
        <label for="SEATING_CAPACITY">Seating Capacity:</label>
        <input type="SEATING_CAPACITY" id="SEATING_CAPACITY" name="SEATING_CAPACITY" />
    </div>
    <div>
        <label for="OCCUPANCY">Occupancy:</label>
        <input type="OCCUPANCY" id="OCCUPANCY" name="OCCUPANCY" />
    </div>
    <div>
        <label for="REG_NUMBER">Registration No.:</label>
        <input type="REG_NUMBER" id="REG_NUMBER" name="REG_NUMBER" />
    </div> <br>
    <button type="submit" class="btn btn-default"> <h6> Submit </h6> </button>
</br>               


                      </form>  
                    </div>
                
</div> </div>
        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>