<?php
session_start();

// Check if the username is set in the session
if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: index.php");
    exit();
}
else{
  // echo $_SESSION['username'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check if the 'price' field is set in the POST data
  if (isset($_POST['price'])) {
      // Save the price in the session
      $_SESSION['price'] = $_POST['price'];
      
      // Redirect to the same page to prevent form resubmission
      header("Location: order.php");
      exit(); // Always exit after redirecting to prevent further execution
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../styles/dashboard.css" />

    <!-- font awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <!-- 
        STRUCTURE  
    Navbar: Place | Food | Drinks |Your order

    ***
    food item card with text to speech option too
    ***

    food: pizza, chowmin, momo, biryani, burger, spicy wings, chicken chillie

    drinks: fanta, sprite, dew, 
    
    footer with footer links
    -->

    <header>
      <span class="username"> Welcome <?php echo $_SESSION["username"] ?>!</span>
      <div class="logo-container">
        <img src="../assets/chulo_logo.png" class="logo" alt="Chulo logo" />
        <div class="logo-texts">
          <h1 class="logo-title">CHULO</h1>
          <p class="logo-quote">Order just one click away.</p>
        </div>
      </div>
    </header>
    <nav aria-label="Main">
      <ul class="nav-list">
        <li><a href="" class="nav-link" aria-current="page">Menu</a></li>
        <li class="food-li"><a href="" class="nav-link">Food</a></li>
        <!-- <li><a href="" class="nav-link">Drinks</a></li> -->
        <li><a href="" class="nav-link">Your Order</a></li>
      </ul>
    </nav>
    <marquee
      behavior="scroll"
      direction="left"
      scrollamount="10"
      class="marquee"
      >Welcome to CHULO. Get best food delivered in your home with just one
      click. Don't miss 10% discount every friday and saturday!!!</marquee
    >

    <main>
      <div class="food-card-container" role="list">
        <!-- card 1 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/pizza.jpg" alt="Pizza" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Pizza')"
              ></i>
              <h3 class="food-title">Pizza</h3>
            </div>
            <p class="price">Rs 250</p>
            <button class="order-btn" type="submit">Order Now</button>
          </div>
        </article>

        <!-- card 2 -->
        <form class="food-card" role="listitem" action="dashboard.php" method="post">
        <input type="hidden" name="food-title" value="Chowmin" />
        <input type="hidden" name="price" value="120" />
          <div class="card-img-container">
            <img src="../assets/chowmin.jpg" alt="Chowmin" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Chowmin')"
              ></i>
              <h3 class="food-title">Chowmin</h3>
            </div>
            <p class="price">Rs 120</p>
            <button class="order-btn" type="submit">Order Now</button>
          </div>
        </form>

        <!-- fake card  -->

        <!-- card 1 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/pizza.jpg" alt="Pizza" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Pizza')"
              ></i>
              <h3 class="food-title">Pizza</h3>
            </div>
            <p class="price">Rs 250</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>

        <!-- card 2 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/chowmin.jpg" alt="Chowmin" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Chowmin')"
              ></i>
              <h3 class="food-title">Chowmin</h3>
            </div>
            <p class="price">Rs 120</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>
        <!-- card 3 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/chicken_chillie.jpeg" alt="Chicken Chillie" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Chicken Chillie')"
              ></i>
              <h3 class="food-title">Chicken Chillie</h3>
            </div>
            <p class="price">Rs 250</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>

        <!-- card 4 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/spicy_wings.jpg" alt="Spicy Wings" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Spicy Wings')"
              ></i>
              <h3 class="food-title">Spicy Wings</h3>
            </div>
            <p class="price">Rs 200</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>
        <!-- card 5 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/burger.jpg" alt="Burger" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Burger')"
              ></i>
              <h3 class="food-title">Burger</h3>
            </div>
            <p class="price">Rs 250</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>

        <!-- card 6 -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/biryani.jpg" alt="Biryani" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Biryani')"
              ></i>
              <h3 class="food-title">Biryani</h3>
            </div>
            <p class="price">Rs 200</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>

        <!-- card 7  -->
        <article class="food-card" role="listitem">
          <div class="card-img-container">
            <img src="../assets/momo.jpg" alt="Momo" />
          </div>
          <div class="card-text-section">
            <div class="title-container">
              <i
                class="fas fa-volume-up sound-icon"
                onclick="speak('Momo')"
              ></i>
              <h3 class="food-title">Momo</h3>
            </div>
            <p class="price">Rs 120</p>
            <button class="order-btn">Order Now</button>
          </div>
        </article>
      </div>
    </main>
    <hr />
    <!-- <hr> -->

    <footer>
      <div class="logo-section">
        <img src="../assets/logo.png" alt="Footer Logo" />
      </div>
      <div class="logo-and-contact-section">
        
        <ul class="footer-list">
          <li><a href="" class="footer-link link-title">Contact Us</a></li>
          <li>
            <a href="" class="footer-link"
              ><i class="fas fa-phone"></i> 9812345678
            </a>
          </li>
          <li>
            <a href="" class="footer-link">
              <i class="fas fa-map"></i>Nepal, Kathmandu</a
            >
          </li>
          <li>
            <a href="" class="footer-link enquiry"
              ><i class="fas fa-question-circle"></i>For Enquiry</a
            >
          </li>
        </ul>
      </div>
      <div class="social-link-container">
        <h2>Social Media</h2>
        <div class="social-links-section">
          <a href="" class="insta-text"
            ><i class="fab fa-instagram"></i>insta/Chulo
          </a>
          <a href="" class="facebook-text"
            ><i class="fab fa-facebook"></i>Facebook/Chulo</a
          >
        </div>
      </div>
      <div class="qr-section">
        <h2 class="qr-title">Payment Methods</h2>
        <div class="qr-container">
          <img class="qr-img" src="../assets/esewa.jpeg" alt="esewa qr code" />
          <!-- <img class="qr-img" src="../assets/bank.jpeg" alt="MoBank qr code" /> -->
        </div>
      </div>
    </footer>

    <script src="db.js"></script>
  </body>
</html>
