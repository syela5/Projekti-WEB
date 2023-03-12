<?php

@include '../Config/dbconnect.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($rowCount > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_destinations.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'Email ose passwordi gabim!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

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
   
<section class="form-container">

   <form action="" method="POST">
      <h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <input type="submit" value="login now" class="btn" name="submit">
      <p>Im New Here <br> <a href="register.php">Signup now</a></p>
   </form>

</section>


</body>

<script>
    function validateForm() {
        // Get form inputs
       
        var email = document.forms[0]["email"].value;
        var password = document.forms[0]["pass"].value;
        
        
        // Check if name is not empty
        
        
        // Check if email is valid
        if (!isValidEmail(email)) {
            alert("Please enter a valid email address");
            return false;
        }
        
        // Check if password is at least 8 characters long
        if (password.length < 8) {
            alert("Password must be at least 8 characters long");
            return false;
        }
   
        return true;
    }
    
    // Helper function to check if email is valid
    function isValidEmail(email) {
        var regex = /\S+@\S+\.\S+/;
        return regex.test(email);
    }
</script>
</html>