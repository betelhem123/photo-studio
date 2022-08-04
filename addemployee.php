<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
} else


    include("include/config.php");
include("include/header.php");

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_user = $_POST['email_user'];
    $phoneNo_user = $_POST['phoneNo_user'];
    $adress = $_POST['type_event'];

    $sql = "insert into employeetbl(fname,lname,email_user,phoneNo_user,adress )
values('$fname', ' $lname','$email_user', '$phoneNo_user', '$adress')";
    $insert = $connnection->query($sql);
    // sendsmtp($user_email);
    if ($insert) {
        $_SESSION['successmsg'] = "Sucessfully registerd";
    } else {
        $_SESSION['errormsg'] = "registration faild";
    }
}
?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Employee Registration form!</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <form action="" method="POST" class="row" id="contact-form">

            <div class="col-md-6 col-sm-12">
                <?php
                if (isset($_SESSION['successmsg'])) {
                    echo '<div class="alert alert-success">';
                    echo '<h3>' . $_SESSION['successmsg'] . '</h3>';
                    unset($_SESSION['successmsg']);
                    echo '</div>';
                }

                ?>
                <div class="block">
                    <div class="form-group">
                        <input name="fname" type="text" class="form-control" placeholder="first Name" required>
                    </div>
                    <div class="form-group">
                        <input name="lname" type="text" class="form-control" placeholder="last Name" required>
                    </div>
                    <div class="form-group">
                        <input name="email_user" type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input name="phoneNo_user" type="text" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input name="type_event" type="text" class="form-control" placeholder="Adress" required>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">

                        <button class="btn btn-default" name="register" type="submit">Register</button>
                    </div>
                </div>
            </div>

            <div class="error" id="error">Sorry not sent</div>
            <div class="success" id="success">Message Sent</div>
        </form>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">

            </div>

        </div>
    </div>
</section>
</body>

</html>