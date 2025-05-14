<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Tiket</title>
</head>
<?php require "navbar.php"?>
  <body>
    <div class="container">
    <h1>Edit Tiket</h1>
    <?php
    $id_tiket=$_GET['id_tiket'];
    include '../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM tiket WHERE id_tiket='$id_tiket'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit_tiket.php?id_tiket=<?php echo $result['id_tiket']?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis </label>
    <input type="text" class="form-control" value="<?php echo $result['id_jenistiket']?>" name="id_jenistiket" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama </label> </label>
    <input type="text" class="form-control" value="<?php echo $result['nama_tiket']?>" name="nama_tiket" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label> </label>
    <input type="text" class="form-control" value="<?php echo $result['harga']?>" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form></div>
</body>
</html>

