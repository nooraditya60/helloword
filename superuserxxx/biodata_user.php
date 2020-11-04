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
    <title>DiAmplopinAja</title>
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
    <![endif]--></head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>Di</b>Amplopin Aja</a>
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
                  <img src="dist/img/adit.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Mahfudin Aditya Noor</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/adit.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Mahfudin Aditya Noor - CEO DiAmplopin Aja
                      <small>Member since Sept. 2020</small>
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
              <img src="dist/img/adit.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Mahfudin Aditya Noor</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>User+</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="seluruh_user.php"><i class="fa fa-circle-o"></i> Seluruh</a></li>
                <li><a href="menambah_user.php"><i class="fa fa-circle-o"></i> Menambah User</a></li>
                <li><a href="kelola_user.php"><i class="fa fa-circle-o"></i> Kelola User</a></li>
                <li class="active"><a href="biodata_user.php"><i class="fa fa-circle-o"></i> Biodata User</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-money"></i> <span>Donasi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="seluruh_donasi.php"><i class="fa fa-circle-o"></i> Seluruh</a></li>
                <li><a href="jumlah_donasi.php"><i class="fa fa-circle-o"></i> Jumlah Donasi</a></li>
                <li><a href="nama_pendonasi.php"><i class="fa fa-circle-o"></i> Nama Pendonasi</a></li>
              </ul>
            </li>
          
            <li class="treeview">
              <a href="contact.php">
                <i class="fa fa-phone"></i>
                <span>Contact</span>
              </a>
            </li>
            </ul>
            
            <li class="treeview">
              <a href="profil.php">
                <i class="fa fa-gears"></i>
                <span>Profil</span>
              </a>
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
            DiAmplopin Aja
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
          </ol>
        </section>





        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>trideh@ada.com</td>
                        <td>sama1</td>
                        <td>sama1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>webkit@iya.com</td>
                        <td>sama2</td>
                        <td>sama2</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Presto@a.com</td>
                        <td>sama3</td>
                        <td>sama3</td>
                        <td>A<sup>1</sup></td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>KHTML@k.com</td>
                        <td>sama4</td>
                        <td>sama4</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>tasman@s.com</td>
                        <td>sama5</td>
                        <td>sama5</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>misc@aa.com</td>
                        <td>sama6</td>
                        <td>sama6</td>
                        <td>C</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->




      <footer> 
      	<div class="callout callout-info">
       	  <div class="pull-right hidden-xs">
          	<b>DiAmplopin Aja</b> 1.0
       	  </div>
        <strong>Aplikasi DiAmplopin Aja_</strong> All rights reserved.
        </div>	
      </footer>



    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>




  </body>
</html>