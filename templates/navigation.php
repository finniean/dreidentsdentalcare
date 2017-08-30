<!-- NAVIGATION -->
<div class="navigation">
	<div class="content-container">
	<!-- Mobile Navigation -->
    <nav id="nav-mobile" class="navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-bar">
					<p>Menu</p>
                </button>
            </div>
            <div class="collapse navbar-collapsed" id="nav-bar">
                <ul class="nav navbar-nav">
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="testimonials.php">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="dentists.php">DENTISTS</a>
                </li>
                <li>
                    <a href="location.php">CLINIC</a>
                </li>
                <li>
                    <a href="404.php">SERVICES</a>
                </li>
                </ul>
            </div>
    </nav>
	<!-- Desktop Navigation -->
	<nav id="nav-regular" class="navbar" role="navigation">
            <div class="navbar-content">
                <ul class="nav">
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="testimonials.php">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="dentists.php">DENTISTS</a>
                </li>
                <li>
                    <a href="location.php">CLINICS</a>
                </li>
                <li>
                    <a href="404.php">SERVICES</a>
                </li>
                </ul>
            </div>
    </nav>
	</div>
</div>
<script>
var selector = '.nav li';
    var url = window.location.href;
    var target = url.split('/');
     $(selector).each(function(){
        if($(this).find('a').attr('href')===(''+target[target.length-1])){
          $(selector).removeClass('active');
          $(this).addClass('active');
        }
     });
</script>
<!-- NAVIGATION -->