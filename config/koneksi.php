<?php 
$conn = mysqli_connect('localhost','root','','db_konserelfest');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}
?>