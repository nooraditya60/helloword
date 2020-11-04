   
      
      <?php
				if(isset($_POST['login'])){
					include("koneksi.php");
					
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
							header("Location: superuser/index.php");
						}else if($row['level'] =="user" ){
							$_SESSION['nik']=$nik;
							$_SESSION['level']="user";
							header("Location: user/index.php");
						}else{
							echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
						}
					}
				}
				?>
				
      