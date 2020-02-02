<?php
$front_css='
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/material-kit.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/animate.css">
';

$back_css='
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link href="css/material-dashboard.css" rel="stylesheet" />
';

$header='
<nav class="navbar fixed-top navbar-expand-lg bg-light" id="navbar">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php">
                <div class="w-100">
                    <img src="images/home_logo_top/LOGO_延伸圖案_DM.png" id="nav_logo_img" style="width:84px">
                  </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav">
                <li id="" class="nav-item nav_link_li">
                    <a  href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item nav_link_li">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item nav_link_li">
                    <a href="news.php" class="nav-link">News</a>
                </li>
                <li class="nav-item nav_link_li">
                    <a href="model.php" class="nav-link">Model</a>
                </li>
                <li class="nav-item nav_link_li">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>

            <a href="signin.php" class="nav-link ml-auto">
                <i class="material-icons">
                    <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.532px"
                        height="45.532px" viewBox="0 0 45.532 45.532"
                        style="enable-background:new 0 0 45.532 45.532;" xml:space="preserve">
                        <g>
                            <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z" />
                        </g>
                    </svg>
                </i>
            </a>
        </div>
    </div>
</nav>
';

$footer_1='
<footer class="w-100" style="background:rgb(17, 50, 95);" id="footer_1">
    <div id="footer_d" class=" container w-75  my-2 d-flex justify-content-between align-items-center">
        <div id="footer_logo" class="col-3 align-self-center">
            <a href="index.php" class="d-flex justify-content-center h-100">
                <img id="footer_logo_img" src="images/home_logo_top/39211030_2130356867226814_5928754009081905152_o.jpg" class="circle" alt="">
            </a>
        </div>
        <div id="footer_contact_info" class="col-6 h-100 d-flex flex-column justify-content-around align-items-center">
            <div id="footer_contact_info_d1" class="d-flex flex-column justify-content-center text-light">
                <h5 class="mb-2"><b>聯絡資訊</b></h5 class="mb-2">
                <p ><b>email:</b> gautamako@gmail.com</p>
                <p><b>phone:</b> 0911-411-013</p>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <a href="about.php" class="m-2 foo_bar">About</a>
                <a href="news.php" class="m-2 foo_bar">News</a>
                <a href="model.php" class="m-2 foo_bar">Model</a>
                <a href="contact.php" class="m-2 foo_bar">Contact</a>
            </div>
        </div>
        <div id="footer_community" class=" col-3 h-100 d-flex  justify-content-around align-items-center"> 
                <a href="https://www.facebook.com/pg/sanslogictoy/posts/" class="btn-link mx-2">
                    <img id="fb_icon" src="images/icon/facebook.png" style="border:1px solid #fff;border-radius:10px;background:#fff;" alt="">
                </a>
                <a href="https://www.instagram.com/sanslogic_taiwan/" class="btn-link mx-2">
                    <img id="ig_icon" src="images/icon/instagram.png" style="border:1px solid #fff;border-radius:10px;background:#fff;" alt="">
                </a>
            <div class="mt-3 ml-2 text-light">Copyright © 2020 謝文硯</div>
    </div>
</div>
</footer>
';

$footer_2='
<div class="container w-75 d-flex">
    <hr>
    <hr>
</div>
<footer class="container w-75 justify-content-center align-utems-center">
    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="w-50 d-flex justify-content-around align-items-center" id="foo_2a">
            <a href="about.php" class="m-2 text-san-blue">About</a>
            <a href="news.php" class="m-2 text-san-blue">News</a>
            <a href="model.php" class="m-2 text-san-blue">Model</a>
            <a href="contact.php" class="m-2 text-san-blue">Contact</a>
        </div>
        <p class="mt-3">Copyright © 2020 謝文硯</p>
    </div>
</footer>
';

$plugins='
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/buttons.js"></script>
    <script src="js/material-kit.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();

        wow = new WOW({
            boxClass:     "wow",     
            animateClass: "animated",
            offset:       50,         
            mobile:       true,      
            live:         true       
        })
        wow.init();
    </script>
';

