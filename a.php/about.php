<?php

@include '../Config/dbconnect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="../img/111.webp" alt="">
         <h3>why choose us?</h3>
         <p>Your time is valuable, and you should not have to waste it looking for the perfect holiday.Our travel agency can help you with that.</p>
         <p>Our agency can assist you in defining what you want to receive out of your holiday. If anything goes wrong during your journey, you can count on us to help you. A travel agency like us will propose and make other travel plans, assist you in dealing with any travel emergencies, and connect you with the correct local individuals to meet your needs.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

      <div class="box">
         <img src="../img/pr.jpeg" alt="">
         <h3>what we provide?</h3>
         <p>As a travel agency, we provide a range of services to make your travel experience as smooth and enjoyable as possible.</p>
         <p>As a travel agency, we understand that planning a trip can be a time-consuming and sometimes overwhelming task. That's why we provide a range of services to help you make the most of your travel experience. Our travel agents are experienced professionals who can assist you with every aspect of your trip, from initial planning to post-trip feedback.</p>
         <a href="booking.php" class="btn">Book know</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="../img/rew.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ale Marty</h3>
      </div>

      <div class="box">
         <img src="../img/few3.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John deo</h3>
      </div>

      <div class="box">
         <img src="../img/few4.avif" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maja Senta</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>