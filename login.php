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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="/styles/loginStyle.css">
</head>
<style>
    .form-group #email ,#password{
        margin-top: 1.5em;
       border: #9F9F9F 1px solid;
       border-radius: .5em;
    }
</style>
<body>
    <div class="login-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center">
                    <img src="/icons/usericon.svg" alt="">
                  Login </h2>
                <p>To login enter your email and password 
                    below</p>

                <div class="form-group">
                    
                    <input class="form-control"
                    id="email" placeholder="Email" name = "email" value = "<?php echo $email; ?>" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" id="password" placeholder="Password" name = "password" value = "<?php echo $_POST['password']; ?>" required>
                </div>

                
             
                <div class="form-group">
                    <button class="btn btn-success btn-block" name = "submit" class="btn" value="LOGIN">LOGIN</button>

                </div><a class="already" href="register.php">No account yet? Sign up here</a>
            </form>
        </div>
    </div>
</body>
</html>