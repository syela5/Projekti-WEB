<?php

@include '../Config/dbconnect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['update_destination'])){

   $pid = $_POST['pid'];
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $place = $_POST['place'];
   $place = filter_var($place, FILTER_SANITIZE_STRING);
   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $old_image = $_POST['old_image'];

   $update_destination = $conn->prepare("UPDATE `destinations` SET name = ?, place = ?, details = ?, price = ? WHERE id = ?");
   $update_destination->execute([$name, $category, $details, $price, $pid]);

   $message[] = 'Destination updated successfully!';

   if(!empty($image)){
      if($image_size > 2000000){
         $message[] = 'Madhesia e fotos shum e madhe!';
      }else{

         $update_image = $conn->prepare("UPDATE `destinations` SET image = ? WHERE id = ?");
         $update_image->execute([$image, $pid]);

         if($update_image){
            move_uploaded_file($image_tmp_name, $image_folder);
            unlink('uploaded_img/'.$old_image);
            $message[] = 'image updated successfully!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Destinations</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminstyle.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="update-product">

   <h1 class="title">Edit Destinations</h1>   

   <?php
      $update_id = $_GET['update'];
      $select_destination = $conn->prepare("SELECT * FROM `destinations` WHERE id = ?");
      $select_destination->execute([$update_id]);
      if($select_destination->rowCount() > 0){
         while($fetch_destination = $select_destination->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="old_image" value="<?= $fetch_destination['image']; ?>">
      <input type="hidden" name="pid" value="<?= $fetch_destination['id']; ?>">
      <img src="uploaded_img/<?= $fetch_destination['image']; ?>" alt="">
      <input type="text" name="name" placeholder="Write destination  name" required class="box" value="<?= $fetch_destination['name']; ?>">
      <input type="number" name="price" min="0" placeholder="Write destination price" required class="box" value="<?= $fetch_destination['price']; ?>">
      <select name="category" class="box" required>
         <option selected><?= $fetch_destination['place']; ?></option>
         <option value="vegitables">vegitables</option>
         <option value="fruits">fruits</option>
         <option value="meat">meat</option>
         <option value="fish">fish</option>
      </select>
      <textarea name="details" required placeholder="Write Destination details" class="box" cols="30" rows="10"><?= $fetch_destination['details']; ?></textarea>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <div class="flex-btn">
         <input type="submit" class="btn" value="update product" name="update_product">
         <a href="admin_destinations.php" class="option-btn">Back</a>
      </div>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">No Destination found!</p>';
      }
   ?>

</section>



<script src="js/script.js"></script>

</body>
</html>