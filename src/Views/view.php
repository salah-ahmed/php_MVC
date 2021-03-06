<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- IE META -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- First Mobile META -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Megabit-task</title>
    <link rel="shortcut icon" type="image/x-icon" href="/static/img/logo.png"/>
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/static/css/stylesheet.css">

    <title>Login</title>
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.min.js"></script>
    <script src="/static/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- sign up form start -->
                <?php
                require 'Leftside.php';
                require 'signup.php';
                // <!-- sign up form end -->

                //<!-- LOGIN FORM START -->

                require 'login.php';
                ?>
                <!-- LOGIN FORM END -->
            </div>
        </div>
    </div>
</section>

<script src='/static/js/jquery-3.2.1.min.js'></script>
<script src='/static/js/bootstrap.min.js'></script>
<script src="/static/js/plug.js"></script>
</body>
</html>
