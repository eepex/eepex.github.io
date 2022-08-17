<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPEx -2022</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">
    <link rel="stylesheet" href="../style/basicEvent.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/Hackathon.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <style>
        .newsletter-title {
            font-size: 40px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3307952f9a.js" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>


    <?php include("./header.php") ?>
    <div class="newsletter-title text-center" style="margin-top: 50px;">
        Gallery
    </div>
    <div class="container text-center" style="padding: 20px;padding-top:70px">
        <div class="row">
            <?php
            $working_dir = getcwd();
            $working_dir = substr($working_dir, 0, -3);
            $working_dir = $working_dir . "assets/images/event/";
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




    <?php include("./footer.php") ?>

    <div id="bottom"></div>


</body>

</html>