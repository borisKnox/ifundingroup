<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@yield('link')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<!--custom link-->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/style.css') }}">
<body>
<nav class="navbar navbar-expand-lg navbar-light position-absolute w-100 mt-sm-5 mt-5" style="z-index: 1">
    <div class="container mt-sm-1 mt-4" id="nav-con">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="logo"
                                                                src="{{ asset('frontend-assets/images/logo.jpg') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                style="border-color:white">
                    <span>
                        <i class="fa fa-navicon" style="color:#fff; font-size:20px;"></i>
                    </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('investMoney') }}">Invest your money</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('businessloan') }}">Get a business loan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                                        <a class="nav-link" href="{{ route('howToWork.index') }}">How it works</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link" href="{{ route('lenders.lenders') }}">Lenders</a>
                </li>
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link" href="{{ route('borrowers.whyBorrow') }}">Borrowers</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <div class="dropdown mt-2">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>

                        <div class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('howToWork.index') }}">How it works</a>
                            <a class="dropdown-item" href="{{ route('lenders.lenders') }}">Lenders</a>
                            <a class="dropdown-item" href="{{ route('borrowers.whyBorrow') }}">Borrowers</a>
                        </div>
                    </div>
                </li>
                @yield('login')
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation -->

<div class="container-fluid">
    <div class="row master-bg text-white pb-sm-0 pb-2">
        <div class="col-sm-6 pl-5 text-sm-left text-center pb-1">
            <i class="fa fa-mobile" style="font-size: 25px"></i>
            <span style="font-size: 19px;"> +11 1234567891</span>
        </div>

        <div class="col-sm-6 text-sm-right text-center pr-5 pt-1">
            <i class="fab fa-whatsapp fa-lg pr-4 pl-5"></i>
            <i class="fab fa-facebook fa-lg pr-3 pr-sm-"></i>
            <i class="fab fa-twitter fa-lg pr-3"></i>
            <i class="fab fa-instagram fa-lg"></i>
        </div>
    </div>
</div>
<!-- Full Page Image Header with Vertically Centered Content -->
@yield('header')

@yield('alertMessage')


@yield('content')


<!-- Footer -->
<footer class="page-footer font-small pt-4 footer-bg">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mx-auto text-left">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Ifundingroup</h5>
                <p>Ifundingroup Limited is authorised and regulated by the Financial Conduct Authority under firm
                    registration number 722513. Ifundingroup is not covered by the Financial Services Compensation
                    Scheme. Registered in England (Co. No. 06968588) with registered office at 71 Queen Victoria
                    Street, London, EC4V 4AY.
                </p>

            </div>

            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto text-left">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('aboutus') }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ route('businessloan') }}">Get business loan</a>
                    </li>
                    <li>
                        <a href="{{ route('careers.index') }}">Careers</a>
                    </li>
                    <li>
                        <a href="{{ route('howToWork.index') }}">How its work</a>
                    </li>
                    <li>
                        <a href="{{ route('lenders.lenders') }}">Lenders</a>
                    </li>
                    <li>
                        <a href="{{ route('borrowers.whyBorrow') }}">Borrowers</a>
                    </li>

            </div>

            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto text-left">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quick Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus') }}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('investMoney') }}">Investor</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
            <a href="{{ route('register') }}" class="btn master-bg text-white btn-rounded">Sign up!</a>
        </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="{{ route('home') }}"> Ifundingroup.com</a> | Design & developed by :
        <a href="https://www.facebook.com/ibrahim.shaban1696"> Ibrahim</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/b70e5feeea.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend-assets/js/index.js') }}"></script>
</body>
</html>
