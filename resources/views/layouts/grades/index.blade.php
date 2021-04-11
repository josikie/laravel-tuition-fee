@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Grades
                    </div>
    
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                        <div class="mb-4">
                            <a href="{{ route('grades.create') }}" class="btn btn-sm btn-primary">Create New</a>
                        </div>
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Grade</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @if (count($grades))
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $grade->name }}</td>
                                            <td>{{ $grade->major }}</td>
                                            <td>
                                                <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-sm btn-outline-primary">Show</a>

                                                <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-sm btn-primary">Edit</a>

                                                <a href="/grades/destroy/{{ $grade->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Are u sure want to delete it?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
    
                                @else
                                    <tr>
                                        <td colspan="99">No data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
    
                        {{ $grades->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection