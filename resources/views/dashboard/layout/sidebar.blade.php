<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Ifundgroup Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            {{--<li class="menu-header">Admin</li>
            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-fire"></i>
                <span>Administration</span>
              </a>
              <ul class="dropdown-menu">
               --}}{{-- <li><a class="nav-link" href="{{ route('post.index') }}">Posts</a></li>
                <li><a class="nav-link" href="{{ route('page.index') }}">Pages</a></li>--}}{{--
              </ul>
            </li>--}}
            <li class="menu-header">System</li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a></li>
                    <li><a class="nav-link" href="{{ route('user.edit', $user->id) }}"><i class="fas fa-user-cog"></i>Settings</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-calendar-alt"></i><span>Earning history</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('earningHistory') }}"><i class="fas fa-file"></i>Earning
                            history</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard"></i><span>Lend now</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('lendNow') }}"><i class="fas fa-file"></i>Lend now</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i><span>Borrower now</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('borrowerNow') }}"><i class="fas fa-file"></i>Borrower
                            now</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-chart-bar"></i><span>Withdrawal</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('withdrawal') }}"><i class="fas fa-file"></i>Withdrawal</a>
                    </li>
                </ul>
            </li>

            @if($user->role=='admin')

                <li class="nav-item dropdown">
                    <a href="{{ route('dashboard') }}" class="nav-link has-dropdown"><i class="fas fa-cogs"></i><span>App setting</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a></li>
                        <li><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-file"></i>Users</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('homepage') }}"><i class="fas fa-file"></i>Home page</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('contactus.view') }}"><i class="fas fa-file"></i>Contact
                                us</a></li>
                        <li><a class="nav-link" href="{{ route('applynow.view') }}"><i class="fas fa-file"></i>Apply now</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('careers.index') }}"><i
                                    class="fas fa-file"></i>Careers</a></li>
                        {{--<li><a class="nav-link" href="{{ route('category.index') }}">Categories</a></li>
                        <li><a class="nav-link"href="{{ route('tag.index') }}">Tags</a></li>--}}
                        <li><a class="nav-link" href="{{ route('user.edit', $user->id) }}"><i
                                    class="fas fa-user-cog"></i>Settings</a></li>
                    </ul>
                </li>
            @endif
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
