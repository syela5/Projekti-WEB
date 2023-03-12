<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Travel agency</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="destination.php">Destinations</a>
         <a href="booking.php">Bookings</a>
         <a href="about.php">About us</a>
         <a href="contact.php">Contact us</a>
      </nav>


      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>

         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `dashb` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
         ?>

        <a href="cart.php"><i class="fas fa-suitcase"></i><span>(<?= $count_cart_items->rowCount(); ?>)</span></a>

         <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>

</header>

<script src="js/script.js"></script> 