<?php 

$no_rekening = $_GET['no_rekening'];

include '../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM transaksi WHERE no_rekening = '$no_rekening'");
 
if($query){
echo "<script>alert('hapus Berhasil ')</script>";
echo "<script>window.location.href='index_transaksi.php'</script>";
}
else{
    echo "<script>alert('hapus Gagal ')</script>";
echo "<script>window.location.href='transaksi.php'</script>";
}
