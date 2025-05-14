<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title></title>
    <style>
        
    </style>
</head>

<?php require "navbar.php"; ?>
 <div class="container">
    <body>
    <h1 class="mt-3">Data Transaksi</h1>
    <a href="tambah_transaksi.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Transaksi</a>
    <table class="table table-borderless" >
        <tr class="table-primary">
            <th>No</th>
            <th>No Rekening</th>
            <th>ID Tiket </th>
            <th>ID Pembeli</th>
            <th>Nama Bank</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include '../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM transaksi");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "";
            while ($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['no_rekening'] ?></td>
                    <td><?php echo $result['id_tiket'] ?></td>
                    <td><?php echo $result['id_pembeli'] ?></td>
                    <td><?php echo $result['nama_bank'] ?></td>
                    <td><?php echo $result['alamat'] ?></td>
                    <td>
                        <a href="edit_transaksi.php?no_rekening=<?php echo $result['no_rekening']?>" class="btn btn-warning"> Edit</a>
                        <a href="hapus_transaksi.php?no_rekening=<?php echo $result['no_rekening']?>" onclick="return confirm('kamu yakin mau hapus?')" class="btn btn-danger">Hapus</a>
                    </td>
                    
                </tr>
                <?php
                $no++;
            }
            } else{
            echo "Data Kosong";
         }
        ?>    
    </table>
    
    
</div>
</body></center>
</html>