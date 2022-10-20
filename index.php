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
    <!-- header section ends -->

    <!-- login form container  -->
    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>Login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>Forget password? <a href="#">Click here</a></p>
            <p>Don't have and account? <a href="#">Register now</a></p>
        </form>

    </div>

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3 style="color: black;">NEPAL , A NATURE'S MIRACLE</h3>
            <p style="color: black;">You plan to visit, Leave rest on Us !! ✈️</p>
            <a href="aboutus.php" class="btn">Know More</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>
    <section class="services" id="services">

        <h1 class="heading">
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>E</span>
            <span>S</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Affordable Hotels</h3>
                <p>Good services that are cheap cost less money than usual or than you expected.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>Food of a wide range of styles and cuisine types. </p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>Safety Guide</h3>
                <p>Your safety is your personal responsibilities in our hand.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>Around the Nepal</h3>
                <p>Navigating Nepal's mountainous, hills and terai terrain</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>Fastest Travel</h3>
                <p>Travel with bus, Cab, plane</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>Adventures</h3>
                <p>Want to feel the nature then Visit Us.</p>
            </div>

        </div>

    </section>
    <!-- home section ends -->

    <!-- packages section starts  -->
    <section class="packages" id="packages">

        <h1 class="heading">
            <span>D</span>
            <span>e</span>
            <span>s</span>
            <span>t</span>
            <span>i</span>
            <span>n</span>
            <span>a</span>
            <span>t</span>
            <span>i</span>
            <span>o</span>
            <span>n</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/pokhara.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Pokhara (PK-001)</h3>
                    <p>Get amazing view of Lakeside. You can also do Paragliding and all.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $300.00 <span>$400.00</span> </div>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/muktinath.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Muktinath (PK-002)</h3>
                    <p>Muktinath is a Vishnu temple, sacred to both Hindus and Buddhists.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $650.00 <span>$720.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/kathmandu.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Kathmandu (PK-003)</h3>
                    <p>Kathmandu is famous for its religious monuments across the city.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $190.00 <span>$250.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/janakpur.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Janakpur (Pk-004)</h3>
                    <p>Jay Shree Ram ! Want to know, where RAM got married , the birth place of SITA</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $380.00 <span>$420.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/lumbini.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Lumbini (Pk-005)</h3>
                    <p>Birth Place of Light of Asia aka LORD BUDDHA. Want some peace ? Visitr here.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $250.00 <span>$620.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/everest.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Everest (PK-006)</h3>
                    <p>Want to climb higher than your dreams? Never forget to visit worlds highest peak!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $360.00 <span>$420.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>
    </section>
    <!-- packages section ends -->





    <!-- gallery section starts  -->
    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>G</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.png" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

            <div class="box gallery__card">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>Nepal's Beauty</h3>
                    <p>Visit Nepal to get a lifetime experience of Heaven in earth itself while you still alive.</p>
                    <a href="#" class="btn">See more</a>
                </div>
            </div>

        </div>
    </section>

    <!-- gallery section ends -->
    <section class="packages" id="shop">
        <h1 class="heading">
            <span>s</span>
            <span>h</span>
            <span>o</span>
            <span>p</span>
            <span class="space"></span>
            <span>W</span>
            <span>i</span>
            <span>t</span>
            <span>h</span>
            <span class="space"></span>
            <span>u</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/camp.jpg" alt="">
                <div class="content">
                    <h3> Camping Tent </h3>
                    <p>Picnic Camping Portable Tent (4 Person)</p>
                    <div class="price"> $35.00 </div>
                    <a href="https://www.amazon.in/Egab-Picnic-Camping-Portable-Waterproof/dp/B07DPQQ66L/ref=sr_1_5?crid=2XANNZA2QO1RV&keywords=camping%2Btent&qid=1663240599&sprefix=camping%2Btent%2Caps%2C458&sr=8-5&th=1"
                        class="btn">Shop Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/Bag.jpg" alt="">
                <div class="content">
                    <h3> Trekking Bag</h3>
                    <p>Multiple compartments with zips keeps your items secure and separate.</p>
                    <div class="price"> $25.00 </div>
                    <a href="https://www.amazon.in/TRAWOC-Backpack-Trekking-Rucksack-Warranty/dp/B08PD87QWP/ref=sxin_18_slsr_d_i_fs4star_fa_cue_1_B08PD87QWP?content-id=amzn1.sym.a33bdcd4-0f7f-48bd-8bc3-6d0db1130d64%3Aamzn1.sym.a33bdcd4-0f7f-48bd-8bc3-6d0db1130d64&cv_ct_cx=trekking+bag&keywords=trekking+bag&pd_rd_i=B08PD87QWP&pd_rd_r=4c5271a2-f7b8-483a-8d22-ba6433173eef&pd_rd_w=SE2jc&pd_rd_wg=F3UKU&pf_rd_p=a33bdcd4-0f7f-48bd-8bc3-6d0db1130d64&pf_rd_r=KJYM43W5VVGYXP0T54A3&psc=1&qid=1663240678&sr=1-2-41e0d225-3819-4755-898e-7f0f48633b47"
                        class="btn">Shop Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/trekstick.jpg" alt="">
                <div class="content">
                    <h3> Trekking Hiking Pole with Compass </h3>
                    <p>The stick is Shock Absorbent, ideal for mountain Climbing and Ice Climbing.</p>
                    <div class="price"> $35.00 </div>
                    <a href="https://www.amazon.in/Lista-Adjustable-Trekking-Hiking-Multi-Colour/dp/B07TF4GLR1/ref=sr_1_7?crid=21PG2KAHXFHTS&keywords=trekking+stick&qid=1663240751&sprefix=trekking+stick%2Caps%2C312&sr=8-7"
                        class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/hikepant.jpg" alt="">
                <div class="content">
                    <h3> Hiking & Trekking Pants</h3>
                    <p>Hiking & Ski Pants available for your adventure hike in Winters or High Altitude or Skiing.</p>
                    <div class="price"> $35.00 </div>
                    <a href="https://www.amazon.in/Hiking-Trekking-Pants-Weather-Altitude/dp/B09Q169FCH/ref=sr_1_6?crid=1GPT8YX50T314&keywords=trekking%2Bpants%2Bfor%2Bmen%2Bwaterproof&qid=1663240248&sprefix=trekking%2Bpants%2Caps%2C604&sr=8-6&th=1"
                        class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/sleepingbag.jpg" alt="">
                <div class="content">
                    <h3> Travel Sleeping Bag </h3>
                    <p>Trajectory Travel Sleeping Bag for Camping Mountain Hiking Beaches and Train Travel.</p>
                    <div class="price"> $35.00 </div>
                    <a href="https://www.amazon.in/Trajectory-Bonfire-Sleeping-wallet-pocket/dp/B079DNPW99/ref=sr_1_48?keywords=trekking%2Bkit%2Bamazon&qid=1663240355&sr=8-48&th=1"
                        class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/bagwithwater.jpg" alt="">
                <div class="content">
                    <h3> Trekking Backpack with 2L Water Bladder </h3>
                    <p>2 L Leak Proof Water Reservoir, Military Water Storage Bladder Bag,</p>
                    <div class="price"> $30.00 </div>
                    <a href="https://www.amazon.in/Proberos%C2%AE-Trekking-Backpack-Waterproof-Professional/dp/B0B6VJJBP7/ref=sr_1_5?crid=Y6HTUP0TG9J4&keywords=Trekking+Backpack+with+2L+Water+Bladder&qid=1663240856&sprefix=trekking+backpack+with+2l+water+bladder%2Caps%2C211&sr=8-5"
                        class="btn">Shop Now</a>
                </div>
            </div>

        </div>
    </section>

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/mayadidi.png" alt="">
            </div>

            <form action="contact_form.php" method="post" class="contact-form">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" name="phone">
                    <input type="text" placeholder="subject" name="topic">
                </div>
                <textarea placeholder="Enter the Comments" name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="Send Message" name="send">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">
        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/brand1.png" alt=""></div>
                <div class="swiper-slide"><img src="images/brand2.png" alt=""></div>
                <div class="swiper-slide"><img src="images/brand3.png" alt=""></div>
                <div class="swiper-slide"><img src="images/brand4.png" alt=""></div>
                <div class="swiper-slide"><img src="images/brand5.png" alt=""></div>
                <div class="swiper-slide"><img src="images/brand6.png" alt=""></div>
            </div>
        </div>
    </section>

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>Our Offices 🏢</h3>
                <a href="#">Nepal</a>
                <a href="#">India</a>

            </div>
            <div class="box">
                <h3>Quick links 📎</h3>
                <a class="active" href="index.php"><i class="fa-solid fa-house-chimney"></i> Home</a>
                <a href="#services"><i class="fa-solid fa-gears"></i> Services</a>
                <a href="#packages"><i class="fa-solid fa-person-walking-luggage"></i> Packages</a>
                <a href="book.php"><i class="fa-solid fa-calendar-days"></i> Book</a>
                <a href="#shop"><i class="fa-solid fa-store"></i> Shop</a>
            </div>
            <div class="box">
                <h3>Follow us 🌏</h3>
                <a href="https://www.facebook.com/Nep-Yatra-100813746081162">Facebook</a>
                <a href="#">instagram</a>
                <a href="https://www.youtube.com/channel/UC1bLC1l6CADFjBPNrQzqSBw">YouTube</a>
            </div>

        </div>

        <h1 class="credit">Copyright © 2022 Created by<span>Anmol and Bijan</span> | All Rights Reserved! </h1>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/responses.js"></script>
    <script src="js/chat.js"></script>
</body>

</html>