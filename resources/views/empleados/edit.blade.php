@extends('templates.template')
@section('contenido')
    <center>
    <form method="POST" action="{{url('clientes/'.$cliente->CustomerId)}}" class="form-horizontal">
        @method('PUT')
        @csrf<!--toquen de seguridad que garantiza que algun hacker no ejecute algunos tipos de ataque OBLIGATORIO-->
        <fieldset>

        <!-- Form Name -->
        <legend>Nuevo Cliente</legend>

        <!-- Text input ....aqui se puso value para poder editar el cliente -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nombre:</label>
          <div class="col-md-4">
          <input value="{{$cliente->FirstName}}"  name="nombre" type="text" class="form-control input-md" required="">
          <strong style="color:red">{{ $errors->first('nombre') }}</strong>

          </div>
        </div>

        <!-- Text input  ....aqui se cambio el nombre del input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Apellido:</label>
          <div class="col-md-4">
          <input value="{{$cliente->LastName}}" name="apellido" type="text"class="form-control input-md" required="">
          <strong style="color:red">{{ $errors->first('apellido') }}</strong>
          </div>
        </div>

        <!-- Text input....aqui se cambio el nombre del input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>
          <div class="col-md-4">
          <input value="{{$cliente->Email}}" name="email" type="text" placeholder="Ingrese su Email aquí" class="form-control input-md" required="">
          <strong style="color:red">{{ $errors->first('email') }}</strong>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button id="" name="" class="btn bg-primary ">Modificar</button>
          </div>
        </div>

        </fieldset>
        </form>
    </center>
@endsection
