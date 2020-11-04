<?php
session_start();
if(empty($_SESSION)){
	header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>KPI Ku</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>KPI Ku</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar04.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php //echo $_SESSION['nik']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/avatar04.png" class="img-circle" alt="User Image"/>
                    <p>
                      <?php //echo $_SESSION['nik']; ?>
                      <small>Member since 2020</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar04.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php //echo $_SESSION['nik']; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
         <?php
//          <form action="#" method="get" class="sidebar-form">
//            <div class="input-group">
//             <input type="text" name="q" class="form-control" placeholder="Search..."/>
//              <span class="input-group-btn">
//                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
//              </span>
//            </div>
//          </form>
          ?>
		  <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <li class="active treeview">
                <ul class="treeview-menu">
              	<li class="active"><a href="buat_kpi.php"><i class="fa fa-user"></i> Buat KPI</a></li>
            </ul>
            </li>
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            KPI Ku
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">KPI Ku</li>
          </ol>
        </section>
	

        <!-- Main content -->
        <div class="content body">
  <?php /*?><div class="callout callout-warning">
            <h4>Perhatian!</h4>
            Ketika Menekan Tombol Simpan Campaign, Secara Otommais Akan Mendapatkan Link dan QRcode agar dapat disebarkan keteman lainnya.
  </div><?php */?>    
      
      
      
      
      <?php 
	  include	"multiinput.php";
	  
	  ?>
      
      <br>
      <br>
      
      
      <?php 
	  include	"lihat_kpi.php";
	  
	  ?>
    
    
    
    	</div>  
	<?php
    //<footer> 
//      	<div class="callout callout-info">
//       	  <div class="pull-right hidden-xs">
//          	<b>KPI Ku</b> 1.0
//       	  </div>
//        <strong>Aplikasi KPI Ku_</strong> All rights reserved.
//        </div>	
//      </footer>
	?>

      <p>
        <!-- jQuery 2.1.3 -->
          <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
          <!-- Bootstrap 3.3.2 JS -->
          <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
          <!-- FastClick -->
          <script src='plugins/fastclick/fastclick.min.js'></script>
          <!-- AdminLTE App -->
          <script src="dist/js/app.min.js" type="text/javascript"></script>
          <!-- Sparkline -->
          <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
          <!-- jvectormap -->
          <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
          <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
          <!-- daterangepicker -->
          <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
          <!-- datepicker -->
          <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
          <!-- iCheck -->
          <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
          <!-- SlimScroll 1.3.0 -->
          <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
          <!-- ChartJS 1.0.1 -->
          <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
        
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>
        
          <!-- AdminLTE for demo purposes -->
          <script src="dist/js/demo.js" type="text/javascript"></script>
     
</body>
</html>