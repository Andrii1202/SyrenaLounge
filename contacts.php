<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Contacts</title>
    <link rel="stylesheet" href="css/style.v2.3.css">
    <script src="js/select_demo2.js"></script>
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
                <li><a href="index.php">home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="gallery.php">gallery</a></li>
            </ul>
            <img class="logo" src="img/SYRENA-logo-turkus.png" alt="Logo">
            <ul class="right-menu">
                <li><a href="#">private events</a></li>
                <li><a href="#">blog</a></li>
                <li class="active-menu"><a href="contacts.php">contact</a></li>
            </ul>
            <ul class="lang-menu">
                <li><a href="#">pl</a></li>
                <li>|</li>
                <li><a href="#">en</a></li>
            </ul>
        </div>
    </div>
    <div class="contact">
        <h1>contact us</h1>
        <h3>Do not hesitate to get in touch at any time.</h3>
    </div>
    <ul class="contacts">
        <li>
            <h2>Reservations<br>& Private Events</h2>
            <p>Magdalena Stelmasiak</p>
            <p>+48 732 559 956</p>
            <p>magda@syrenalounge.com</p>
        </li>
        <li>
            <h2>Activity<br>Manager</h2>
            <p>Katarzyna Kowalska</p>
            <p>+48 732 559 956</p>
            <p>katarzyna@syrenalounge.com</p>
        </li>
        <li>
            <h2>Collaboration &<br>general inquires</h2>
            <p>Katarzyna Kowalska</p>
            <p>+48 732 559 956</p>
            <p>contact@syrenalounge.com</p>
        </li>
        <li>
            <h2>ul. wioślarska 10, 00-411 Warszawa</h2>
        </li>
    </ul>
    <div id="map"></div>

    <div class="drop">
        <h1>drop us a line</h1>
        <h3>Please be informed that sending an inquiry does not confirm a table reservation. We promise to contact you back as soon as possible.</h3>
    </div>

    <div class="drop-form-block">
        <form action="mail2.php" method="POST">
            <input type="text" name="user_name" placeholder="Name" required>
            <input type="text" name="user_surname" placeholder="Surname" required>
            <input type="email" name="user_email" placeholder="E-mail" required>
            <input type="tel" name="user_phone" placeholder="Phone" required>
            <select class="turnintodropdown_demo2" name="user_topic" required>
                <option>Select topic</option>
                <option>Tasty food</option>
                <option>Tank T-34</option>
                <option>Elon Musk</option>
                <option>A little sweet</option>
                <option>Chef's Dish</option>
            </select>
            <textarea name="user_message" placeholder="Your message" required></textarea>
            <div class="check-block">
                <input class="form-checkbox" name="user_acept" type="checkbox" id="rb1" required>
                <label for="rb1">I consent to the processing of my data by the administrator in accordance with the provisions of the Act of 29 August 1997 on the protection of personal data and I declare that I have read and accepted the club's regulations.</label>
            </div>
            <div class="form-btn">
                <button type="submit">send</button>
            </div>
        </form>
    </div>

    <div class="footer">
        <div class="logo">
            <img src="img/logo-white.png" alt="">
        </div>
        <div class="mapa">
            <ul>
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

    <script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkACBL-IFqcBE6nR18tLrDswRdtpJ2QEI&callback=initMap" async defer></script>
</body>

</html>