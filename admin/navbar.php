<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="" class="logo">
            <i><b class="text-warning">EL</b><b>FEST</b></i>
          </a>
        </li>
        <li><a href="index.php" class="link">Home</a></li>
        <li><a href="tiket.php" class="link">Tiket</a></li>
        <li><a href="jenis.php" class="link">Jenis Tiket</a></li>
        <li><a href="transaksi.php" class="link">Transaksi</a></li>
        <li>
          <a href="logout.php" class="link" id="hire-me" onclick="return confirm('kamu yakin mau logout?')"><i></i>Logout</a
          >
        </li>
      </ul>
    </nav>
  </body>
</html>
<style>
  *,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "SF Pro Text";
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: hsl(0, 0.00%, 100.00%);
     background-size:cover;
        background-repeat:no-repeat;
        background-image: url('../assets/bg.jpg');
}

ul {
  display: flex;
  align-items: f;
  gap: 1.2rem;
  list-style: none;
  position: fixed;
  top: 0;
  left:0;
  width: 100%;
  padding: 10px;
  z-index: 100;
   background-color: #B1D4F2;
}

.link {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  padding: 0.5rem;
  position: relative;
  top: 15px;
}

.link::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  background: #fff;
  border-radius: 5px;
  transform: scaleX(0);
  transition: all 0.6s ease;
}

.link::before {
  bottom: 0;
  left: 0;
}

.link:hover::before {
  transform: scaleX(1);
}

#hire-me {
  background-color: red;
  display: flex;
  align-items: center;
  color: white;
  border-radius: 5px;
  padding: 0.2rem 0.5rem;
  transition: all 0.6s ease;
  top:12px;
}

#hire-me:hover {
  background-color: transparent;
  color: red;
  padding: 0.5rem;
}

#hire-me i {
  margin-right: 0.5rem;
}

.logo {
  text-decoration: none;
  color: #fff;
  font-size: 40px;
  padding: 0.5rem;
  position: relative;
  transition: 0.35s ease;
  color: #45f3ff;
}
.logo:hover {
  opacity: 0.5;
}
</style>