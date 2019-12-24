@extends('frontend.layout.master')

@section('title','How its work')

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




<section>
    <header class="about_masthead"
            style="background-image: url('{{ asset('frontend-assets/images/how-work.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 pt-5">
                    <h1 class="font-weight-bold text-white display-sm-3 display-4 pt-5">@yield('superTitle')</h1>
                    <hr class="master-bg w-25" style="height:5px;" align="left">

                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-4 text-center mx-auto">
                <div class="navtitl table-success"><a class="lender_active" href="{{ route('howToWork.index') }}">How Funding Works</a></div>

                <div class="navtitl"><a href="{{ route('howToWork.notDow') }}">What Funding does (and does not) do</a></div>

                <div class="navtitl table-success"><a href="{{ route('howToWork.bidProcess') }}">The Process</a></div>

                <div class="navtitl"><a href="{{ route('howToWork.transFunds') }}">Transfer of Funds and EMI Payments</a>
                </div>

                <div class="navtitl table-success"><a href="{{ route('howToWork.refund') }}">Cancellation and Refund Policy</a></div>
            </div>

            <div class=" col-md-8 text-center mx-auto">
                <h1 class="master-color display-4 font-weight-bold text-center mx-auto">@yield('subTitle')</h1>
                <div class="col-sm-12 text-center">
                    <hr class="master-bg w-25">
                    @yield('contents')
                </div>
            </div>
        </div>

    </div>

</section>
@endsection
