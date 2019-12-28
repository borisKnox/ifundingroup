@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class="active"><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
        @if($user->role=='admin')
        <li class=""><a href="{{ route('appsetting') }}" >App setting</a></li>
        @endif
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="{{ route('dashboard') }}"><i class="notika-icon notika-house"></i> Dashboard</a></li>
                                <li><a href="{{ route('user.edit', $user->id) }}"><i class="notika-icon notika-app"></i> Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <h4 style='text-align: center;'>Welcome to your profile,{{ $user->name }}</h4>
                        <h2>Summery</h2>
                        <p>Keep track of all your money and investments</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Investments to date</h2>
                                        </div>
                                    </div>
                                    <h2>{{count($investment)}}</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Invested to date</h2>
                                        </div>
                                    </div>
                                    <h2>${{$investment->sum('amout')}}</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Distribution-Income</h2>
                                        </div>
                                    </div>
                                    <h2>$4,732</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Distribution-Capital</h2>
                                        </div>
                                    </div>
                                    <h2>$5,835</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2>Budget vs Sales</h2>
                        <div class="sale-statistic-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
                                        <div class="sale-statistic-inner notika-shadow mg-tb-30">
                                            <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                                        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                                            <div class="dash-widget-visits"></div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">3,20,000</span></h3>
                                                    <p>Page Views</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-bar"></div>
                                                </div>
                                            </div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">1,03,000</span></h3>
                                                    <p>Total Clicks</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-line"></div>
                                                </div>
                                            </div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">24,00,000</span></h3>
                                                    <p>Site Visitors</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-bar-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection