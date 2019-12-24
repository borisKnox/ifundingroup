@extends('frontend.layout.master')

@section('title'.'Contact us Page')

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
                <h2 class="p-2"><a href="#!" class="text-dark"> FAQ </a><span class="master-color"><a href="#!"> &nbsp;&nbsp;CONTACT Ifundingroup</a></span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h1>Contact Funding Circle</h1>
                <h5 class="font-weight-light my-4">
                    Please enter the details of your request. A member of our support staff will respond as soon as
                    possible. This is usually within 2 working days.
                </h5>
                <hr>
                <form method="post" action="{{ route('contactus.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($user)
                    <input type="hidden" name="name" value="{{ $user->name }}">
                    @endif
                    <div class="form-group">
                        <label for="usr">your email address <sup class="text-danger">*</sup></label>
                        <input type="email" class="form-control" id="usr" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="usr">subjects <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="usr" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Description</label>
                        <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                        <small class="text-secondary">Please enter the details of your request. A member of our support
                            staff will respond as soon as possible</small>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="up_file">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group" align="right">
                        <input type="submit" class="form-control master-bg w-25 text-white my-4" id="btn">
                    </div>
                </form>

            </div>

            <div class="col-sm-6">
                <h2 class="text">Contact Ifundingroup</h2>
                <h5 class="font-weight-light"> You can call us on 0207 401 9111 from 9am to 6pm, Monday to Friday
                    (excluding public holidays).<br><br>

                    Please note we cannot take loan applications by phone or post.
                    <br><br>
                    You can write to us at Funding Circle Ltd, 71 Queen Victoria Street, London, EC4V 4AY.
                </h5>
            </div>
        </div>

    </div><!--container-->
</section>

@endsection
