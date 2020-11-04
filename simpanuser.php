
        <?php 
		// https://www.malasngoding.com
		// menghubungkan koneksi database
		include 'koneksi.php';
	           
            if ($_POST['pass']==$_POST['pass2'] ) {
        //proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password 
        		 	
			}else {
			echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
			}
			
		// menangkap data dari form
		$nik = $_POST['nik'];
		$username = $_POST['username'];
		$pass = md5($_POST['pass']);
		$pass_md5 = md5($pass);
		$pass2 = md5($_POST['pass2']);
		$pass_md5 = md5($pass2);
		$level	= $_POST['level'];
		 
		// menginput data ke table barang
		 
		$hasil = mysqli_query($koneksi,"INSERT INTO tbl_user VALUES ( '$nik', '$username', '$pass','$pass2','$level')");
		if ($hasil) {
		
		//	mysqli_query($koneksi,"INSERT INTO users VALUES ('$id', '$username', '$pass','$pass2','$email','$level')")or die(mysqli_error($koneksi));
		// if ($query_query) {
   		//Jika Sukses
    ?>
    
    	<script language="JavaScript">
    		alert('Pendaftaran Berhasil Silahkan Login!');
			window.location='login.php';
    	</script>
     
    <?php
	//echo "Pendaftaran Berhasil :( Silahkan Login!";
	//echo '<div class="alert alert-info">Silahkan Login!.</div>';
    }
    else {
    //Jika Gagal
    //echo "Pendaftaran Gagal :( Silahkan Coba Kembali!";
	echo '<div class="alert alert-danger">Upss...!!! Pendaftaran gagal.</div>';
    }
	
	//Tutup koneksi engine MySQL
    //mysql_close($Open);
    header("location:daftar.php");
		?>
      