@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Apply now page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Apply now page</h4>


                </div>

                <div class="card-body">
                    <h4 class="section-title">Requests</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Company type</th>
                                <th>Loan</th>
                                <th>Email</th>
                            </tr>
                            @if(count($requests)>0)
                                @foreach ($requests as $request)
                                    <tr>
                                        <td>{{ $request->id }}</td>
                                        <td>{{ $request->name }}</td>
                                        <td>{{ $request->company_type }}</td>
                                        <td>{{ $request->loan }}</td>
                                        <td>{{ $request->email }}</td>
                                        <td>
                                            <div class="buttons">

                                                <form action="{{ route('applynow.destroy',$request->id) }}"
                                                      method="post">

                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></button>
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
