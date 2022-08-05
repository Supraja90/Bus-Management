<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <h1>Student Records </h1>
            <br> </br>
             <a href="register.php?action=add" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
             <a href="studenteditpopup.php?action=edit" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Update</a>
             <a href="studentdelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
           </div>    
<br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Roll No.</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Branch</th>
                                        <th>Sem</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Bus No.</th>
                                        <th>Seat No.</th>
                                        <th>Pick-Up Point</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM admin where status="STUDENT"';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['rnum'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['program'].'</td>';
                            echo '<td>'. $row['branch'].'</td>';
                            echo '<td>'. $row['sem'].'</td>';
                            echo '<td>'. $row['mobilenum'].'</td>';
                            echo '<td>'. $row['user'].'</td>';
                            echo '<td>'. $row['route_number'].'</td>';
                            echo '<td>'. $row['seat_number'].'</td>';
                            echo '<td>'. $row['pickup_point'].'</td>';
                            echo '<td>'. $row['pname'].'</td>';
                            echo '<td>'. $row['pnum'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>