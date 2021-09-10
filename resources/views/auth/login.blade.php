@extends('templates.tlogin')
@section('contenido')
    <div class="sidenav">
        <div class="login-main-text">
            <h2>ROCKSTAR<br> Login Page</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-16">
            <div class="login-form">
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-black">Login</button>
                    <button type="submit" class="btn btn-secondary">Register</button>
                </form>
            </div>
            <br>
            
            @if (session('loginFail'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginFail') }}
                </div>
            @endif
            @if (session('loginR'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginR') }}
                </div>
            @endif
        </div>
    </div>
@endsection
