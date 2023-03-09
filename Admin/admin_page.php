<?php
//databaza
include '../Config/dbconnect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Style per dashboard  -->
   <link rel="stylesheet" href="css/adminstyle.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<!-- admin dashboard -->

<section class="dashboard">

    <h1 class="heading">Dashboard</h1>
    <div class="box-container">

<?php 


?>

    </div>

</section>


<!-- javascrip per button te navbar per responsive   -->
<script src="js/script.js"></script>

</body>
</html>