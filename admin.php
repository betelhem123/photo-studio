<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
} else
    include("include/config.php");
include("include/header.php");
?>

<section class="page-title bg-2">

    <div class="container text-center">
    <h1>hello <?php echo  $_SESSION['firstname']; ?></h1><br>
    <h2>which page do you want to visit?</h2>
   <div class="btn btn-group">
       
   <button type="button" class="btn btn-primary btn-lg" onClick="window.location.href='listofemployees.php?'" >1. LIST OF EMPLOYEES</button><br>
       
  <button type="button" class="btn btn-primary btn-lg" onClick="window.location.href='listofbookings.php?'" >2. ONLINE BOOKINGS </button>
  
   </div>
  
  

       
    </div>
</section>
</body>

</html>