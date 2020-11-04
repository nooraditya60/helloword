<?php
	session_start();

	include("koneksi.php");
//
//	if(isset($_SESSION)){		
//
//		if($_SESSION['level'] == "admin"){
//			
//			header("location:superuserxxx/index.php");
//
//		} else if($_SESSION['level'] == "user"){		
//
//			header("location:user/index.php");
//
//
//		}	
//	}

	if(isset($_POST['login'])){					
					
		$nik	= $_POST['nik'];
		$pass	= md5($_POST['pass']);
		
		$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE nik='$nik' AND pass='$pass'");
		if(mysqli_num_rows($query) == 0){
		
		
			echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
		}else{						

			$row = mysqli_fetch_assoc($query);
			
			
			if($row['level'] == "admin"){
				$_SESSION['nik']=$nik;
				$_SESSION['level']="admin";
				
				header("location:superuserxxx/index.php");
				
			}else if($row['level'] =="user" ){
				$_SESSION['nik']=$nik;
				$_SESSION['level']="user";
			
				header("location:user/buat_kpi.php");
											
			}else{
				echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login | KPI Ku</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="register-page">
    <div class="register-box box" >
      <div class="register-logo">
      <a href="login.php"><b>KPI Ku</b></a>
      </div><!-- /.login-logo -->
	  <div align="center" class="image img-responsive" >
      <img src="assets/img/aaa.jpg" alt="User Image" width="180" height="100" align="middle" />       
      </div>
      <div class="login-box-body">            		
				      
        <form role="form" action="" method="post">
          <div class="form-group has-feedback">
            <input type="number" name="nik" class="form-control" placeholder="Nik"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Sign In" />
            </div><!-- /.col -->
          </div>
        </form>

        <?php /*?><div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><?php */?><br>
        <a href="daftar.php" class="text-center">Register a new account</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
  
</html>