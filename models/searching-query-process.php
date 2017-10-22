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
         <center><h2>Result DF, IDF, Ranking </h2></center><hr/>
		  <table class="table table-hover">
		    <thead>
		      <tr>
				<th>No</th>
				<th>Kata Dasar</th>
				<th width='15%'>Nama Dokumen</th>
				<th>Frekuensi Per Kata</th>
				<th>DF</th>
				<th>IDF</th>
				<th>History Pemanggilan</th>
				<th>Total Frekuensi per Kata</th>
				<th>DF Total</th>
				<th>IDF Total</th>
				<th>Ranking</th>
		      </tr>
		    </thead>
		    <tbody>
				<?php
					$awal = microtime(true);
					require_once __DIR__ . '/vendor/autoload.php';
					$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
					$stemmer  = $stemmerFactory->createStemmer();
					if(isset($_POST['submit'])){
					    $keyword = $_POST['keyword'];
					    if($keyword){
					        $outputs = "'" . implode("', '", preg_split('/[\s]+/', $stemmer->stem($keyword))) . "'";
					        echo "<strong> Keyword: </strong>".$keyword. "\n \n \n";
					        echo "<strong>  Kata Dasar: </strong>". $outputs. "<br/>";
					        $dbhost = 'localhost';
					        $dbuser = 'root';
					        $dbpass = '';
					        $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass,'stbi');
					        if(! $koneksi )
					        {
					            die('Gagal Koneksi: ' . mysqli_error($koneksi));
					        }

					        $tf_query = "SELECT tbs.term_stemming as term, tbs.korpus_id, count(tbs.korpus_id) as frekuensi from tb_stemming tbs ".
									    "JOIN korpus korpus ON tbs.korpus_id = korpus.namafile ".
									    "WHERE tbs.term_stemming IN ($outputs) GROUP BY tbs.term_stemming, tbs.korpus_id";
					        $result_tf = mysqli_query($koneksi, $tf_query);					        
					        $term_frequencies = mysqli_fetch_all($result_tf, MYSQLI_ASSOC);

				            $no = 0;

				            foreach($term_frequencies as $tf){
				                $sql = 'INSERT INTO tb_term_frequency'.
						               '(Term, Korpus_id, Frekuensi) '.
					                   'VALUES ("'.$tf['term'].'", "'.$tf['korpus_id'].'", "'.$tf['frekuensi'].'")';
				                mysqli_query($koneksi, $sql);
				            }

				            if ($term_frequencies){
				                // always truncate table of document frequency first
				                $truncate_df_query = 'TRUNCATE TABLE tb_document_frequency';
				                mysqli_query($koneksi, $truncate_df_query);
				                
				                // insert with new one
				                $df_query = 'SELECT term, count(Frekuensi) as DF, log( (SELECT count(namafile) from korpus) / count(Frekuensi)) as IDF from tb_term_frequency GROUP BY Term';
				                $result_df = mysqli_query($koneksi, $df_query);
				                $document_frequencies = mysqli_fetch_all($result_df, MYSQLI_ASSOC);
				                
				                foreach($document_frequencies as $df){
				                    $sql = 'INSERT INTO tb_document_frequency'.
								                    '(Term, Df, Idf) '.
								                    'VALUES ("'.$df['term'].'", "'.$df['DF'].'", "'.$df['IDF'].'")';
				                    mysqli_query($koneksi, $sql);
				                }
				                
				                // always truncate table of ranking per terms first
				                $truncate_rd_query = 'TRUNCATE TABLE tb_ranking_term';
				                mysqli_query($koneksi, $truncate_rd_query);
				                
				                // process to set ranking per terms
				                $rank_query_per_terms = 'SELECT tf.Term as Term, tf.Korpus_id as Korpus_id, (tf.Frekuensi * df.Idf) as Ranking '.
								                'FROM tb_term_frequency tf JOIN tb_document_frequency df ON tf.term = df.Term';
				                $ranking_terms = mysqli_fetch_all(mysqli_query($koneksi, $rank_query_per_terms), MYSQLI_ASSOC);
				                
				                foreach($ranking_terms as $rank_term){
				                    $sql = 'INSERT INTO tb_ranking_term'.
								                    '(Term, Korpus_id, Ranking) '.
								                    'VALUES ("'.$rank_term['Term'].'", "'.$rank_term['Korpus_id'].'", "'.$rank_term['Ranking'].'")';
				                    mysqli_query($koneksi, $sql);
				                }
				                
				                // always truncate table of ranking document first
				                $truncate_trd_query = 'TRUNCATE TABLE tb_ranking_document';
				                mysqli_query($koneksi, $truncate_trd_query);
				                
				                // process to set ranking per document
				                $rank_query_per_doc = 'SELECT SUM(ranking) as Ranking, Korpus_id FROM tb_ranking_term GROUP BY korpus_id';
				                $ranking_documents = mysqli_fetch_all(mysqli_query($koneksi, $rank_query_per_doc), MYSQLI_ASSOC);
				                
				                foreach($ranking_documents as $rank_doc){
				                    $sql = 'INSERT INTO tb_ranking_document'.
								                    '(Document_id, Ranking) '.
								                    'VALUES ("'.$rank_doc['Korpus_id'].'", "'.$rank_doc['Ranking'].'")';
				                    mysqli_query($koneksi, $sql);
				                }
				            }

				            $final = "SELECT ttf.term as 'Kata Dasar', ttf.Frekuensi as 'Frekuensi Per Term', count(ttf.Korpus_id) as 'Frekuensi Per Record', ttf.Frekuensi * count(ttf.Frekuensi) as 'Total Frekuensi', ttf.Korpus_id as 'Nama Dokumen', (tdf.Df / count(ttf.Korpus_id))  as 'DF', (tdf.Idf / count(ttf.Korpus_id)) as 'IDF', tdf.Df as 'Dokumen Frekuensi Total', tdf.Idf as 'Inverse Dokumen Frekuensi Total', ".
				                     "(trr.Ranking * tdf.Df) As 'Ranking' ".
				                     "FROM tb_term_frequency ttf ".
                                     "JOIN tb_document_frequency tdf ON tdf.Term = ttf.Term ".
                                     "JOIN tb_ranking_term trr ON trr.Term = ttf.Term ".
                                     "WHERE ttf.Term IN ($outputs) ".
                                     "GROUP BY ttf.Term, ttf.Korpus_id";
				            $final_per_words = mysqli_query($koneksi, $final);
				            foreach($final_per_words as $fpw){
				                $warna = "#DFE3FF";
				                if($warna=="#DFE3FF"){$warna="#ffffff";}else{$warna="#DFE3FF";}
				                $no++;
				                echo "<tr align='center' bgcolor='$warna' class='col'>
										<td>$no</td>
										<td>".$fpw['Kata Dasar']."</td>
                                        <td width='15%'>".$fpw['Nama Dokumen']."</td>
										<td>".$fpw['Frekuensi Per Term']."</td>
                                        <td>".number_format($fpw['DF'], 2)."</td>
                                        <td>".number_format($fpw['IDF'], 2)."</td>
                                        <td>".$fpw['Frekuensi Per Record']."</td>
                                        <td>".$fpw['Total Frekuensi']."</td>
                                        <td>".number_format($fpw['Dokumen Frekuensi Total'], 2)."</td>
                                        <td>".number_format($fpw['Inverse Dokumen Frekuensi Total'], 2)."</td>
                                        <td>".number_format($fpw['Ranking'], 2)."</td>
									</tr>";
				            }
// 				            foreach($outputs as $word){



//         					    if (!$result_tf){
//         					        continue;
//         					    }

//         					    $term_frequencies = mysqli_fetch_all($result_tf, MYSQLI_ASSOC);
					    





// 				            }

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