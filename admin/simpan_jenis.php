<?php 
$id_jenistiket= $_POST['id_jenistiket'];
$nama = $_POST['nama'];


include '../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO jenis_tiket VALUES('$id_jenistiket','$nama')");
 
if($query){
echo "<script>alert('Tambah Berhasil ')</script>";
echo "<script>window.location.href='jenis.php'</script>";
}
else{
    echo "<script>alert('Tambah Gagal ')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}
