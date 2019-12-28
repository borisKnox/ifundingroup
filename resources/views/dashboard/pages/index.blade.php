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
                                    <div class="card-header">
                                        <h4>Home page</h4>

                                        <div class="card-header-action">
                                            <a href="{{ route('homepage.create') }}" class="btn  icon-left btn-primary"><i
                                                    class="fa fa-edit"></i> Add new testimonial</a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h4 class="section-title">Testimonials</h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Job title</th>
                                                    <th>Paragraph</th>
                                                </tr>
                                                @if(count($testimonials)>0)
                                                    @foreach ($testimonials as $testimonial)
                                                        <tr>
                                                            <td>{{ $testimonial->id }}</td>
                                                            <td>{{ $testimonial->test_name }}</td>
                                                            <td>{{ $testimonial->test_job }}</td>
                                                            <td>{{ $testimonial->test_graph }}</td>
                                                            <td>
                                                                <div class="buttons">

                                                                    <form action="{{ route('homepage.destroy',$testimonial->id) }}" method="post">
                                                                        <a href="{{ route('homepage.edit',$testimonial->id) }}" class="btn  btn-primary">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn  btn-danger"><i class="fa fa-times"></i></button>
                                                                    </form>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5" class="text-center">
                                                            There is no data
                                                        </td>
                                                    </tr>
                                                @endif
                                            </table>
                                        </div>

                                    </div>
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