<?php session_start(); ob_start(); ?>
<html>
<head>
    <title>
        Dreidents Dental Care - <?php echo $title; ?>
    </title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no' />
    <link rel='stylesheet' href='/css/bootstrap.min.css'>
    <link rel='stylesheet' href='/css/bootstrap-theme.min.css'>
    <script src='/js/jquery.min.js'></script>
    <script src='/js/jquery.ui.js'></script>
    <script src='/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='/css/jquery.ui.css'>
    <link rel='stylesheet' href='/css/ddcstyleresponsive.css'>
    <link rel='apple-touch-icon' sizes='57x57' href='/images/favicon/apple-icon-57x57.png'>
    <link rel='apple-touch-icon' sizes='60x60' href='/images/favicon/apple-icon-60x60.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='/images/favicon/apple-icon-72x72.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='/images/favicon/apple-icon-76x76.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='/images/favicon/apple-icon-114x114.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='/images/favicon/apple-icon-120x120.png'>
    <link rel='apple-touch-icon' sizes='144x144' href='/images/favicon/apple-icon-144x144.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='/images/favicon/apple-icon-152x152.png'>
    <link rel='apple-touch-icon' sizes='180x180' href='/images/favicon/apple-icon-180x180.png'>
    <link rel='icon' type='image/png' sizes='192x192' href='/images/favicon/android-icon-192x192.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='/images/favicon/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='96x96' href='/images/favicon/favicon-96x96.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='/images/favicon/favicon-16x16.png'>
    <link rel='manifest' href='/images/favicon/manifest.json'>
    <meta name='msapplication-TileColor' content='#ffffff'>
    <meta name='msapplication-TileImage' content='/images/favicon/images/ms-icon-144x144.png'>
    <meta name='theme-color' content='#ffffff'>
</head>

<?php
require($_SERVER[ 'DOCUMENT_ROOT']. '/php/db.php');

$invalidErr = '';
 
if(isset($_POST['login'])){
    if ($_POST) {

        $valid = true;

        if (empty($_POST['email'])) {
            $valid = false;
            $invalidErr = 'Please input your email.';
        } else {
            $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        }
        if (empty($_POST['password'])) {
            $valid = false;
            $invalidErr = 'Please input your Password.';
        } else {
            $password = mysqli_real_escape_string($link, $_REQUEST['password']);
        }

        if ($valid){
            $sql="SELECT * FROM patients
            WHERE email='$email' and password='$password'";

            $result=mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);

            $_SESSION['username'] = $row['first_name'];
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile_number'] = $row['mobile_number'];

            if(mysqli_num_rows($result)> 0){
                if($_SESSION['uid'] === '1'){
                    ob_end_flush(header('Location:/pages/admin/patients.php'));
                }
                else{
                    ob_end_flush(header('Location:/index.php'));
                }
            }
            else{
                $invalidErr = 'Email or Password is incorrect.';
            }
        }
    }
} ?>  

<body>
    <!-- HEADER -->
<div class='header'>
    <div class='content-container clearfix'>
        <div class='branding'>
            <a href='/index.php' title='Dreidents Dental Clinic'>
                <img src='/images/logo.jpg' alt='logo'>
            </a>
        </div>
        <div class='login_form'>
            <span style='float: right; padding-right: 10px;'><?php echo $invalidErr; ?></span>
        <?php

            if (isset($_SESSION['username'])) {
                if($_SESSION['uid'] === '1'){
                    echo " 
                        <div class='loggedname'>
                            <h2>Welcome <a href='/pages/admin/patients.php'>" . $_SESSION['username'] . "</a>!</h2>
                        </div>
                        <div class='login-links clearfix'>
                            <a href='/php/logout.php'><p>Logout</p></a>
                        </div>" ;
                    }
                
                else {
                    echo " 
                        <div class='loggedname'>
                            <h2>Welcome <a href='/php/view_profile.php?uid=". $_SESSION['uid'] ."'>" . $_SESSION['username'] . "</a>!</h2>
                        </div>
                        <div class='login-links clearfix'>
                            <a href='/php/view_profile.php?uid=". $_SESSION['uid'] ."'>View Profile</a>
                            <a href='/pages/set_appointment.php'><p>Set Appointment</p></a>
                            <a href='/php/view_appointments.php'><p>My Appointments</p></a>
                            <a href='/php/logout.php'><p>Logout</p></a>
                        </div>" ;
                }
            }
            else {
                echo " 
                    <form class='login clearfix' id='login' action='".htmlspecialchars($_SERVER['PHP_SELF'])."' method='post' accept-charset='UTF-8'> 
                        <div class='form-group'> 
                            <input type='text' class='form-control form-control-login' placeholder='Email' name='email'> 
                        </div> 
                        <div class='form-group'> 
                            <input type='password' class='form-control form-control-login' placeholder='Password' name='password'> 
                        </div> 
                        <div class='btn-login clearfix'> 
                            <button type='submit' class='btn btn-cstm' name='login'>Login</button> 
                        </div> 
                    </form> 
                    <div class='login-links clearfix'> 
                        <a href='/pages/register.php'> 
                            <p>Not yet registered?</p> 
                        </a> 
                        <a href='/pages/pwreset.php'> 
                            <p>Forgot Password?</p> 
                        </a> 
                    </div> " ;}

                ?>
        </div>
    </div>
</div>
<!-- HEADER -->