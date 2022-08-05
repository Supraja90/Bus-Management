<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
           <h1> Bus Records</h1>
           <br> </br>
        <a href="busadd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
        <a href="buseditpopup.php?action=edit" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Update</a>
        <a href="busdelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Route No.</th>
                                        <th>Route Name</th>
                                        <th>Driver ID</th>
                                        <th>Seating Capacity</th>
                                        <th>Occupancy</th>
                                        <th>Reg No.</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM bus';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ROUTE_NUMBER'].'</td>';
                            echo '<td>'. $row['ROUTE_NAME'].'</td>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '<td>'. $row['SEATING_CAPACITY'].'</td>';
                            echo '<td>'. $row['OCCUPANCY'].'</td>';
                            echo '<td>'. $row['REG_NUMBER'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php';?>