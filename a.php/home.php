<?php

@include '../Config/dbconnect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

    $pid = $_POST['pid'];
    $pid = filter_var($pid, FILTER_SANITIZE_STRING);
    $p_name = $_POST['p_name'];
    $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
    $p_price = $_POST['p_price'];
    $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
    $p_image = $_POST['p_image'];
    $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
    $p_qty = $_POST['p_qty'];
    $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);
 
    $check_cart_numbers = $conn->prepare("SELECT * FROM `dashb` WHERE name = ? AND user_id = ?");
    $check_cart_numbers->execute([$p_name, $user_id]);
 
    if($check_cart_numbers->rowCount() > 0){
       $message[] = 'already added to cart!';
    }else{
 
       $insert_cart = $conn->prepare("INSERT INTO `dashb`(user_id, pid, name, price, number, image) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
       $message[] = 'added to cart!';
    }
 
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<!-- home section starts  -->

<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Travel with us</span> 
         <p>Explore, discover,travel arround the world </p>
         
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">Visit by places</h1>

   <div class="box-container">

      <div class="box">
         <img src="../img/p1.jpg" alt="">
         <h3>Beach</h3>
         <p>Beach travel is one of the most popular types of travel around the world. Whether you're seeking a tropical paradise, a secluded cove, or a bustling boardwalk, the beach offers something for everyone.</p>
         <a href="category.php?category=beach" class="btn">Beach</a>
      </div>

      <div class="box">
         <img src="../img/p2.jpeg" alt="">
         <h3>Mount</h3>
         <p>Hiking through pristine wilderness, taking in the stunning views of snow-capped peaks, and breathing in the crisp mountain air can be a truly invigorating experience. .</p>
         <a href="category.php?category=mount" class="btn">Mount</a>
      </div>

      <div class="box">
         <img src="../img/p5.jpg" alt="">
         <h3>Citys</h3>
         <p>City travel is an exciting way to explore new cultures and discover hidden gems in urban landscapes. From bustling metropolises to quaint towns, each city has its own unique character and charms.</p>
         <a href="category.php?category=citys" class="btn">Citys</a>
      </div>

      <div class="box">
         <img src="../img/p6.jpg" alt="">
         <h3>History places</h3>
         <p>History places travel is a wonderful way to explore the world's rich cultural heritage and learn about the events and people that have shaped our world.</p>
         <a href="category.php?category=historyplaces" class="btn">History places</a>
      </div>

   </div>

</section>

<section class="products">

   <h1 class="title">Lastest Destinations</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `destinations` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   
   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no destinatiob added yet!</p>';
   }
   ?>

   </div>

</section>




<?php include 'footer.php'; ?>
<script src="js/script.js"></script> 

</body>
</html>