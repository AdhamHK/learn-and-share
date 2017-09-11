<?php 
	$path_header_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/header.html";
	include($path_header_file);
?>
<?php 
    include "koneksi.php";
    session_start();

    if(@$_SESSION['id_pegawai']){
        header('location:index.php');   
    }
?>
<body>
<?php
	$path_navigation_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/navigation.html";
	include($path_navigation_file);
?>
<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>Login</h3>
			<form class="login-form" method="POST">
			<?php
				if(isset($_POST['signin'])){
					$username = mysqli_real_escape_string($koneksi, $_POST['nama_pegawai']);
					$password = mysqli_real_escape_string($koneksi, $_POST['password']);

					$query = "select * from tb_pegawai where nama_pegawai = '$username'";
					$hasil = mysqli_query($koneksi, $query);        
					$row = mysqli_fetch_array($hasil);
					$id_pegawai = $row['id_pegawai'];
					if($row['nama_pegawai']==$username AND $row['password'] == $password AND $row['id_hak']==1){
						$_SESSION['id_pegawai']=$id_pegawai;
						echo "<script>window.location='admin_index.php'</script>";
					} elseif($row['status']=="Tidak Aktif") {
						echo "<div class='alert alert-danger' role='alert'>Username anda di non aktifkan!</div>";
					}else{
						echo "<div class='alert alert-danger' role='alert'>Username Atau Password Salah</div>";
					}
				}
			?>
				<div class="key">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input  type="text" name="nama_pegawai" placeholder="username">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input  type="password" name="password" placeholder="password">
					<div class="clearfix"></div>
				</div>
				<input type="submit" name="signin" value="Login">
			</form>
		</div>
		<div class="forg">
			<a href="#" class="forg-left">Forgot Password</a>
			<a href="register.html" class="forg-right">Register</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	$path_footer_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/footer.html";
	include($path_footer_file);
?>
</body>