<?php 

$no_rekening = $_POST['no_rekening'];
$id_tiket = $_POST['id_tiket'];
$id_pembeli = $_POST['id_pembeli'];
$id_admin = $_POST['id_admin'];
$nama_bank = $_POST['nama_bank'];
$alamat = $_POST['alamat'];


include '../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO transaksi VALUES('$no_rekening','$id_tiket',
'$id_pembeli','$id_admin','$nama_bank','$alamat')");
 
if($query){
echo "<script>alert('Tambah Berhasil ')</script>";
echo "<script>window.location.href='index_transaksi.php'</script>";
}
else{
    echo "<script>alert('Tambah Gagal ')</script>";
echo "<script>window.location.href='tambah_transaksi.php'</script>";
}