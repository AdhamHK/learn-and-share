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
           		include '../lesson_web_service_perpus_web/conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tbl_buku where judul like '%$cari%' OR pengarang like '%$cari%' ";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
			<tbody>
   	          <tr>
   	            <td><?php echo $no; ?></td>
   	            <td><a href="?page=detil-buku&judul=<?php echo $data['judul']; ?>" class="detil"><?php echo $data['judul']; ?></a></td>
   	            <td><?php echo $data['pengarang']; ?></td>
   	            <td><?php echo $data['penerbit']; ?></td>
   	            <td><?php echo $data['jumlah_buku']; ?></td>
              </tr>
            </tbody>
            <?php $no++; } ?> 
           
   	</table>
	<div id="menu_bottom">
		<table width="100%" style="border:0px solid #9cc;">
            <tr>
                <td width="50%">Jumlah : <?php echo $total; ?> buku</td>        
            </tr>
        </table>
	</div>
</div>