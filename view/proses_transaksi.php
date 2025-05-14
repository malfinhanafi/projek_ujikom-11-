<?php 

$no_rekening = $_GET['no_rekening'];
$id_tiket = $_POST['id_tiket'];
$id_pembeli = $_POST['id_pembeli'];
$id_admin = $_POST['id_admin'];
$nama_bank = $_POST['nama_bank'];
$alamat = $_POST['alamat'];


include '../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE transaksi SET id_tiket='$id_tiket',
id_pembeli='$id_pembeli',id_admin='$id_admin',nama_bank='$nama_bank',alamat = '$alamat'
WHERE no_rekening='$no_rekening'");
 
if($query){
echo "<script>alert('Edit Berhasil ')</script>";
echo "<script>window.location.href='index_transaksi.php'</script>";
}
else{
    echo "<script>alert('Edit Gagal ')</script>";
echo "<script>window.location.href='edit.php'</script>";
}
