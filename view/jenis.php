<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Jenis Tiket</title>
  
</head>
<?php require "navbar.php"; ?>

 <div class="container">
    <body>
</nav>
    <h1 class="mt-3">Data Jenis Tiket</h1>
    <table class="table table-bordered table table-striped mt-3" >  
        <tr class="table-primary">
            <th>No</th>
            <th>ID Jenis</th>
            <th>Nama </th>
            
            
        </tr>
        <?php 
        include '../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM jenis_tiket");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "";
            while ($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_jenistiket'] ?></td>
                    <td><?php echo $result['nama'] ?></td>
                    
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