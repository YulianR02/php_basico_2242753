@extends('templates.template')
@section('contenido')
    <center>
        <form method="POST" action="{{ url('clientes') }}" class="form-horizontal">
            @csrf
            <div class="container">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Nuevo Cliente</legend>

                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre:</label>
                        <div class="col-md-4">
                            <input id="textinput" value="{{old('nombre')}}" name="nombre" type="text"  placeholder="Ingrese su nombre aquí"
                                class="form-control input-md">
                            <strong style="color:red">{{ $errors->first('nombre') }}</strong>

                        </div>
                    </div>

                    <!-- Text input  ....aqui se cambio el nombre del input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido:</label>
                        <div class="col-md-4">
                            <input id="textinput" value="{{old('apellido')}}" name="apellido" type="text" placeholder="Ingrese su apellido aquí"
                                class="form-control input-md">
                            <strong style="color:red">{{ $errors->first('apellido') }}</strong>

                        </div>
                    </div>

                    <!-- Text input....aqui se cambio el nombre del input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Email</label>
                        <div class="col-md-4">
                            <input id="textinput" value="{{old('email')}}" name="email" type="text" placeholder="Ingrese su Email aquí"
                                class="form-control input-md">
                            <strong style="color:red">{{ $errors->first('email') }}</strong>

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-4">
                            <button id="" name="" class="btn btn-success ">Guardar</button>
                        </div>
                    </div>

                </fieldset>
            </div>

        </form>
    </center>
@endsection
