<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">

<?php 
$query = 'SELECT * FROM admin
              WHERE
              rnum ='.$_POST['rnum'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              { 
                $rnum= $row['rnum'];
                $name= $row['name'];
                $mobilenum= $row['mobilenum'];
                $route_number= $row['route_number'];
                $fee= $row['fee'];
                $amount_paid= $row['amount_paid'];
                $pay_method= $row['pay_method'];
                $file_name= $row['file_name'];
              }
              
              $id = $_POST['rnum'];
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
                 

<form action="studentfeeedit1.php?action=add" method="post">
<div>
        <label for=“rnum”>Roll Number:</label>
        <input type="rnum" id="ROUTE_NUMBER" name="rnum" value="<?php echo $rnum; ?>">
    </div>

    <div>
        <label for="name">Name:</label>
        <input type="name" id="name" name="name"  value="<?php echo $name;?>">
            </div>
 <div>
<label for="mobilenum">Mobilenum:</label>
        <input type="mobilenum" id="mobilenum" name="mobilenum"  value="<?php echo $mobilenum;?>">
        </div>
        <div>
<label for="route_number">Routenum:</label>
        <input type="route_number" id="route_number" name="route_number"
 value="<?php echo $route_number;?>">
 </div>
 <div>
<label for="fee">Fee:</label>
        <input type="fee" id="fee" name="fee"  value="<?php echo $fee;?>">
        </div>
        <div>
<label for="amount_paid">Amount Paid:</label>
        <input type="amount_paid" id="amount_paid" name="amount_paid"  value="<?php echo $amount_paid;?>">
        </div>
        <div>
        <label for="pay_method">Pay Method:</label>
        <input type="pay_method" id="pay_method" name="pay_method"  value="<?php echo $pay_method;?>">
        </div>
        <div>
<label for="file_name">File Name:</label>
        <input type="file_name" id="file_name" name="file_name"  value="<?php echo $file_name;?>">
        </div>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button>
  </form>  
  </div>
  </div>
  </div>
  </div>

  <?php include 'footer.php'; ?>