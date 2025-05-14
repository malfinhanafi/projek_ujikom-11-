<?php 

$id_tiket = $_GET['id_tiket'];

include '../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM tiket WHERE id_tiket ='$id_tiket'");
 
if($query){
echo "<script>alert('hapus Berhasil ')</script>";
echo "<script>window.location.href='tiket.php'</script>";
}
else{
    echo "<script>alert('hapus Gagal ')</script>";
echo "<script>window.location.href='tiket.php'</script>";
}
