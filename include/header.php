<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ብሌን photo studio</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- start header -->

    <!-- start navigation -->
    <nav class="navbar navbar-default templatemo-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">ብሌን photo studio</a>
            </div>
            <div class="navbar navbar-expand-lg p-0">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>

                    <li><a href="service.php">SERVICE</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="contact.php">BOOK US</a></li>

                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<li><a href="admin.php">ADMIN PAGE</a></li>';
                        echo ' <li><a href="logout.php">LOGOUT</a></li>';
                    } else {
                        echo ' <li><a href="login.php">LOGIN</a></li>';
                    }

                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end navigation -->