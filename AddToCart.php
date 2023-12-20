<?php 
  session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleAddToCart.css">
    <style>
             <?php include "styleAddToCart.css" ?>
        </style>
    <title>CART</title>
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
    <a href="login.php"><button class="login">login</button></a>
    <a href="register.php"><button class="register">register</button></a>
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
      <div class="cart-div">
        <i class="fa fa-shopping-cart ct" aria-hidden="true"></i>

      </div>
    </div>
  </div>
</nav>
</section>

<div class="responsive-nav">
<div class="res-div-2">
  <div><a class="anchor-nav" href="index.html">HOME</a></div>
  <div><a class="anchor-nav" href="categories.php">CATEGORIES</a></div>
  <div><a class="anchor-nav" href="index.php #abt-US">ABOUT US</a></div>
  <div><a class="anchor-nav" href="index.php #featured-scroll">FEATURED</a></div>
  <div><a class="anchor-nav" href="index.php #blog-scroll">BLOG</a></div>
  <div><a class="anchor-nav" href="contact.php">CONTACT</a></div>
  <div><a class="anchor-nav" href="login.php">LOGIN</a></div>
  <div><a class="anchor-nav" href="register.php">REGISTER</a></div>
</div>
</div>


<!-- /* nav-done ⬆️⬆️⬆️ */ -->



        <div class="row-Cart-text">
            <h1 class="sc">shopping cart</h1>
        </div>

    <div class="container-main">
        <div class="table-div" >
            <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">product no.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">total</th>

                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php 
                           

                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                             
                                $sr=$key+1;
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[item_name]</td>
                                        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]' ></td>
                                        <td>
                                            <form action='manage.php' method='POST'>
                                                <input class='text-center iquantity' name='mod_quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                                 <input type='hidden' value='$value[item_name]' name='item_name'>
                                            </form>
                                        </td>
                                        <td class='itotal'>0</td>
                                        <td>
                                            <form action='manage.php' method='POST'>
                                                <button name='remove_item' class='btn btn-sm btn-outline-danger'>remove</button>
                                                <input type='hidden' value='$value[item_name]' name='item_name'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                                
                            }}
                        ?>
                        
                                
                    </tbody>
                    
            </table>
                           
        </div>
                            <div id="purchase-div">
                                <div id="main-div">
                                    <div class="total-div">
                                        <h3>total:</h3>
                                        <h5 id="grandTotal"></h5>
                                    </div>
                                    
                                    <?php
                                        if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){

                                        
                                    ?>
                                    <form action="purchase.php" method="POST">
                                        <div  id="input-divs">
                                            <label class="form-label">full name</label>
                                            <input type="text" name="fullname" class="form-control-i" required>
                                        </div>
                                        <div  id="input-divs">
                                            <label class="form-label">phone</label>
                                            <input type="number" name="phone_no" class="form-control-i" required>
                                        </div>
                                        <div  id="input-divs">
                                            <label class="form-label">address</label>
                                            <input type="text" name="address" class="form-control-i" required>
                                        </div>
                                        
                                        <div class="form-check" id="COD-div">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  Cash on delivery
                                                </label>
                                            </div>
                                        </div>

                                        <div class="purchase-pay-with-card-div">
                                             <button class="purchase-btn" name="purchase">make purchase</button>
                                            <a href="checkout.php" class="pay-with-card">pay with card</a>
                                        </div>
                                    </form>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div> 
                   
                        
    </div>
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
    <script src="addtocart.js"></script>
    
</body>
</html>