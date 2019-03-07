<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Galaxy s10</title>
    <link rel="stylesheet" href="css/s10.css">
</head>

<body>

    <div id="icon-header">
        <ul class="icon">
            <li><a href=""><img src="images/youtube-logo.png"></a></li>
            <li><a href=""><img src="images/twitter-logo.png"></a></li>
            <li><a href=""><img src="images/ig-logo.png"></a></li>
            <li><a href=""><img src="images/g+-logo.png"></a></li>
            <li><a href=""><img src="images/facebook-logo.png"></a></li>
        </ul>
    </div>
    <!--End of icon header-->
    <div id="nav-bar-header">
        <img id="shopping-mall" src="images/shopping-mall-2.jpg">
        <ul class="nav-menu">
            <li id="home-btn"><a href="">Home</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Departments</a></li>
            <li><a href="">ShortCodes</a></li>
            <li><a href="">Shop</a></li>
        </ul>
    </div>

    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/phones-slide-show-1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/phones-slide-show-2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/phones-slide-show-3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="images/phones-slide-show-4.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="images/phones-slide-show-5.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <div>
        <dvi id="product">
            <div id="images" class="details-box"></div>
            <div id="specs" class="details-box">
                <h1>Specs</h1>
                <ul>
                    <li>Weight: 157g</li>
                    <li>Dimensions: 149.9 x 70.4 x 7.8mm</li>
                    <li>OS: Android 9</li>
                    <li>Screen size: 6.1-inch</li>
                    <li>Resolution: QHD+</li>
                    <li>CPU: Octa-core chipset</li>
                    <li>RAM: 8GB</li>
                    <li>Storage: 128/512GB</li>
                    <li>Battery: 3,400mAh</li>
                    <li>Rear camera: 16MP + 12MP + 12MP</li>
                    <li>Front camera: 10MP</li>
                </ul>
            </div>
            <div class="details-box" id="images-2"> </div>
            <form id="cuntactus-form" class="details-box">
                <fieldset id="contact-us" class="details-box">
                    <legend>Contact Us</legend>
                    <p class="name">Name</p>
                    <input class="name" type="text" placeholder="Your Name">
                    <br><br>
                    <p class="email">Email</p>
                    <input class="email" type="email" placeholder="Your Email">
                    <br><br>
                    <p class="text-form">Your Opinons</p>
                    <textarea class="text-form" placeholder="Write Any Thing"></textarea>

                    <p class="contact-p">leo's Online Shopping Center,<br>
                        356, Mabima, Heiyanthuduwa,<br>
                        Sri Lanka.
                    </p>
                    <p class="contact-p">Tel: +94 115619437</p>
                    <p class="contact-p">Fax: +94 115619437</p>
                    <p class="contact-p">Whatsapp: +94 115619437</p>
                    <p class="contact-p">Viber: +94 115619437</p>
                    <p class="contact-p">Imo: +94 115619437</p>
                    <p class="contact-p">Email: leo.shopping@gmail.com</p>
                    <p class="contact-p">Facebook: leo's online shopping</p>
                    <button>Submit</button>

                </fieldset>
            </form>

            <h3>Price = $2000.00</h3>
            <p id="product-details">The top of the line Galaxy S10 and S10+ offer a significant upgrade over their predecessors, with in-display fingerprint sensors, rear-mounted triple camera setups and reverse wireless charging support. The Galaxy S10e, on the other hand, marks the first time Samsung has added an "affordable" model to its flagship Samsung Galaxy S lineup, as it follows in the footsteps of Apple's iPhone XR.

                Samsung also unveiled the Galaxy S10 5G during its 20 February Unpacked event, but this won't be available until June.

                We've rounded up everything we know about Samsung's 10th-anniversary smartphone lineup below.</p>
        </dvi>


    </div>
    <footer id="footer">
        <p>Leo's Schooping Mall &copy ALL RIGHT RESERVED</p>
    </footer>
</body>
<script type="text/javascript" src="js/js.js"></script>

</html>
