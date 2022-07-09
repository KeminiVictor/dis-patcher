<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.header')
        <link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
        </head>
<body class="">
    <!-- Navbar -->
    @include('layouts.nav')



    <!-- heading and contact form -->

    <div class="container-fluid px-7 mx-auto position-relative py-5">
        <div class="w-100 d-flex mb-5">
            <div class="">
                <h2 class="fw-bold">
                    CONTACT US
                </h2>
                <h6 class="text-black-50">Get in touch with us easily</h6>
            </div>

            <div class="ms-auto mt-auto">
                <a href="#" class="text-black">HOME</a>/
                <span>CONTACT</span>
            </div>
        </div>

        <div class="w-lg-75 mx-auto mt-5">
            <div class="row">
                <div class="col-md-5 col-12 col-lg-4 my-2">
                    <ul class="contact-detail">
                        <li class="d-none d-lg-block" style="height: 7vh;">

                        </li>
                        <li class="d-flex">
                            <p class="fw-bold text-uppercase">uk numbers:</p>
                            <div class="ms-5"> +001-2463-957 <br> +001-4356-643 </div>
                        </li>

                        <li class="d-flex">
                            <p class="fw-bold text-uppercase">uk numbers:</p>
                            <div class="ms-5"> +001-2463-957 <br> +001-4356-643 </div>
                        </li>

                        <li class="d-flex">
                            <p class="fw-bold text-uppercase">uk numbers:</p>
                            <div class="ms-5"> +001-2463-957 <br> +001-4356-643 </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-1 position-relative d-none d-md-block my-4">
                    <div class="h-50 bg-light mx-auto position-absolute top-25 start-50" style="width: 2px;">
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-7 my-4">
                    <form class="row" id="contact-form">
                        <div class="col-12 d-none d-lg-none d-md-block" style="height: 7vh;"></div>

                        <div class="col-sm-3 my-2"> <label class="fw-bold text-uppercase"> Name: </label></div>
                        <div class="col-sm-9 my-2"> <input type="text" name="Name" id="Name" required="true" placeholder="" class="form-control p-3"> </div>

                        <div class="col-sm-3 my-2"> <label class="fw-bold text-uppercase"> Email: </label></div>
                        <div class="col-sm-9 my-2"> <input type="email" name="Email" id="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email Address" class="form-control p-3"> </div>

                        <div class="col-sm-3 my-2"> <label class="fw-bold text-uppercase"> Phone: </label></div>
                        <div class="col-sm-9"> <input type="text" name="Phone" id="Phone" placeholder="" class="form-control p-3 my-2"> </div>

                        <div class="col-sm-3 my-2"> <label class="fw-bold text-uppercase"> Message: </label></div>
                        <div class="col-sm-9 my-2"> <textarea class="form-control p-3" name="Message" id="Message" required="" cols="25" rows="3" style="height: 102px;"></textarea> </div>

                        <div class="col-sm-3 my-2"></div>
                        <div class="col-sm-9 col-xs-12 pull-right my-2">
                            <button name="submit" id="submit_btn" class="btn rounded-0 btn-lg"> send message </button>
                        </div>
                </div>
                </form>
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