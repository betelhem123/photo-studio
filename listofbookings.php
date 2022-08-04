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

                <table class="table table-striped table-light " id="DataTable">
                    <thead class="thead-dark">
                        <th>Id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>event</th>
                        <th>event_time</th>
                        <th>description</th>
                        <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_sql = "select * from schedule";
                        $select = mysqli_query($connnection, $select_sql);
                        if (mysqli_num_rows($select) > 0) {
                            while ($schedule = mysqli_fetch_assoc($select)) {

                        ?> <tr>
                                    <td><?php echo $schedule['id']; ?></td>
                                    <th scope="row"><?php echo $schedule['u_fname'] . " " . $schedule['u_lname']; ?></th>
                                    <td><?php echo $schedule['user_email']; ?></td>
                                    <td><?php echo $schedule['user_phoneNo']; ?></td>
                                    <td><?php echo $schedule['event_type']; ?></td>
                                    <td><?php echo $schedule['event_time']; ?></td>
                                    <td><?php echo $schedule['user_message']; ?></td>
                                    <th><button type="button" class="btn btn-danger " onClick="javascript:delete_id(<?php echo $schedule['id']; ?>)">delete</button></th>

                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</section>
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
    function delete_id(id) {
        if (confirm('Are you sure To Remove This Record ?')) {
            window.location.href = 'deletebookings.php?id=' + id;
        }
    }
</script>

</html>