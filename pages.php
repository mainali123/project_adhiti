<?php

if (isset($_POST['action'])) {
    $page_name = $_POST['action'];

    if ($page_name == 'login') {
        echo login();
    } elseif ($page_name == 'signup') {
        echo singup();
    } elseif ($page_name == 'landingPage') {
        echo landingPage();
    } else {
        echo "<h1>Unauthorized Access</h1>";
    }
}

function login(): string
{
    return '
<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="https://m.media-amazon.com/images/I/71FLtz7W7eL._SX679_.jpg" alt="">
        </div>
        <form action="">
            <h3>Log In</h3>
            <div class="form-holder">
                <input type="text" placeholder="e-mail" class="form-control">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-login">
                <button>Login</button>
                <p>Don\'t Have Account? <a id="user-signup">Sign up</a></p>
            </div>
        </form>
    </div>
</div>
    ';
}

function singup(): string
{
    return '
<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="https://m.media-amazon.com/images/I/71FLtz7W7eL._SX679_.jpg" alt="">
        </div>
        <form action="">
            <h3>Sign Up</h3>
            <div class="form-holder active">
                <input type="text" placeholder="name" class="form-control">
            </div>
            <div class="form-holder">
                <input type="text" placeholder="e-mail" class="form-control">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> I agree all statement in <a href="#">Terms & Conditions</a>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-login">
                <button>Sign up</button>
                <p>Already Have account? <a id="user-login">Login</a></p>
            </div>
        </form>
    </div>
</div>
    ';
}

function landingPage(): string
{
    return '
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <title>Search</title>
        <path fill="currentColor"
              d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="page" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
            <path d="M4 21.4V2.6a.6.6 0 0 1 .6-.6h11.652a.6.6 0 0 1 .424.176l3.148 3.148A.6.6 0 0 1 20 5.75V21.4a.6.6 0 0 1-.6.6H4.6a.6.6 0 0 1-.6-.6ZM8 10h8m-8 8h8m-8-4h4"/>
            <path d="M16 2v3.4a.6.6 0 0 0 .6.6H20"/>
        </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="chapter" viewBox="0 0 2048 2048">
        <path fill="currentColor"
              d="M1792 0v1792H256V0h1536zm-128 128H384v1536h1280V128zM640 896H512V768h128v128zm896 0H768V768h768v128zm-896 384H512v-128h128v128zm896 0H768v-128h768v128zM640 512H512V384h128v128zm896 0H768V384h768v128z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="download" viewBox="0 0 24 24">
        <path fill="currentColor"
              d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Zm-6 4q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="tickmark" viewBox="0 0 24 24">
        <path fill="currentColor" d="M21 7L9 19l-5.5-5.5l1.41-1.41L9 16.17L19.59 5.59L21 7Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
        <path fill="currentColor"
              d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8z"/>
        <path fill="currentColor" d="m9 17l8-5l-8-5z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
    </symbol>
</svg>
<header id="header" class="site-header text-black">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-lg">
            <a class="navbar-brand" href="index.html">
                <img src="images/main-logo.png" class="logo">
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0 shadow-none" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <svg class="navbar-icon" width="50" height="50">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
                 aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/main-logo.png" class="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 gap-5 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#company-services">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-dark" id="user-login" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<ul class="waypoints list-unstyled position-fixed">
    <li class="waypoints1">
        <a href="#intro"></a>
    </li>
    <li class="waypoints2">
        <a href="#company-services"></a>
    </li>
    <li class="waypoints4">
        <a href="#about-us"></a>
    </li>
    <li class="waypoints4">
        <a href="#price"></a>
    </li>
    <li class="waypoints5">
        <a href="#instant-access"></a>
    </li>
</ul>
<section id="intro">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="display-2 position-relative">Broaden Your Knowledge with <span
                                class="text-primary">Learning!</span>
                    </h1>
                    <p>
                        <em>"The more that you read, the more things you will know. The more that you learn, the
                            more places you\'ll go." – Dr. Seuss</em><br>
                        Expand your horizons and enrich your mind by exploring books, articles, academic &
                        non-academic papers. Embrace the limitless world of knowledge!
                    </p>

                    <a href="shop.html" class="btn btn-lg btn-outline-dark text-uppercase mt-3 rounded-pill">
                        <span class="text-uppercase">Start Reading!</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-holder position-relative">
                    <img src="images/banner-image1.png" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="company-services" class="border-top border-bottom py-5 my-lg-10">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="icon-box d-flex align-items-center">
                    <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3 bg-secondary rounded-pill">
                        <svg class="page text-primary" width="22" height="28">
                            <use xlink:href="#page"/>
                        </svg>
                    </div>
                    <div class="icon-box-content ps-3">
                        <h4 class="total-number text-primary fs-3 fw-bold">360</h4>
                        <div class="card-title text-dark">Total documents</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="icon-box d-flex align-items-center">
                    <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3 bg-secondary rounded-pill">
                        <svg class="chapter text-primary" width="22" height="28">
                            <use xlink:href="#chapter"/>
                        </svg>
                    </div>
                    <div class="icon-box-content ps-3">
                        <h4 class="total-number text-primary fs-3 fw-bold">22</h4>
                        <div class="card-title text-dark">Highlights</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="icon-box d-flex align-items-center">
                    <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3 bg-secondary rounded-pill">
                        <svg class="user svg-primary" width="22" height="28">
                            <use xlink:href="#user"/>
                        </svg>
                    </div>
                    <div class="icon-box-content ps-3">
                        <h4 class="total-number text-primary fs-3 fw-bold">260</h4>
                        <div class="card-title text-dark">Active Readers</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="icon-box d-flex align-items-center">
                    <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3 bg-secondary rounded-pill">
                        <svg class="download text-primary" width="22" height="28">
                            <use xlink:href="#download"/>
                        </svg>
                    </div>
                    <div class="icon-box-content ps-3">
                        <h4 class="total-number text-primary fs-3 fw-bold">660</h4>
                        <div class="card-title text-dark">Easy Download</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-us" class="my-lg-10">
    <div class="container-md">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <div class="image-holder">
                    <img src="images/author-image.jpg" alt="author" class="rounded-pill img-fluid">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="display-header ps-5">
                    <h2 class="display-4 text-primary">About Us</h2>
                    <p>“Tristique pretium condimentum id tempor eu eu non viverra fusce. Condimentum amet quam
                        venenatis
                        nulla sed sem lacus cursus sit. Sed nulla felis aliquet elementum egestas suspendisse
                        nisl
                        faucibus nulla aliquet est ac dictum auctor.” </p>
                    <p>- Anna marie</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="price" class="my-lg-10">
    <div class="container-lg">
        <div class="col-lg-8 mx-auto">
            <div class="display-header text-center">
                <h2 class="display-4 text-primary">Choose your Pricing plan</h2>
                <p>Egestas duis enim vel sed aliquet in eget eros neque nam ullamcorper nibh adipin eget eros
                    neque
                    namiscing sit sagittis nunc aliquet sit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center bg-white rounded-5 p-5">
                    <div class="card-header bg-transparent border-0">
                        <h4 class="fs-5 text-primary fw-bold">Basic</h4>
                        <div class="card-title pricing-card-title text-dark fs-1 fw-bold">
                            <sup class="fs-3">$</sup>9.99
                        </div>
                        <button type="button" class="btn btn-lg btn-outline-dark text-uppercase mt-3 rounded-3">
                            Order
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="price-list list-unstyled pt-4 text-center">
                            <li class="pb-2">Single ebook access</li>
                            <li class="pb-2">Lifetime access</li>
                            <li class="pb-2">Standard formatting</li>
                            <li class="pb-2">Text-based content</li>
                            <li class="pb-2">Email customer support</li>
                            <li class="pb-2">Affordable pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-4 text-center bg-white rounded-5 p-5">
                    <div class="card-header bg-transparent border-0">
                        <h4 class="fs-5 text-primary fw-bold">Standard</h4>
                        <div class="card-title pricing-card-title text-dark fs-1 fw-bold">
                            <sup class="fs-3">$</sup>19.99
                        </div>
                        <button type="button" class="btn btn-lg btn-primary text-uppercase mt-3 rounded-3">Order
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="price-list list-unstyled pt-4 text-center">
                            <li class="pb-2">Three ebook access</li>
                            <li class="pb-2">Enhanced formatting</li>
                            <li class="pb-2">Bonus materials included</li>
                            <li class="pb-2">Visual elements added</li>
                            <li class="pb-2">Email customer support with priority</li>
                            <li class="pb-2">Exclusive discounts and promotions</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-4 text-center bg-white rounded-5 p-5">
                    <div class="card-header bg-transparent border-0">
                        <h4 class="fs-5 text-primary fw-bold">Premium</h4>
                        <div class="card-title pricing-card-title text-dark fs-1 fw-bold">
                            <sup class="fs-3">$</sup>29.99
                        </div>
                        <button type="button" class="btn btn-lg btn-outline-dark text-uppercase mt-3 rounded-3">
                            Order
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="price-list list-unstyled pt-4 text-center">
                            <li class="pb-2">Unlimited ebook access</li>
                            <li class="pb-2">Multimedia-rich content</li>
                            <li class="pb-2">Extensive bonus materials</li>
                            <li class="pb-2">Priority email customer support</li>
                            <li class="pb-2">Early access to new releases</li>
                            <li class="pb-2">Customer feedback priority</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="instant-access" class="bg-secondary py-lg-8">
    <div class="container-md">
        <div class="row">
            <div class="display-header text-center">
                <h2 class="display-4 text-primary mt-0">Unlock Your Potential Today!</h2>
                <p>Are you ready to take your knowledge and skills to the next level? Our ebook is here to guide
                    you
                    every step of the way. Whether you\'re a student, professional, or simply passionate about
                    personal
                    growth, this is the resource you\'ve been waiting for.</p>
                <button type="button"
                        class="btn btn-lg btn-primary text-uppercase mt-3 rounded-pill btn-shadow">Get
                    Instant Access Now!
                </button>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="py-3">
    <div class="text-center">
        <p>©' . date('Y') . 'Designed By <a href="https://templatesjungle.com/"
                                             class="text-decoration-underline">
                TemplatesJungle</a> And Modified, Made Functional By Diwash Mainali
        </p>
    </div>
</footer>
    ';
}