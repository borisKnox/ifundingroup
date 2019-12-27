@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class="active"><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                    <div class="row">
                        <h2 class="section-title">Earning</h2>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>11/11/2019</h2>
                                <p>From Lending deposit to Akqushi at valued 11.60% interest of deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>11/11/2019</h2>
                                <p>From Lending deposit to Akqushi at valued 11.60% interest of deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>11/11/2019</h2>
                                <p>From Lending deposit to Akqushi at valued 11.60% interest of deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>11/11/2019</h2>
                                <p>From Lending deposit to Akqushi at valued 11.60% interest of deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style='margin-top:10px'>
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>11/11/2019</h2>
                                <p>From Lending deposit to Akqushi at valued 11.60% interest of deposit 25000USD</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Withdrawal</h2>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>7/5/2019</h2>
                                <p>Withdrawal processed to Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>7/5/2019</h2>
                                <p>Withdrawal processed to Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Bonus</h2>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>12/25/2019</h2>
                                <p>Get Bonus from Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>12/25/2019</h2>
                                <p>Get Bonus from Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>12/25/2019</h2>
                                <p>Get Bonus from Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Lending</h2>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>5/25/2019</h2>
                                <p>Lend to Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h2 class="section-title">Borrowing</h2>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                <h2>8/25/2019</h2>
                                <p>Borrow from Akqushi at valued deposit 25000USD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection