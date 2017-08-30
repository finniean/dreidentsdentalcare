<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	<script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/jan.css">
	<link rel="stylesheet" href="/css/ddcstyleresponsive.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<!-- HEADER -->
<div class="header">
    <div class="content-container clearfix">
        <div class="branding">
            <a href="home.php" title="Dreidents Dental Clinic">
                <img src="/images/logo.jpg" alt="logo">
            </a>
        </div>
        <form class="login clearfix" id='login' action='/includes/login.php' method='post' accept-charset='UTF-8'>
            <div class="form-group">
                <input type="text" class="form-control form-control-login" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-login" placeholder="Password" name="password">
            </div>
            <div class="btn-login clearfix">
                <button type="submit" class="btn btn-cstm">Login</button>
            </div>
        </div>
        <div class="login-links clearfix">
                <a href="register.php">
                    <p>Not yet registered?</p>
                </a>
				<a href="pwreset.php">
                    <p>Forgot Password?</p>
                </a>
        </div>
    </form>
</div>
<!-- HEADER -->