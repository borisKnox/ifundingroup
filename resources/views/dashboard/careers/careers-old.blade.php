@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Careers page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Apply now page</h4>

                    <div class="card-header-action">
                        <a href="{{ route('careers.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                class="far fa-edit"></i> Add new career</a>
                    </div>

                </div>

                <div class="card-body">
                    <h4 class="section-title">Openings </h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>

                            </tr>
                            @if(count($openings)>0)
                                @foreach ($openings  as $open )
                                    <tr>
                                        <td>{{ $open->id }}</td>
                                        <td>{{ $open->title }}</td>
                                        <td>{{ $open->content }}</td>
                                        <td>
                                            <div class="buttons">

                                                <form action="{{ route('careers.destroy',$open->id) }}" method="post">

                                                    <a href="{{ route('careers.edit',$open->id) }}"
                                                       class="btn btn-icon btn-primary">
                                                        <i class="far fa-edit"></i>
                                                    </a>

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



                    <h4 class="section-title">Resume </h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>File</th>

                            </tr>
                            @if(count($resumes)>0)
                                @foreach ($resumes  as $resume )
                                    <tr>
                                        <td>{{ $resume->id }}</td>
                                        <td>{{ $resume->name }}</td>
                                        <td>{{ $resume->email }}</td>
                                        <td><a href="{{ url('storage/'.$resume->up_file) }}">Download file</a></td>
                                        <td>
                                            <div class="buttons">

                                                <form action="{{ route('resume.destroy',$resume->id) }}" method="post">

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
