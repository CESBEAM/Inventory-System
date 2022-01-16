
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
    <link rel="stylesheet" href="/styles/register.css">
</head>
<style>
    .form-group  #canteen-name, #email-reg ,#password ,#con-password{
        margin-top: 1.5em;
       border: #9F9F9F 1px solid;
       border-radius: .5em;
    }
</style>
<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder">
            
            </div>
            <form action="regconfig.php" method="post" id="my-form">
                <h2 class="text-center">
                  Sign up </h2>
                <p>Be part of our organization!</p>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
       
                 <?php if (isset($_GET['success'])) { ?>
                      <p class="success"><?php echo $_GET['success']; ?></p>
                 <?php } ?>

                <div class="form-group">
                    <?php if (isset($_GET['canteenName'])) { ?>
                    <input class="form-control" type="text" name ="canteenname"  id="canteen-name" placeholder = "Enter canteen name" value="<?php echo $_GET['name']; ?>">
                    <?php }else{ ?>
                        <input class="form-control"
                               id="canteen-name"
                                type="text" 
                               name="canteenname" 
                               placeholder="Enter canteen name">
                   <?php }?>
                </div>

                <div class="form-group">
                    <?php if (isset($_GET['email'])) { ?>
                    <input class="form-control" type="email" name = "email" id="email-reg" placeholder = "Enter your email" value="<?php echo $_GET['email']; ?>">
                    <?php }else{ ?>
                        <input class="form-control"
                              id="email-reg"
                              type="email" 
                               name="email" 
                               placeholder="Enter email">
                   <?php }?>
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name = "password" id="password" placeholder = "Enter your password">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name ="conpassword" id="con-password" placeholder = "Re enter your password">
                </div>

                
             
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit" name="submit" value="SIGN UP">Sign up</button>

                </div><a class="already" href="login.php">Have already account? Sign in here</a>
            </form>
        </div>
    </div>
</body>
</html>