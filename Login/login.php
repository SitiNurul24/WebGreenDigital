<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($row['level']=="user"){
      $_SESSION['usernameemail'] = $usernameemail;
      $_SESSION['level'] = "user";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION['status'] = "login";
      header("location:../index.php");
   
    }else if ($row['level']=="admin"){
      $_SESSION['usernameemail'] = $usernameemail;
      $_SESSION['level'] = "admin";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION['status'] = "login";
      header("location:../Admin/index.php");
   
    }else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta name="description" content="estimasi emisi karbon">
    <meta name="keywords" content="EsEmKA, estimasi emisi karbon">
    <meta name="author" content="EsEmKa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link href="../assets/img/favicon.ico" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  </head>
  <body>

  <div class="container">
  <div class="box form-box">
  <h2>Masuk</h2>
    <form action="" method="post" >
    <div class="field input">
      <label for="usernameemail">Username or Email  </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
    </div>
    <div class="field input">
      <label for="password">Password  </label>
      <input type="password" name="password" id = "password" required value=""> <br>
    </div>
    <div class="field">
      <button type="submit" class="btn" name="submit">Masuk</button>
    </div>
    <div class="links">
      Sudah memiliki akun? <a href="registration.php">Daftar Now</a><br><br>
      Kembali ke halaman utama?<a href="../index.php">Beranda</a>
    </div>
    </form>
  </div>
  </div>
  
  </body>
</html>
