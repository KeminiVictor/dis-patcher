<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="{{asset('assets/css/tracking.css')}}">
        </head>

<body class="">
    <!-- Navbar -->
    @include('layouts.nav')

    <div class="body">
        <div class="container my-5">
            <div class="hero-end mx-auto text-start my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="col-primary"><h2>TRACK YOUR PRODUCT.</h2></span>
                            <p class="text-black-50">
                                Now you can track your product easily
                            </p>
                        </div>

                        <div class="order-box row my-3 rounded rounded-1 overflow-hidden">
                            <div class="col-12 col-md-9 py-4 px-0">
                                <input class="form-control py-3 rounded-0" type="text" placeholder="Enter your Tracking No." />
                            </div>
                            <div class="col-12 col-md-3 py-4 px-0">
                                <button class="btn h-100 hero-btn w-100 rounded-0">
                    TRACK
                  </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <article class="card">
                <header class="card-header">My Orders / Tracking</header>
                <div class="card-body">
                    <h6>Order ID: OD45345345435</h6>
                    <article class="card">
                        <div class="card-body row">
                            <div class="col my-2">
                                <strong>Estimated Delivery time:</strong> <br />29 nov 2019
                            </div>
                            <div class="col my-2">
                                <strong>Shipping BY:</strong> <br /> BLUEDART, | <i class="fa fa-phone"></i> +1598675986
                            </div>
                            <div class="col my-2">
                                <strong>Status:</strong> <br /> Picked by the courier
                            </div>
                            <div class="col my-2">
                                <strong>Tracking #:</strong> <br /> BD045903594059
                            </div>
                        </div>
                    </article>

                    <div class="">
                        <div class="track">
                            <div class="step active">
                                <span class="icon"> <i class="fa fa-check"></i> </span>
                                <span class="text">Order confirmed</span>
                            </div>
                            <div class="step active">
                                <span class="icon"> <i class="fa fa-user"></i> </span>
                                <span class="text"> Picked by courier</span>
                            </div>
                            <div class="step">
                                <span class="icon"> <i class="fa fa-truck"></i> </span>
                                <span class="text"> On the way </span>
                            </div>
                            <div class="step">
                                <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">Ready for pickup</span>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <ul class="row"></ul>
                    <hr />
                </div>
            </article>
        </div>
    </div>


        <hr><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="307" id="gmap_canvas" src="https://maps.google.com/maps?q=lagos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:307px;width:100%;}</style><a href="https://www.embedgooglemap.net">how to add google map to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:307px;width:100%;}</style></div></div><hr>


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