<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Tambah Jenis</title>
 
</head>
  <body>
  
   <?php require "navbar.php"?>
   <div class="container mt-3"><nav aria-label="breadcrumb">
</nav>
    <div class="container">
    <h1 class="mt-3"> Tambah Jenis</h1>
    <form action="simpan_jenis.php" method="POST" class="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis </label>
    <input type="text" class="form-control" name="id_jenistiket" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama </label>
    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>