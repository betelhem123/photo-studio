<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
} else
    include("include/config.php");
include("include/header.php");
?>




<section class="page-title bg-2">

    <div class="container">
        <div class="row ">
            <div class="col-md-12 bg-primary">
                
                <h3><b>LIST OF ONLINE BOOKINGS</b></h3>

                <table class="table table-striped table-light"id="DataTable">
                    <thead class="thead-dark">
                        <th>Id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>adress</th>
                        <th>operations</th>
                        
                       

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_sql = "select * from employeetbl";
                        $select = mysqli_query($connnection, $select_sql);
                        while ($schedule = mysqli_fetch_assoc($select)) {

                        ?> <tr>
                                <td><?php echo $schedule['id']; ?></td>
                                <th scope="row"><?php echo $schedule['fname'] . " " . $schedule['lname']; ?></th>
                                <td><?php echo $schedule['email_user']; ?></td>
                                <td><?php echo $schedule['phoneNo_user']; ?></td>
                                <td><?php echo $schedule['adress']; ?></td>
                                <th><button type="button" class="btn btn-danger " onClick="javascript:delete_id(<?php echo $schedule['id']; ?>)">delete</button></th>
                                
                                
                                

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="btn btn-group container text-center">
            <a href="addemployee.php">
        <button type="button" class="btn btn-link btn-lg " >Add new Employees </button>
            </a>
        </div>
    </div>
</section>

</script>

</body>
<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/metisMenu/metisMenu.min.js"></script>

<script src="dist/js/customized.js"></script>

<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- contact form start -->
<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            responsive: true
        });
    });
</script>
<script type="text/javascript">
            function delete_id(id)
            {
            if(confirm('Are you sure To Remove This Record ?'))
            {
            window.location.href='deleteemployee.php?id='+id;
            }
            }
            </script>
</html>