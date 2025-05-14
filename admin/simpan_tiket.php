<?php 

$id_tiket = $_POST['id_tiket'];
$id_jenistiket = $_POST['id_jenistiket'];
$nama_tiket = $_POST['nama_tiket'];
$harga = $_POST['harga'];

include '../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO tiket VALUES('$id_tiket','$id_jenistiket',
'$nama_tiket','$harga')");
 
if($query){
echo "<script>alert('Tambah Berhasil ')</script>";
echo "<script>window.location.href='tiket.php'</script>";
}
else{
    echo "<script>alert('Tambah Gagal ')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}