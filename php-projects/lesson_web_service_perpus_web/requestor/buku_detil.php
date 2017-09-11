<?php
	include '../lesson_web_service_perpus_web/conn/koneksi.php';
?>
<!-- menu tengah -->
<div id="menu-tengah">
	<div id="bg_menu">Data Buku</div>
	<table class="table table-bordered">
		<thead>
			<tr><th colspan="3" align="right">Detail Buku</th></tr>
		</thead>
		<?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query=mysql_query("SELECT * FROM tbl_buku WHERE judul='".htmlspecialchars($judul, ENT_QUOTES)."'", $konek);
			$data=mysql_fetch_array($query);
			
			?> 
		<tbody>
			<tr>
                	<td width="15%">Judul Buku</td>
                    <td width="3%" align="center">:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td >Pengarang</td>
                    <td align="center">:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td >Penerbit</td>
                    <td align="center">:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td>Tahun Terbit</td>
                    <td align="center">:</td>
                    <td><?php echo $data[4]; ?></td>
                </tr>
                <tr>
                	<td>Jumlah Buku</td>
                    <td align="center">:</td>
                    <td><?php echo $data[5]; ?></td>
                </tr>
                <tr>
                	<td>Lokasi</td>
                    <td align="center">:</td>
                    <td><?php echo $data[6]; ?></td>
                </tr>
                <tr>
                	<td>Tanggal Input</td>
                    <td align="center">:</td>
                    <td><?php echo $data[7]; ?></td>
                </tr>
                <tr>
                    <td colspan="3"><a href="?page=buku">Kembali</td>
                </tr>
		</tbody>
	</table>
</div>