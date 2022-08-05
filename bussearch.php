
<?php include 'connection.php';
include 'topnav.php'
?>

<div class="contanier">
<div class="card card-register mx-auto mt-5">
<div class="card-header"> <h2>Check Record</h2> </div>
<div class="card-body">

<?php
$query = 'SELECT * FROM bus
              WHERE
              route_number ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $route_number= $row['route_number'];
                $route_name= $row['route_name'];
                $driver_id=$row['driver_id'];
                $seating_capacity=$row['seating_capacity'];
                $occupancy=$row['occupancy'];
    
                $reg_number=$row['reg_number'];
              }
              
              $route_number = $_GET['id'];
         
?>


                        <form role="form" method="post" action="bus.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="Route No." value="<?php echo $route_number; ?>" />
                            </div>
                            
        
                            <div class="form-group">
                              <input class="form-control" placeholder="route_name" name="route_name" value="<?php echo $route_name; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="driver_id" name="driver_id" value="<?php echo $driver_id; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="seating_capacity" name="seating_capacity" value="<?php echo $seating_capacity; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="occupancy" name="occupancy" value="<?php echo $occupancy; ?>">
                            </div>
             
                            <div class="form-group">
                              <input class="form-control" placeholder="reg_number" name="reg_number" value="<?php echo $reg_number; ?>">
                            </div>
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

