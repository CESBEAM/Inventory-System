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
      <form action="regconfig.php" method="post" id="my-form">
        <h2>Sign up</h2>

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

        <div>
          <label for="canteenName">Canteen Name</label>
          <?php if (isset($_GET['canteenName'])) { ?>
          <input type="text" name ="canteenname"  id="canteen-name" placeholder = "Enter canteen name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="canteenname" 
                      placeholder="Enter canteen name"><br>
          <?php }?>
        </div>

        <div>
          <label for="email-reg">Email</label>
          <?php if (isset($_GET['email'])) { ?>
          <input type="email" name = "email" id="email-reg" placeholder = "Enter your email" value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Enter email"><br>
          <?php }?>
        
        </div>

        <div>
          <label>Password</label>
          <input type="password" name = "password" id="password" placeholder = "Enter your password"><br>
        </div>

        <div>
          <label>Confirm Password</label>
          <input type="password" name ="conpassword" id="con-password" placeholder = "Re enter your password"><br>
        </div>

        <button name="submit" class="btn" value="SIGN UP">SIGN UP</button>

        <div class="sign-link">Already have an account?<a href="login.php"> Sign in</a></div>
      </form>
    </section>
  </body>
</html>