@extends('frontend.layout.master')

@section('title'.'Business loan')

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

@section('header')
    <header class="business_masthead"
            style="background-image: url('{{ asset('frontend-assets/images/business.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="font-weight-bold text-white display-sm-3 display-4 pt-5">We say yes to a business<br> loan
                        every 5 minutes</h1>
                    <h3 class="text-white font-weight-bold pt-4"> Fast, affordable finance to help your business. Fund your
                        next <br>step with an unsecured loan up to £500,000.</h3>

                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <button class="btn btn-xl master-bg"><a href="{{ route('applynow.index') }}" class="text-white"
                                                                    style="font-size: 20px">Get your personalize rate </a>
                            </button>
                            <span class="text-white"> &nbsp;&nbsp;OR</span>
                            <button class="btn btn-xl bg-none"><u><a href="{{ route('applynow.index') }}" class="text-white"
                                                                     style="font-size: 20px">Apply now</a></u></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
@endsection

<section>
    <div class="container-fluid">
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
                <p>No fees for full <br>early repayment</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="font-weight-bold master-color display-4 text-center p-2">
                    Finance for almost any purpose
                </h1>
                <h4 class="text-left font-weight-light my-4">
                    We help established businesses of all sizes take their next step. So whatever your next goal is,
                    just tell us how we can help when you apply.
                </h4>
                <hr class="master-bg">
                <h4 class="master-color p-2">POPULAR REASONS TO BORROW</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <table align="center">
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <table align="center">
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <table align="center">
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                                </td>
                                <td>
                                    <h4 class="my-2 font-weight-light pl-3">Earn interest tax-free</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid master-bg">
        <div class="row">
            <div class="col-sm-6 py-3">
                <h4 class="font-weight-light text-sm-left text-center text-white p-3">
                    We’ve helped <b>54,000</b> established businesses in the UK, and approve a new business loan on
                    average<b> every 5 minutes.</b></h4>

            </div>
            <div class="col-sm-6 text-center my-auto">
                <button class="btn btn-xl border"><a href="{{ route('applynow.index') }}" class="text-white" style="font-size: 20px">Get
                        your personalised rate</a></button>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-sm-6 my-auto">
                <h1 class="font-weight-bold fa-2x"><span class="fa fa-quote-left"></span>Very efficient service. I would
                    highly recommend Ifundingroup to anyone needing a business loan.<span
                        class="fa fa-quote-right"></span></h1>
                <h5 class="font-weight-bold master-color p-2">-Alvin, July 2017</h5>
            </div>
            <div class="col-sm-6 master-bg p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/business_review.jpg') }}">
            </div>
        </div>
    </div>

    <!--our easy steps-->
    <div class="container-fluid p-sm-5 my-5 bg-light">
        <!--our easy steps-->
        <div class="row">
            <div class="col-sm-6 bg-white">
                <h1 class="font-weight-bold master-color fa-2x pb-3">How to get a business loan</h1>
                <h4 class="font-weight-light text-justify">With a simple online form, dedicated account manager and fast
                    decision, you can stay focused on your business while we focus on your loan.</h4>
                <div id="review-main">
                    <p id="steps">
                        <b class="border-bottom">Check if you qualify in 30 seconds</b><br><br>
                        See if you’re eligible without affecting your credit score.</p>
                    <p id="steps">
                        <b class="border-bottom"><br><br>Apply online in 10 minutes</b><br><br>
                        Tell us about you and your business with our simple form.</p>
                    <p id="steps">
                        <b class="border-bottom">Decision in 24 hours</b><br><br>
                        If approved, you’ll get a personalised quote typically in 24 hours.</p>
                    <p id="steps">
                        <b class="border-bottom"><br><br>Your funds arrive</b><br><br>
                        Once you accept, you’ll have the money in your account in days.</p>

                </div>
                <button class="btn btn-xl master-bg mb-4"><a href="{{ route('applynow.index') }}" class="text-white"
                                                             style="font-size: 20px">Get your personalize rate </a>
                </button>
            </div>
            <div class="col-sm-6 p-5 my-auto">
                <h1 class="fa-2x my-sm-4">Here to help if you need us</h1>
                <h5 class="font-weight-light my-sm-4">You’ll get a dedicated account manager you can speak to straight
                    away. They’ll answer any questions and guide you through the process. Just call them directly.</h5>
                <h1 class="my-4"><span class="fa fa-user-circle-o master-color"></span> 020 7401 9111</h1><br>
                <h4 class="font-weight-light my-4"><span class="fa fa-quote-left"></span> Excellent support and service.
                    Applying for a loan was so simple.<span class="fa fa-quote-right"></span></h4>
                <h5 class="master-color font-weight-light p-2">-Richard, July 2017</h5>
            </div>
        </div>
        <!--END our easy steps-->
    </div>


    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-sm-6 my-auto">
                <h1 class="font-weight-bold master-color p-2 fa-2x">Fixed, affordable monthly payments</h1>
                <h5 class="font-weight-light p-2">You can borrow £10,000 to £1,000,000 and pay back over 6 months to 5
                    years. There are no fees for full early repayment, so you can pay off your business loan in one go
                    and you’ll only pay interest on the time you borrow.<br><br>
                    Our rates start from 1.9% per year - fees apply.
                </h5>
                <button class="btn btn-xl master-bg my-4"><a href="{{ route('applynow.index') }}" class="text-white"
                                                             style="font-size: 20px">Get your personalize rate </a>
                </button>
            </div>
            <div class="col-sm-6 master-bg p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/shopkeeper.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 bg-light">
        <div class="row">
            <div class="col-md-4 my-auto text-center">
                <img src="{{ asset('frontend-assets/images/telegraph_logo.svg') }}">
            </div>
            <div class="col-md-8">
                <p class="lead fa-2x">"<b>Ifundingroup has been the most lucrative</b> [peer-to-peer platform]. Since I
                    joined in August 2012, drip feeding cash in, my returns, after all fees and bad debt adjustment,
                    have been 6.2pc"</p>
                <p class="text-left text-dark">-Martin Lewis, writing in The Daily Telegraph, 2013</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white my-5 text-center">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/telegraph_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/city_am_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/ft_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/guardian_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/bbc_news_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/economist_logo.svg') }}">
            </div>

        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row p-sm-5 p-0">
            <div class="col-sm-4">
                <h1 class="fa-lg">We’re here to help</h1>
                <h5 class="font-weight-light">Questions? Get in touch with our support team for help or more
                    information.</h5>
                <h1><span class="fa fa-user-circle-o master-color"></span> 020 7401 9111</h1>
            </div>
            <div class="col-sm-4">
                <h3>About us</h3>
                <h4 class="font-weight-light">Find out how we’re changing finance to help businesses around the
                    world.</h4>
                <a href="{{ route('aboutus') }}" class="text-dark font-weight-bold"><u>Learn more about us</u></a>
            </div>
            <div class="col-sm-4">
                <h3>How it works</h3>
                <h4 class="font-weight-light">Learn how our business loans are funded by a range of investors.</h4>
                <a href="{{ route('businessloan') }}" class="text-dark font-weight-bold"><u>See how it works</u></a>
            </div>
        </div>
    </div>

</section>
@endsection
