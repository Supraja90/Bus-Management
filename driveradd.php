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
                 


<form action="drivertrans.php?action=add" method="post">
    <div>
        <label for="DRIVER_ID">DRIVER ID:</label>
        <input type="DRIVER_ID" id="DRIVER_ID" name="DRIVER_ID" />
    </div>
    <div>
        <label for="DRIVER_NAME">DRIVER NAME:</label>
        <input type="DRIVER_NAME" id="DRIVER_NAME" name="DRIVER_NAME" />
    </div>
    <div>
        <label for="MOBILE_NUMBER">MOBILE NUMBER:</label>
        <input type="MOBILE_NUMBER" id="MOBILE_NUMBER" name="MOBILE_NUMBER" />
    </div>
    <div>
        <label for="EMAIL">EMAIL:</label>
        <input type="EMAIL" id="EMAIL" name="EMAIL" />
    </div>
    <div>
        <label for="AADHAAR_NUMBER">AADHAAR NUMBER:</label>
        <input type="AADHAAR_NUMBER" id="AADHAAR_NUMBER" name="AADHAAR_NUMBER" />
    </div>
    <div>
        <label for="BUS_NUM">BUS NUMBER:</label>
        <input type="BUS_NUM" id="BUS_NUM" name="BUS_NUM" />
    </div>
    <div>
        <label for="EMPLOY_DATE">EMPLOY DATE:</label>
        <input type="EMPLOY_DATE" id="EMPLOY_DATE" name="EMPLOY_DATE" />
    </div>
    <div>
        <label for="SALARY">SALARY:</label>
        <input type="SALARY" id="SALARY" name="SALARY" />
    </div> <br>
    <button type="submit" class="btn btn-default"> <h6> Submit </h6> </button></br>
  </form>  
  </div>
  </div>
  </div>
  </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>