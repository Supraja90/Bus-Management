<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <h1><a href="image/route.pdf"> Route Records</a> </h1> 
            <br> </br>
             <a href="routeadd.php?action=add" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
             <a href="routeeditpopup.php?action=edit" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Update</a>
             <a href="routedelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
           </div>    
           <br>
</br>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <style>
tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
                                <thead>
                                    <tr>
                                        <th>Route Number</th>
                                        <th>Route Name</th>
                                        <th>Enroute Stages</th>
                                        <th>Start Time</th>
                                        <th>Departure</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM route';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ROUTE_NUMBER'].'</td>';
                            echo '<td>'. $row['ROUTE_NAME'].'</td>';
                            echo '<td>'. $row['ENROUTE_STAGES'].'</td>';
                            echo '<td>'. $row['START_TIME'].'</td>';
                            echo '<td>'. $row['DEPARTURE'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>

