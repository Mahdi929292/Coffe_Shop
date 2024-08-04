<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeedot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="https://marketplace.canva.com/EAFLU7Mm3FI/1/0/1600w/canva-brown-and-beige-simple-minimalist-coffee-shop-circle-logo-ww1u6OsW_3o.jpg"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a class="logo" href="index.php">Coffee<span>.</span></a>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
          <li><a href="index.php">Home</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="about_us.php">About us</a></li>
          <li><a href="../login/login.php">Logout</a></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero-section">
    <div class="card-list">
    <a href="#" class="card-item">
            <img src="https://insanelygoodrecipes.com/wp-content/uploads/2020/07/Cup-Of-Creamy-Coffee.png" alt="Card Image">
            <span class="developer">White Moca</span>
            <h3>A "Sweeted" Coffee with White Milk.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="https://thumbs.dreamstime.com/b/coffee-cup-cafe-latte-beans-32206081.jpg" alt="Card Image">
            <span class="designer">Sugary Coffee</span>
            <h3>A "Sugared" hot coffee, very sweet.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="https://cdn.cnn.com/cnnnext/dam/assets/150929101049-black-coffee-stock-super-tease.jpg" alt="Card Image">
            <span class="editor">Miss Dark</span>
            <h3>A dark coffee, smells good.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
    </section>
    <section class="hero-section">
    <div class="card-list">
    <a href="#" class="card-item">
            <img src="https://www.thespruceeats.com/thmb/oUxhx54zsjVWfPlrgedJU0MZ-y0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/how-to-make-cappuccinos-766116-hero-01-a754d567739b4ee0b209305138ecb996.jpg" alt="Card Image">
            <span class="developer">Cappucino</span>
            <h3>A "White" lovely coffee.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2023/3/27/chocolate-frappuccino.jpg.rend.hgtvcom.476.381.suffix/1679946919979.jpeg" alt="Card Image">
            <span class="designer">Frapuccino</span>
            <h3>The dark cup, white cream.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="https://cafebarista.ca/cdn/shop/articles/comment-faire-un-flat-white-780461_1200x.jpg?v=1708469404" alt="Card Image">
            <span class="editor">Flat White</span>
            <h3>Looks old, very old.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
    </section>
  

    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");

      // Toggle mobile menu on hamburger button click
      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

      // Close mobile menu on close button click
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
    
  </body>
</html>