<?php
include("include/config.php");
include("include/header.php");
//include("sendmail.php");

if (isset($_POST['contact'])) {
    $u_fname = $_POST['u_fname'];
    $u_lname = $_POST['u_lname'];
    $user_email = $_POST['user_email'];
    $user_phoneNo = $_POST['user_phoneNo'];
    $event_type = $_POST['event_type'];
    $event_time = $_POST['event_time'];
    $user_message = $_POST['user_message'];
    $sql = "insert into schedule(u_fname,u_lname,user_email,user_phoneNo,event_type,event_time,user_message)
     values('$u_fname', ' $u_lname','$user_email', '$user_phoneNo', '$event_type', '$event_time', '$user_message')";
    $insert = $connnection->query($sql);
    // sendsmtp($user_email);
    if ($insert) {
        $_SESSION['successmsg'] = "Thank you! Your message have sent successfuly";
    } else {
        $_SESSION['errormsg'] = "Failed try again!";
    }
}
?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>BOOK US UP!</h1>

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
                        <input name="u_fname" type="text" class="form-control" placeholder="first Name" required>
                    </div>
                    <div class="form-group">
                        <input name="u_lname" type="text" class="form-control" placeholder="last Name" required>
                    </div>
                    <div class="form-group">
                        <input name="user_email" type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input name="user_phoneNo" type="text" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input name="event_type" type="text" class="form-control" placeholder="type of event" required>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="event_time" value="hourly" checked>DAY</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="event_time" value="nighttime">NIGHT</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="event_time" value="fullday">FULL DAY</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="form-group-2">
                        <textarea name="user_message" class="form-control" rows="4" placeholder="Additional Message"></textarea>
                    </div>
                    <button class="btn btn-default" name="contact" type="submit">Send Message</button>
                </div>
            </div>
            <div class="error" id="error">Sorry message is not Sent</div>
            <div class="success" id="success">Message Sent</div>
        </form>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Stop By For A Visit</h2>
                    <ul class="address-block">
                        <li>
                            <p><i class="fa fa-map-marker"></i><span>Location: </span><a href="#">Megenagna,Betelhem building 3rdfloor</a></p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope-o"></i><span> Email: </span><a href="#">blenstudio@gmail.com</a></p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i><span> Phone: </span>0933859817</p>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
</body>

</html>