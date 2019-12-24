@extends('frontend.layout.master')

@section('title'.'FAQ Page')

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
            style="background-image: url('{{ asset('frontend-assets/images/csr.jpg') }}'); background-repeat:no-repeat;
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

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-6 pl-5">
                <span class="text-primary">Ifundingroup</span><span class="text-secondary">>submit a request</span>
            </div>
            <div class="col-sm-6 mt-sm-4 mt-md-0 mt-4 text-center">
                <form>
                    <input class="background-none w-100 pl-3 p-1 border border-secondary" type="search" name="faq"
                           placeholder="search">
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <h2 class="p-2"><a href="#!" class="master-color"> FAQ </a><span><a href="{{ route('contactus') }}"
                                                                                    class="text-secondary"> &nbsp;&nbsp;CONTACT IFUNDINGROUP</a></span>
                </h2>
                <h2 class="mt-4">General </h2>
                <hr class="mb-4">
                <a href="#!" class="text-secondary">FOR YOUR EYES ONLY - INTERNAL FAQS</a><br>
                <a href="#!">Christmas service hours - Investor Support</a><br>
                <a href="#!">Christmas service hours - Investor Support</a><br>
                <a href="#!">Christmas service hours - Investor Support</a><br>
                <a href="#!">Christmas service hours - Investor Support</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="mt-4">Announcements </h2>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">CHANGES TO THE SECONDARY MARKET AND UPDATES TO INVESTOR
                            T&CS</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">LATEST UPDATES</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="mt-4">General FAQs</h2>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">CHANGES TO THE SECONDARY MARKET AND UPDATES TO INVESTOR
                            T&CS</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">LATEST UPDATES</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="mt-4">FAQs for Borrowers </h2>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">CHANGES TO THE SECONDARY MARKET AND UPDATES TO INVESTOR
                            T&CS</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">LATEST UPDATES</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a>
                    </div>

                </div>

            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-12">
                <h2 class="mt-4">FAQs for Investors</h2>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">CHANGES TO THE SECONDARY MARKET AND UPDATES TO INVESTOR
                            T&CS</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a><br>
                        <a href="#!" class="mt-2">Christmas service hours - Investor Support</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#!" class="text-secondary">LATEST UPDATES</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a><br>
                        <a href="#!">Christmas service hours - Investor Support</a>
                    </div>

                </div>

            </div>
        </div>

    </div><!--container-->
</section>

@endsection
