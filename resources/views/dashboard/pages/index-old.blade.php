@extends('dashboard.layout.master')

@section('username')
    {{ $user->name }}
@endsection

@section('pageTitle','Home page')

@section('content')
    <form method="post" action="{{ route('homepage.store') }}">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Home page</h4>

                        <div class="card-header-action">
                            <a href="{{ route('homepage.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                    class="far fa-edit"></i> Add new testimonial</a>
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
                                                        <a href="{{ route('homepage.edit',$testimonial->id) }}" class="btn btn-icon btn-primary">
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
    </form>
@endsection
