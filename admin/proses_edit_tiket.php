<?php 

$id_tiket = $_GET['id_tiket'];
$id_jenistiket = $_POST['id_jenistiket'];
$nama_tiket = $_POST['nama_tiket'];
$harga = $_POST['harga'];

include '../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE tiket SET id_jenistiket = '$id_jenistiket',nama_tiket='$nama_tiket',
harga='$harga' WHERE id_tiket='$id_tiket'");

 
if($query){
echo "<script>alert('Edit Berhasil ')</script>";
echo "<script>window.location.href='tiket.php'</script>";
}
else{
    echo "<script>alert('Edit Gagal ')</script>";
echo "<script>window.location.href='edit.php'</script>";
}
