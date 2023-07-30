<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instant Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="navbar">
        <div class="navlogo border">
            <div class="logo"></div>
        </div>

        <div class="nav-address">
              <p style="font-size: small">Deliver to </p>
            <div class="add-icon">
                <i class="fa-solid fa-location-dot"></i>
                <p>India</p>
            </div>

        </div>


        <div class="navsearch">
              <select class="search-select">
                <option>All</option>
              </select>
              <input placeholder="Search Instant Shop" class="search-input">
            <div class="searchicon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <div class="navcart">
              <p>
            <i class="fa-solid fa-cart-shopping"></i>
            <b>cart</b></p>
        </div>

        <div class="return">
        <a href="logout.php" class="btn">logout</a>
             
        </div>

       
      </div>
    </header> 
        <div class="hero">

        </div>
      <div class="shop-section">

        <div class="box1 box">
              <div class="box-content">
                  <h2>Electronics</h2> 
                  <div class="box-image" style="background-image:url('electronics.jpg');"></div>
                  <a href="electronics.html">See more</a>
               </div>
        </div>


         <div class="box2 box">
              <div class="box-content">
                  <h2>Personal Care</h2> 
                  <div class="box-image" style="background-image:url('box2_image.jpg');"></div>
                  <a href="personal_care.html">See more</a>
              </div>
          </div>


         <div class="box3 box">
              <div class="box-content">
              <h2>Furniture</h2> 
              <div class="box-image" style="background-image:url('box3_image.jpg');"></div>
              <a href="furniture.html">See more</a>
              </div>
        </div>


         <div class="box4 box">
              <div class="box-content">
              <h2>Beauty Picks</h2> 
              <div class="box-image" style="background-image:url('box5_image.jpg');"></div>
              <a href="beauty.html">See more</a>
              </div>
          </div>

          <div class="box1 box">
            <div class="box-content">
                <h2>Pet Care</h2> 
                <div class="box-image" style="background-image:url('box6_image.jpg');"></div>
                <a href="petcare.html">See more</a>
             </div>
      </div>


       <div class="box2 box">
            <div class="box-content">
                <h2>Toys</h2> 
                <div class="box-image" style="background-image:url('box7_image.jpg');"></div>
                <a href="toys.html">See more</a>
            </div>
        </div>


       <div class="box3 box">
            <div class="box-content">
            <h2>Accesories</h2> 
            <div class="box-image" style="background-image:url('box8_image.jpg');"></div>
            <a href="accessories.html">See more</a>
            </div>
        </div>


       <div class="box4 box">
            <div class="box-content">
            <h2>Clothes</h2> 
            <div class="box-image" style="background-image:url('box1_image.jpg');"></div>
            <a href="clothes.html">See more</a>
            </div>
        </div>

      </div>  
    <footer>
      <div class="foot-panel1">
        <a href="#top">Back to top</a>
      </div>
    </footer>  
 
</body>
</html>