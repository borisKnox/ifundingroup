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
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-example-int form-example-st">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" data-mask='99/99/9999' placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-example-int form-example-st">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" data-mask='99/99/9999' placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                                <div class="form-example-int">
                                    <button class="btn btn-success notika-btn-success">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Entity</th>
                                    <th>Project</th>
                                    <th>Type</th>
                                    <th>Bank for Distributions</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Contract</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alexandra</td>
                                    <td>Shopping Mall</td>
                                    <td>B piece</td>
                                    <td>iFounding Bank</td>
                                    <td>Active</td>
                                    <td>11/11/2019</td>
                                    <td>B piece</td>
                                    <td>5500$</td>
                                    <td><button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection