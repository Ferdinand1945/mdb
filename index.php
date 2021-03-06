<?php
	session_start();
	include 'serv.php';

	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Sign In | CCHub</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="pink-violet.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="/css/style-responsive.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
</head>
<body id="signin-page">
<div class="page-form">
    <form method="post" action="validar.php" class="form">
        <div class="header-content"><h1>MDB CCHub v1.0</h1></div>

            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i>
                  <input input type="text" class="form-control" name="user" autocomplete="off" placeholder="Username" required></div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i>
                  <input input type="password" class="form-control" name="pw" autocomplete="off" placeholder="Password" required></div>
            </div>
            <div class="form-group pull-left">
                <div class="checkbox-list"><label><input type="checkbox">&nbsp;
                    Keep me signed in</label></div>
            </div>
            <div class="form-group pull-right"> 
                <button type="submit" class="btn btn-success" name="login">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>
           <!-- <div class="forget-password"><h4>Forgotten your Password?</h4>

                <p>no worries, click <a href='#' class='btn-forgot-pwd'>here</a> to reset your password.</p></div>
            <hr>
            <p>Don't have an account? <a id="btn-register" href="extra-signup.html">Register Now</a></p></div> -->
    </form>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script>//BEGIN CHECKBOX & RADIO
$('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_minimal-grey',
    increaseArea: '20%' // optional
});
$('input[type="radio"]').iCheck({
    radioClass: 'iradio_minimal-grey',
    increaseArea: '20%' // optional
});
//END CHECKBOX & RADIO</script>
</body>
</html>