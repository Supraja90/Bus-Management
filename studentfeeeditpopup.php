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
    <body>
<div class="card-header"style="background-image: linear-gradient(to bottom,#eacda3, #d6ae7b)">
<h2>Update Record</h2> </div>
<div class="card-body" style="background-image: linear-gradient(to top,#eacda3, #d6ae7b);">           
<form action="studentfeeedit.php?action=edit" method="post">
<br> 
    <div>
        <label for="rnum">ROLL NUMBER:</label>
        <input type="rnum" id="rnum" name="rnum" />
    </div>  
    </br>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button> </body>  
  </form>  
   </div>
   </div>
</div>

    <br> </br>
    <br> </br>
        <?php include 'footer.php'; ?>