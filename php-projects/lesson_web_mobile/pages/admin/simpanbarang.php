<?php 
    include "../../koneksi.php";

    $nama_barang = $_POST['nama_barang'];
    $spek = $_POST['spek'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];
    $kode_kategori_barang = $_POST['kode_kategori_barang'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    $fotobaru = date('dmYHis').$foto;

    $path = "../../gambar/".$fotobaru;
    if(move_uploaded_file($tmp, $path)){
        $query = "INSERT INTO tbl_m_barang (nama_barang, spek, stok, harga, diskon, kode_kategori_barang, foto) 
                  VALUES ('$nama_barang','$spek','$stok','$harga',
                    '$diskon', '$kode_kategori_barang','$fotobaru')";
        $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

        if($sql){
            echo '<script>alert("Data Tersimpan !")</script>';
            header('location:../../index.php?cat=admin&page=list-barang'); 
            // echo "<meta http-equiv='refresh' content='0; url=?cat=admin&page=list-barang>";
            // echo "<script>window.location.href = '/?cat=admin&page=list-barang';</script>";
            //  echo "<script>window.open('/?cat=admin&page=list-barang');</script>";
        } else {
            echo '<script>alert("Maaf, Terjadi kesalahan saat mencoba untuk menyimpan ke database!")</script>';
            header('location:../../index.php?cat=admin&page=list-barang'); 
            // echo "<meta http-equiv='refresh' content='0; url=list-barang.php>";
        }
    } else {
        echo '<script>alert("Gambar gagal untuk di upload !")</script>';
        header('location:../../index.php?cat=admin&page=list-barang'); 
        // echo "<meta http-equiv='refresh' content='0; url=list-barang.php>";
    }
    

?>
