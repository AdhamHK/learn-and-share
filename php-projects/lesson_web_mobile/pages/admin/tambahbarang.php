

<div id="TambahBarang" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Barang</h4>
      </div>
      <div class="modal-body">
        <form id="tambah-barang" method="post" action="pages/admin/proses-simpan.php" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required />
          </div>
          <div class="form-group">
            <textarea class="form-control" name="spek" id="spek" placeholder="Spesifikasi" required ></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" required />
          </div>
          <div class="row">
            <div class="col-sm-9">
              <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" required />
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-group form-control" name="diskon" id="diskon" placeholder="Diskon" required />
            </div>
          </div>
          <div class="form-group">
            <select class="form-control" id="kode_kategori_barang" name="kode_kategori_barang">
              <option value=1>Iphone</option>
              <option value=2>Laptop</option>
              <option value=3>TV</option>
              <option value=4>Kamera</option>
            <select/>
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="foto" id="foto"  required />
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" value="Simpan" name="simpan"  />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="submit" class="btn btn-success" id="btnSimpan" href="proses-simpan.php"><span class="glyphicon glyphicon-floppy-saved">&nbsp;Simpan</span></button>-->
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-off">&nbsp;Close</span></button>
      </div>
    </div>

  </div>
</div>