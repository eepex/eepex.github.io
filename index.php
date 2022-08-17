<?php
/*
Template Name: EEPEx Home
*/
$docroot = "https://seee.ku.edu.np/wp-content/themes/neve/eepex";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPEx -2022</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3307952f9a.js" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>


    <?php include("./src/header.php") ?>


    <div class=" text-center" style="display: flex;flex-direction:column">
        <img src="/assets/images/back.gif" class="header-image" alt="">


    </div>
    <div class="newsletter-title text-center" style="margin-top: 50px;">
        Events
    </div>
    <!-- Additional required wrapper -->
    <!-- Slides -->
    <div class="swiper-slide">
        <div class="row">
            <span class="slider-images-container text-center">
                <a href="/src/Hackathon.php" style="text-decoration: none;color:black">
                    <img src="./assets/images/image1.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Hackathon</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>

            <span class="slider-images-container text-center">
                <a href="/src/Gaming.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image4.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Gaming</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>


            <span class="slider-images-container text-center">
                <a href="/src/CircuitCompetition.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image6.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Circuit Competition</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>

            <span class="slider-images-container text-center">
                <a href="/src/RoboWar.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image7.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Robo War </div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>



        </div>
    </div>
    <div class="swiper-slide">
        <div class="row">
            <span class="slider-images-container text-center">
                <a href="/src/Acoustic.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image5.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Acoustic</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>

            <span class="slider-images-container text-center">
                <a href="/src/Talkshow.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image8.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Talk Show</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>

            <span class="slider-images-container text-center">
                <a href="/src/Training.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image3.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Electronics Training</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>

            <span class="slider-images-container text-center">
                <a href="/src/Sports.php" style="text-decoration: none;color:black">

                    <img src="./assets/images/image2.jpg" class="restaurant-image-large" alt="">
                    <div class="text-center card-restro-name">Sports</div>
                    <div class="swiper-slide-caption  g-0">
                        <a class="col-4">
                            <i class="fa fa-bullhorn slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-user-astronaut slider-images-container-icon"></i>
                        </a>
                        <a class="col-4">
                            <i class="fa fa-info slider-images-container-icon"></i>
                        </a>
                    </div>
                </a>
            </span>



        </div>

    </div>
    <div class="newsletter-title text-center" style="margin-top: 50px;">
        Gallery
    </div>

    <div class="" style="padding:20px ;">
        <div class="row g-0">
        <?php
            $working_dir = getcwd();
            $working_dir = $working_dir . "/assets/images/event/";
            $handle = opendir($working_dir);
            while ($file = readdir($handle)) {
                if ($file !== '.' && $file !== '..') {
                    echo '<div class="col-3" style="padding: 10px;">
                <a href="/assets/images/event/' . $file . '" target="_blank">
                    <img src="/assets/images/event/' . $file . '" style="width:100%;height:250px;object-fit:cover" alt="">
                </a>
            </div>';
                }
            }

            ?>
        </div>
    </div>

    <div style="width:100%;text-align:center">
        <a href="/src/Gallery.php" class="btn btn-dark" style="width:50%;padding:20px;color:white">
            View Gallery
        </a>
    </div>
    <div class="newsletter-container text-center">
        <div class="newsletter-title">
            Newsletter
        </div>
        <div class="newsletter-small-info-text">
            Get Timely Updates About Your Favourite EEPEx Events
        </div>
        <div class="input-field-div">
            <input type="text" class="text-field-1" placeholder="Your Email">
            <i class="fa fa-paper-plane" style="color: white;background-color: green;padding: 14px;padding-left: 20px;padding-right: 20px;margin: 0px;"></i>
        </div>
    </div>

    <?php include("./src/footer.php") ?>


    <div id="bottom"></div>


    <script>
        document.getElementById('iframe').contentDocument.getElementByTagName("img").width = '300'
    </script>

</body>

</html>