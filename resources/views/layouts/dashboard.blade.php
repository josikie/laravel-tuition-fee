@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Dashboard</h3>
            </div>

            <div class="card-body">
                <p>Selamat Datang, <strong>{{ Auth::user()->name }}</strong></p>
            </div>
        </div>
    </div>
</div>
@endsection