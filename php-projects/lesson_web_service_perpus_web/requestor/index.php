<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Perpustakaan Fakultas Teknologi Informasi Unisbank</title>
<!--bootstrap-->
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--javascript-->
<script src="../assets/jquery/jquery-3.1.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="../assets/custom.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
<!-- menu utama-->
<div id="main">
	<!-- menu Header -->
    <div id="header">
		<h3 style="text-align:center">Selamat Datang di Sistem Informasi Perpustakaan</h3>
		<h3 style="text-align:center">Fakultas Teknologi Informasi Universitas Stikubank Semarang</h3>
    </div>
    
<nav class="navbar navbar-inverse" style="background-color:#FFA500;border:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<li><a href="index.php" style="color:black"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="?page=buku" style="color:black">Buku</a></li>
		<li><a href="?page=transaksi" style="color:black">Transaksi</a></li>
		<li><a href="?page=laporan" style="color:black">Laporan</a></li>
		<li><a href="../logout.php" style="color:black">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{						
						// transaksi
						case "transaksi";
						include "../transaksi_data.php";
						break;
						case "transaksi_input";
						include "../transaksi_input.php";
						break;
						case "transaksi_proses";
						include "../transaksi_proses.php";
						break;
						case "transaksi_search";
						include "../transaksi_search.php";
						break;
						case "transaksi_proses_kembali";
						include "../transaksi_proses_kembali.php";
						break;
						case "transaksi_proses_perpanjang";
						include "../transaksi_proses_perpanjang.php";
						break;
						
						// menu buku
						case "buku";
						include "buku_data.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "detil_buku";
						include "buku_detil.php";
						break;
						
						// menu laporan
						case "laporan";
						include "../laporan.php";
						break;
						
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
<!-- menu Footer -->
<footer class="container-fluid text-left" style="background-color:#FF8C00;width:950px">
	<div class="col-sm-12 text-center" >
			<p>&copy; Sistem Informasi Perpustakaan 2017 || created by Rizka Fitriani Hadi, Agnes Oka Rosalin, Rezky Febriani || klp:B2</p>  
		</div>
</footer>
</body>
</html>

<?php ?>