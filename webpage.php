<?php
require_once 'global_defines.php';
class webpage
{
    public $title = PAGE_DEFAULT_TITLE;
    public $description = '';
    public $author = PAGE_AUTHOR;
    public $lang = 'en-CA';
    public $icon = 'my-icon.jpg';
    public $css = 'css\styless.css';
    /// public $content = '<h2>Welcome to Electric scooters.com </h2>';
    public $content = '';

    public function __construct()
    {
    }

    public function render()
    {
        ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title><?=$this->title; ?>
    </title>
    <meta charset="UTF-8">

    <meta name="description" value=<?=$this->description; ?>>
    <meta name="author" value=<?=$this->author; ?>>
    <!-- below for private pages only, remove line for public pages-->
    <meta name="robots" content="noindex, nofollow">
    <!-- for responsive website -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website icon (favicon)-->
    <link rel="icon" href="images/icon.jpg" type="image/jpg">
    <link rel="stylesheet" href="css/layout.css">

    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Pacifico&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- HEADER =================================================-->
    <header>
        <div class="container">
            <div class="row">
                <img src="images/logo.jpg" alt="Foodz Inc." title="click here for more great deals">
                <span>Food.com | Great Deals on Foods</span>
                <!-- NAV =====================================================-->
                <nav class="nav">
                    <a href="index.html">Home</a>

                    <a href="catalogue.html">Catalogue</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="contact.html">Contact</a>
                </nav>
            </div>
        </div>


    </header>

    <!-- MAIN =========================================================-->
    <main>
        <!-- <h1>Home Page</h1> -->
        <div class="divContainer">
            <div class="firstPara">
                <img src="images/home/top.jpg" alt="Image of people at
                    restraunt">
                <h1>CULINARY EXPERIENCES. CANADIAN STYLE.</h1>
            </div>
        </div>
        <div class="divContainer">
            <div class="secondPara">
                <p>
                    At Edible Canada, we believe in The both Canadian and Indian Table™ Friends who eat together, stay
                    together.
                </p>
                <p>
                    Did you know our gift baskets are available all year round? This year we have the best collection
                    yet.
                </p>
                <p>
                    Have a big event coming up? Book our private dining room for your wedding reception, rehearsal,
                    anniversary, birthday, or a get-together-just-because!

                </p>
            </div>
        </div>

        <div class="divContainer">
            <div class="thirdPara">
                <div><a href="catalogue.html">EAT</a>
                    <p> We serve up the best of what’s local & seasonal, paired with unique and interesting Indian
                        ingredients which represent both coasts and celebrate India's cultural influences.
                    </p>
                    <span>VISIT OUR BISTRO</span>
                </div>
                <img src="images/home/thirdPara.jpg" alt="Sandwich Image">
            </div>

        </div>
        <div class="divContainer">
            <div class="para">
                <div class="fourthPara">
                    <img src="images/home/dosa.jpg" alt="dosa image">
                    <div>
                        <a href="catalogue.html">Order</a>
                        <p>We offer the largest selection of Indian made food dishes in the world! Visit our shop in
                            Montreal,Quebec, one of our many ‘pop-up’ locations, or order online. Either way, you’ll
                            find quality, local & delicious goodies!
                        </p>
                    </div>

                </div>
            </div>
        </div>



    </main>

    <!-- FOOTER =================================================-->
    <footer>
        <div class="tilt">

        </div>
        <div class="footer">
            <div class="footerlogo">
                <img src="images/logo.jpg" alt="Foodz Inc.">
                <span>Food.com </span>
                <span> Great Deals on Foods</span>
            </div>
            <br>
            <div class="footer1">
                <div>
                    <h1>Our Services</h1>

                    <ul>
                        <li><a href="catalogue.html">Our Menu</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>

                <div>

                    <h1>Useful Links</h1>
                    <ul>
                        <li><a href="#">Policies</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h1>Follow Us</h1>
                    <ul>
                        <li><a href="https://www.facebook.com/asguliamita/">Facebook</a></li>
                        <li><a href="jayeshuttam7844@gmail.com">Gmail</a></li>
                        <li><a href="https://in.pinterest.com/asguliamita/boards/">Pin-Interest</a></li>
                        <li><a href="https://www.instagram.com/guliaasmita/">Instagram</a></li>
                    </ul>
                </div>
            </div>


        </div>

        <div id="copyright">
            <b> &copy; All Rights Reserved.</b>
        </div>
    </footer>
</body>

</html>
}
<?php
    }
}
