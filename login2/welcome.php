<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style2.css" />
</head>
<body>

    
<div class="search-box">
      <input type="text" placeholder="Search here..." />
    </div>

    <div class="nav-container">
      <div class="wrapper">
        <nav>
          <div class="logo">
            <img src="logo.png">
            
          </div>

          <ul class="nav-items">
            <li>
              <a href="#">home</a>
            </li>

            <li>
              <a href="#">buy</a>
            </li> 

            <li>
              <a href="#"> sell</a>
            </li>

            <li>
              <a href="index5.html">donate</a>
            </li>
            <li>
              <a href="#">about us</a>
            </li>
            <li>
            <a href="logout.php">Logout</a>
            </li>

            <li>
              <a class="nav-btn-container" href="#">
                <img class="search-btn" src="images/search-icon.svg" alt="" />
                <img class="close-btn" src="images/close-icon.svg" alt="" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="header-container">
      <div class="wrapper">
        <header>
          <div class="hero-content">
            <h1><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></h1>
            <p>
              I design beautiful websites & mobile apps that modern trends
              demand
            </p>
            <a href="#">
              Contact Me
            </a>
          </div>

          <div class="hero-image">
            <img src="images/image1.jpg" alt="" />
            <div class="photo-bg"></div>
          </div>
        </header>

        <div class="social-icons">
          <a href="#">
            <img src="images/instagram-logo.png" alt="" />
          </a>
          <a href="#">
            <img src="images/behance-logo.png" alt="" />
          </a>
          <a href="#">
            <img src="images/dribbble-logo.png" alt="" />
          </a>
          
        </div>
      </div>
    </div>

    <script src="main.js"></script>
    
    
</body>
</html>