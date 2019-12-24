@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Edit user')

@section('headerCSS')
    <link href="//gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('content')

    <div class="section-header">
        <h1>Edit user</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @method('put')
                        @csrf
                        <div class="card-header">
                            <h4>Update user details</h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="my-input">Status</label>
                                <input id="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Ready"
                                       data-off="Not Ready" data-onstyle="success" data-offstyle="danger" name="status">
                            </div>
                            <div class="form-group">
                                <label>User full name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </div>
                                    </div>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password" class="form-control"
                                           autocomplete="new-password">
                                </div>
                            </div>

                            <div class="input-group">
                                <label class="sr-only" for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                       placeholder="First Name" name="first_name" value="{{ $user->first_name }}">

                                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                           placeholder="Last Name" name="last_name" value="{{ $user->last_name }}">
                                </div>
                            </div>






                            <h5 class="fa-lg text-left mt-4">Home Address</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" name="home_address" placeholder="Home Address" value="{{ $user->home_address }}">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apartment" placeholder="Apartment #" value="{{ $user->apartment }}">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="city" placeholder="City" value="{{ $user->city }}">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="stat" placeholder="State" value="{{ $user->stat }}">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control" name="zip_code" placeholder="zip Code" value="{{ $user->zip_code }}">
                            </div>

                            <h5 class="fa-lg text-left mt-4">Phone Number</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Mobile Phone Number">
                            </div>


                            <h5 class="fa-lg text-left mt-4">Date of Birth</h5>
                            <div class="input-group">
                                <input type="date" class="form-control" name="dob" placeholder="Date of Birth" value="{{ $user->dob }}">
                            </div>


                            <h5 class="fa-lg text-left mt-4">Home Ownership</h5>
                            <div class="form-group" align="left">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="home_ownership" value="Recent">
                                    <label class="form-check-label">Recent</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="home_ownership" value="Own">
                                    <label class="form-check-label">Own</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="home_ownership"
                                           value="Living with parents">
                                    <label class="form-check-label">Living with parents</label>
                                </div>

                            </div>


                            <h5 class="fa-lg text-left mt-4">School Name</h5>
                            <div class="input-group">
                                <div class="form-check">
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
                                </div>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" name="school_name" placeholder="School Name" value="{{ $user->school_name }}">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="undergraduate"
                                       placeholder="Undergraduate Program" value="{{ $user->undergraduate }}">
                            </div>

                            <h5 class="fa-lg text-left mt-4">Graduation Date ( Last Attendance Date)</h5>
                            <div class="input-group">
                                <input type="date" class="form-control" name="graduation_date"
                                       placeholder="Graduation Date" value="{{ $user->graduation_date }}">
                            </div>


                            <h5 class="fa-lg text-left mt-4 mb-2">Employment Info</h5>
                            <h6 class="text-left">Employment status</h6>
                            <div class="form-group" align="left">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="emp_status" value="Current">
                                    <label class="form-check-label">Current</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="emp_status" value="Future">
                                    <label class="form-check-label">Future</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_name"
                                       placeholder="Employers Name" value="{{ $user->emp_name }}">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control" name="income_total"
                                       placeholder="Total Individual Annual Income" value="{{ $user->income_total }}">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control" name="exp_total"
                                       placeholder="Total years of Professional Work Experience">
                            </div>










{{--
                            <div class="form-group">
                                <label>Mobile number </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}"
                                           required>
                                </div>
                            </div>--}}
                            <div class="form-group mt-3">
                                <label>BIO </label>
                                <textarea name="bio" cols="30" rows="10"
                                          class="form-control">{{ $user->bio }}</textarea>
                            </div>


                            <div class="row">
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
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-lg btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footerJS')
    <script src="//gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        $(function () {
            $('#toggle-one').bootstrapToggle();
        })
    </script>
@endsection
