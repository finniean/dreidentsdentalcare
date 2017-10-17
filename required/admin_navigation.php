<!-- NAVIGATION -->
<div class='navigation'>
	<div class='content-container'>
	<!-- Mobile Navigation -->
    <nav id='nav-mobile' class='navbar' role='navigation'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#nav-bar'>
					<p>Menu</p>
                </button>
            </div>
            <div class='collapse navbar-collapsed' id='nav-bar'>
                <ul class='nav navbar-nav'>
                <li>
                    <a href='/pages/admin/patients.php'>PATIENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/current_appointments.php'>CURRENT APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/check_appointments.php'>SEARCH APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/set_appointment.php'>SET APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/register.php'>REGISTER PATIENT</a>
                </li>
                <li>
                    <a href='/pages/admin/reports.php'>REPORTS</a>
                </li>
                </ul>
            </div>
    </nav>
	<!-- Desktop Navigation -->
	<nav id='nav-regular' class='navbar' role='navigation'>
            <div class='navbar-content'>
                <ul class='nav'>
                <li>
                    <a href='/pages/admin/patients.php'>PATIENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/current_appointments.php'>CURRENT APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/check_appointments.php'>SEARCH APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/set_appointment.php'>SET APPOINTMENTS</a>
                </li>
                <li>
                    <a href='/pages/admin/register.php'>REGISTER PATIENT</a>
                </li>
                <li>
                    <a href='/pages/admin/reports.php'>REPORTS</a>
                </li>
                </ul>
            </div>
    </nav>
	</div>
</div>
<script>
var adminselector = '.nav li';
    var url = window.location.href;
    var target = url.split('/pages/admin/');
     $(adminselector).each(function(){
        if($(this).find('a').attr('href')===('/pages/admin/'+target[target.length-1])){
          $(adminselector).removeClass('active');
          $(this).addClass('active');
        }
     });
</script>
<!-- NAVIGATION -->