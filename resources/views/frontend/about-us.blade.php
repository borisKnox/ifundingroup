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
    <header class="about_masthead"
            style="background-image: url('{{ asset('frontend-assets/images/young_man.jpg') }}'); background-repeat:no-repeat;
                background-size:cover;
                background-position:center;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 pt-5">
                    <h1 class="font-weight-bold text-white display-sm-3 display-4 pt-5">A BETTER FINANCIAL WORLD</h1>
                    <hr class="master-bg w-25" style="height:5px;" align="left">
                    <h3 class="text-white font-weight-bold pt-4"> We ignite opportunities for businesses and investors
                        by
                        providing a better deal for everyone.</h3>
                </div>
            </div>
        </div>
    </header>
@endsection

<section>

    <div class="container-fluid master-bg">
        <div class="row p-5">
            <div class="col-lg-6 text-white my-auto text-justify">
                <h1 class="font-weight-bold fa-2x my-4">Revolutionising a broken system</h1>
                <h4 class="font-weight-light lead">When Ifundingroup was founded, we could see that businesses weren’t
                    being given the finance to grow, while investors were making poor returns. We had a simple idea —
                    let them support each other.<br><br>
                    By lending directly to businesses through Ifundingroup, investors can now earn attractive returns to
                    better provide for their future. Businesses get fast, easy access to funding to grow, create jobs,
                    support local communities and drive the economy forward. We believe it’s better for everyone.
                    <br><br>
                    Read how we’re driving the economy forward in our impact report
                </h4>
            </div>
            <div class="col-lg-6 bg-white p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/trainee.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-sm-7 my-auto pl-sm-5">
                <h5 class="font-weight-light">
                    When small businesses succeed, everyone benefits. In 2018, small businesses used their loans to
                    unlock 115,000 jobs globally.
                </h5>
            </div>
            <div class="col-sm-5 my-auto">
                <h5 class="font-weight-light text-center">
                    <span class="master-color display-4">£8.1 billion</span><br>
                    <span>Lent to businesses globally</span>
                </h5>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row bg-light">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 text-center">
                <h1 class="font-weight-bold master-color display-sm-3 display-4 pt-5">WE BELIEVE IN THOSE MADE TO DO
                    MORE</h1>
                <hr class="master-bg w-50" style="height:5px;">
                <h3 class=" my-4 font-weight-light">Business owners and investors share a common thread. They’re forward
                    thinkers. They’re determined. They stand up to make a difference and work hard to make it
                    happen.</h3>
                <h5 class="font-weight-light mb-5">That same thread runs through everyone at Ifundingroup. It’s a shared
                    mission that inspires us – we help you as you change the world.<br><br>
                    So whether you’re a business owner who aspires to more, or an investor who wants your money to go
                    further, we believe in you. You’re the ones we built Ifundingroup for.
                </h5>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-lg-6 my-auto text-justify">
                <h1 class="font-weight-bold master-color fa-2x my-4">We’ve helped 77,000 small businesses across the
                    world</h1>
                <h4 class="font-weight-light lead">From accountants and jewellers to bakers and film makers, we’ve
                    helped thousands of businesses in the UK, US, Germany and the Netherlands to take their next step
                    forward.<br><br>

                    <button class="btn btn-xl bg-none"><u><a href="{{ route('applynow.index') }}" class="text-dark"
                                                             style="font-size: 20px">Open A Classic Account</a></u>
                    </button>

                </h4>
            </div>
            <div class="col-lg-6 master-bg p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/catering_girl.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid master-bg">
        <div class="row p-5">
            <div class="col-lg-6 bg-white p-2">
                <img class="img-fluid" src="{{ asset('frontend-assets/images/shopkeeper.jpg') }}">
            </div>

            <div class="col-lg-6 text-white my-auto text-justify">
                <h1 class="font-weight-bold fa-2x my-4">93,000 investors are earning for their future</h1>
                <h4 class="font-weight-light lead">There’s a huge community lending through Ifundingroup. Thousands of
                    people, local and national governments and financial institutions have lent over £8.1 billion,
                    helping thousands of businesses while earning for their futures.<br><br>
                    By lending directly to businesses through Ifundingroup, investors can now earn attractive returns to
                    better provide for their future. Businesses get fast, easy access to funding to grow, create jobs,
                    support local communities and drive the economy forward. We believe it’s better for everyone.
                </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light p-5">
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

    <div class="container-fluid">
        <div class="col">
            <h1 class="font-weight-bold master-color fa-2x my-4 text-center">Global leadership team</h1>
        </div>
        <div class="row p-4">
            <div class="col-sm-3 text-center">
                <img width="90" src="{{ asset('frontend-assets/images/man-1209494_1920.jpg') }}">
                <p><b>Mike Stuart</b><br>
                    Chief Executive Officer</p>
            </div>
            <div class="col-sm-3 text-center">
                <img width="50" src="{{ asset('frontend-assets/images/man-537136_1920.jpg') }}">
                <p><b>Gordon Ettling</b><br>
                    Chief Financial Officer</p>
            </div>
            <div class="col-sm-3 text-center">
                <img width="50" src="{{ asset('frontend-assets/images/women-3678419_1920.jpg') }}">
                <p><b>Lisa Bruins</b><br>
                    General Counsel</p>
            </div>
            <div class="col-sm-3 text-center">
                <img width="50" src="{{ asset('frontend-assets/images/asian-1652023_1920.jpg') }}">
                <p><b>Tom Brockhoff</b><br>
                    Chief Technology Officer</p>
            </div>
        </div>

        {{--  <div class="col my-5">
              <h1 class="font-weight-bold master-color fa-2x my-4 text-center">The team</h1>
          </div>
          <div class="row p-4">
              <div class="col-sm-3 text-center">
                  <img src="{{ asset('frontend-assets/images/user.png') }}">
                  <p><b>Beata Wright</b><br>
                      Founder, Chief Executive Officer</p>
              </div>
              <div class="col-sm-3 text-center">
                  <img src="{{ asset('frontend-assets/images/user.png') }}">
                  <p><b>Samir Desai CBE</b><br>
                      Founder, Chief Executive Officer</p>
              </div>
              <div class="col-sm-3 text-center">
                  <img src="{{ asset('frontend-assets/images/user.png') }}">
                  <p><b>Samir Desai CBE</b><br>
                      Founder, Chief Executive Officer</p>
              </div>
              <div class="col-sm-3 text-center">
                  <img src="{{ asset('frontend-assets/images/user.png') }}">
                  <p><b>Samir Desai CBE</b><br>
                      Founder, Chief Executive Officer</p>
              </div>
          </div>
  --}}
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
                <h3>How it works</h3>
                <h4 class="font-weight-light">FLearn more about how our loans are funded directly by a range of
                    investors.</h4>
                <a href="{{ route('howToWork.index') }}" class="text-dark font-weight-bold"><u>See how it works</u></a>
            </div>
            <div class="col-sm-4">
                <h3>Small business, big impact</h3>
                <h4 class="font-weight-light">Read how we’re driving the economy forward in our impact report.</h4>
                <a href="#!" class="text-dark font-weight-bold"><u>Read the impact report</u></a>
            </div>
        </div>
    </div>
</section>
@endsection
