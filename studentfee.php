<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <h1>Student Fee Records </h1>
            <br> </br>
             <a href="register.php?action=add" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
             <a href="studentfeeeditpopup.php?action=edit" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Update</a>
             <a href="studentdelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
           </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Roll No.</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Bus No.</th>
                                        <th>Fee</th>
                                        <th>Amount Paid</th>
                                        <th>Payment Method</th>
                                        <!--<th>Proof</th>-->
                                
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
                            echo '<td>'. $row['mobilenum'].'</td>';
                            echo '<td>'. $row['route_number'].'</td>';
                            echo '<td>'. $row['fee'].'</td>';
                            echo '<td>'. $row['amount_paid'].'</td>';
                            echo '<td>'. $row['pay_method'].'</td>';
                          //  echo '<td>'. $row['file_name'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>