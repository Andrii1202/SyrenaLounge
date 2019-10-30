<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.v2.3.css">
</head>

<body>
    <!-- <a href="#">
        <div class="messenger"></div>
    </a> -->
    <img class="left-wave" src="img/Menu_left_wave.png" alt="Menu left wave">
    <img class="right-wave" src="img/Menu_right_wave.png" alt="Menu left wave">
    <div class="menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
        <div class="menu__box">
            <ul class="left-menu">
                <li class="active-menu"><a href="index.php">home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="gallery.php">gallery</a></li>
            </ul>
            <img class="logo" src="img/SYRENA-logo-turkus.png" alt="Logo">
            <ul class="right-menu">
                <li><a href="#">private events</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="contacts.php">contact</a></li>
            </ul>
            <ul class="lang-menu">
                <li><a href="#">pl</a></li>
                <li>|</li>
                <li><a href="#">en</a></li>
            </ul>
        </div>
    </div>

    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__item slider__item1">
                <h1>Syrena welcome you</h1>
                <h3>Everyday 12:00-23:00</h3>
            </div>
            <div class="slider__item slider__item2">
                <img src="img/logo-white.png" alt="Logo">
                <h3>genuinely best place to visit</h3>
            </div>
        </div>
        <a class="slider__control slider__control_left slider__control_show" href="#" role="button">PREV</a>
        <a class="slider__control slider__control_right slider__control_show" href="#" role="button"><pre>NEXT  </pre></a>
    </div>

    <div class="syrena-lounge">
        <h2>Syrena lounge</h2>
        <p>
            <img src="" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in vo- luptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <img src="" alt="">
        </p>
        <div class="icon-block">
            <a href="#"><img src="img/face_blue.png" alt="facebook"></a>
            <a href="#"><img src="img/insta_blue.png" alt=""></a>
            <a href="#"><img src="img/pinter_blue.png" alt=""></a>
            <a href="#"><img src="img/trip_blue.png" alt=""></a>
            <a href="#"><img src="img/every_blue.png" alt=""></a>
        </div>
    </div>

    <div class="reservation">
        <div class="wrap">
            <h2>reservation</h2>
            <h4>book your table now</h4>
            <p>
                Please be informed that sending an inquiry does not confirm a table reservation. <br>We promise to contact you back as soon as possible. Please feel free to call us:<br>
                <span>+48 732 559 956</span>
            </p>
            <form action="mail.php" method="POST">
                <input id="name" name="user_name" type="text" placeholder="Name">
                <input type="email" name="user_email" placeholder="Mail">
                <input class="form-date" name="user_date" id="date" type="date" placeholder="Please select a day" data-placeholder="Please select a day" required aria-required="true">
                <input class="form-time" name="user_time" id="time" type="time" placeholder="Choose time" data-placeholder="Choose time" required aria-required="true">
                <input type="number" name="user_amount" placeholder="Amount of person">
                <div class="line"></div>
                <button type="submit">Confirm</button>
            </form>
            <div class="reservation-left"></div>
            <div class="reservation-right"></div>
        </div>
    </div>

    <div class="guestbook">
        <h2>guestbook</h2>
        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked="">
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <input type="radio" name="slider" id="slide5">

            <div id="slides">
                <div id="overflow">
                    <div class="inner">
                        <div class="page page1">
                            <h4>For me cooking is an expression</h4>
                            <p class="review">of the land where you are and the culture of the place."</p>
                            <div class="stars">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <p>John Doe</p>
                            </div>
                        </div>
                        <div class="page page1">
                            <h4>For me cooking is an expression</h4>
                            <p class="review">of the land where you are and the culture of the place."</p>
                            <div class="stars">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <p>John Doe</p>
                            </div>
                        </div>
                        <div class="page page1">
                            <h4>For me cooking is an expression</h4>
                            <p class="review">of the land where you are and the culture of the place."</p>
                            <div class="stars">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <p>John Doe</p>
                            </div>
                        </div>
                        <div class="page page1">
                            <h4>For me cooking is an expression</h4>
                            <p class="review">of the land where you are and the culture of the place."</p>
                            <div class="stars">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <p>John Doe</p>
                            </div>
                        </div>
                        <div class="page page1">
                            <h4>For me cooking is an expression</h4>
                            <p class="review">of the land where you are and the culture of the place."</p>
                            <div class="stars">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <img src="img/star.png" alt="">
                                <p>John Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="active">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
                <label for="slide5"></label>
            </div>
        </div>
        <div class="image-and-trip">
            <img src="img/guestbook-image-plate.png" alt="">
        </div>
    </div>

    <div class="footer">
        <div class="logo">
            <img src="img/logo-white.png" alt="">
        </div>
        <div class="mapa">
            <ul class="footer-menu">
                <h4>SITE MAP</h4>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="#">Private events</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>
            <ul class="icons">
                <h4>Social media</h4>
                <a href="#">
                    <li>
                        <img src="img/face_white.png" alt="facebook">
                    </li>
                </a>
                <a href="#">
                    <li><img src="img/insta_white.png" alt=""></li>
                </a>
                <a href="#">
                    <li><img src="img/pinter_white.png" alt=""></li>
                </a>
                <a href="#">
                    <li><img src="img/trip_white.png" alt=""></li>
                </a>
                <a href="#">
                    <li><img src="img/every_white.png" alt=""></li>
                </a>
            </ul>
            <ul>
                <h4>Terms and Conditions</h4>
                <li>Rules of Syrena Lounge</li>
                <li>Terms and Conditions</li>
            </ul>
            <ul>
                <h4>Contact us</h4>
                <li>Wioślarska 10</li>
                <li>00-411 Warszawa</li>
                <li>mobile 602 587 541</li>
                <li>contact@syrenalounge.com</li>
            </ul>
        </div>
    </div>

    <script src="js/window.v1.1.js"></script>
    <script src="js/main-slider.js"></script>
</body>

</html>