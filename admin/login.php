
<?php 
session_start();
require "../config/koneksi.php";
?>
<center>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


</head>
<body>
</div>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow" >
            <form action="" method="post">
            <div class="box">
  <div class="login">
    <div class="loginBx">
                <div>
                    <h2>
                      <i class="fa-solid fa-right-to-bracket"></i>
                     Login
                    <i class="fa-solid fa-heart"></i>
        </h2>
                    <label for="username"></i>Username </label>
                    <input type="text"placeholder="Username" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" class="form-control" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-light mt-3" type="submit" name="loginbtn" value="Sign in"  >Login</button>
                </div>
       
      </div>
    </div>
  </div>
</div>
            </form>
        </div>
        <div class="mt-3" style="width: 500px;">
            <?php
            if(isset($_POST['loginbtn'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($conn ,"SELECT * FROM adminn WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);
                
                if($countdata>0){
                if (password_verify($password,$data['password'])){
                       $_SESSION['username'] = $data['username'];
                       $_SESSION['login'] = true;
                       header('location:../admin/index.php');
                }
                else{
                    ?>
                    <div class="alert alert-warning" role="alert">Password Salah</div>
                    <?php
                }
                }
                else{
                    ?>
                    <div class="alert alert-warning" role="alert">Coba Lagi</div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");
@import url("https://use.fontawesome.com/releases/v6.5.1/css/all.css");

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-size:cover;
        background-repeat:no-repeat;
        background-image: url('../assets/bg.jpg');
}

* {
  font-family: "Poppins", sans-serif;
}

@property --a {
  syntax: "<angle>";
  inherits: false;
  initial-value: 0deg;
}

.box {
  position: relative;
  width: 400px;
  height: 200px;
  background: repeating-conic-gradient(
    from var(--a),
    #ff2770 0%,
rgb(39, 57, 255)  5%,
    transparent 5%,
    transparent 40%,
    rgb(244, 255, 39) 50%
  );
  filter: drop-shadow(0 15px 50px #000);
  border-radius: 20px;
  animation: rotating 4s linear infinite;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.5s;
}

@keyframes rotating {
  0% {
    --a: 0deg;
  }

  0% {
    --a: 360deg;
  }
}

.box::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: repeating-conic-gradient(
    from var(--a),
rgb(69, 255, 106) 0%,
rgb(255, 174, 69) 5%,
    transparent 5%,
    transparent 40%,
rgb(255, 69, 178) 50%
  );
  filter: drop-shadow(0 15px 50px #000);
  border-radius: 20px;
  animation: rotating 4s linear infinite;
  animation-delay: -1s;
}

.box::after {
  content: "";
  position: absolute;
  inset: 4px;
  background: #2d2d39;
  border-radius: 15px;
  border: 8px solid #25252b;
}

.box:hover {
  width: 450px;
  height: 500px;
}

.box:hover .login {
  inset: 40px;
}

.box:hover .loginBx {
  transform: translateY(0px);
}

.login {
  position: absolute;
  inset: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border-radius: 10px;
  background: #00000033;
  color: #fff;
  z-index: 1000;
  box-shadow: inset 0 10px 20px #00000080;
  border-bottom: 2px solid #ffffff80;
  transition: 0.5s;
  overflow: hidden;
}

.loginBx {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
  width: 70%;
  transform: translateY(126px);
  transition: 0.5s;
}

h2 {
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.2em;
}

h2 i {
  color: #ff2770;
  text-shadow: 0 0 5px #ff2770, 0 0 20px #ff2770;
}

input {
  width: 100%;
  padding: 10px 20px;
  outline: none;
  border: none;
  font-size: 1em;
  color: #fff;
  background: #0000001a;
  border: 2px solid #fff;
  border-radius: 30px;
}

input::placeholder {
  color: #999;
}

button[type="submit"] {
  background: #45f3ff;
  border: none;
  font-weight: 500;
  color: #111;
  cursor: pointer;
  transition: 0.5s;
  box-sizing:border-box;
  border-radius: 10px;
}

button[type="submit"]:hover {
  box-shadow: 0 0 10px #45f3ff, 0 0 60px #45f3ff;
}

</style>
</center>