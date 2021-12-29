<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulsu Canteen</title>
    <link rel="stylesheet" href="../styles/homeStyle.css">
  </head>
  <body>
    <aside>
      <header>
        <div class="logo">
          <a href="#">CONPYX</a>
        </div>
        <div class="menu">
          <img src="../icons/menuwh.svg" alt="">
        </div>
      </header>

      <nav>
        <a href="" class="logomob">CONPYX</a>
        <ul>
          <li><a href="../pages/bulsu.html">Bulsu</a></li>
          <li><a href="../pages/contact.html">Contact us</a></li>
          <li>
            <a href="../pages/register.html">
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
          <a href ="../pages/login.html">
            <button class="btn-login">LOGIN</button>
          </a>

          <a href ="../pages/register.html">
            <button class="btn-reg">REGISTER</button>
          </a>
        </div>

        <div class="details-content">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ratione aliquam esse a voluptas sed fugiat ipsam ut, numquam dolorem repellendus non molestias! Quisquam vel soluta velit. Ea repellat minus sint harum, ut eum similique sed dolore accusantium eos nostrum tempora optio nesciunt neque numquam dicta soluta aut omnis ad perferendis alias obcaecati quis at. Facere accusantium eos enim. Quasi corrupti harum in tempore odit, fugiat, alias, voluptatibus itaque quibusdam fuga cupiditate id delectus rerum! Vero molestiae neque earum porro quaerat cum minus rem atque. Rem quasi mollitia voluptatum, repellendus dolor maxime animi dolorum recusandae. Debitis voluptatem aperiam temporibus nostrum!</p>
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
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium ratione aliquam esse a voluptas sed fugiat ipsam ut, numquam dolorem repellendus non molestias! Quisquam vel soluta velit. Ea repellat minus sint harum, ut eum similique sed dolore accusantium eos nostrum tempora optio nesciunt neque numquam dicta soluta aut omnis ad perferendis alias obcaecati quis at. Facere accusantium eos enim. Quasi corrupti harum in tempore odit, fugiat, alias, voluptatibus itaque quibusdam fuga cupiditate id delectus rerum! Vero molestiae neque earum porro quaerat cum minus rem atque. Rem quasi mollitia voluptatum, repellendus dolor maxime animi dolorum recusandae. Debitis voluptatem aperiam temporibus nostrum!</p>
      </div>

      <div class="desk-img">
        <img src="../Images/deskviewImg.svg" alt="">
      </div>

      <div class="desk-btn">
        <a href ="../pages/login.html">
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