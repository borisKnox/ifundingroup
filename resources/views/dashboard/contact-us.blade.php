@extends('dashboard.layout.master')
@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Contact us page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact us page</h4>


                </div>

                <div class="card-body">
                    <h4 class="section-title">Messages</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Email</th>
                                <th>comment</th>
                                <th>File</th>
                            </tr>
                            @if(count($messages)>0)
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->comment }}</td>
                                        <td ><a href="{{ url('storage/'.$message->file) }}">Download file</a></td>
                                        <td>
                                            <div class="buttons">

                                                <form action="{{ route('contactus.destroy',$message->id) }}" method="post">

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

@endsection
