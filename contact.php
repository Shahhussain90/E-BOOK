<?php 
  session_start();
 
?>
<?php

$conn  = mysqli_connect("localhost","root","","eproject");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql ="INSERT INTO contact VALUES(NULL,'".$name."','".$email."','".$message."')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('your message has been send')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylec.css">
    <style>
  <?php include "stylec.css" ?>
</style>
    
</head>

<body>
  
<section class="section-1" id="sec">

<header class="header">
  <div class="logo-div">
    <img src="imagesMain\E - Book Logo New r.png" class="logo" alt="">
  </div>

  <div class="login-register-btn-div">
    <?php 
    $count=0;
      if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
      }
    ?>
    <a href="AddToCart.php" class="cart-anchor" style="color:#f07c29">
    <div class="cart-div">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      <span class="cart-txt">cart <?php echo $count ?></span>
    </div></a>
    <a href="login.php"><button class="login-H">login</button></a>
    <a href="register.php"><button class="register-H">register</button></a>
  </div>
</header>
<!-- header done ⬆️⬆️⬆️ -->

</section>


<section class="section-2">
<nav class="nav">
  <ul class="ul">
    <li><a class="anchor-nav" href="index.php">HOME</a></li>
    <li><a class="anchor-nav" href="categories.php">CATEGORIES</a></li>
   
    <li><a class="anchor-nav" href="index.php #abt-US">ABOUT US</a></li>
    <li><a class="anchor-nav" href="index.php #featured-scroll">FEATURED</a></li>
    <li><a class="anchor-nav" href="index.php #blog-scroll">BLOG</a></li>
    <li><a class="anchor-nav" href="contact.php">CONTACT</a></li>
    <!-- <li><a href="">REGISTER</a></li> -->
  </ul>

  <div class="bar-div">
    <span class="menu">menu</span>
    <div class="bar-cart">
      <i class="fa fa-bars" aria-hidden="true"></i>
      <a href="AddToCart.php" class="cart-anchor" style="color:#f07c29">
            <div class="cart-div">
              <i class="fa fa-shopping-cart ct" aria-hidden="true"></i>
            </div>
          </a>
    </div>
  </div>
</nav>
</section>

<div class="responsive-nav">
    <div class="res-div-2">
      <div><a class="anchor-nav" href="index.php">HOME</a></div>
      <div><a class="anchor-nav" href="categories.php">CATEGORIES</a></div>
      <div><a class="anchor-nav" href="index.php #abt-US">ABOUT US</a></div>
      <div><a class="anchor-nav" href="index.php #featured-scroll">FEATURED</a></div>
      <div><a class="anchor-nav" href="index.php #blog-scroll">BLOG</a></div>
      <div><a class="anchor-nav" href="contact.php">CONTACT</a></div>
      <div><a class="anchor-nav" href="login.php">LOGIN</a></div>
      <div><a class="anchor-nav" href="register.php">REGISTER</a></div>
    </div>

</div>

    <div class="parent">
        <div class="c-1">
            <div class="cf">
                <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 50px; color:#f07c29;"></i><br>
                <p><a href="https://www.google.com/maps/place/NEXTAG/@24.9061647,67.0328208,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33f82a9070e7d:0xf11011dfa442d9d0!8m2!3d24.9061599!4d67.0353957!16s%2Fg%2F11r5t2n0l3?hl=en"
                        style="color:black; text-decoration: none;"><span style="font-weight: bolder;">Address</span>
                        <br> <span style="color:grey;">North
                            Karachi</span></a></p>
            </div><br><br>
            <div class="cf1">

                <i class="fa fa-envelope-open" aria-hidden="true" style="font-size: 50px; color: #f07c29;"></i><br>
                <p><a href="" style="color:black; text-decoration: none;"><span
                            style="font-weight: bolder;">email</span>
                        <br> <span style="color:grey;">info@gmail.com</span></a></p>
                <!-- <p style="color: black;"><span style="font-weight: bolder;">Email</span> <br> <span
                        style="color:grey; ">sazan1351@gmail.com</span></p> -->
            </div><br><br>
            <div class="cf2">



                <i class="fa fa-phone" aria-hidden="true" style="font-size: 50px; color: #f07c29;"></i><br>
                <p style="color:black;"><span style="font-weight: bolder;">Phone</span> <br> <span
                        style="color:grey;">+123 345678 99</span></p>
            </div>
        </div>
        <div class="c-2">

        </div>
        <div class="c-3">
            <form id="form" method="post">
                <h1 class="h">send us a message</h1><br>
                <p class="pc">if you have any work from me or any types of quries related to my tutorial,you can send me
                    message from here.it's my pleasure to help you.</p>

                <input type="text" name="name" placeholder="Enter your name" required><br><br>

                <input type="email" name="email" placeholder="Enter your email" required><br><br>

                <textarea rows="5" name="message" placeholder="Type your Message" required></textarea><br><br>
                <input type="submit" class="msg-btn" name="submit" value="Send Message">
            </form>
        </div>
    </div>
    
    <div class="map">
        <div class="mapholder">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d115836.45288146895!2d67.0302208!3d24.8676352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1679763247957!5m2!1sen!2s"
                 style="border:0;" class="actual-map" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- <script>
        document.getElementById("form").addEventListener("submit",function(){
         alert("your message has been send")
 
        })
     </script> -->
  <footer class="footer">

    <div class="footer-border-div">
      <div class="footer-boxes">
        <div class="alignment-div">
          <span class="footer-E-book">E-BOOKS</span><br><br>
          <p class="footer-E-book-text">Welcome To Our E-Book Website! We're Your Digital Library, Dedicated To Bringing
            Readers A World Of Captivating E-Books.</p>
        </div>
      </div>


      <div class="footer-boxes-2">
        <div class="alignment-div-2">
          <span class="footer-E-book">PAGES</span><br><br>

          <span class="span-footer"><a href="index.php" class="anchor-footer">home</a></span><br>
          <span class="span-footer"><a href="contact.php" class="anchor-footer">contact</a></span><br>
          <span class="span-footer">terms and condition</span><br>
          <span class="span-footer">privacy policy</span>
        </div>
      </div>



      <div class="footer-boxes-3">
        <div class="alignment-div-3">
          <span class="footer-E-book">our company</span><br><br>

          <span class="span-footer"><a href="index.php #abt-US" class="anchor-footer">about us</a></span><br>
          <span class="span-footer"><a href="index.php #blog-scroll" class="anchor-footer">blog</a></span><br>
          <span class="span-footer"><a href="categories.php" class="anchor-footer">categories</a></span>
        </div>
      </div>


      <div class="footer-boxes footer-boxes-4">
        <div class="alignment-div">
          <span class="footer-E-book">stay connected</span><br><br>

          <div class="icons-div-footer">
            <div class="icons-footer"><a class="anchor-icon" href="https://www.facebook.com/"><i class="fa fa-facebook"
                  aria-hidden="true"></i></a>
            </div>
            <div class="icons-footer">
              <a class="anchor-icon" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="icons-footer"><a class="anchor-icon" href="https://web.telegram.org/k/"><i class="fa fa-telegram"
                  aria-hidden="true"></i></a>
            </div>
          </div>
          <span class="span-footer">email: EBOOK@Gmail.com</span>


        </div>
      </div>

    </div>

    <div class="copyright">
      <div class="ct-text">&copy Copyrights 2023 E-BOOKS. All rights reserved. </div>
    </div>


  </footer>


  <div class="back-to-top-button">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </div>

  <script>

    $(document).ready(function () {

      // $(".cart-div").click(function () {

      //   $(".add-to-cart-div").slideToggle(1000)
      //   $(".add-to-cart-div").css("display", "flex")
      // })

      $(".fa-bars").click(function () {

        $(".responsive-nav").slideToggle(1000)
        $(".responsive-nav").css("display", "flex")

        $(".res-div-2").slideToggle(1000)
        $(".res-div-2").css("display", "flex")

      })

    });  // add to cart

    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        $(".back-to-top-button").css("display", "flex");
      } else {
        $(".back-to-top-button").css("display", "none");
      }
    });
    $(".back-to-top-button").on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, '300');
    });




  </script>
</body>

</html>