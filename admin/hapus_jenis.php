<?php 

$id_jenistiket = $_GET['id_jenistiket'];

include '../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM jenis_tiket WHERE id_jenistiket ='$id_jenistiket'");
 
if($query){
echo "<script>alert('hapus Berhasil ')</script>";
echo "<script>window.location.href='jenis.php'</script>";
}
else{
    echo "<script>alert('hapus Gagal ')</script>";
echo "<script>window.location.href='jenis.php'</script>";
}
