@extends('frontend.layout.master')

@section('title','Investment- you are more than in your wallet')

@section('content')


@section('login')
    @if(!$user)
        <li class="nav-item mt-3 ml-3 pb-3">
            <a class="badge badge-dark" href="{{ route('login') }}">Login</a>
            <a class="badge badge-dark ml-1" href="{{ route('register') }}">Sign up</a>
        </li>

    @else
        <li class="nav-item mt-2 ml-5">
            <a class="btn btn-secondary" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
    @endif
@endsection


<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-bold text-white display-4">YOU ARE MORE THAN IN YOUR WALLET</h1>
                <h3 class="font-weight-light text-white"> your education and experience help you get the loan you
                    deserve.</h3>

                <div class="row align-items-center mt-5">
                    <div class="col-sm-5 text-sm-right text-center">
                        <button class="btn btn-xl master-bg"><a href="{{ route('businessloan') }}" class="text-white"
                                                                style="font-size: 20px">know more</a></button>
                    </div>
                    <div class="col-sm-1 text-center">
                        <span class="text-white"> OR </span>
                    </div>
                    <div class="col-sm-5 text-sm-left text-center pl-sm-5 pl-3">
                        <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                style="font-size: 20px">Apply now</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <!--<div class="container-fluid">
<div class="row text-white font-weight-bold shadow" id="silent-features">
<div class="col-sm-3 text-center">
<i class="fa fa-check-circle-o fa-3x"></i>
<p>Unsecured loans <br>
£10k – £500k</p>
</div>
<div class="col-sm-3 text-center">
<i class="fa fa-check-circle-o fa-3x"></i>
<p>Rates from <br> 1.9% per year</p>
</div>
<div class="col-sm-3 text-center">
<i class="fa fa-check-circle-o fa-3x"></i>
<p>Get a decision in <br> as little as 5 hours</p>
</div>
<div class="col-sm-3 text-center">
<i class="fa fa-check-circle-o fa-3x"></i>
<p>No fees for full  <br>early repayment</p>
</div>

</div>
</div>-->

    <!--end header content-->

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-sm-12 text-center">
                <h1 class="master-color display-4 font-weight-bold">We’re here to help you thrive</h1>
                <hr class="master-bg w-25">
                <h2 class="font-weight-light w">
                    With a quick application, dedicated account manager and fast decision, you can stay focused on your
                    business while we focus on your loan. Taking your business to the next level has never been easier.
                </h2>
                <div class="row align-items-center mt-5">
                    <div class="col-sm-5 text-sm-right text-center">
                        <button class="btn btn-xl master-bg px-5 font-weight-bold"><a href="{{ route('applynow.index') }}"
                                                                                      class="text-white"
                                                                                      style="font-size: 25px">Get
                                started</a></button>
                    </div>
                    <div class="col-sm-1 text-center">
                        <h5 class="font-weight-light"> OR </h5>
                    </div>
                    <div class="col-sm-5 text-sm-left text-center pl-sm-5">
                        <button class="btn btn-xl master-bg px-5 font-weight-bold"><a href="{{ route('businessloan') }}"
                                                                                      class="text-white"
                                                                                      style="font-size: 25px">Learn
                                more</a></button>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2 id="review-h2">Customer <b>Testimonials</b></h2>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        @foreach($pages as $page)
                        <div class="item carousel-item {{ $page->id==$first->id?'active':'' }}">
                            <div class="row">
                                <div class="col-sm-6 mx-auto">
                                    <div class="testimonial">
                                        <p>{{ $page->test_graph }}</p>
                                    </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img
                                                    src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>{{ $page->test_name }}</b></div>
                                                    <div class="details">{{ $page->test_job }}</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                               {{-- <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>{{ $page->test_graph }}</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>{{ $page->test_name }}</b></div>
                                                <div class="details">{{ $page->test_job }}</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                        @endforeach

                        {{--<div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                            semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Michael Holz</b></div>
                                                <div class="details">Web Developer / DevCorp</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="https://www.tutorialrepublic.com/examples/images/clients/4.jpg"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Mary Saveley</b></div>
                                                <div class="details">Graphic Designer / MarsMedia</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                            semper malesuada ante.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="https://www.tutorialrepublic.com/examples/images/clients/5.jpg"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Martin Sommer</b></div>
                                                <div class="details">SEO Analyst / RealSearch</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="https://www.tutorialrepublic.com/examples/images/clients/6.jpg"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>John Williams</b></div>
                                                <div class="details">Web Designer / UniqueDesign</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end review section-->

    <div class="container-fluid bg-light">
        <div class="row p-3 p-sm-5">
            <div class="col-sm-6 p-0 p-sm-3">
                <h2 class="font-weight-bold mb-3">Thousands of people are waiting to support you</h2>
                <h4 class="font-weight-light">Our loans are funded by a community of thousands of investors, including
                    83,000 people, local government and other institutions, all looking to lend to British businesses
                    like yours.<br><br>
                    We still handle everything for you, but as well as getting the finance you need, you’ll know you’ve
                    got a huge community of investors behind you.
                </h4>

            </div>
            <div class="col-sm-6 p-3 master-bg text-white">
                <h2 class="font-weight-light text-center mb-3">Become an investor</h2>
                <h5 class="font-weight-light mt-5">If you want to earn great returns by lending to British businesses,
                    open an account today.</h5>
                <button class="btn btn-xl border my-3"><a href="{{ route("investMoney") }}" class="text-white"
                                                          style="font-size: 20px">Learn about investing</a></button>
                <h5 class="font-weight-light">Remember, when lending to businesses your capital is at risk.</h5>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-xs-12">
                <div class="card border-primary mb-3 mx-auto" style="max-width: 18rem;">
                    <div class="card-header text-center">Lenders</div>
                    <div class="card-body text-primary text-center">
                        <p class="card-text">Committed to lend</p>
                        <h5><i class="fas fa-rupee-sign"></i>1,221,960,000</h5>
                        <a href="#" class="btn btn-primary">Browse Lenders</a>

                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xs-12">
                <div class="card border-success mb-3 mx-auto" style="max-width: 18rem;">
                    <div class="card-header text-center">Borrowers</div>
                    <div class="card-body text-success text-center">
                        <p class="card-text">Seeking to borrow</p>
                        <h5><i class="fas fa-rupee-sign"></i>1,022,947,939</h5>
                        <a href="#" class="btn btn-primary">Browse Borrowers</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mx-auto mt-3">
            <div class="card mx-auto text-center" style="width: 18rem;">
                <h3 class="mx-auto text-center">Earn Great Returns</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Minimal Risk<p>Net Return: 13.5%(0.5%)</p></li>
                    <li class="list-group-item">Low<p>Net Return: 14.5%(3.1%)</p></li>
                    <li class="list-group-item">Medium<p>Net Return: 15.8%(5.1%)</p></li>
                    <li class="list-group-item">High<p>Net Return: 16.4%(7.2%)</p></li>
                    <li class="list-group-item">Very High<p>Net Return: 20.9%(8%)</p></li>
                    <li class="list-group-item">Unrated<p></p></li>
                </ul>
            </div>

        </div>
    </div>


    <div class="container-fluid master-bg mb-3 mt-3 mb-sm-0 p-3">
        <div class="row">
            <div class="col-sm-6 my-3">
                <h2 class="font-weight-bold text-sm-right text-center text-white mb-3">We proud to help you, need any
                    help!</h2>

            </div>
            <div class="col-sm-6 text-center my-auto">
                <button class="btn btn-xl border"><a href="subpages/{{ route('contactus') }}" class="text-white"
                                                     style="font-size: 20px">Request A Quit</a></button>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row p-sm-5 p-0">
            <div class="col-lg-6 p-3 master-bg text-white">
                <h2 class="font-weight-bold mb-3">Trusted by business and investor</h2>
                <h4 class="font-weight-light">We only do business lending, and have tailored our award-winning service
                    to give you the best experience possible.<br><br>
                </h4>
                <button class="btn btn-xl border my-4 mb-5"><a href="{{ route('businessloan') }}" class="text-white"
                                                               style="font-size: 20px">Learn more about business
                        loan</a></button>
                <div class="row">
                    <div class="col-sm-4 py-3 text-center">
                        <i class="fa fa-trophy fa-4x border rounded-circle p-3" style="color:#FFC107"></i>
                        <p>Business Award 2019</p>
                    </div>
                    <div class="col-sm-4 py-3 text-center">
                        <i class="fa fa-trophy fa-4x border rounded-circle p-3" style="color:#FFC107"></i><br>
                        <p>Business Award 2019</p>
                    </div>
                    <div class="col-sm-4 py-3 text-center">
                        <i class="fa fa-trophy fa-4x border rounded-circle p-3" style="color:#FFC107"></i>
                        <p>Business Award 2019</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 px-sm-3 px-0">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/business_man.png') }}">
            </div>
        </div>
    </div>


</section>
@endsection
