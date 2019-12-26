@extends('dashboard.layout.newdash')
@section('navmenu')
    <ul class="nav nav-pills">
        <li class="active"><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class=""><a href="{{ route('money') }}" >Money</a></li>
        <li class=""><a href="{{ route('earningHistory') }}" >Earning history</a></li>
        <li class=""><a href="{{ route('withdrawal') }}" >Withdrawal</a></li>
        <li class=""><a href="{{ route('lendNow') }}" >Lend now</a></li>
        <li class=""><a href="{{ route('borrowerNow') }}" >Borrower now</a></li>
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
                                <li><a href="{{ route('user.edit', $user->id) }}"><i class="notika-icon notika-app"></i> Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <h2>Edit user</h2>
                        <h5 class="setting-user">Update user details</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        @method('put')
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="fm-checkbox">
                                                    <label class="hover"><div class="icheckbox_square-green checked hover" style="position: relative;"><input type="checkbox" name="status" checked="" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i>Status</label>
                                                </div>
                                                <!-- <label for="my-input">Status</label>
                                                <input id="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Ready"
                                                    data-off="Not Ready" data-onstyle="success" data-offstyle="danger" name="status"> -->
                                            </div>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-support"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="User full name">
                                                </div>
                                            </div>
                                                <!-- <div class="form-group">
                                                    <label>User full name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                                    </div>
                                                </div> -->
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-mail"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Email address </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-at"></i>
                                                        </div>
                                                    </div>
                                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="nk-int-st">
                                                    <input type="text" name="password" class="form-control input-sm" placeholder="Password">
                                                </div>
                                                <!-- <label>Password </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-key"></i>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="password" class="form-control"
                                                        autocomplete="new-password">
                                                </div> -->
                                            </div>

                                            <div class="input-group">
                                                <div class="nk-int-st">
                                                    <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="nk-int-st">
                                                    <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <h5 class="setting-user">Home Address</h5>
                                            <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-house"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="home_address" placeholder="Home Address" value="{{ $user->home_address }}">
                                                </div>
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-success"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="home_address" placeholder="Home Address" value="{{ $user->home_address }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="apartment" placeholder="Apartment #" value="{{ $user->apartment }}">
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="apartment" placeholder="Apartment #" value="{{ $user->apartment }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                                <div class="nk-int-st">
                                                <input type="text" class="form-control" name="city" placeholder="City" value="{{ $user->city }}">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="city" placeholder="City" value="{{ $user->city }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                                <div class="nk-int-st">
                                                <input type="text" class="form-control" name="stat" placeholder="State" value="{{ $user->stat }}">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="stat" placeholder="State" value="{{ $user->stat }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                                <div class="nk-int-st">
                                                <input type="number" class="form-control" name="zip_code" placeholder="zip Code" value="{{ $user->zip_code }}">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="number" class="form-control" name="zip_code" placeholder="zip Code" value="{{ $user->zip_code }}">
                                            </div> -->

                                            <h5 class="setting-user">Phone Number</h5>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-phone"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Mobile Phone Number">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Mobile Phone Number">
                                            </div> -->

                                            <h5 class="setting-user">Date of Birth</h5>
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                    <i class="notika-icon notika-calendar"></i>
                                                </div>
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="dob" value="{{ $user->dob }}" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="date" class="form-control" name="dob" placeholder="Date of Birth" value="{{ $user->dob }}">
                                            </div> -->


                                            <h5 class="setting-user">Home Ownership</h5>
                                            <div class="form-group" align="left">
                                                <div class="fm-checkbox">
                                                    <label class=""><div class="iradio_square-green checked" style="position: relative;"><input type="radio" name="home_ownership" value="Recent" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Recent</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="home_ownership" value="Recent">
                                                    <label class="form-check-label">Recent</label>
                                                </div> -->
                                                <div class="fm-checkbox">
                                                    <label class=""><div class="iradio_square-green " style="position: relative;"><input type="radio" name="home_ownership" value="Own" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Own</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="home_ownership" value="Own">
                                                    <label class="form-check-label">Own</label>
                                                </div> -->
                                                <div class="fm-checkbox">
                                                    <label class=""><div class="iradio_square-green " style="position: relative;"><input type="radio" name="home_ownership"
                                                        value="Living with parents" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Living with parents</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="home_ownership"
                                                        value="Living with parents">
                                                    <label class="form-check-label">Living with parents</label>
                                                </div> -->

                                            </div>


                                            <h5 class="setting-user">School Name</h5>
                                            <div class="input-group">
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" name="check_graduation" >
                                                            <option value='true'> I did not graduate from any collage or school</option>
                                                            <option value='false'> I have graduate from collage or school</option>
                                                        </select>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="I did not graduate from any collage or school" id=""
                                                        name="check_graduation">
                                                    <label class="form-check-label">
                                                        I did not graduate from any collage or school
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="I have graduate from collage or school" id=""
                                                        name="check_graduation">
                                                    <label class="form-check-label">
                                                        I have graduate from collage or school
                                                    </label>
                                                </div> -->
                                            </div>
                                            <br>
                                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="school_name" value="{{ $user->school_name }}">
                                                    <label class="nk-label">School Name</label>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="school_name" placeholder="School Name" value="{{ $user->school_name }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="undergraduate" value="{{ $user->undergraduate }}">
                                                    <label class="nk-label">Undergraduate Program</label>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="undergraduate"
                                                    placeholder="Undergraduate Program" value="{{ $user->undergraduate }}">
                                            </div> -->

                                            <h5 class="setting-user">Graduation Date ( Last Attendance Date)</h5>
                                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                                <div class="input-group date nk-int-st">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" class="form-control" name="graduation_date"
                                                        placeholder="Graduation Date" value="{{ $user->graduation_date }}">
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="date" class="form-control" name="graduation_date"
                                                    placeholder="Graduation Date" value="{{ $user->graduation_date }}">
                                            </div> -->


                                            <h5 class="setting-user mb-4">Employment Info</h5>
                                            <h6 class="text-left">Employment status</h6>
                                            <div class="form-group" align="left">
                                                <div class="fm-checkbox">
                                                    <label class=""><div class="iradio_square-green checked" style="position: relative;"><input type="radio" name="emp_status" value="Current" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Current</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="emp_status" value="Current">
                                                    <label class="form-check-label">Current</label>
                                                </div> -->
                                                <div class="fm-checkbox">
                                                    <label class=""><div class="iradio_square-green " style="position: relative;"><input type="radio" name="emp_status" value="Future" class="i-checks" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Future</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="emp_status" value="Future">
                                                    <label class="form-check-label">Future</label>
                                                </div> -->
                                            </div>
                                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="emp_name" value="{{ $user->emp_name }}">
                                                    <label class="nk-label">Employers Name</label>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="text" class="form-control" name="emp_name"
                                                    placeholder="Employers Name" value="{{ $user->emp_name }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="income_total" value="{{ $user->income_total }}">
                                                    <label class="nk-label">Total Individual Annual Income</label>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="number" class="form-control" name="income_total"
                                                    placeholder="Total Individual Annual Income" value="{{ $user->income_total }}">
                                            </div> -->
                                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control" name="exp_total" value="{{ $user->exp_total }}">
                                                    <label class="nk-label">Total years of Professional Work Experience</label>
                                                </div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input type="number" class="form-control" name="exp_total"
                                                    placeholder="Total years of Professional Work Experience">
                                            </div> -->

                                            <div class="form-group mt-3">
                                                <label>BIO </label>
                                                <textarea name="bio" cols="30" rows="10"
                                                        class="form-control">{{ $user->bio }}</textarea>
                                            </div>


                                            <!-- <div class="row">
                                                <div class="form-group col-6">
                                                    <label>Avatar </label>
                                                    <input type="file" name="avatar_image" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    @if(!is_null($user->avatar) || !empty($user->avatar))
                                                        <img width="200" src="{{ url('storage/'.$user->avatar) }}"
                                                            alt="{{ $user->name }}">
                                                    @endif
                                                </div>
                                            </div> -->

                                        </div>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success notika-btn-success waves-effect">Update</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-success">Update</button> -->
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