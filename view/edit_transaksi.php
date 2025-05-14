<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Transaksi</title>
</head>
<?php require "navbar.php"?>
  <body>
    <div class="container">
    <h1>Edit Transaksi</h1>
    <?php
    $no_rekening=$_GET['no_rekening'];
    include '../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM transaksi WHERE no_rekening='$no_rekening'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_transaksi.php?no_rekening=<?php echo $result['no_rekening']?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Tiket </label>
    <input type="text" class="form-control" value="<?php echo $result['id_tiket']?>" name="id_tiket" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Pembeli</label> </label>
    <input type="text" class="form-control" value="<?php echo $result['id_pembeli']?>" name="id_pembeli" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Bank</label> </label>
    <input type="text" class="form-control" value="<?php echo $result['nama_bank']?>" name="nama_bank" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label> </label>
    <input type="text" class="form-control" value="<?php echo $result['alamat']?>" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
  </div>
  
</form></div>
</body>
</html>

