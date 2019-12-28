@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class="active"><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
        @if($user->role=='admin')
        <li class=""><a href="{{ route('appsetting') }}" >App setting</a></li>
        @endif
    </ul>
@endsection
@section('content')
@if(isset($success)&&$success!='')
<div class="alert alert-success">
	<button class="close" data-dismiss="alert"></button>
	Your Request is successful!
</div>
@endif
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <!-- Invoice area Start-->
                        <div class="invoice-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="invoice-wrap">
                                            <div class="invoice-img">
                                                <img src="{{ asset('nokia/img/logo/logo-admin.png') }}" alt="" />
                                            </div>
                                            <div class="invoice-hds-pro">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="invoice-cmp-ds ivc-frm">
                                                            <div class="invoice-frm">
                                                                <span>Invoice from</span>
                                                            </div>
                                                            <div class="comp-tl">
                                                                <h2>{{$investment->user->firstname}} {{$investment->user->lastname}}</h2>
                                                                <p>{{$investment->user->address}}</p>
                                                            </div>
                                                            <div class="cmp-ph-em">
                                                                <span>{{$investment->phone}}</span>
                                                                <span>{{$investment->email}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="invoice-cmp-ds ivc-to">
                                                            <div class="invoice-frm">
                                                                <span>Invoice to</span>
                                                            </div>
                                                            <div class="comp-tl">
                                                                <h2>{{$investment->bankname}}</h2>
                                                                <p>{{$investment->loan->address}}</p>
                                                            </div>
                                                            <div class="cmp-ph-em">
                                                                <span>{{$investment->loan->phone}}</span>
                                                                <span>{{$investment->loan->email}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="invoice-hs">
                                                        <span>Invoice#</span>
                                                        <h2>456656</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                        <span>Date</span>
                                                        <h2>{{date('d/m/Y')}}</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                        <span>Whatever</span>
                                                        <h2>472-000</h2>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                                        <span>Grand Total</span>
                                                        <h2>${{$investment->amout}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="invoice-ds-int">
                                                        <h2>Remarks</h2>
                                                        <p></p>
                                                    </div>
                                                    <div class="invoice-ds-int invoice-last">
                                                        <h2>iFounding Group to {{$investment->loan->firstname}} {{$investment->loan->lastname}}</h2>
                                                        <p class="tab-mg-b-0">. </p>
                                                    </div>
                                                    <a href='{{url("/dashboard/withdrawlist/".$investment->id)}}' class="btn btn-danger notika-btn-danger waves-effect">Send Brrower & Bank</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice area End-->
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection