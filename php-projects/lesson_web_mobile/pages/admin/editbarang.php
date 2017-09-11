<?php 
    include "../../koneksi.php";

    $kode_barang = $_POST['rowid'];
    $query ="SELECT * FROM tbl_m_barang WHERE kode_barang='$kode_barang'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
  ?>
    <form id="edit-barang" method="post" action="pages/admin/proses-ubah.php?kode_barang=<?php echo $kode_barang; ?>" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?php echo $data['nama_barang'] ?>"/>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="spek" id="spek"  ><?php echo $data['spek'] ?></textarea>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="stok" id="stok" value="<?php echo $data['stok'] ?>" />
      </div>
      <div class="row">
        <div class="col-sm-9">
          <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga'] ?>" />
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-group form-control" name="diskon" id="diskon" value="<?php echo $data['diskon'] ?>" />
        </div>
      </div>
      <div class="form-group">
        <select class="form-control" id="kode_kategori_barang" name="kode_kategori_barang">
          <option value=1 <?php if ($data['kode_kategori_barang']== 1){?> selected <?php } ?>>Iphone</option>
          <option value=2 <?php if ($data['kode_kategori_barang']== 2){?> selected <?php } ?>>Laptop</option>
          <option value=3 <?php if ($data['kode_kategori_barang']== 3){?> selected <?php } ?>>TV</option>
          <option value=4 <?php if ($data['kode_kategori_barang']== 4){?> selected <?php } ?>>Kamera</option>
        <select/>
      </div>
      <div class="form-group">
        <input type="checkbox"  name="ubah_foto" id="ubah_foto"  value="true" /> Ceklis jika ingin mengubah foto <br />
        <input type="file"  name="foto" id="foto" />
      </div>
      <div class="form-group">
        <input type="submit" class="form-control btn btn-success" value="Simpan" name="simpan"  />
      </div>
    </form>