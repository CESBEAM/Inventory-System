<?php

  include 'configure.php';

  session_start();
  error_reporting(0);

  if (isset($_SESSION['canteenname'])){
    header("Location: productTab.php");
}

  if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result ->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['canteenname'] = $row['canteenname'];
        header("Location: productTab.php");
    }else {
      echo "<script>alert('Email or Password is Wrong')</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
  </head>
  <body>
    <section class="container">
      <form action = "" method="POST" id="my-form">
        <h2>Login</h2>
        <p>To login enter your email and password below</p>
        <div class="msg"></div>

        <div>
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter email" name = "email" value = "<?php echo $email; ?>" required>
        </div>

        <div>
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password" name = "password" value = "<?php echo $_POST['password']; ?>" required>
        </div>

        <button name = "submit" class="btn" value="LOGIN">LOGIN</button>
        <div class="sign-link">No account yet?<a href="register.php"> Sign up here</a></div>
      </form>
    </section>
  </body>
</html>