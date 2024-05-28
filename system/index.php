<?php
include 'custom_ajax/notification_ajax.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--JavaScript-->
    <script src="assets/js_libraries/jquery-3.7.1.min.js" type="module" defer></script>
    <script src="assets/js_libraries/bootstrap.bundle.min.js" type="module"></script>
    <script src="assets/js_libraries/toastr.min.js" type="module"></script>
    <!--JavaScript End-->

    <!--CDN-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
    <!--CND END-->

    <!--StyleSheets-->
    <link rel="stylesheet" href="assets/css_libraries/bootstrap.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <link rel="stylesheet" href="assets/css_libraries/toastr.min.css">
    <link rel="stylesheet" href="assets/css_internal/navbar.css">
    <link rel="stylesheet" href="assets/css_internal/notification.css">
    <!--StyleSheets End-->

    <title>Adhiti</title>
</head>
<body>

<nav id="navbar">
    <ul class="navbar-items flexbox-col">
        <li class="navbar-logo flexbox-left">
            <a class="navbar-item-inner flexbox">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 1438.88 1819.54">
                    <polygon points="925.79 318.48 830.56 0 183.51 1384.12 510.41 1178.46 925.79 318.48"/>
                    <polygon
                            points="1438.88 1663.28 1126.35 948.08 111.98 1586.26 0 1819.54 1020.91 1250.57 1123.78 1471.02 783.64 1663.28 1438.88 1663.28"/>
                </svg>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <span class="link-text">Home</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="folder-open-outline"></ion-icon>
                </div>
                <span class="link-text">Documents</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="pie-chart-outline"></ion-icon>
                </div>
                <span class="link-text">Highlights</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
                <span class="link-text">Notes</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
                <span class="link-text">Explore</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
                <span class="link-text">Customize</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <ion-icon name="settings-outline"></ion-icon>
                </div>
                <span class="link-text">Settings</span>
            </a>
        </li>
    </ul>
</nav>


<div class="mainBody" id="mainBody">

</div>

</body>
</html>
