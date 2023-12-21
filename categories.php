<?php 
  session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" /> -->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="styleCATEGORIES.css">
        <style>
            <?php include "styleCATEGORIES.css" ?>
        </style>
    <title>CATEGORIES</title>
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














    <!-- filter code ⬇️⬇️⬇️ -->

    <div class="container">
        <div class="row" id="search-div">
            <div class="col-sm-12 mb-3">
                <div class="input-container">
                    <input type="text" name="text" class="input" id="myFilter" onkeyup="myFunction()"
                        placeholder="search...">
                    <span class="icon">
                        <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2"
                                    stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                </div>
                <!-- <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()"
                    placeholder="Search for names.."> -->
            </div>
        </div>


        <div class="row" id="myItems">
            <div class="col-sm-12 mb-3" id="grid-div">

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="the rules of work.php" class="anc">
                                <img src="imagesMain/img-1.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">The rules of work</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$25</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>7,395</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>sep 10, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="never let me go.php" class="anc">
                                <img src="imagesMain/img-2.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">never let me go</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$21.75</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>2,965</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>jan 24, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="alchemist.php" class="anc">
                                <img src="imagesMain/img-3.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">The Alchemist</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$23.11</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>9,135</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jun 19, 2015</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="successful people.php" class="anc">
                                <img src="imagesMain/img-4.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">How Successful..</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$26.63</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>4,745</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 4, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="think-grow-rich.php" class="anc">
                                <img src="imagesMain/img-5" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Think and Grow Rich</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$28.88</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>1,265</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Nov 10, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="elon musk.php" class="anc">
                                <img src="imagesMain/img-6.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Elon Musk</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$32</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,865</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Sep 1, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="to be rich.php" class="anc">
                                <img src="imagesMain/img-9.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">I Will Teach You...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="finance.php" class="anc">
                                <img src="imagesMain/img-10.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Finance for People</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$12.33</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>8,395</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="Automatic Millionaire.php" class="anc">
                                <img src="imagesMain/img-11.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Automatic Million...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="atomichabit.php" class="anc">
                                <img src="imagesMain/img-44.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Atomic habit</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$4.98</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="rich dad.php" class="anc">
                                <img src="imagesMain/img-15.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Rich Dad Poor Dad</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$8.70</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>1,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="intelligent inverstor.php" class="anc">
                                <img src="imagesMain/img-16.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">The Intelligent...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$11.31</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="all quiet.php" class="anc">
                                <img src="imagesMain/img-35.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">All Quiet on the...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$19.14</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="fractured freedom.php" class="anc">
                                <img src="imagesMain/img-7.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Fractured Freedom</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$8.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>3,725</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="mindset.php" class="anc">
                                <img src="imagesMain/img-8.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Mindset</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$14.74</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>10,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="brief history of time.php" class="anc">
                                <img src="imagesMain/img-38.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">A Brief History of...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$11.55</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="silent patient.php" class="anc">
                                <img src="imagesMain/img-18.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Silent Patient</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$15.90</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>2,999</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="lord rings.php" class="anc">
                                <img src="imagesMain/img-19.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Lord of the Rings</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.83</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>7,001</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="book theif.php" class="anc">
                                <img src="imagesMain/img-20.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Book Thief</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$7.32</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>995</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="steve jobs.php" class="anc">
                                <img src="imagesMain/img-21.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Steve Jobs</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$18.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>5,795</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="young girl.php" class="anc">
                                <img src="imagesMain/img-22.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">the diary of a youn...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$16.80</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,251</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="becoming.php" class="anc">
                                <img src="imagesMain/img-23.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">becoming</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$11.90</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>1,255</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="ford.php" class="anc">
                                <img src="imagesMain/img-24.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">henry ford</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$14.25</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>3,815</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="hamilton.php" class="anc">
                                <img src="imagesMain/img-25.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">hamilton</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$9.33</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>4,455</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="1984.php" class="anc">
                                <img src="imagesMain/img-27.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">1984</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                
                

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="art of war.php" class="anc">
                                <img src="imagesMain/img-34.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">The Art of War</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$18.62</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>14,885</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="harry potter.php" class="anc">
                                <img src="imagesMain/img-36.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Harry Potter</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$15.63</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>9,365</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="6 of crows.php" class="anc">
                                <img src="imagesMain/img-49.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Six of Crows</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$12.13</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>9,365</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

              

                

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="david copper.php" class="anc">
                                <img src="imagesMain/img-39.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">David Copperfield</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$12.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>1,345</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="seventy two days.php" class="anc">
                                <img src="imagesMain/img-40.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Around the World...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>8,995</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="how to win friends.php" class="anc">
                                <img src="imagesMain/img-41.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">How to win friends...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$15.81</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>15,295</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="12 rules for life.php" class="anc">
                                <img src="imagesMain/img-42.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">12 Rules for Life</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,195</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="the subtle art.php" class="anc">
                                <img src="imagesMain/img-43.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">The Subtle Art of...</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.23</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>6,795</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="make your bed.php" class="anc">
                                <img src="imagesMain/img-45.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Make Your Bed</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$16.58</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>9,896</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="card">
                    <div class="card-body">

                        <div class="imgBx">
                            <a href="little lies.php" class="anc">
                                <img src="imagesMain/img-48.jpg" class="img" alt="images">
                            </a>
                        </div>
                        <div class="details">
                            <h5 class="card-title"><a href="#" id="h5">Big Little Lies</a></h5>
                            <div class="card-subtitle mb-2 text-muted" id="p">

                            </div>
                            <p class="card-text" id="price">$13.10</p>
                        </div>

                        <div class="line"></div>
                        <div class="viewers-published">
                            <div class="views">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <span>3,495</span>
                            </div>
                            <div class="published">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                <span>Jul 26, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
               

                


                <?php
                        // session_start();
                        $con=mysqli_connect("localhost","root","","eproject");
                        ?>
                        <?php 

                        $select = mysqli_query($con,"SELECT * FROM products");

                        ?>
                        <?Php

                            while($row = mysqli_fetch_assoc($select)){

                        ?>

                        <div class="card">
                            <div class="card-body">

                                <div class="imgBx">
                                    <a href="<?php echo $row['name'];echo".php" ?>" class="anc">
                                        <img src="ADMIN\uploaded_img/<?php echo $row['image']; ?>" class="img" alt="images">
                                    </a>
                                </div>
                                <div class="details">
                                    <h5 class="card-title"><a href="#" id="h5"><?php echo $row['name']; ?></a></h5>
                                    <div class="card-subtitle mb-2 text-muted" id="p">

                                    </div>
                                    <p class="card-text" id="price">$<?php echo $row['price']; ?></p>
                                </div>

                                <div class="line"></div>
                                <div class="viewers-published">
                                    <div class="views">
                                        <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                        <span>2,999</span>
                                    </div>
                                    <div class="published">
                                        <i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
                                        <span>Jul 26, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?Php
                            };
                        ?>

            </div>
        </div>





    </div>

    <!-- filter code ⬆️⬆️⬆️ -->





























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


        function myFunction() {
            var input, filter, cards, cardContainer, h5, title, i;
            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myItems");
            cards = cardContainer.getElementsByClassName("card");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".card-body h5.card-title");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }


    </script>
</body>

</html>