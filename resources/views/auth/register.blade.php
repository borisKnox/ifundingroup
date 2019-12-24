@extends('frontend.layout.master')

@section('content')
    <div class="container-fluid bg-light">
        <div class="row py-5">
            <div class="col-sm-6 offset-sm-3 p-sm-5 justify-content-center bg-white mt-5">
                <h1 class="fa-2x master-color p-2">Sign Up</h1>
                <form class="my-3" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h5 class="fa-lg">Username</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                               aria-label="Search" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <h5 class="fa-lg">Email</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                               placeholder="Example@gmail.com" aria-label="Search" required value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <h5 class="fa-lg">Password</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control" type="password" name="password" aria-label="Search" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <h5 class="fa-lg"> Confirm Password</h5>
                    <div class="input-group mb-4 mt-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required autocomplete="new-password">
                    </div>

                    <div align="right">
                        <div class="form-check" align="left">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>


                        <h5 class="fa-lg text-left mt-4">Basic Info</h5>
                        <div class="input-group mb-4 mt-3">
                            <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                                   name="first_name" aria-label="Search" placeholder="First Name"
                                   value="{{ old('first_name') }}" required>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text"
                                   name="last_name" aria-label="Search" placeholder="Last Name"
                                   value="{{ old('last_name') }}" required>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <h5 class="fa-lg text-left mt-4">Home Address</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" name="home_address" placeholder="Home Address"
                                   required>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="apartment" placeholder="Apartment #" required>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="stat" placeholder="State" required>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" name="zip_code" placeholder="zip Code" required>
                        </div>

                        <h5 class="fa-lg text-left mt-4">Phone Number</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" name="phone" placeholder="Mobile Phone Number"
                                   required>
                        </div>


                        <h5 class="fa-lg text-left mt-4">Date of Birth</h5>
                        <div class="input-group">
                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                        </div>


                        <h5 class="fa-lg text-left mt-4">Home Ownership</h5>
                        <div class="form-group" align="left">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="home_ownership" value="Recent"
                                       required>
                                <label class="form-check-label">Recent</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="home_ownership" value="Own">
                                <label class="form-check-label">Own</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="home_ownership"
                                       value="Living with parents" required>
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
                            <input type="text" class="form-control" name="school_name" placeholder="School Name" required>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="undergraduate"
                                   placeholder="Undergraduate Program" required>
                        </div>

                        <h5 class="fa-lg text-left mt-4">Graduation Date ( Last Attendance Date)</h5>
                        <div class="input-group">
                            <input type="date" class="form-control" name="graduation_date"
                                   placeholder="Graduation Date" required>
                        </div>


                        <h5 class="fa-lg text-left mt-4 mb-2">Employment Info</h5>
                        <h6 class="text-left">Employment status</h6>
                        <div class="form-group" align="left">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="emp_status" value="Current"
                                       required>
                                <label class="form-check-label">Current</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="emp_status" value="Future" required>
                                <label class="form-check-label">Future</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" name="emp_name"
                                   placeholder="Employers Name" required>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" name="income_total"
                                   placeholder="Total Individual Annual Income" required>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" name="exp_total"
                                   placeholder="Total years of Professional Work Experience" required>
                        </div>




                        <button type="submit"
                                class="btn btn-xl px-4 py-3 master-bg text-white font-weight-bold fa-lg mt-5">Sign
                            up
                        </button>
                        <h6><a href="set_new_pass.html" class="text-dark"><u>I've forgotten my password</u></a></h6>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
