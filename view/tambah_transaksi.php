<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>tambah tiket</title>
  
</head>
  <body>
  
    <?php require "navbar.php";?>
    
    <div class="container">
    <h1>Tambah Transaksi</h1>
    <form action="simpan_transaksi.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Rekening </label>
    <input type="text" class="form-control" name="no_rekening" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Tiket </label>
    <input type="text" class="form-control" name="id_tiket" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Pembeli</label> </label>
    <input type="text" class="form-control" name="id_pembeli" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Bank</label> </label>
    <input type="text" class="form-control" name="nama_bank" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label> </label>
    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>