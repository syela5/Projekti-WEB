<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title> 
   <!--swipper css link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--costume css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>
  <body>

   <!--header section starts-->
   <section class="header">
      <a href="home.php" class="logo">travel.</a>
      <nav class="navbar">
      <a href ="home.php">home</a>
      <a href ="about.php">about</a>
      <a href ="package.php">package</a>
      <a href ="book.php" >book</a>
      </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
   
   </section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="img/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="img/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="img/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="img/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="img/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="img/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="img/111.webp" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Your Time Is Valuable, And You Should Not Have To Waste It Looking For The Perfect Holiday.Our Travel Agency Can Help You With That...</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->
<!--home contact starts-->
<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>"If you need assistance or have any questions about your travels, don't hesitate to contact us. We're here to help!"</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>
<!--home contact ends-->


<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> user@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Prishtine, Kosova - 10130
 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
   </div>
   <div class="credit"> created by <span>web designer</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->



<!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!--costume js file link-->
  <script src="js/script.js"> </script>
 </body>
</html>