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
                        <div class="card card-primary">
                            <div class="card-header">
                            <h4>Users list</h4>
                                <div class="">
                                <a href="{{ route('user.create') }}" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Add new user</a>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @if(count($users)>0)
                                @foreach ($users as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                    <div class="badge badge-{{ $value->status==1?'success':'danger' }}">
                                        {{ $value->status==1?'Active':'Inactive'}}
                                    </div>
                                    </td>
                                    <td>
                                    <div class="buttons">
                                        <form action="{{ route('user.destroy',$value->id) }}" method="post">
                                            <a href="{{ route('user.show',$value->id)}}" class="btn btn-icon btn-secondary">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <a href="{{ route('user.edit',$value->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
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