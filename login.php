<?php

include("include/header.php");
include("include/config.php");
session_start();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $select_sql = "select * from tbladmin where email='$email' and password='$pass'";
  $select = mysqli_query($connnection, $select_sql);
  $number = mysqli_num_rows($select);
  if ($number == 1) {
    $current_user = mysqli_fetch_assoc($select);
    $_SESSION['email'] = $email;
    $_SESSION['firstname'] = $current_user['f_name'];
    $_SESSION['lastname'] = $current_user['l_name'];
    $_SESSION['msg'] = "You have been Logged in successfuly";
    header("location:admin.php");
  } else {
    $_SESSION['msg'] = "Login Field, Please check your phone and Password";
  }
}


?>


<section class="vh-100" style="background-color: #9A616D;">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">


              <img src="images/57.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form class="form-signin" action="" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">

                    <span class="h1 fw-bold mb-0">Capture the moment</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter Email" required autofocus />
                    <label class="form-label" for="email"></label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Enter Your Password" required />
                    <label class="form-label" for="form2Example27"></label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Don't have an account? Please contact the admin</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">For Staff Use Only!</p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>