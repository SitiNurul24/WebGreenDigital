<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password', 'user')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="estimasi emisi karbon">
    <meta name="keywords" content="EsEmKA, estimasi emisi karbon">
    <meta name="author" content="Green Digital">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="../assets/img/favicon.ico" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <title>Daftar</title>
  </head>
  <body>
  <div class="container">
    <div class="box form-box">
    <h2>Daftar</h2>
    <form action="" method="post">
    <div class="field input">
      <label for="name">Nama </label>
      <input type="text" name="name" id = "name" required value="">
    </div>
    <div class="field input">  
      <label for="username">Nama Pengguna</label>
      <input type="text" name="username" id = "username" required value="">
    </div>
    <div class="field input">  
      <label for="email">Email</label>
      <input type="email" name="email" id = "email" required value="">
    </div>
    <div class="field input">  
      <label for="password">Password </label>
      <input type="password" name="password" id = "password" required value="">
    </div>
    <div class="field input">  
      <label for="confirmpassword">Konfirmasi Password  </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value="">
    </div>
    
    <div class="field">   
        <input type="submit" class="btn" name="submit" value="Daftar" required>
      </div>
      <div class="links">
       Sudah Mendaftar akun? <a href="login.php">Masuk</a>
      </div>
    </form>
    </div>
  </div>
 
  </body>
</html>
