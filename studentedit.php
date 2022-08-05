<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier">
<div class="card card-register mx-auto mt-3">

<?php 
$query = 'SELECT * FROM admin
              WHERE
              rnum ='.$_POST['rnum'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              { 
                $rnum= $row['rnum'];
                $name= $row['name'];
                $program= $row['program'];
                $branch= $row['branch'];
                $sem= $row['sem'];
                $mobilenum= $row['mobilenum'];
                $user= $row['user'];
                $route_number= $row['route_number'];
                $seat_number= $row['seat_number'];
                $pickup_point= $row['pickup_point'];
                $pname= $row['pname'];
                $pnum= $row['pnum'];
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
                 

<form action="studentedit1.php?action=add" method="post">
<div>
        <label for=“rnum”>Roll Number:</label>
        <input type="rnum" id="ROUTE_NUMBER" name="rnum" value="<?php echo $rnum; ?>">
    </div>

    <div>
        <label for="name">Name:</label>
        <input type="name" id="name" name="name"  value="<?php echo $name;?>">
            </div>
    <div>
<label for="program">Program:</label>
        <input type="program" id="program" name="program"  value="<?php echo $program;?>">
 </div>
 <div>
<label for="branch">branch:</label>
        <input type="branch" id="branch" name="branch"  value="<?php echo $branch;?>">
</div>
<div>
<label for="sem">Sem:</label>
        <input type="sem" id="sem" name="sem"  value="<?php echo $sem;?>">
        </div>
        <div>
<label for="mobilenum">Mobilenum:</label>
        <input type="mobilenum" id="mobilenum" name="mobilenum"  value="<?php echo $mobilenum;?>">
        </div>
        <div>
<label for="user">User:</label>
        <input type="user" id="user" name="user"  value="<?php echo $user;?>">
        </div>
        <div>
<label for="route_number">Routenum:</label>
        <input type="route_number" id="route_number" name="route_number"
 value="<?php echo $route_number;?>">
 </div>
 <div>
<label for="seat_number">Seat number:</label>
        <input type="seat_number" id="seat_number" name="seat_number"  value="<?php echo $seat_number;?>">
        </div>
        <div>
<label for="pickup_point">Pickup point:</label>
        <input type="pickup_point" id="pickup_point" name="pickup_point"  value="<?php echo $pickup_point;?>">
        </div>
        <div>
        <label for="pname">Guardian Name:</label>
        <input type="pname" id="pname" name="pname"  value="<?php echo $pname;?>">
        </div>
        <div>
<label for="pnum">Guardian Number:</label>
        <input type="pnum" id="pnum" name="pnum"  value="<?php echo $pnum;?>">
        </div>
        <br>
    <button type="submit" class="btn btn-default"> <h6> Update </h6> </button></br>
  </form>  
  </div>
  </div>
  </div>
  </div>

  <?php include 'footer.php'; ?>