<?php 
  session_start();
  // session_regenerate_id(true);
  // if(!isset($_SESSION['login'])){
  // header("Location:login.php");
  // }
  // this cod is for not oppening website if login is not done
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styleHOME.css">
  <style>
  <?php include "styleHOME.css" ?>
</style>
  <title>HOME</title>
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
        </div>
      </a>

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
       
        <li><a class="anchor-nav" href="#abt-US">ABOUT US</a></li>
        <li><a class="anchor-nav" href="#featured-scroll">FEATURED</a></li>
        <li><a class="anchor-nav" href="#blog-scroll">BLOG</a></li>
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
      <div><a class="anchor-nav" href="#abt-US">ABOUT US</a></div>
      <div><a class="anchor-nav" href="#featured-scroll">FEATURED</a></div>
      <div><a class="anchor-nav" href="#blog-scroll">BLOG</a></div>
      <div><a class="anchor-nav" href="contact.php">CONTACT</a></div>
      <div><a class="anchor-nav" href="login.php">LOGIN</a></div>
      <div><a class="anchor-nav" href="register.php">REGISTER</a></div>
    </div>
  </div>


  <!-- /* nav-done ⬆️⬆️⬆️ */ -->

  <!-- <div class="add-to-cart-div">

    <div class="recomendations-cart"></div>
    <div class="cart"></div>

  </div> -->
  <!-- div ready rest work after getting code ⬆️⬆️⬆️ -->


  <div class="library-img-1-div">
    <h2 class="tagline">
      <!-- Unlock the World of Knowledge with Every Page Turn<br>
      Discover, Read, and Immerse: Your Digital Bookstore, Your Story. -->
    </h2>
    <br>
    <a href="register.php"><button class="get-started">get started</button></a>
  </div>
  <!-- section-1 & 2 done ⬆️⬆️⬆️-->





  <section class="section-3" id="top-selling-scroll">

    <div class="top-interesting-text-div">
      <h3 class="TS">High-Value E-books</h3>
      <p class="TSP">Exclusive Literary Treasures: Unveiling Our Premium Collection – E-books at Their Finest!</p>
    </div>

    <div class="box">

      <form action="manage.php" method="POST">
        <div class="card">
          <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
          <div class="imgBx">
            <img src="imagesMain/img-1.jpg" class="img" alt="images">
          </div>
          <div class="details">
            <span id="h5">The rules of work</span>
            <p id="p">Novel by Richard <br>
              <span id="price">$ 25</span><br>
            </p>
            <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="The rules of work" >
            <input type="hidden" name="price" value="25" >
            

          </div>
        </div>
      </form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-2.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Never Let Me Go</span>
          <p id="p">Novel by Kazuo Ishiguro<br>
            <span id="price">$ 21.75</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Never Let Me Go" >
            <input type="hidden" name="price" value="21.75" >
           

        </div>
      </div>
      </form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-3.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">The Alchemist</span>
          <p id="p">Novel by Paulo Coelho<br>
            <span id="price">$ 23.11</span><br>
          </p>
          
          <button type="submit" name="add_to_cart" class="Add-To-Cart">The Alchemist</button>
            <input type="hidden" name="item_name" value="Never Let Me Go" >
            <input type="hidden" name="price" value="23.11" >
        </div>

      </div></form>

      <!-- 1s 3 book images ⬆️⬆️⬆️ -->

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-4.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">How Successful..</span>
          <p id="p">Novel by John C. Maxwell<br>
            <span id="price">$ 26.63</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="How Successful people think" >
            <input type="hidden" name="price" value="26.63" >
        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-5" alt="images">
        </div>
        <div class="details">
          <span id="h5">Think and Grow Rich</span>
          <p id="p">Novel by Napoleon Hill<br>
            <span id="price">$ 28.88</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Think and Grow Rich" >
            <input type="hidden" name="price" value="28.88" >

        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-6.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Elon Musk</span>
          <p id="p">Novel by Walter Isaacson<br>
            <span id="price">$ 32</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Elon Musk" >
            <input type="hidden" name="price" value="32" >

        </div>
      </div>
    </div></form>
    <!-- 2nd 3 book images ⬆️⬆️⬆️ -->
  </section>





  <section class="about-us" id="abt-US">
    <div class="about-img"></div>

    <div class="about-text">
      <h1 class="about-us-header">About us</h1>
      <p class="about-us-paras">Welcome to our e-book website! We're your digital library, dedicated to bringing readers
        a world of captivating
        e-books.</p>
      <p class="about-us-paras">Our mission is to make literature accessible to all, offering a vast collection spanning
        various genres and
        interests.</p>
      <p class="about-us-paras">With a passion for reading and technology, our team ensures a seamless, high-quality
        e-reading experience.</p>
      <p class="about-us-paras">Join us on this journey where knowledge knows no bounds, and let us be your trusted
        companion on your reading
        voyage.</p>
    </div>

  </section>
  <!-- about us done ⬆️⬆️⬆️ -->







  <!-- FINANCE BOOKS 🔽🔽🔽 -->

  <section class="section-4-finance">
    <div class="finance-books-text-div">
      <h3 class="FB">FINANCE BOOKS</h3>
      <p class="FBS">Master Your Finances: Dive into our E-book Treasury of Financial Wisdom.</p>
    </div>



    <div class="box">
    <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-9.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">I Will Teach You...</span>
          <p id="p">Novel by Ramit Sethi<br>
            <span id="price">$ 13.10</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="I Will Teach You to be rich" >
            <input type="hidden" name="price" value="13.10" >

        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-10.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Finance for People</span>
          <p id="p">Novel by Paco León<br>
            <span id="price">$ 12.33</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Finance for People" >
            <input type="hidden" name="price" value="12.33" >
        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-11.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Automatic Million...</span>
          <p id="p">Novel by David<br>
            <span id="price">$ 10</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Automatic Millionaire" >
            <input type="hidden" name="price" value="10" >
        </div>
      </div></form>


      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-15.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">Rich Dad Poor Dad</span>
          <p id="p">Novel by Robert Kiyosaki<br>
            <span id="price">$ 8.70</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Rich Dad Poor Dad" >
            <input type="hidden" name="price" value="8.70" >

        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-16.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">The Intelligent...</span>
          <p id="p">Novel by Benjamin
            <br>
            <span id="price">$ 11.31</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="The Intelligent investor" >
            <input type="hidden" name="price" value="11.31" >
        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-43.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">the art of not...</span>
          <p id="p">Novel by Carl Richards<br>
            <span id="price">$ 13.23</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="One-Page Financial plan" >
            <input type="hidden" name="price" value="10" >
        </div>
      </div>
    </div></form>
  </section>

  <!-- FINANCE BOOKS ⬆️⬆️⬆️ -->






  <section class="section-5-featured" id="featured-scroll">
    <div class="finance-books-text-div">
      <h3 class="FB">FEATURED BOOKS</h3>
      <p class="FBS">Explore Our Featured Gems: Unveil the World of Remarkable E-books.</p>
    </div>


<form action="manage.php" method="POST">
    <div class="box">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-7.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">Fractured Freedom</span>
          <p id="p">Novel by Shain Rose<br>
            <span id="price">$ 8.10</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Fractured Freedom" >
            <input type="hidden" name="price" value="8.10" >

        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-8.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Mindset</span>
          <p id="p">Novel by Carol Dweck<br>
            <span id="price">$ 14.74</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Mindset" >
            <input type="hidden" name="price" value="14.74" >
        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
      <div class="new-tag">
            <div class="new-txt">NEW</div>
          </div>
        <div class="imgBx">
          <img src="imagesMain/img-34.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">the art of war</span>
          <p id="p">Novel by J.L.Collins<br>
            <span id="price">$ 18.62</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Simple Path to wealth" >
            <input type="hidden" name="price" value="7" >
        </div>
      </div></form>



      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-18.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">Silent Patient
          </span>
          <p id="p">Novel by Alex Michaelides
            <br>
            <span id="price">$ 15.90</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Silent Patient" >
            <input type="hidden" name="price" value="15.90" >

        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-19.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Lord of the Rings</span>
          <p id="p">Novel by J.R.Tolkien<br>
            <span id="price">$ 13.83</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Lord of the Rings" >
            <input type="hidden" name="price" value="13.83" >
        </div>
      </div></form>

      <form action="manage.php" method="POST">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/img-20.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Book Thief</span>
          <p id="p">Novel by Markus Zusak
            <br>
            <span id="price">$ 7.32</span><br>
          </p>
          <button type="submit" name="add_to_cart" class="Add-To-Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Book Thief" >
            <input type="hidden" name="price" value="7.32" >
        </div>
      </div>
    </div>
    </form>
  </section>
  <!-- featured books ⬆️⬆️⬆️-->




  <!-- BLOG -->
  <section class="section-6-blog" id="blog-scroll">

    <div class="finance-books-text-div">
      <h3 class="FB">LATEST BLOG</h3>
      <p class="FBS">Unlocking Knowledge: Explore our E-book Blog for Insights and Inspiration.</p>
    </div>

    <div class="box">
      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/blog-1.jpg" class="img" alt="images">
        </div>
        <div class="details">
          <span id="h5">Portability</span>
          <p id="p-blog">Imagine carrying your entire book collection with you. E-books make it possible.
            Whether you're traveling or simply lounging at home, your favorite books are always at your
            fingertips.
          </p>


        </div>
      </div>


      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/blog-2.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Instant Access</span>
          <p id="p-blog">No more waiting for shipping. E-books can be downloaded instantly, allowing
            you to start reading your chosen title within minutes.
          </p>

        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img src="imagesMain/blog-3.jpg" alt="images">
        </div>
        <div class="details">
          <span id="h5">Searchability</span>
          <p id="p-blog">Looking for a specific quote or passage? E-books allow you to search the text for keywords,
            making
            research and reference much more efficient.<br>
          </p>

        </div>
      </div>
    </div>


  </section>
  <!-- blog done  ⬆️⬆️⬆️ -->



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

          <span class="span-footer"><a href="#abt-US" class="anchor-footer">about us</a></span><br>
          <span class="span-footer"><a href="#blog-scroll" class="anchor-footer">blog</a></span><br>
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