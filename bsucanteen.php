<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulsu Canteen</title>
    <link rel="stylesheet" href="../styles/homeLogoutStyle.css">
    <link rel="shortcut icon" type="image/png" href="icons/favIcon.png">
  </head>
  <body>
    <aside>
      <header>
        <div class="logo">
          <a href="contact.php">CONPYX</a>
        </div>
        <div class="menu">
          <img src="../icons/menuwh.svg" alt="">
        </div>
      </header>

      <nav>
        <a href="contact.php" class="logomob">CONPYX</a>
        <ul>
          <li><a href="bulsu.php">Bulsu</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li>
            <a href="register.php">
              <button class="btn-reg-mob">REGISTER</button>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <main>
      <div class="main-content">
        <img src="../Images/mobileImg.svg" class="mob-content">
        <div class="text-content">
          <h1>Great life with best solutions for real businesses</h1>
        </div>

        <div class="button-area">
          <a href ="login.php">
            <button class="btn-login">LOGIN</button>
          </a>

          <a href ="register.php">
            <button class="btn-reg">REGISTER</button>
          </a>
        </div>

        <div class="details-content">
          <p>It is a web-based inventory management system for tracking inventory levels, orders, sales and deliveries.It can also be used in the manufacturing industry to create a work order, bill of materials and other production-related documents. Companies use inventory management software to avoid product overstock and outages. This inventory system process your goods throughout your entire supply chain, from purchasing to production to end sales. It governs how you approach inventory management for your business.</p>
        </div>
      </div>
    </main>

    <!--Desk view!!! -->

    <div class="desk-version">
      <img src="../Images/deskviewImg.svg" class="des-content">

      <div class="text-content-desk">
        <h1>Great life with best solutions for real businesses</h1>
      </div>

      <div class="desk-text">
        <p>It is a web-based inventory management system for tracking inventory levels, orders, sales and deliveries.It can also be used in the manufacturing industry to create a work order, bill of materials and other production-related documents. Companies use inventory management software to avoid product overstock and outages. This inventory system process your goods throughout your entire supply chain, from purchasing to production to end sales. It governs how you approach inventory management for your business.</p>
      </div>

      <div class="desk-img">
        <img src="../Images/deskviewImg.svg" alt="">
      </div>

      <div class="desk-btn">
        <a href ="login.php">
          <button class="desk-login">LOGIN</button>
        </a>
      </div>
    </div>

    <script>

      (function() {
        var menu = document.querySelector('ul'),
        menulink = document.querySelector('img');

        menulink.addEventListener('click', function(e) {
          menu.classList.toggle('active');
          e.preventDefault();
        });
      })();

    </script>
  </body>
</html>