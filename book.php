<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nep Yatra</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav.png" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon (2).png" />

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <!--fontawesome   -->
    <script src="https://kit.fontawesome.com/dc1ffc8683.js" crossorigin="anonymous"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
        integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#home" class="logo"><span>Nep</span>Yatra✈️</i></a>

        <nav class="navbar">
            <a class="active" href="index.php"><i class="fa-solid fa-house-chimney"></i> Home</a>
            <a href="#services"><i class="fa-solid fa-gears"></i> Services</a>
            <a href="packages.php"><i class="fa-solid fa-person-walking-luggage"></i> Packages</a>
            <a href="book.php"><i class="fa-solid fa-calendar-days"></i> Book</a>
            <a href="shop.php"><i class="fa-solid fa-store"></i> Shop</a>
            <a href="aboutus.php"><i class="fa-solid fa-user"></i> About Us</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="cart.html"></a><i class="fa-solid fa-cart-shopping" id="cart-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- book section starts  -->

    <section class="book" id="book">
        <br>
        <br>

        <h1 class="heading">
            <span>B</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>N</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/nepyatra.gif" alt="">
            </div>

            <form action="book_form.php" method="post" class="book-form">
                <div class="inputBox">
                    <h3>name 🧑:</h3>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <h3>email 📧:</h3>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputBox">
                    <h3>Phone No. 📞 :</h3>
                    <input type="number" placeholder="Enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <h3>address 📍:</h3>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <h3>Destination 🗺️:</h3>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <h3>Trip Members 🧑🏼‍🤝‍🧑🏼 :</h3>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <h3>Package Code 🔢:</h3>
                    <input type="text" placeholder="Your Package" name="code">
                </div>
                <div class="inputBox">
                    <h3>Arrivals Date ↘️ :</h3>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <h3>Leaving Date ↗️ :</h3>
                    <input type="date" name="leaving">
                </div>
                <input type="submit" class="btn" value="Book now" name="send">
            </form>

        </div>

    </section>

    <!-- book section ends -->
    <!-- footer section  -->

    <section class="footer">



        <h1 class="credit">Copyright © 2022 Created by<span>Anmol and Bijan</span> | All Rights Reserved! </h1>

    </section>



























    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>