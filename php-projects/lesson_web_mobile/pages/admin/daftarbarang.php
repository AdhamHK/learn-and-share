<?php 
    include "koneksi.php";
    session_start();
	
?>

<?php 
	$path_header_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/header.html";
	include($path_header_file);
?>
<body>
<?php
	$path_navigation_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/navigation.html";
	include($path_navigation_file);
?>
<div class="daftarbarang">
	<div class="main-agileits">
		<div class="form-w3agile">
		<div class="container">
        <div class="row">
			<div class="col-sm-12">&nbsp;</div>
		</div>
        
        <div class="panel panel-default">
            <div class="panel-heading">Data Barang
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#TambahBarang"><span class="hyper hyper-plus">&nbsp;Tambah Produk</span></a>
                <br />
                <br />
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover dt-responsive display nowrap" cellspacing="0" width="100%"class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query = "SELECT a.*, b.id_kategori FROM tb_pakaianwanita as a INNER JOIN tb_kategori as b ON a.kategori_pw = b.id_kategori ";
                                $sql = mysqli_query($koneksi, $query);
                                $no = 1;
                                while($data = mysqli_fetch_array($sql)){
                                    echo "<tr>";
                                    echo "<td>".$no++."</td>";
                                    echo "<td><img src='gambar/".$data['gambar']."' width='100' height='200'/></td>";
                                    echo "<td>".$data['kategori_pw']."</td>";
                                    echo "<td>".$data['nama_pw']."</td>";
                                    echo "<td>".$data['stok']."</td>";
                                    echo "<td>".$data['harga']."</td>";
                                    echo "<td>".$data['spesifikasi']."</td>";
                                    
                            ?>
                                <td>
                                    <a href="#myModal" data-id="<?php echo $data['id_pw'] ?>" class="ubah" data-toggle="modal" ><span class="hyper hyper-edit"></span>Edit</a>
                                    <a href="proses-hapus.php?id_pw=<?php echo $data['id_pw'] ?>" title="Hapus Data" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')"><span class="hyper hyper-remove-circle"></span>Hapus</a>
                                    <a href="detail.php?id_pw=<?php echo $data['id_pw'] ?>" title="Lihat Detail" ><span class="hyper hyper-eye-open"></span>lihat</a>|
                                
                                </td>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>  
                </div>                   
            </div>
        </div>
	</div>

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        // var table = $('#example').DataTable( {
        //     rowReorder: {
        //         selector: 'td:nth-child(3)'
        //     },
        //     responsive: true
        // } );
        $('#example').DataTable();
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'pages/admin/editbarang.php',
                data :  'rowid='+ rowid,
                success : function(data){
                    console.log(data);
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    } );
    
</script>
<?php 
    include "tambahbarang.php";
?>
<br />
<br />
<br /><br /><br /><br /><br /><br /><br />
</div>
</div>
<?php
	$path_footer_file = $_SERVER['DOCUMENT_ROOT'] . "/php-project-rizkahadi/lesson_web_mobile/setup/footer.html";
	include($path_footer_file);
?>
</body>