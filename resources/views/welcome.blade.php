

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="INTEGRATED MONITORING INVENTORY LEVEL STOCK | PT. VELASTO INDONESIA">
    <meta name="keywords" content="">
    <meta name="author" content="APPDEV.ID">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="https://stock.velasto-indonesia.com/assets/images/identity/dMdNYqkkvkrsAeF2uJvg.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://stock.velasto-indonesia.com/assets/images/identity/dMdNYqkkvkrsAeF2uJvg.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/forms/selects/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/fonts/meteocons/style.css">
	<link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/css/pickers/pickadate/pickadate.css">
	
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/colors.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="https://stock.velasto-indonesia.com/assets/themes/modern/css/style.css">
    <!-- END: Custom CSS-->
	
	<!-- BEGIN: Vendor JS-->
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/vendors.min.js"></script>
	<script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/tables/datatable/datatables.min.js"></script>
    <!-- BEGIN Vendor JS-->
    
	<script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/extensions/sweetalert2.all.min.js"></script>
	
	<!-- UTILITAS JS-->
	<script src="https://stock.velasto-indonesia.com/assets/js/utilities.js"></script>
	<!-- UTILITAS JS-->
	
	<script type="text/javascript" src="https://stock.velasto-indonesia.com/assets/plugins/datatables-reload/fnReloadAjax.js"></script>
	<script type="text/javascript">
    	var BASE_URL = "https://stock.velasto-indonesia.com/";
	</script>

</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- BEGIN: Navbar-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-shadow navbar-brand-center bg-gradient-radial-cyan">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
					<a class="navbar-brand" href="https://stock.velasto-indonesia.com/">
						<img class="brand-logo" alt="modern admin logo" src="https://stock.velasto-indonesia.com/assets/images/identity/dMdNYqkkvkrsAeF2uJvg.png">
                        <h3 class="brand-text nama-aplikasi-logo text-white">INTEGRATED MONITORING INVENTORY LEVEL STOCK</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">PT. MADA WIKRI TUNGGAL</span><span class="avatar avatar-online"><img src="https://stock.velasto-indonesia.com/assets/images/avatars/nbP77nd6ufzhWu3m8nLz.jpg" alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
							<!--<a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>-->
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="https://stock.velasto-indonesia.com/main/logout"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>    <!-- END: Navbar-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item menu-dashboard"><a href="https://stock.velasto-indonesia.com/"><i class="mbri-growing-chart"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
			
			<li class=" nav-item menu-material">
				<a href="https://stock.velasto-indonesia.com/vendors/material">
					<i class="mbri-extension"></i>
					<span class="menu-title" data-i18n="Dashboard">Material</span>
				</a>
            </li>
			
			<li class=" nav-item menu-countermeasure">
				<a href="https://stock.velasto-indonesia.com/vendors/countermeasure">
					<i class="mbri-calendar"></i>
					<span class="menu-title" data-i18n="Countermeasure">Countermeasure</span>
				</a>
            </li>
        </ul>
    </div>
</div>    <!-- END: Main Menu-->
	
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                
				<div id="menu-dashboard" data-id="menu-dashboard"></div>
<!-- ============================================================== -->
<!-- PLUGIN CSS OR JS ON PAGE -->
<!-- ============================================================== -->



<!-- ============================================================== -->
<!-- END - PLUGIN CSS OR JS ON PAGE -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center font-large-2 text-bold-600">PT. VELASTO INDONESIA | INTEGRATED MONITORING INVENTORY LEVEL STOCK<br>20-02-2023 09:42:06</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center bg-danger p-1">
                            <h2 class="font-large-2 text-bold-600">High Risk</h2>
                            <h2 class="font-large-2 text-bold-600">1</h2>
                            <a href="https://stock.velasto-indonesia.com/vendors/material?type=high_risk" target="_blank"><p class=" text-bold-600">Click Here for Detail...</p></a>
                        </div>
                        <div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center bg-warning p-1">
                            <h2 class="font-large-2 text-bold-600">Medium Risk</h2>
                            <h2 class="font-large-2 text-bold-600">0</h2>
                            <a href="https://stock.velasto-indonesia.com/vendors/material?type=medium_risk" target="_blank"><p class=" text-bold-600">Click Here for Detail...</p></a>
                        </div>
						<div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center bg-success p-1">
                            <h2 class="font-large-2 text-bold-600">Low Risk</h2>
                            <h2 class="font-large-2 text-bold-600">7</h2>
                            <a href="https://stock.velasto-indonesia.com/vendors/material?type=low_risk" target="_blank"><p class=" text-bold-600">Click Here for Detail...</p></a>
                        </div>
                    </div>
					<div class="row pt-1 d-none">
                        <div class="col-md-12 col-12 border-right-blue-grey border-right-lighten-5 text-center bg-gradient-radial-warning p-1">
                            <h2 class="font-large-2 text-bold-600">Belum Update</h2>
                            <h2 class="font-large-2 text-bold-600">0</h2>
                            <a href="https://stock.velasto-indonesia.com/vendors/material?status=BL" target="_blank"><p class=" text-bold-600">Click Here for Detail...</p></a>
                        </div>
                    </div>
					<div class="row pt-1">
                        <div class="col-md-12 col-12 border-right-blue-grey border-right-lighten-5 text-center bg-gradient-radial-warning p-1">
                            <h2 class="font-large-2 text-bold-600">Shortage</h2>
                            <h2 class="font-large-2 text-bold-600">1</h2>
                            <a href="https://stock.velasto-indonesia.com/vendors/material?status=NG" target="_blank"><p class=" text-bold-600">Click Here for Detail...</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>				
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://stock.velasto-indonesia.com/" target="_blank">INTEGRATED MONITORING INVENTORY LEVEL STOCK</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->
	
	<!-- BEGIN: Page Vendor JS-->
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->
	
    <!-- BEGIN: Theme JS-->
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/js/core/app-menu.js"></script>
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/js/core/app.js"></script>
    <!-- END: Theme JS-->
	
	<!-- BEGIN: Page JS-->
    <script src="https://stock.velasto-indonesia.com/assets/themes/modern/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->
	<script type="text/javascript">
            </script>
	<script type="text/javascript">
		$( document ).ready(function() {
			var menu = $("[id^=menu-]").attr('data-id');
			var submenu = $("[id^=sub-menu-]").attr('data-id');
			console.log(menu);
			console.log(submenu);
			
			if(menu === undefined)
			{
				console.log('menu tidak terdeteksi');
			}
			else
			{
				$('.'+menu).addClass(' active');
			};
			
			if(submenu === undefined)
			{
				console.log('sub menu tidak terdeteksi');
			}
			else
			{
				$('.'+submenu).addClass(' active');
			};
		});
	</script>
	
	
    

</body>
<!-- END: Body-->

</html>
