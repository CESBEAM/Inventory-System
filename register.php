<?php
   
 include 'configure.php';
 
  error_reporting(0);
  
  session_start();

  if (isset($_SESSION['canteenname'])){
    header("Location: login.php");
}

 if(isset($_POST['submit'])){
    $canteenname = $_POST['canteenname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conpassword = md5($_POST['conpassword']);

    if($password == $conpassword){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result -> num_rows > 0){
          $sql =  "INSERT INTO users (canteenname, email, password) VALUES ('$canteenname', '$email', '$password')";
          $result = mysqli_query($conn, $sql);
          if ($result){
            echo "<script>alert('Account Registration Success.')</script>";
            $canteenname = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['conpassword'] = "";
          }else{
            echo "<script>alert('Opps! Something wrong went.')</script>";
        }
          
        } else {
          echo "<script>alert('Email Already Exist.')</script>";
        }
        
    } else {
      echo "<script>alert('Password not matched.')</script>";
    }
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
          <input name ="canteenname" type="text" id="canteen-name" value = "<?php echo $canteenname; ?>" required>
        </div>

        <div>
          <label for="email-reg">Email</label>
          <input name = "email" type="email" id="email-reg" value = "<?php echo $email; ?>" required>
        </div>

        <div>
          <label for="password">Password</label>
          <input name = "password" type="password" id="password" value = "<?php echo $_POST['password']; ?>" required>
        </div>

        <div>
          <label for="con-password">Confirm Password</label>
          <input name ="conpassword" type="password" id="con-password" value = "<?php echo $_POST['conpassword']; ?>"  required>
        </div>

        <button name="submit" class="btn" value="SIGN UP">SIGN UP</button>

        <div class="sign-link">Already have an account?<a href="login.php"> Sign in</a></div>
      </form>
    </section>
  </body>
</html>