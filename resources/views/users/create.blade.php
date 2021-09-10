@extends('templates.template')

@section('contenido')

        <h2 class="text-danger">Nuevo Usuario</h2>
        <form method="post" action="{{ route('users.store')}}">
            @csrf
            <div class="form-floating mb-3">
                <input name="usuario" type="text" class="form-control" id="floatingInput" placeholder="Example123">
                <span class="text-danger">{{$errors->first("usuario")}}</span>
                <label for="usuario">Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="name@example.com">
                <span class="text-danger">{{$errors->first("email")}}</span>
                <label for="email">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <span class="text-danger">{{$errors->first("password")}}</span>
                <label for="password">Contraseña</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="password_confirmation">Confirmar Contraseña</label>
              </div>

              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" id="" name="" class="btn btn-primary">Guardar</button>
            </div>
        </form>



@endsection