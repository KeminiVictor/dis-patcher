<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.header')
        </head>

<body class="">
    <!-- Navbar -->
    @include('layouts.nav')

    <!-- header slider and hero with tracking box-->
    <div id="heroCarousel" class="w-100 carousel slide position-relative h-max" data-bs-ride="carousel">
        <div class="background-overlay position-absolute top-0"></div>

        <div class="hero-wrapper d-flex justify-content-center align-content-center position-absolute top-25 w-100">
            <div class="hero-box text-white text-center">
                <div class="text-white fs-3">
                    <i class="fa-solid fa-car-side"></i>
                </div>

                <div class="fs-5 my-4">
                    <a href="#" class="hero-link mx-1 mx-md-3">Fast</a> <span class="cursor">.</span>
                    <a href="#" class="hero-link mx-1 mx-md-3">Secured</a> <span class="cursor">.</span>
                    <a href="#" class="hero-link mx-1 mx-md-3">Worldwide</a>
                </div>

                <div class="hero-text text-center mx-auto">
                    <h3 class="fw-bold">AWESOME TEMPLATE FOR
                        <span class="col-primary">COURIER</span> & <span class="col-primary">DELIVERY</span> SERVICES
                    </h3>
                </div>

                <div class="hero-end mx-auto text-start my-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p>TRACK YOUR PRODUCT.</p>
                                Now you can track your product easily
                            </div>


                            <div class="order-box row my-3 rounded rounded-1 overflow-hidden">
                                <div class="col-12 col-md-9 py-4 px-0"><input class="form-control py-3 rounded-0" type="text" placeholder="Enter your Tracking No."></div>
                                <div class="col-12 col-md-3 py-4 px-0"><button class="btn h-100 hero-btn w-100 rounded-0">TRACK</button></div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/background/hero1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/background/hero2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/background/hero1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- unnamed -->
    <div class="container-fluid ms-4 mx-md-4 px-md-4 my-5 py-md-3">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="d-flex my-2 p-1">
                <div class="justify-content-center align-items-center d-flex">
                    <img src="./assets/img/icons/icon-1.png" alt="">
                </div>
                <div class="ms-4">
                    <h3 class="title-1">SECURED SERVICE</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit</p>
                </div>
            </div>
            <div class="d-flex my-2 p-1">
                <div class="justify-content-center align-items-center d-flex">
                    <img src="./assets/img/icons/icon-1.png" alt="">
                </div>
                <div class="ms-4">
                    <h3 class="title-1">SECURED SERVICE</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit</p>
                </div>
            </div>
            <div class="d-flex my-2 p-1">
                <div class="justify-content-center align-items-center d-flex">
                    <img src="./assets/img/icons/icon-1.png" alt="">
                </div>
                <div class="ms-4">
                    <h3 class="title-1">SECURED SERVICE</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 bg-light" style="height: 1px;">
        <div class="background-primary w-75 mx-auto" style="height: 2px;"></div>
    </div>

    <!-- About Us -->
    <div class="container-fluid ms-4 mx-md-4 px-md-4 my-5 py-md-5">
        <div class="row row-cols-1 row-cols-lg-2 py-1">
            <div class="my-3 px-3">
                <h3>ABOUT US</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis animi totam amet fugit, deserunt, ea perspiciatis officiis, nam quam ratione asperiores molestias libero nulla dicta laudantium magni voluptates? Fuga molestias nihil
                    assumenda distinctio, reprehenderit beatae.</p>
            </div>
            <div class="my-3">
                <div class="about-img-box mx-auto">
                    <img src="./assets/img/background/man.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- pricing and plans -->

    <div class="container w-lg-80 mx-auto position-relative py-5">
        <h1 class="floating-price position-absolute">PRICING</h1>
        <div class="price-section text-center">
            <h3>PRICING & PLANS</h3>
            <p>See our pricing & plans to get best service</p>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 text-center gy-5">

            <div class="px-3">
                <div class=" py-4 price-list-box">
                    <h5>
                        BASIC
                    </h5>
                    <h2>
                        $250
                    </h2>
                    <p>for package product</p>


                    <ul class="w-75 text-start mx-auto">
                        <li>
                            <p>
                                PRODUCT WEIGHT:
                                <span> < 3KG</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                COUNTRY:
                                <span> ALL</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                DURATION
                                <span> 7-14 DAYS</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                SUPPORT:
                                <span> YES</span>
                            </p>
                        </li>
                    </ul>

                    <button class="btn rounded-0 px-4 py-3 my-4" href="#">ORDER NOW</button>
                </div>
            </div>



            <div class="px-3">
                <div class=" py-4 price-list-box">
                    <h5>
                        BASIC
                    </h5>
                    <h2>
                        $250
                    </h2>
                    <p>for package product</p>


                    <ul class="w-75 text-start mx-auto">
                        <li>
                            <p>
                                PRODUCT WEIGHT:
                                <span> < 3KG</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                COUNTRY:
                                <span> ALL</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                DURATION
                                <span> 7-14 DAYS</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                SUPPORT:
                                <span> YES</span>
                            </p>
                        </li>
                    </ul>

                    <button class="btn rounded-0 px-4 py-3 my-4" href="#">ORDER NOW</button>
                </div>
            </div>

            <div class="px-3">
                <div class=" py-4 price-list-box">
                    <h5>
                        BASIC
                    </h5>
                    <h2>
                        $250
                    </h2>
                    <p>for package product</p>


                    <ul class="w-75 text-start mx-auto">
                        <li>
                            <p>
                                PRODUCT WEIGHT:
                                <span> < 3KG</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                COUNTRY:
                                <span> ALL</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                DURATION
                                <span> 7-14 DAYS</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                SUPPORT:
                                <span> YES</span>
                            </p>
                        </li>
                    </ul>

                    <button class="btn rounded-0 px-4 py-3 my-4" href="#">ORDER NOW</button>
                </div>
            </div>

        </div>
    </div>


    <!-- contact us -->
    <div class="map-bg">
        <div class="container-fluid w-lg-50 mx-auto text-center contact-section">
            <div class="my-md-5 my-2 py-2">
                <h3 class="fw-bold">
                    CONTACT US
                </h3>
                <p class="text-black-50">Get in touch with us easily</p>
            </div>

            <div class="row row-cols-2">
                <div class="fs-6 fw-bold">
                    UK NUMBERS:
                </div>
                <div class="text-start">
                    +234-796
                </div>
            </div>

            <div class="row row-cols-2">
                <div class="fs-6 fw-bold">
                    UK NUMBERS:
                </div>
                <div class="text-start">
                    +234-796
                </div>
            </div>

            <div class="row row-cols-2">
                <div class="fs-6 fw-bold">
                    EMAIL ADDRESS:
                </div>
                <div class="text-start">
                    preeq@gmail.com
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->

    @include('layouts.footer')

    <!-- 
    PAGES: 
    Home
    About
    Contact
    Tracking
    Pricing
    Schedule Pickup(A form that will contain name,email,phone destination country,current country width package height,weight,length

    Use the template as references and

    https://www.dhlexpress.be

    any troubles let me know -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>