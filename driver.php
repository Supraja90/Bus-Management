<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <h1>Driver Records </h1>
            <br> </br>
             <a href="driveradd.php?action=add" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
             <a href="drivereditpopup.php?action=edit" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Update</a>
             <a href="driverdelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
           </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <style>
tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
                                <thead>
                                    <tr>
                                        <th>Driver ID</th>
                                        <th>Driver Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Aadhaar Number</th>
                                        <th>Bus Number</th>
                                        <th>Employ Date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM driver';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '<td>'. $row['DRIVER_NAME'].'</td>';
                            echo '<td>'. $row['MOBILE_NUMBER'].'</td>';
                            echo '<td>'. $row['EMAIL'].'</td>';
                            echo '<td>'. $row['AADHAAR_NUMBER'].'</td>';
                            echo '<td>'. $row['BUS_NUM'].'</td>';
                            echo '<td>'. $row['EMPLOY_DATE'].'</td>';
                            echo '<td>'. $row['SALARY'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>
