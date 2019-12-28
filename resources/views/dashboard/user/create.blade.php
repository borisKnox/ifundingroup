@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class=""><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrow now</a></li>
        @if($user->role=='admin')
        <li class="active"><a href="{{ route('appsetting') }}" >App setting</a></li>
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
                                <li><a href="{{ route('home') }}"><i class="notika-icon notika-house"></i> Home</a></li>
                                <li><a href="{{ route('user.index') }}"><i class="notika-icon notika-app"></i> Users</a></li>
                                <li><a href="{{ route('homepage') }}"><i class="notika-icon notika-app"></i> Home page</a></li>
                                <li><a href="{{ route('contactus.view') }}"><i class="notika-icon notika-app"></i> Contact Us</a></li>
                                <li><a href="{{ route('applynow.view') }}"><i class="notika-icon notika-app"></i> Apply now</a></li>
                                <li><a href="{{ route('careers.index') }}"><i class="notika-icon notika-app"></i> Careers</a></li>
                                <li><a href="{{ route('user.edit', $user->id) }}"><i class="notika-icon notika-app"></i> Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <form action="{{ url('dashboard/admin/user/store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h4>New user details</h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>User full name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email address </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-at"></i>
                                                    </div>
                                                </div>
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </div>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile number </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-mobile-alt"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>BIO </label>
                                            <textarea name="bio" cols="30" rows="10" class="form-control">{{ old('bio') }}</textarea>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>Avatar </label>
                                            <input type="file" name="avatar_image" class="form-control">
                                        </div> -->
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-success">Save</button>
                                    </div>
                                </form>
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