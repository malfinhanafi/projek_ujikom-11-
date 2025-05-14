<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit</title>
</head>
<?php require "navbar.php"?>
  <body>
    <div class="container">
    <h1>Edit Jenis</h1>
    <?php
    $id_jenistiket=$_GET['id_jenistiket'];
    include '../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis_tiket WHERE id_jenistiket='$id_jenistiket'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_jenis.php?id_jenistiket=<?php echo $result['id_jenistiket']?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama </label>
    <input type="text" class="form-control" value="<?php echo $result['nama']?>" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  
  
</form></div>
</body>
</html>

