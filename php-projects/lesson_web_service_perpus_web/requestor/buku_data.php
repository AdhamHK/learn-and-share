<?php
	include '../lesson_web_service_perpus_web/conn/koneksi.php';
?>
  
<!-- menu tengah -->
<div id="menu-tengah">
	<div id="bg_menu">Data Buku</div>
    <div id="menu_header">
        <form action="?page=buku_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid  #778899;">
            	<tr>
                	<td width="50%"></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="50" placeholder="Judul Buku, Pengarang"></td>
                    <td><input type="submit" id="submit" value="cari"></td>
                </tr>
            </table>
        </form>    
    </div>
	
   	<table class="table table-striped">
   	        <thead>
   	          <tr>
   	            <th width="5%">No</th>
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
              </tr>
			</thead>
            <?php
				$query = "SELECT * FROM tbl_buku ORDER by judul";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
					$judul=$data['judul'];
			?>
   	        <tbody>
   	          <tr>
   	            <td><?php echo $no; ?></td>
   	            <td><a href="?page=detil_buku&judul=<?php echo htmlspecialchars($judul, ENT_COMPAT); ?>" class="detil"><?php echo htmlspecialchars($judul, ENT_COMPAT); ?></a></td>
   	            <td><?php echo $data['pengarang']; ?></td>
   	            <td><?php echo $data['penerbit']; ?></td>
   	            <td><?php echo $data['jumlah_buku']; ?></td>
              </tr>
				<?php $no++; } ?>
            </tbody>
    </table>
         
    <div id="menu_bottom">
		<table width="100%" style="border:0px solid #9cc;">
            <tr>
                <td width="50%">Jumlah : <?php echo $total; ?> buku</td>        
            </tr>
        </table>
	</div>
</div>