<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('pageTitle','') &mdash; {{ config('app.name') }}</title>

    <!-- General CSS Files -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
{{-- <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
 <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
 <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">--}}


<!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/fontawesome/css/all.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/custom.css') }}">
    {{--
      <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    --}}
    <style>

    </style>
    @yield('headerCSS')
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>

                        <div class="dropdown d-inline mr-2">
                            <button class="btn btn-success dropdown-toggle" style="background: #73eb29" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Personal activity
                            </button>
                            <div class="dropdown-menu mt-3 personal" x-placement="bottom-start" id="personal"
                                 style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform; width: 450px;" >
                                    <div class="list-group">
                                        <a href="#"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">

                                                <h5 class="mb-1">
                                                    <figure class="avatar mr-1 avatar-sm">
                                                        <img src="{{ asset('dashboard-assets/img/avatar/avatar-1.png') }}" alt="...">
                                                    </figure>
                                                    John</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">Reached level: 18</p>
                                            <small>20/11/2019 - 9:45 am</small>
                                        </a>
                                        <a href="#"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">

                                                <h5 class="mb-1">
                                                    <figure class="avatar mr-1 avatar-sm">
                                                        <img src="{{ asset('dashboard-assets/img/avatar/avatar-1.png') }}" alt="...">
                                                    </figure>
                                                    John</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">Reached level: 18</p>
                                            <small>20/11/2019 - 9:45 am</small>
                                        </a>
                                        <a href="#"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">

                                                <h5 class="mb-1">
                                                    <figure class="avatar mr-1 avatar-sm">
                                                        <img src="{{ asset('dashboard-assets/img/avatar/avatar-1.png') }}" alt="...">
                                                    </figure>
                                                    John</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">Reached level: 18</p>
                                            <small>20/11/2019 - 9:45 am</small>
                                        </a>
                                        <a href="#"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">

                                                <h5 class="mb-1">
                                                    <figure class="avatar mr-1 avatar-sm">
                                                        <img src="{{ asset('dashboard-assets/img/avatar/avatar-1.png') }}" alt="...">
                                                    </figure>
                                                    John</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">Reached level: 18</p>
                                            <small>20/11/2019 - 9:45 am</small>
                                        </a>
                                        <a href="#"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">

                                                <h5 class="mb-1">
                                                    <figure class="avatar mr-1 avatar-sm">
                                                        <img src="{{ asset('dashboard-assets/img/avatar/avatar-1.png') }}" alt="...">
                                                    </figure>
                                                    John</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">Reached level: 18</p>
                                            <small>20/11/2019 - 9:45 am</small>
                                        </a>

                                    </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </form>
            <ul class="navbar-nav navbar-right">

                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Notifications
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Template update is available now!
                                <div class="time text-primary">2 Min Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                <div class="time">10 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Low disk space. Let's clean it!
                                <div class="time">17 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Welcome to Stisla template!
                                <div class="time">Yesterday</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image"
                             src="{{ is_null($user->avatar)?url('dashboard-assets/img/avatar/avatar-1.png'):url('storage/'.$user->avatar) }}"
                             class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, @yield('username')</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="{{ route('dashboard') }}" class="dropdown-item has-icon">
                            <i class="fas fa-columns"></i> Dashboard
                        </a>

                        <a href="{{ route('user.show', $user->id) }}" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        {{-- <a href="features-activities.html" class="dropdown-item has-icon">
                             <i class="fas fa-bolt"></i> Activities
                         </a>--}}
                        <a href="{{ route('user.edit', $user->id) }}" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

    @include('dashboard.layout.sidebar')

    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @yield('content')
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018
                <div class="bullet"></div>
                Design By <a href="https://nauval.in/">Muhamad Nauval
                    Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
{{--  <script src="{{mix('js/app.js') }}"></script>--}}


<!-- JS Libraies -->
{{--<script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>--}}
{{--<script src="../node_modules/chart.js/dist/Chart.min.js"></script>--}}
{{--<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>--}}
{{--<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>--}}
{{--<script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>--}}




<!-- Template JS File -->
<script src="{{ asset('dashboard-assets/js/scripts.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
{{--<script src="{{ asset('dashboard-assets/js/page/index.js') }}"></script>--}}



@yield('footerJs')
</body>

</html>
