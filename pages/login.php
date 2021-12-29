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
      <form id="my-form">
        <h2>Login</h2>
        <p>To login enter your username and password below</p>
        <div class="msg"></div>

        <div>
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter email" required>
        </div>

        <div>
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password" required>
        </div>

        <button class="btn" value="LOGIN">LOGIN</button>
        <div class="sign-link">No account yet?<a href="../pages/register.html"> Sign up here</a></div>
      </form>
    </section>
  </body>
</html>