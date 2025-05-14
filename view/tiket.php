
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
    <body>
    <?php require "navbar.php"; ?><div class="container">
    <div class="container mt-3"><nav aria-label="breadcrumb">
</nav>
    <h1>Data Tiket</h1>
    <table class="table table-borderless" >
        <tr class="table-primary">
            <th >No</th>
            <th>ID Tiket</th>
            <th>ID Jenis</th>
            <th>Nama </th>
            <th>Harga</th>
            
            
            
        </tr>
        <?php 
        include '../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM tiket");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "";
            while ($result=mysqli_fetch_assoc($query)){
                ?>
                <tr >
                    <td ><?php echo $no ?></td>
                    <td><?php echo $result['id_tiket'] ?></td>
                    <td><?php echo $result['id_jenistiket'] ?></td>
                    <td><?php echo $result['nama_tiket'] ?></td>
                    <td><?php echo $result['harga'] ?></td>
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