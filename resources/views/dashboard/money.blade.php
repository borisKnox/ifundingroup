@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class="active"><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='background-color: rgb(0, 129, 157);background-image: radial-gradient(circle at 1% 40%, rgb(48, 101, 177), rgb(23, 190, 202));'>
            <h4 style='text-align:center;color:white;margin-top:10px;'>IFOUNDING GROUP MONEY</h4>
            <h2 style='text-align:center;color:white;'>Introducing IFOUNDING GROUP MONEY™: Save, spend, and earn—all in one cash management product.</h2>
            <div class="row" align='center'>
                <a href='{{route("investMoney")}}' id='opa' class="btn btn-default btn-icon-notika waves-effect" style='margin:20px;'> Open An Account</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                            <div class="contact-ctn">
                                <div class="contact-ad-hd" align='center'>
                                    <i class="notika-icon notika-bar-chart"></i>
                                    <h2>High Interest</h2>
                                    <p>Your money should make you more money. Earn up to 11.60% on your money. This percentage is subject to change at any time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                            <div class="contact-ctn">
                                <div class="contact-ad-hd" align='center'>
                                    <i class="notika-icon notika-support"></i>
                                    <h2>Fee-free</h2>
                                    <p>We don't believe in changing you fees to use own money. That said, our fee structure is subject to change at any time. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                            <div class="contact-ctn">
                                <div class="contact-ad-hd" align='center'>
                                    <i class="notika-icon notika-app"></i>
                                    <h2>Membership</h2>
                                    <p>We don't believe in changing you fees to use own money. That said, our fee structure is subject to change at any time. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class='row' align='center'>
                        <h2 style='margin-top:30px;'>Open a iFounding Money account today.</h2>
                        <a href='{{route("investMoney")}}' style='cursor:pointer;'>Open An Account</a>
                    </div>
                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a data-toggle="tab" href="#menu1" aria-expanded="true"><i class="notika-icon notika-dollar"></i> High Interest Lending</a></li>
                                <li><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="notika-icon notika-credit-card"></i> Lending Fee Free</a></li>
                                <li><a data-toggle="tab" href="#menu3" aria-expanded="false"><i class="notika-icon notika-app"></i> Withdraw</a></li>
                                <li><a data-toggle="tab" href="#menu4" aria-expanded="false"><i class="notika-icon notika-app"></i> Membership</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="tab-content tab-custom-st">
                                    <div id="menu1" class="tab-pane fade active in">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>Your money should make you more money. Eurn up to 11.60% on your money. This percentage is subject to change at any time.</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>We don't believe in changing you fees to use own money. That said, our fee structure is subject to change at any time. </h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>All you need is a payment option, view our payment option to Withdraw your interet lending rates with a fast speed withdraw vs interest</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                    <div id="menu4" class="tab-pane fade">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <div class="contact-ctn">
                                                <div class="contact-ad-hd">
                                                    <h2>Access to loans, and much more simply by registering, doing to your dashboard, Go to lend now and view your rates. Registeration is easy and fast.</h2>
                                                </div>
                                            </div>
                                            <h2>$$$</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                
                </div>
            </div>
        </div>
    </div>
@endsection