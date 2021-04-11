<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body style="background: #ffffff">
            <h1 class="text-center font-weight-bolder" style="margin-top: 100px; color: #0D47A1">Tuition Fee Web</h1>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Login
                            </div>
                            <div class="card-body text-dark">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        @if (session('errors'))
                                        <div class="alert alert-danger">
                                            Ada yang salah:
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                            ><span aria-hidden="true" >x</span>
                                            </button>
                
                                            <ul>
                                                @foreach ($errors->any() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif
                
                                    <div class="form-group row">
                                        <label for="username"  class="col-md-4 col-form-label text-md-right"><strong>Username</strong></label>

                                        <div class="col-md-6">
                                            <input id="username" name="username" type="text" class="form-control" placeholder="username" required autofocus>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right"><strong>Password</strong></label>

                                        <div class="col-md-6">
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required autofocus>
                                        </div>
                                    </div>
                
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button  type="submit" class="btn btn-primary" style="background-color: #0D47A1">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>