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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Inter&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0469953560.js" crossorigin="anonymous"></script>
    <title>CPUs</title>
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <img src="image/partpicker.png"></a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="#builder">builder</a>
            <div class="dropdown">
                <button class="dropbtn">Browse Products <i class="fa-solid fa-caret-down"></i></button>
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
        <a href="profile.php">
        
        <i class="fa-solid fa-user"> <?php echo "<styles>" .$_SESSION['user_name'];"</styles>" ?></i>
       </a>
</div>

        <div class="icons">
       
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="logout.php"> <div class="fa-solid fa-arrow-right-from-bracket" id="logout-btn"></div></a>
        </div>
        </div>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>


    </header>
    <section class="parts" id="parts">
        <div class="content">
            <h3>Choose a CPU</h3>
        </div>

    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
</html>