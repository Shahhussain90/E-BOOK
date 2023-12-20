<?php
$conn = mysqli_connect("localhost","root","","eproject");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $cpass = $_POST["cpassword"];

$select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
       $message[] = '<script> alert("user already exist!") </script>';
    }else{
       if($pass != $cpass){
          $message[] = 'confirm password not matched!';
       }else{
        mysqli_query($conn,"INSERT INTO users VALUES(NULL,'".$name."','".$lname."','".$email."','".$pass."')") or die('query failed');
          $message[] = '<script> alert registered successfully! </script>';
          header('location:login.php');
       }
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styleregister.css">
    <style>
        <?php include "styleregister.css" ?>
    </style>
  </head>

<body
    style="background-image: url(images/Untitled\ design.png);background-attachment: fixed;background-size: cover;background-position: center;color: black;">
    <div class="login-main">
        <div class="illustration">
            <img class="login-img" src="images/Library.gif" alt="">
        </div>
        <div class="login">
            <form action="" method="post">
                <div class="heading">
                    <h1>register:)</h1>
                </div>
                <p class="para-login">signup now and get full access to our website. </p>
                <div class="input-main">
                    <div class="l-2">
                        <input type="text" placeholder="Firstname" name="name" id="name" required>
                        <input type="text" placeholder="Lastname" name="lname" id="lname" required>
                    </div>
                </div><br>

                <div class="input-main">
                    <div class="l-2">
                        <input type="email" placeholder="Email" name="email" id="mail" required>
                    </div>
                </div><br>

                <div class="input-main">
                    <div class="l-2">
                        <input type="password" placeholder="Password" name="password" id="mail" required>
                    </div>
                </div><br>

                <div class="input-main">
                    <div class="l-2">
                        <input type="password" placeholder="Confirm password " name="cpassword" id="mail" required>
                    </div>
                </div>
                <br>
            
                <div class="input-main">
                    <input type="submit" name="submit" value="Submit" id="btn-REGISTER">
                </div>
                <!-- style="width:73%; margin-left: 9%; border:1px solid #f07c29; font-size:15px; color:black; border-radius:11px;" -->

<p class="para-join">already have an account?<a href="login.php">signin</a></p>

            </form>
        </div>
    </div>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         
      </div>
      ';
   }
}
?>
</body>

</html>