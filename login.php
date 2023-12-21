<?php
$conn  = mysqli_connect("localhost", "root", "", "eproject");
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:index.php");

        }
        
    
        else{
            echo "<script> alert('wrong password')</script>";
        }
    }
        else{
            echo "<script> alert('not register')</script>";
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="stylec.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="stylelogin.css">
    <style>
        <?php include "stylelogin.css" ?>
    </style>


<body style="background-image: url(images/Untitled\ design.png);background-attachment: fixed;background-size: cover;background-position: center;color: black;">
    <div class="login-main">
<div class="illustration">
<img class="login-img" src="images/Learning.gif" alt="" >
</div>
<div class="login">
<form action="login.php" method="post">
<div class="heading"><h1>login:)</h1></div>
<p class="para-login">to keep conneted with us please login with your personal information by email address and password. </p><br>
<div class="input-main">
    <div class="l-1">
        <i class="fa fa-envelope-open" aria-hidden="true" style="font-size: 35px; color: #f07c29;"></i>
    </div>
    <div class="l-2">
        
        <label for="email adress">email address</label>
        <input type="mail" placeholder="Email" name="email" id="mail" required> 
    </div>
</div><br>

<div class="input-main">
    <div class="l-1">
        <i class="fa fa-lock" aria-hidden="true" style="font-size: 45px; color: #f07c29;"></i>
    </div>
    <div class="l-2">
        
        <label for="password">password</label>
        <input type="password" placeholder="Password" name="password" id="mail"required> 
    </div>
</div><br>
<div class="option_div">
    <div class="check_box">
      <input type="checkbox" name="check"required>
      <span>Remember me</span>
    </div>
    <div class="forget_div">
      <a href="register.php"> <b>create account</b></a>
    </div>
  </div> <br>
  <div class="btn-main">
    <div>
    <button class="btn-2" name="submit">login</button>

    </div>
    
  </div><br>


</form>
</div>
    </div>






</body>
</html>