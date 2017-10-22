<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Retrieval System Informations</title>

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Stylesheets -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/reset/reset.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/bootstrap/bootstrap.min.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/jquery.filer.css?v=1.3.0"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/themes/jquery.filer-dragdropbox-theme.css?v=1.3.0"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/prettify/tomorrow.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/custom.css?v=1.3.0"> -->

    <!-- Scripts -->
<!--     <script src="http://filer.grandesign.md/js/jquery/jquery.min.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/bootstrap.min.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/jquery.filer.js?v=1.3.0" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/prettify.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/scripts.js?v=1.3.0" type="text/javascript"></script> -->
<!--     <script src="./static/src/js/custom.js" type="text/javascript"></script> -->

	<!-- Offline Mode -->
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/reset.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/jquery.filer.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/jquery.filer-dragdropbox-theme.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/tomorrow.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/custom.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	    <script src="./static/src/js/vendor/jquery.min.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/bootstrap.min.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/jquery.filer.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/prettify.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/scripts.js" type="text/javascript"></script>
	    <script src="./static/src/js/custom.js" type="text/javascript"></script>
    <!-- -->

	<style type="text/css">
		table {
		  border-collapse: separate;
		  border-spacing: 0 5px;
		}
		
		thead th {
		  background-color: #006DCC;
		  color: white;
		}
		
		tbody td {
		  background-color: #EEEEEE;
		  color: black;
		}
		
		tr td:first-child,
		tr th:first-child {
		  border-top-left-radius: 6px;
		  border-bottom-left-radius: 6px;
		}
		
		tr td:last-child,
		tr th:last-child {
		  border-top-right-radius: 6px;
		  border-bottom-right-radius: 6px;
		}
		.col:hover{background-color:#FF0; cursor:pointer;}
	</style>
</head>
<body>
<section id="home-section">
   <div class="home-inner row">
      <div class="col-md-6">
         <h1 id="plugin-name" class="font-title">Retrieval System Informations</h1>
         <p id="plugin-description">Kumpulan Tugas / Demo dari Mata Kuliah Sistem Temu Kembali Informasi <hr> List of Tasks / Demo by Lesson Class Information Retrieval System</p>
      </div>
   </div>
   <div class="home-faceimg"></div>
</section>
<section id="section1" class="section-white">
   <div class="container">
      <div class="row">
      	 <div class="col-md-4">
      	 	<?php
      	 		$url = "../index.html";
      	 		echo '<a class="btn-custom green" href="' . $url . '">Back</a>';
      	 	?>
      	 </div>
         <div class="col-md-12">
         <center><h2>Alogirtma Nazief & Adriani Stemming: </h2></center><hr/>
		  <table class="table table-hover">
		    <thead>
		      <tr>
				<th>No</th>
				<th>Token</th>
				<th>Kata Dasar</th>
		      </tr>
		    </thead>
		    <tbody>
				<?php
					$awal = microtime(true);
					$path_lib_pdftotext = "../models/class.pdf2text.php";
					require_once __DIR__ . '/vendor/autoload.php';
					include($path_lib_pdftotext);
					$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
					$stemmer  = $stemmerFactory->createStemmer();
					$pdf2text = new PDF2Text();
					if(isset($_POST['submit'])){
					    $files_by_path = $_FILES['uploaded-file']['tmp_name'];
					    $files_by_name = $_FILES['uploaded-file']['name'];
					    $filename = "";
					    $file = null;

					    if($files_by_name && $files_by_path){
					        foreach($files_by_name as $file){			            
					            $filename = $file;
					        }
					        foreach ($files_by_path as $file){
					            $file = $file;
					        }
// 					        $text = (new Pdf())->setPdf($file)->text();
					        $pdf2text->setFilename($file);
					        $pdf2text->decodePDF();
					        $parsed = $pdf2text->output();
					        $getcontent = $parsed;
					        $someWords  = strtolower($getcontent);
					        /* ini proses insert ke tabel korpus */
					        $dbhost = 'localhost';
					        $dbuser = 'root';
					        $dbpass = '';
					        $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass,'stbi');
					        if(! $koneksi )
					        {
					            die('Gagal Koneksi: ' . mysqli_error($koneksi));
					        }
					        $sql = 'INSERT INTO korpus '.
									        '(namafile, pathfile, isi) '.
									        'VALUES ("'.$filename.'", "'.$file.'", "'.$someWords.'")';
					        mysqli_query($koneksi, $sql);
				            $wordChunks = preg_split('/[\s]+/', $someWords);				            
				            $no = 0;
				            /* Tokenize, Stopword Removal & Stemming Process */
				            foreach($wordChunks as $word){
				                $warna = "#DFE3FF";
				                if($warna=="#DFE3FF"){$warna="#ffffff";}else{$warna="#DFE3FF";}
				                $no++;
				                // insert to tabel token
				                $sql1 = 'INSERT INTO tb_token '.
								                '(korpus_id, term) '.
								                'VALUES ("'.$filename.'", "'.$word.'")';
				                $output = $stemmer->stem($word);
				                mysqli_query($koneksi, $sql1);
				                // insert to tabel stemming
				                $sql2 = 'INSERT INTO tb_stemming '.
								                '(korpus_id, term_token, term_stemming) '.
								                'VALUES ("'.$filename.'", "'.$word.'", "'.$output.'")';
				                mysqli_query($koneksi, $sql2);
    				            echo "<tr align='center' bgcolor='$warna' class='col'>
    											<td>$no</td>
    											<td>".$word."</td>
    											<td>".$output."</td>
    										</tr>";
				            }
					        /* Selesai */
					    }
					}
					$akhir = microtime(true);
					mysqli_close($koneksi);
				?>
		    </tbody>
		  </table><hr/>
		 <b><center><?php $lama = $akhir-$awal; echo "Lama Proses Stemming : $lama detik"; ?></center></b>
         </div>
      </div>
   </div>
</section>
</body>
</html>