<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleshome.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Inter&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0469953560.js" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <img src="https://cdna.pcpartpicker.com/static/forever/img/pcpp-logo.svg"></a>

        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="#builder">builder</a>
            <div class="dropdown">
                <button class="dropbtn"><a>Browse Products <i class="fa-solid fa-caret-down"></i></button></a>
                <div class="dropdown-content">
                    <table>
                        <tr>
                            <td>
                                <div class="gallery">
                                    <a target="_blank" href="cpu.html">
                                        <img src="image/nav-cpu.png" width="100" height="100">
                                    </a>
                                    <div class="desc">CPU</div>
                                </div>
                            <td>
                                <div class="gallery">
                                    <a target="_blank" href="memory.html">
                                        <img src="image/nav-memory.png" width="100" height="100">
                                    </a>
                                    <div class="desc">Memory</div>
                                </div>
                            <td>
                                <div class="gallery">
                                    <a target="_blank" href="cpucooler.html">
                                        <img src="image/nav-cpucooler.png" width="100" height="100">
                                    </a>
                                    <div class="desc">CPU Cooler</div>
                                </div>
                            <td>
                                <div class="gallery">
                                    <a target="_blank" href="motherboard.html">
                                        <img src="image/nav-motherboard.png" width="100" height="100">
                                    </a>
                                    <div class="desc">Motherboard</div>
                                </div>
                            <td>
                </div>
                <tr>
                    <td>
                        <div class="gallery">
                            <a target="_blank" href="storage.html">
                                <img src="image/nav-ssd.png" width="100" height="100">
                            </a>
                            <div class="desc">Storage</div>
                        </div>
                    <td>

                        <div class="gallery">
                            <a target="_blank" href="videocard.html">
                                <img src="image/nav-videocard.png" width="100" height="100">
                            </a>
                            <div class="desc">Graphics Card</div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery">
                            <a target="_blank" href="powersupply.html">
                                <img src="image/nav-powersupply.png" width="100" height="100">
                            </a>
                            <div class="desc">Power Supply</div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery">
                            <a target="_blank" href="case.html">
                                <img src="image/nav-case.png" width="100" height="100">
                            </a>
                            <div class="desc">Cabinet</div>
                        </div>
                    </td>
                    </table>

            </div>

            </div>

            <a href="#benchmarks">Benchmarks</a>
        </nav>
        
        <div class="login-status">
        
        <a href="profile.html">
        
        <i class="fa-solid fa-user"> <?php echo "<styles>" .$_SESSION['user_name'];"</styles>" ?></i>
       </a>
</div>


        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="logout.php"><div class="fa-solid fa-arrow-right-from-bracket" id="login-btn"></div></a>
        </div>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>


    </header>
    <br><br><br>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->


        <div class="mySlides fade">
            <div class="numbertext">
                <h1>GeForce RTX 40 Series</h1>
                <p></p>
                <h2>BEYOND FAST</h2>
                <br>
                <p>NVIDIA® GeForce RTX™ 40 Series GPUs are beyond fast <br>for gamers and creators. They're powered by
                    <br>the ultra-efficient NVIDIA Ada Lovelace architecture<br> which delivers a quantum leap in both
                    performance and<br> AI-powered graphics. Experience lifelike virtual worlds with ray tracing<br> and
                    ultra-high FPS gaming with the lowest latency.
                </p>
                <a href="#">
                    <button class="options">
                        View More
                    </button>
                </a>
            </div>
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/ada/rtx-4090/geforce-rtx-4090-100vp-d.jpg"
                style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">
                <h1>The <a>AMD</a> 7000 Series</h1>
                <p></p>
                <h2>This Changes Everything</h2><br>
                The most advanced PC processor for gamers <br>
                AMD Ryzen™ 7000 Series processors are built to beat<br> the clock. With time-saving connectivity like
                PCIe® 5.0 <br>storage support.
                <br>
                <a href="#">
                    <button class="options1">
                        Check out
                    </button>
                </a>
            </div>

            <img src="https://cdn.wccftech.com/wp-content/uploads/2020/06/AMD-Ryzen-Zen-CPUs_Next-Gen.jpg?"
                style="width:107%">
            <div class="text"> </div>
        </div>


        <div class="mySlides fade">
            <div class="numbertext">
                <div class="rx">
                    <h1><a>RX 7000</a> Series</h1>
                </div>
                <h2>Performance to Rule Your Game</h2>
                <br>
                <p>
                    Built on the groundbreaking AMD RDNA™ 3 architecture<br> with chiplet technology, AMD Radeon™ RX
                    7900 XTX<br> graphics deliver next-generation performance, visuals,<br> and efficiency at 4K and
                    beyond.
                </p>
                <br>
                <button class="options2">
                    Buy Now
                </button>
            </div>
            <img src="https://cdn.arstechnica.net/wp-content/uploads/2022/11/AMD-Radeon-RX-7900-XTX_10.jpeg"
                style="width:100%">
            <div class="text"></div>
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
    </div>

    <section class="features" id="features">

        <div class="box-container">

            <div class="box">

                <h3>Entry Level AMD Build</h3>
                <p>
                    AMD Ryzen 5 5600G
                    Cooler Master MasterBox Q300L MicroATX Mini Tower</p>
                <img src="image\entry-lvl.png"><br>
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">

                <h3>Entry Level AMD Build</h3>
                <p>
                    AMD Ryzen 5 5600G
                    Cooler Master MasterBox Q300L MicroATX Mini Tower</p>
                <img src="image/entry-lvl.png"><br>
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">

                <h3>Entry Level AMD Build</h3>
                <p>
                    AMD Ryzen 5 5600G
                    Cooler Master MasterBox Q300L MicroATX Mini Tower</p>
                <img src="image/entry-lvl.png"><br>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
    </section>
    <section class="footer" id="footer">
        <table>
            <tr>
                <td>
                    <div class="f1">
                        <img src="image/logo.png">
                        <br>
                        <p>
                            PICK PARTS.<br>
                            BUILD YOUR PC.<br>
                            COMPARE AND SHARE.
                        </p>
                    </div>
                </td>
                <td>
                    <div class="f2">
                        <center><h1>Catergories</h1><center>
                        <hr>
                        <br>
                        <center>
                        <p>
                            <a href="#">Builder</a><br>
                            <a href="#">Browse Products</a><br>
                            <a href="#">Benchmarks</a>                           
                        </p>
                        </center>
                    </div>
                </td>
                <td>
                    <div class="f2">
                        <center><h1>Company</h1><center>
                        <hr>
                        <br>
                        <center>
                        <p>
                            <a href="about.html">About</a><br>
                            <a href="contact.html">Contact Us</a><br>
                            <a href="#">User Code Of Conduct</a>
                        </p>
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
</html>