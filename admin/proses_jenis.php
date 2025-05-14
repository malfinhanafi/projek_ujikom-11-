<?php 

$id_jenistiket = $_GET['id_jenistiket'];
$nama = $_POST['nama'];



include '../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE jenis_tiket SET nama='$nama'
WHERE id_jenistiket='$id_jenistiket'");
 
if($query){
echo "<script>alert('Edit Berhasil ')</script>";
echo "<script>window.location.href='jenis.php'</script>";
}
else{
    echo "<script>alert('Edit Gagal ')</script>";
echo "<script>window.location.href='edit.php'</script>";
}
