<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
</head>
<body class="">
    <!-- Navbar -->
 @include('layouts.nav')

    <!-- header -->
    <div class="container-fluid text-black px-7">

        <div class="w-100 position-relative mt-5">
            <div class="">
                <h2 class="fs-bold">
                    About us
                </h2>
                <h6 class="text-black-50">Know about us more</h6>
            </div>

            <div class="end-0 bottom-0 position-absolute">
                <a href="#" class="text-black">HOME</a>/
                <span>ABOUT</span>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-2 my-7">
            <div class="my-2">
                <p class="text-black-50 mb-5">Today's customers are always on the go and want their products faster and cheaper than ever before. Global interconnectedness is growing. That's why you need a powerful, international network to manage your supply chain. With 380,000 people
                    in over 220 countries and territories worldwide, we're reaching more people than ever. And, as we're already thinking about what the world in 2050 might look like, we're preparing for the logistics challenges that lie ahead. Because
                    we're not only delivering packages. It's our goal to bring joy and prosperity to the people we serve. Everywhere. Every day.
                    <ul>
                        <li class="d-flex my-2">
                            <div>
                                <div class="about-icon-wrapper fs-5">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                            </div>

                            <div class="ms-3">
                                <h5 class="fs-bold">
                                    Canal Transit Services</h5>
                                <p class="text-black-50">
                                    Carniv can arrange all documentation and procedural requirements in relation to canal transit through any navigable route
                                </p>
                            </div>
                        </li>

                        <li class="d-flex my-2">
                            <div>
                                <div class="about-icon-wrapper fs-5">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                            </div>

                            <div class="ms-3">
                                <h5 class="fs-bold">Terminal Management and Procedures</h5>
                                <p class="text-black-50">An integrated service package that utilises the experience and expertise of our in-house terminal specialists to help clients control and save on all port-related requirements. </p>
                            </div>
                        </li>

                        <li class="d-flex my-2">
                            <div>
                                <div class="about-icon-wrapper fs-5">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                            </div>

                            <div class="ms-3">
                                <h5 class="fs-bold">Fast delivery</h5>
                                <p class="text-black-50">A highly efficient supply-chain distribution network for equipment and marine parts, and ships spares.</p>
                            </div>
                        </li>
                    </ul>
            </div>

            <div class="my-2">
                <div class="w-100 mx-auto">
                    <img src="./assets/img/background/man.jpg" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 my-7 gx-3">

            <div class="my-3">
                <div class="border position-relative px-6 py-6 h-100">
                    <h5 class="mb-3 fs-bold">what we do</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo
                    </p>

                    <div class="background-primary position-absolute top-0 w-50 start-0" style="height: 1px;"></div>
                    <div class="background-primary position-absolute bottom-0 w-50 end-0" style="height: 1px;"></div>
                </div>
            </div>

            <div class="my-3">
                <div class="border position-relative px-6 py-6 h-100">
                    <h5 class="mb-3 fs-bold">what we do</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo
                    </p>
                    <div class="background-primary position-absolute top-0 w-50 start-0" style="height: 1px;"></div>
                    <div class="background-primary position-absolute bottom-0 w-50 end-0" style="height: 1px;"></div>
                </div>
            </div>

            <div class="my-3">
                <div class="border position-relative px-6 py-6 h-100">
                    <h5 class="mb-3 fs-bold">what we do</h5>
                    <p>We are able to scrutinise hire or lease contracts between vessel owners and the hirer or lessee (charterer), to ensure that all points are clear and covered so as to avoid any unforeseen issues
                    </p>

                    <div class="background-primary position-absolute top-0 w-50 start-0" style="height: 1px;"></div>
                    <div class="background-primary position-absolute bottom-0 w-50 end-0" style="height: 1px;"></div>
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