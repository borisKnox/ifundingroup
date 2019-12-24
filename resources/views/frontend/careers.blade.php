@extends('frontend.layout.master')

@section('title'.'Careers page')

@section('link')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/style/career_style.css') }}">
@endsection


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
    <header class="contact_masthead"
            style="background-image: url('{{ asset('frontend-assets/images/mentors.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">


        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 pt-5">
                    <h1 class="font-weight-bold text-white display-sm-3 display-4 pt-5">A BETTER FINANCIAL WORLD</h1>
                    <hr class="master-bg w-25" style="height:5px;" align="left">
                    <h3 class="text-white font-weight-bold pt-4"> We ignite opportunities for businesses and investors
                        by providing a better deal for everyone.</h3>
                </div>
            </div>
        </div>
    </header>
@endsection
<section>
    <div class="container-fluid">
        <div class="row bg-light">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 text-center">
                <h1 class="font-weight-bold master-color display-sm-3 display-4 pt-5">WE’RE BUILDING A BETTER FINANCIAL
                    WORLD</h1>
                <hr class="master-bg w-50" style="height:5px;">
                <h3 class=" my-4 font-weight-light">We connect investors with money to lend with businesses who want to
                    borrow. Supporting each other, businesses get the finance they need to progress, and investors can
                    earn great returns.</h3>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="container-fluid px-sm-5 bg-light">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-bold master-color fa-3x text-center pb-2 pt-5">Why work at Ifundingroup?</h1>
            </div>
        </div>
        <div class="row px-sm-5">
            <div class="col-sm-4">
                <h3>Innovation</h3>
                <h5 class="font-weight-light">We are a fast moving, innovative company, creating new solutions with the
                    latest tech, data and fantastic service to make our platform work for all.</h5>
            </div>
            <div class="col-sm-4">
                <h3>Make a difference</h3>
                <h5 class="font-weight-light">We help small businesses get the finance they need to grow, creating
                    thousands of jobs and driving the economy forward.</h5>
            </div>
            <div class="col-sm-4">
                <h3>People</h3>
                <h5 class="font-weight-light">Our people are the core of our success, and we believe in a culture that’s
                    as open and collaborative as it is passionate and ambitious.</h5>
            </div>
        </div>

        <div class="row text-center mt-5 px-5 pb-5">
            <div class="col-sm-6">
                <h1 class="pr-sm-5 pr-0"> We invest in our people</h1>
                <h5 class="font-weight-light text-left">
                    We want everyone to feel ownership at Ifundingroup, and that they can keep building their career
                    with us.
                </h5>
                <table align="center">
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Global career development opportunities</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Learn new skills in FC Academy</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Regular company socials for all employees</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </div>
            <div class="col-sm-6">

                <h1 class="pr-sm-5 pr-0"> We keep things social </h1>
                <h5 class="font-weight-light text-left">
                    There’s more to life than work, and we want to have fun and socialize together so everyone enjoys
                    coming to work.
                </h5>
                <table align="center">
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Regular company wide social events</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Charity events and competitions</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fa-2x my-2"><span class="fa fa-check master-color"></span></p>
                        </td>
                        <td>
                            <h4 class="my-2 font-weight-light pl-3">Sports teams and events for all interests</h4>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid master-bg">
        <div class="row">
            <div class="col">
                <h1 class="text-white text-center py-4">A day in the life at Ifundingroup</h1>
            </div>
        </div>
        <div class="row pb-5 px-5">
            <div class="col-lg-6 text-white my-auto text-justify">
                <h1 class="font-weight-bold my-4">An engineer’s day…</h1>
                <h4 class="font-weight-light lead">Arrive in the morning and grab some breakfast (for free!) then head
                    to our morning meeting. Monday’s we plan for the week, then it’s standup Tues-Fri. We work in an
                    agile way, always looking for new solutions to problems and don’t tie ourselves to set ways of
                    working.<br><br>
                    We’ll break for lunch at the Funderbar, play some table tennis, then back to the command line. We’ll
                    have a regular tech huddle too to make sure we’re aligned across all the teams.
                </h4>
            </div>
            <div class="col-lg-6 bg-white p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/enginer.JPG') }}">
            </div>
        </div>
        <div class="row py-5 px-5">
            <div class="col-lg-6 bg-white p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/sales.jpg') }}">
            </div>
            <div class="col-lg-6 text-white my-auto text-justify">
                <h1 class="font-weight-bold my-4">A day in sales…</h1>
                <h4 class="font-weight-light lead">We start each morning with a standup to review yesterday’s progress
                    and expectations for the day. Then it’s time to crack on with calling and emailing potential
                    customers.<br><br>
                    It’s a really vibrant atmosphere, there’s a lot of energy in the team and we’re always sharing
                    learnings and supporting each other. As a fast moving business we have to stay up to date on any
                    changes, and get to give input on what we think will or won’t work well.
                </h4>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white my-5 text-center">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('frontend-assets/images/telegraph_logo.svg') }}">
            </div>
            <div class="col-sm-2">
                <img src="{{asset('frontend-assets/images/city_am_logo.svg')}}">
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

    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-lg-6 my-auto text-justify">
                <h4 class=""><span class="fa fa-quote-left"></span> I joined the engineering team at Ifundingroup a few
                    years ago, and love it. The team is talented, knowledgeable, supportive and fun to work with. <span
                        class="fa fa-quote-right"></span>
                </h4>
                <small>-Lucy Oliphant, Frontend Engineer</small>
            </div>
            <div class="col-lg-6 master-bg p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/staff.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light my-4">
        <div class="row text-center">
            <div class="col-sm-6">
                <h1 class="my-4 master-color">Our current vacancies</h1>
                <hr class="master-bg w-25" style="height:5px">
            </div>

            <div class="col-sm-6 my-auto">
                <button class="btn btn-xl master-bg"><a href="{{ route('register') }}" class="text-white" style="font-size: 20px">Sign
                        up for Job Alerts</a></button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion mt-5" id="accordionExample">

                    @foreach($careers as $career)
                        <div class="card">
                            <div class="card-header" id="heading{{$career->id}}">
                                <h2 class="clearfix mb-0">
                                    <span>{{ $career->title }}</span>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse{{ $career->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $career->id }}"><i
                                            class="fa fa-plus-circle"></i></button>
                                </h2>
                            </div>
                            <div id="collapse{{ $career->id }}" class="collapse"
                                 aria-labelledby="heading{{ $career->id }}"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    {{ $career->content }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{--<div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <span>Data, Risk & Analytics</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i
                                        class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <span>Engineering</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"><i class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper
                                malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus.
                                Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum
                                vestibulum.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <span>Marketing & Communications</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                                <span>People Team</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    <i class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                                <span>Product, Design, & Delivery</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix"><i
                                        class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                                <span>Sales & Business Development</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseseven" aria-expanded="false"
                                        aria-controls="collapseseven"><i class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                                <span>Security & Infrastructure</span>
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseeight" aria-expanded="false"
                                        aria-controls="collapseeight"><i class="fa fa-plus-circle"></i></button>
                            </h2>
                        </div>
                        <div id="collapseeight" class="collapse" aria-labelledby="headingeight"
                             data-parent="#accordionExample">
                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <h5 class="text-center my-4 font-weight-light">If you don’t see a role that fits your profile, then apply with
            our <a href="{{ route('register') }}" class="text-secondary"><u>General Application.</u></a></h5>
    </div>
    <div class="container-fluid bg-light my-4">
        <div class="row">
            <div class="col-lg-7 border shadow py-3 my-3 text-center mx-auto">
                <form action="{{ route('careers.insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="name" type="hidden" value="{{ $user->name }}">
                    <h3 class="fa-lg">Upload resume </h3>



                    <div class="input-group mb-4 mt-3">
                        <label class="mr-2">Email:</label>
                        <input class="form-control" name="email" type="email" placeholder="Example@gmail.com"
                               aria-label="Search"
                               required>
                    </div>


                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>


                    <div align="right">
                        <button type="submit" class="btn btn-xl px-4 py-3 master-bg text-white font-weight-bold fa-lg">
                            Upload file
                        </button>
                    </div>

                </form>
            </div>


        </div>
    </div>
</section>
@endsection
