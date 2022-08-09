<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPEx -2022</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">

    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3307952f9a.js" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>


    <div class="d-flex sticky-top"
        style="padding-top:10px;padding-right: 40px;border-bottom: solid 1px rgb(216, 216, 216);background-color: white;">
        <div style="flex: 0.7;">
            <img src="../UI UX/Logo.png" class="title-image" />
        </div>

        <div class="row" style="flex:1;padding-top:10px ;">
            <div class="title-tab-div col-2 d-none d-lg-block">
                <a class="title-link" href="#bottom">
                    <div class="title-tabs">
                        <span class="title-link">
                            Home
                        </span>
                    </div>
                </a>
            </div>
            <div class="title-tab-div col-2 d-none d-lg-block">
                <a class="title-link" href="#bottom">
                    <div class="title-tabs">
                        <span class="title-link">
                            Contact
                        </span>
                    </div>
                </a>
            </div>
            <div class="title-tab-div col-2 d-none d-lg-block">
                <a class="title-link" href="#bottom">
                    <div class="title-tabs">
                        <span class="title-link">
                            Events
                        </span>
                    </div>
                </a>
            </div>

            <div class="title-tab-div col-2 d-none d-lg-block">
                <a class="title-link" href="#bottom">
                    <div class="title-tabs">
                        <span class="title-link">
                            Notices
                        </span>
                    </div>
                </a>
            </div>

            <div class="title-tab-div col-2 d-none d-lg-block">

                <div class="title-tabs-order">
                    <i class="fa fa-info"
                        style="padding: 5px;background-color:white;border-radius:100%;width:22px;color:black;margin-right:10px"></i>Sponsors
                </div>
            </div>
        </div>
        <div class="dropdown d-block d-lg-none">
            <button style="border: none;background-color:#fff" class="dropright" type="button" id="dropdownMenuButton"
                data-toggle="dropdown">
                <i class="fa fa-bars "
                    style="background-color: #FF6600;color:white;padding: 10px;margin-top: 10px;"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">About</a>
                <a class="dropdown-item" href="#">Contact</a>
            </div>
        </div>

    </div>
    

    <div class="footer-container">
        <div class="footer-section-1 d-flex flex-column col col-md-12" style="flex: 1.5;">
            <div class="app-footer-title">EEPEx 2022</div>
            <div class="app-footer-desc">EEPEx 2022 is the biggest electrical and electronics project of 2022. Hosted by
                Society of Electrical and Electronics Engineering of Kathmandu University. This event will provide you
                the biggest experience of your lifetime.
            </div>
            <div class="fa-footer-div" style="margin-top:20px">
                <i class="fa fa-facebook fa-footer-icon" style="background-color: blue"></i>
                <i class="fa fa-instagram fa-footer-icon" style="background-color: #E12F6B"></i>
                <i class="fa fa-twitter fa-footer-icon" style="background-color: #1D9BF0;"></i>
                <i class="fa fa-github fa-footer-icon" style="background-color: black"></i>
                <i class="fa fa-linkedin fa-footer-icon" style="background-color: #0E76A8;"></i>
            </div>
        </div>
        <div class="footer-section-2 col col-md-4">
            <div class="useful-links">Useful Links</div>
            <div class="d-flex row">
                <div class="col-6" style="display: flex;flex-direction:column">
                    <div class="links-list-item">Home</div>
                    <div class="links-list-item">FAQ</div>
                    <div class="links-list-item">Events</div>
                    <div class="links-list-item">Bug Report</div>
                </div>
                <div class="col-6" style="display: flex;flex-direction:column">
                    <div class="links-list-item">Notices</div>
                    <div class="links-list-item">Organizers</div>
                    <div class="links-list-item">Competition</div>
                    <div class="links-list-item">Code Of Conduct</div>
                </div>
            </div>
        </div>
        <div class="footer-section-3 col col-lg-3">
            <div class="useful-links">Contact Us</div>
            <div class="">
                <div class="">
                    <div class="links-list-item">
                        <i class="fa fa-map-pin contact-us-icon"></i>
                        Dhulikhel, Kavre
                    </div>
                    <div class="links-list-item">
                        <i class="fa fa-phone contact-us-icon"></i>
                        9844442363
                    </div>
                    <div class="links-list-item">
                        <i class="fa fa-envelope contact-us-icon"></i>
                        siddharthaghimire@gmail.com
                    </div>
                    <div class="links-list-item d-flex" style="margin-top: 20px;">
                        <i class="fa fa-paypal contact-us-icon"></i>
                        <i class="fa fa-amazon contact-us-icon"></i>
                        <i class="fa fa-google contact-us-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bottom"></div>


</body>

</html>