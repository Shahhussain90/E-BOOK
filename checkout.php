<?php 
  session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styleCHECKOUT.css">
    <style>
  <?php include "styleCHECKOUT.css" ?>
</style>
    <title>CHECKOUT</title>
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


<!-- /* nav-done ⬆️⬆️⬆️ */ -->















    <div class="main-div">
        <div class="formDiv">

            <form action="purchase.php" id="form" method="POST">
                <div class="input-divs">
                    <span class="form-headers">cardholder name</span><br>
                    <input type="text" class="nameNumber" name="fullname" id="name" placeholder="e.g:frank" required><br>
                </div>

                <div class="input-divs">
                    <span class="form-headers">address</span><br>
                    <input type="text" class="nameNumber" name="address" id="name" placeholder="" required><br>
                </div>

                <div class="input-divs">
                    <span class="form-headers">card number</span><br>
                    <input type="password" class="nameNumber" name="phone_no" id="number" maxlength="19"
                        placeholder="1234 5678 1122 3454" required><br>
                </div>

                <div class="input-divs data-cvc">
                    <div class="date">
                        <span class="form-headers">month</span>
                        <input type="text" placeholder="MM" maxlength="2" class="mm-yy mm" required>
                    </div>
                    <div class="date yy-div">
                        <span class="form-headers">year</span>
                        <input type="text" placeholder="yy" maxlength="2" class="mm-yy yy" required>
                    </div>
                    <div class="date cv">
                        <span class="form-headers">cvc</span>
                        <input type="password" id="cvc" maxlength="3" placeholder="e.g:123" class="mm-yy" required><br>
                    </div>
                </div>


                <!-- <div class="payment-amount">payment anmount: $ <h5 id="grandTotal"></h5></div> -->
                <div class="pay-btn-div">
                    <input type="hidden" name="pay_mode" value="Card" >
                    <input type="submit" name="purchase" value="PAY" class="confirmbtn">
                </div>

            </form>
           


        </div>







        <div class="cards-main-div">
            <div class="CreditCard" id="card1">

                <div class="visa">
                    <h3>visa</h3>
                </div>
                <div class="card1-div1">
                    <img src="imagesMain/icons8-chip-card-48.png" class="chip-img" alt="">
                </div>


                <div class="card1-div2">1234 5678 1122 3454</div>

                <div class="namespan2">
                    <span class="sp"></span>
                    <span class="an">MM/YY</span>
                </div>

                <div class="card1-div3">
                    <div class="namespan1">frank</div>
                    <div class="creditcard-text">
                        <span>CREDIT CARD</span>
                    </div>
                </div>

                <!-- <div>a</div> -->
            </div>




            <div class="CreditCard-No2">
                <div class="black-bloc"></div>
                <div class="cvc-div">
                    <span class="cvc-span">000</span>
                </div>
            </div>


        </div>




    </div>









    <footer class="footer">

        <div class="footer-border-div">
            <div class="footer-boxes">
                <div class="alignment-div">
                    <span class="footer-E-book">E-BOOKS</span><br><br>
                    <p class="footer-E-book-text">Welcome To Our E-Book Website! We're Your Digital Library, Dedicated
                        To Bringing
                        Readers A World Of Captivating E-Books.</p>
                </div>
            </div>

            <div class="footer-boxes-2">
                <div class="alignment-div-2">
                    <span class="footer-E-book">PAGES</span><br><br>

                    <span class="span-footer"><a href="" class="anchor-footer">home</a></span><br>
                    <span class="span-footer"><a href="" class="anchor-footer">contact</a></span><br>
                    <span class="span-footer">terms and condition</span><br>
                    <span class="span-footer">privacy policy</span>
                </div>
            </div>

            <div class="footer-boxes-3">
                <div class="alignment-div-3">
                    <span class="footer-E-book">our company</span><br><br>

                    <span class="span-footer"><a href="" class="anchor-footer">about us</a></span><br>
                    <span class="span-footer"><a href="" class="anchor-footer">blog</a></span><br>
                    <span class="span-footer"><a href="" class="anchor-footer">categories</a></span>
                </div>
            </div>

            <div class="footer-boxes footer-boxes-4">
                <div class="alignment-div">
                    <span class="footer-E-book">stay connected</span><br><br>

                    <div class="icons-div-footer">
                        <div class="icons-footer"><a class="anchor-icon" href=""><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div class="icons-footer">
                            <a class="anchor-icon" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="icons-footer"><a class="anchor-icon" href=""><i class="fa fa-telegram"
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




    <!-- Script -->
    <div class="back-to-top-button">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>









    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        $(document).keyup(function () {
            let a = $("#name").val()
            $(".namespan1").html(`${a}`)


            let b = $("#number").val()
            $(".card1-div2").html(`${b}`)



            let c = $(".mm").val()
            $(".sp").html(`${c}/`)

            let d = $(".yy").val()
            $(".an").html(`${d}`)

            let e = $("#cvc").val()
            $(".cvc-span").html(`${e}`)

        })

        $(document).ready(function () {

            // $(".cart-div").click(function () {

            // $(".add-to-cart-div").slideToggle(1000)
            // $(".add-to-cart-div").css("display", "flex")
            // })

            $(".fa-bars").click(function () {

                $(".responsive-nav").slideToggle(1000)
                $(".responsive-nav").css("display", "flex")

                $(".res-div-2").slideToggle(1000)
                $(".res-div-2").css("display", "flex")

            })

        }); // add to cart

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


        document.getElementById("form").addEventListener('submit', function () {

            alert("your payment is done")

        })



    </script>
</body>

</html>