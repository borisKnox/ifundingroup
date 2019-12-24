@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('content')

<div class="section-header">
  <h1>Users list</h1>
</div>

<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h4>Users list</h4>
            <div class="card-header-action">
              <a href="{{ route('user.create') }}" class="btn btn-icon icon-left btn-primary"><i
                  class="far fa-edit"></i> Add new user</a>
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
              @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <div class="badge badge-{{ $user->status==1?'success':'danger' }}">
                    {{ $user->status==1?'Active':'Inactive'}}
                  </div>
                </td>
                <td>
                  <div class="buttons">
                    <form action="{{ route('user.destroy',$user->id) }}" method="post">
                        <a href="{{ route('user.show',$user->id)}}" class="btn btn-icon btn-secondary">
                            <i class="far fa-user"></i>
                        </a>
                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-icon btn-primary">
                            <i class="far fa-edit"></i>
                        </a>
                        @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>
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

@endsection
