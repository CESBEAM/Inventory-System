<?php
   
 include 'configure.php';
  
 if(isset($_POST['submit'])){
    $canteenname = $_POST['canteenname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conpassword = md5($_POST['conpassword']);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
    <section class="container">
        <form action="" method="POST" id="my-form">
          <h2>Sign up</h2>
          <div class="msg"></div>

          <div>
            <label for="canteenName">Canteen Name</label>
            <input name ="canteenname" type="text" id="canteen-name" required>
          </div>

          <div>
            <label for="email-reg">Email</label>
            <input name = "email" type="email" id="email-reg" required>
          </div>

          <div>
            <label for="password">Password</label>
            <input name = "password" type="password" id="password" required>
          </div>

          <div>
            <label for="con-password">Confirm Password</label>
            <input name="conpassword" type="password" id="con-password" required>
          </div>

          <button name="submit" class="btn" value="SIGN UP">SIGN UP</button>
        
          <div class="sign-link">Already have an account?<a href="../pages/login.html"> Sign in</a></div>
        </form>
      </section>
</body>
</html>