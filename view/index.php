<?php 
require "session.php";
require "../config/koneksi.php";

$querytiket = mysqli_query($conn,"SELECT * FROM tiket ");
$jumlahtiket = mysqli_num_rows($querytiket);

$queryjenistiket = mysqli_query($conn,"SELECT * FROM jenis_tiket ");
$jumlahjenistiket = mysqli_num_rows($queryjenistiket);

$querytransaksi = mysqli_query($conn,"SELECT * FROM transaksi ");
$jumlahtransaksi = mysqli_num_rows($querytransaksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style>
 .kotak{
        border:solid;
    }
    .tiket {
        background-color: #45f3ff ;
        border-radius:10px;
    }
    .dekorasi{
        text-decoration:none;
    }
    .jenistiket{
        background-color: #45f3ff ;
        border-radius:10px;
    }
    .transaksi{
        background-color: #45f3ff ;
        border-radius:10px;
    }

.user{
    position: fixed;
    top: 100px;
}

</style>
<body >
    <?php require "navbar.php"; ?>
</nav>
<span class="user">
    <h1>HAI SOFEST!</h1></span>
    </div>
    <div class="container mt-4 text-dark">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3 " >
                <div class="tiket p-3 shadow-lg p-3 mb-5 ">
                <div class="row">
                    <div class="col-6">
                    <i class="fa-solid fa-ticket fa-7x"></i>
                    </div>
                    <div class="col-6">
                        <h3 class="fs-2">Tiket</h3>
                        <p class="fs-4"><?php echo $jumlahtiket;?> Tiket</p>
                        <p ><a href="tiket.php" class="text-dark dekorasi" >Lihat Detail</a></p>
                    </div>
                </div>
            </div></div>
            <div class="col-lg-4 col-md-6 mb-3 " >
                <div class="jenistiket p-3 shadow-lg p-3 mb-5">
                <div class="row">
                    <div class="col-6">
                    <i class="fa-solid fa-filter fa-7x"></i>
                    
                    </div>
                    <div class="col-6">
                        <h3 class="fs-2">Jenis Tiket</h3>
                        <p class="fs-4"><?php echo $jumlahjenistiket;?> Jenis Tiket</p>
                        <p ><a href="jenis.php" class="text-dark dekorasi" >Lihat Detail</a></p>
                    </div>
                </div>
            </div></div>
            <div class="col-lg-4 col-md-6 mb-3 text-dark"  >
                <div class="transaksi p-3 shadow-lg p-3 mb-5">
                <div class="row">
                    <div class="col-6">
                    <i class="fa-solid fa-cart-shopping fa-7x"></i>
                    </div>
                    <div class="col-6" >
                        <h3 class="fs-2">Transaksi</h3>
                        <p class="fs-4"><?php echo $jumlahtransaksi;?> Transaksi</p>
                        <p ><a href="transaksi.php" class="text-dark dekorasi" >Lihat Detail</a></p>
                    </div>
                </div>
            </div></div>
        </div>
    </div>
    
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
