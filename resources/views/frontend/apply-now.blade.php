@extends('frontend.layout.master')

@section('title'.'About us')

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
            style="background-image: url('{{ asset('frontend-assets/images/business_review.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 pt-5">
                    <h1 class="font-weight-bold text-white display-sm-3 display-4 pt-5">Customer support</h1>
                    <hr class="master-bg w-25" style="height:5px;" align="left">
                    <h3 class="text-white font-weight-bold pt-4"> Find answers to common questions or get in touch with
                        us</h3>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('alertMessage')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
@endsection

<section class="mt-5">
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="fa-2x master-color p-2">Get started</h1>
                <h5 class="font-weight-bold text-dark">See if you’re eligible for a loan in 30 seconds. This quick check
                    won’t affect your credit score.</h5>

            </div>
            <div class="col-sm-6">

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 border shadow py-3 my-3">
                <form action="{{ route('applynow.store') }}" method="post">
                    @csrf
                    <input name="name" type="hidden" value="{{ $user->name }}">
                    <h5 class="fa-lg">Company type</h5>
                    <div class="input-group mb-4 mt-3">
                        <select name="company_type" class="custom-select font-weight-bold" id="inputGroupSelect01"
                                required>
                            <option selected>Limited company</option>
                            <option value="Limited liability partnership">Limited liability partnership</option>
                            <option value="Partnership (more than 4 partners)">Partnership (more than 4 partners)
                            </option>
                            <option value="Partnership (less than 4 partners)">Partnership (less than 4 partners)
                            </option>
                            <option value="Sole trader">Sole trader</option>
                        </select>
                    </div>
                    <h5 class="fa-lg">What is your loan for?</h5>
                    <div class="input-group mb-4 mt-3">
                        <select name="loan" class="custom-select font-weight-bold" id="inputGroupSelect01" required>
                            <option selected>Please select</option>
                            <option value="Working capital">Working capital</option>
                            <option value="Expansion/growth">Expansion/growth</option>
                            <option value="Refinancing a loan">Refinancing a loan</option>
                            <option value="Tax payment">Tax payment</option>
                            <option value="Commercial mortage">Commercial mortage</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <h5 class="fa-lg">Search for your company name or company number</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>

                    <h5 class="fa-lg">Email</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control" name="email" type="email" placeholder="Example@gmail.com"
                               aria-label="Search"
                               required>
                    </div>

                    <div class="border border-primary text-center rounded p-2 font-weight-bold">
                        <span class="fa fa-check fa-lg text-white p-3 rounded-circle master-bg"></span> Checking
                        eligibility will not affect your business credit rating.
                    </div>

                    <h6 class="font-weight-normal my-3">By selecting "Check eligibility", I also agree to Ifundingroup's
                        <a href="#!">Terms and Conditions</a> and <a href="#!">Privacy Policy</a>.</h6>

                    <div align="right">
                        <button type="submit" class="btn btn-xl px-4 py-3 master-bg text-white font-weight-bold fa-lg">
                            check Eligibility
                        </button>
                    </div>

                </form>
            </div>

            <div class="col-lg-5 p-sm-5 text-secondary">
                <h5 class="font-weight-normal">90% of businesses that borrow from Ifundingroup would approach us first
                    for a loan vs. a bank.<br><br>
                    Trusted by over 42,000 businesses and over 77,000 people lending.<br><br>
                    The Government-backed British Business Bank is lending £80m through Ifundingroup.</h5>
            </div>
        </div>
    </div>


</section>
@endsection
