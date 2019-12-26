@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdraw</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class="active"><a href="{{ route('borrowerNow') }}" >Borrower now</a></li>
    </ul>
@endsection
@section('content')
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a data-toggle="tab" href="#menu1" aria-expanded="true"><i class="notika-icon notika-dollar"></i> Borrower now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="tab-content tab-custom-st">
                                    <div id="menu1" class="tab-pane fade active in">
                                        <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                            <h2 class="section-title">Borrower now</h2>
                                            <p class="section-lead">This page is just an example for you to create your own page.</p>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Example Card</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class="card-footer bg-whitesmoke">
                                                    This is card footer
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