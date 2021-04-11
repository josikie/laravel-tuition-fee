@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Detail Grade
                    </div>

                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    Name
                                </label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name')
                                        is-invalid
                                    @enderror" name="name" id="name" value="{{ old('name', $grade->name) }}" required placeholder="Example : 10 RPL">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="major" class="col-md-4 col-form-label text-md-right">Major</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('major')
                                        is-invalid
                                    @enderror" name="major" id="major" value="{{ old('major', $grade->major) }}" placeholder="Example : Rekayasa Perangkat Lunak" >

                                    @error('major')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row-mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ route('grades.index') }}" class="btn btn-outline-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection