@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Show user')

@section('content')

    <div class="section-header">
        <h1>{{ $user->name.' Profile'}}</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image"
                             src="{{ is_null($user->avatar)?url('dashboard-assets/img/avatar/avatar-1.png'):url('storage/'.$user->avatar) }}"
                             class="rounded-circle profile-widget-picture">
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="profile-widget-name">{{ $user->name }}
                            <div
                                class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div>
                                <div
                                    class="badge badge-@switch($user->role) @case('admin')danger @break @case('author')info @break @case('user')light @break @endswitch">
                                    {{ ucfirst($user->role) }}
                                </div>

                            </div>
                        </div>

                        <p>
                            @if(is_null($user->bio))
                                <i>no bio has been added</i>
                            @else
                                {{ $user->bio }}
                            @endif
                        </p>

                        <h3>Basic Info</h3>
                        <p>
                            First Name: {{ $user->first_name }}
                        </p>
                        <p>
                            Last Name: {{ $user->last_name }}
                        </p>

                        <p>
                            @if(is_null($user->home_address))
                                <i>no Home address has been added</i>
                            @else
                                <i class="fas fa-map-marked-alt"></i>
                                {{ $user->home_address }}, {{ $user->apartment }}, {{ $user->city }}, {{ $user->stat }}
                            @endif
                        </p>

                        <p>zip Code:

                            @if(is_null($user->zip_code))
                                <i>no zip code has been added</i>
                            @else
                                <i class="fab fa-periscope"></i>
                                {{ $user->zip_code }}
                            @endif
                        </p>

                        <p>
                            @if(is_null($user->phone))
                                <i>no phone number has been added</i>
                            @else
                                <i class="fas fa-mobile-alt"></i>
                                {{ $user->phone }}
                            @endif
                        </p>

                        <p>
                            @if(is_null($user->email))
                                <i>no email address has been added</i>
                            @else
                                <i class="fas fa-envelope-open-text"></i>
                                {{ $user->email }}
                            @endif
                        </p>

                        <p>
                            <label>Date of Birth:</label>
                            @if(is_null($user->dob))
                                <i>no Date of Birth has been added</i>
                            @else
                                <i class="fas fa-calendar-minus"></i>
                                {{ $user->dob }}
                            @endif
                        </p>

                        <h3>School Info</h3>
                        <p>
                            @if(is_null($user->school_name))
                                <i>no school has been added</i>
                            @else
                                <i class="fas fa-school"></i>
                                {{ $user->school_name }}
                            @endif
                        </p>

                        <p>
                            Check graduation:
                            @if(is_null($user->check_graduation))
                                <i>no graduation has been added</i>
                            @else
                                <i class="fas fa-user-graduate"></i>
                                {{ $user->check_graduation }}
                            @endif
                        </p>


                        <p>
                            @if(is_null($user->undergraduate))
                                <i>no graduation has been added</i>
                            @else
                                <i class="fas fa-user-graduate"></i>
                                {{ $user->undergraduate }}
                            @endif
                        </p>

                        <p>Home ownership:
                            @if(is_null($user->home_ownership))
                                <i>no Home ownership date has been added</i>
                            @else
                                <i class="fas fa-home"></i>
                                {{ $user->home_ownership }}
                            @endif
                        </p>


                        <p>Graduation Date:
                            @if(is_null($user->graduation_date))
                                <i>no graduation date has been added</i>
                            @else
                                <i class="far fa-calendar-check"></i>
                                {{ $user->graduation_date }}
                            @endif
                        </p>

                        <h3>Employment Info</h3>

                        <p><i class="fas fa-user-tie mr-1"></i>Employer name:
                            @if(is_null($user->emp_name))
                                <i>no employer name has been added</i>
                            @else
                                {{ $user->emp_name }}
                            @endif
                        </p>

                        <p>Total Income:
                            @if(is_null($user->income_total))
                                <i>no total info has been added</i>
                            @else
                                {{ $user->income_total }}$
                            @endif
                        </p>

                        <p>Total Experience:
                            @if(is_null($user->exp_total))
                                <i>no total info has been added</i>
                            @else
                                {{ $user->exp_total }}&nbsp; years
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text-right ">
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
