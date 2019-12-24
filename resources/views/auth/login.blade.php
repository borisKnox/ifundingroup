@extends('frontend.layout.master')

@section('content')
    <div class="container-fluid bg-light">
        <div class="row py-5">
            <div class="col-sm-6 offset-sm-3 p-sm-5 justify-content-center bg-white mt-5">
                <h1 class="fa-2x master-color p-2">Sign in to your account</h1>
                <form class="my-3" method="POST" action="{{ route('login') }}">
                    @csrf

                    <h5 class="fa-lg">Email</h5>
                    <div class="input-group mb-4 mt-3">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Example@gmail.com" aria-label="Search" required value="{{ old('email') }}">
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

                    <div align="right">
                        <div class="form-check" align="left">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <button type="submit" class="btn btn-xl px-4 py-3 master-bg text-white font-weight-bold fa-lg">Login</button>
                        <br><br>
                        <h6><a href="{{ route('register') }}" class="text-dark"><u>Sign up</u></a></h6>
                        <h6><a href="set_new_pass.html" class="text-dark"><u>I've forgotten my password</u></a></h6>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
