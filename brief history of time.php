<?php 
  session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin=
     "anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="book style.css">
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



    <main>
        <div class="container mt-5">
        <img class="img" src="imagesMain/img-38.jpg" alt="">
        <div class="text">
            <h1>A Brief History of Time</h1>
            <h5>By  Stephen Hawking</h5>
            <hr style="width: 70%; text-align: left; margin-left: 0;">
           
            <p class="col-lg-8 "> A Brief History of Time goes all the way from the beginning of the universe to its end,
                 explaining things like space and time,
                 the expanding universe, the uncertainty principle, black holes, wormholes, and time travel along the way</p>
              <hr style="width: 70%; text-align: left; margin-left: 0;">
              <div class="column">
                <div class="t">
              <p class="about">About this book</p>
              <!-- <img class="page-pic" src="page-png.png" alt=""> -->
              <i class="fa fa-file-o" style="font-size:40px;margin-top:6px;margin-bottom:4px"  aria-hidden="true"></i>
              <p >292 pages</p>
            </div>
        
            <div style="width: 1px; height: 100px; background-color: black; margin-top: 30px; margin-left:-48px;" class="s"></div>
            <div style="margin-top: 45px; margin-left: 15px;" class="u">
           
             <img  class="page-pic" src="https://static.vecteezy.com/system/resources/previews/019/873/849/original/clock-icon-transparent-free-icon-free-png.png" alt="">
              <p col-lg-4 col-md-6 col-6>24/7 Hours to read</p>
              <!-- <p>Hours to read</p>  -->
            </div>

            <div style="width: 1px; height: 100px; background-color: black; margin-top: 30px; margin-left:20px;" class="s"></div>

            <div style="margin-top: 20px; margin-left: 15px;" class="u">
              <img  class="page-pic" src="images-removebg-preview.png" style="width: 90px; height: 90px; ;" alt="">
               <p style="margin-top: -15px;">107k Total words</p> 
             </div>

          </div>

          
              <vr style="height: 70%; text-align: left; margin-left: 0;">
          </div>
          <div class="box">
          <p class="buy">Buy the eBook</p>
          <h6 class="pr">Your Price <p class="price">$11.55</p></h6>
          <form action="manage.php" method="POST">
          <div class="cart">
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>

          <input type="hidden" name="item_name" value="A Brief History of Time">
          <input type="hidden" name="price" value="11.55">
        </form>
          <div class="down"><a class="cart-btn" href="download.php?file=pdfS\The_Alchemist">Download</a></div>
          <!-- <div class="byu"><a class="cart-btn" name="add_to_cart" href="AddToCart.php">Buy Now</a></div> -->
          </div>
        </div>
       
    </div>
    </main>

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