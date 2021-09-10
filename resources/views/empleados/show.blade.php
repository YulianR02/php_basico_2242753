@extends('templates.template')
@section('contenido')
    <center>
        <form method="POST" action="#" class="form-horizontal">
            @csrf
            <div class="container">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Detalles Cliente</legend>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre:</label>
                        <div class="col-md-4">
                            <input id="nombre" readonly name="nombre" value="{{ $cliente->FirstName }} {{ $cliente->LastName }}" type="text" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="compañia">Compañia:</label>
                        <div class="col-md-4">
                            <input id="compañia" name="nombre" type="text" readonly value="{{ $cliente->Company }}" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="direccion">Dirección:</label>
                        <div class="col-md-4">
                            <input id="direccion" name="nombre" type="text" readonly value="{{ $cliente->Address }}" class="form-control input-md" required="">
                        </div>
                    </div><!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="ciudad">Ciudad:</label>
                        <div class="col-md-4">
                            <input id="ciudad" name="nombre" type="text" readonly value="{{ $cliente->City }}" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="estado">Estado:</label>
                        <div class="col-md-4">
                            <input id="estado" name="nombre" type="text" readonly value="{{ $cliente->State }}" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="pais">Pais:</label>
                        <div class="col-md-4">
                            <input id="pais" name="nombre" type="text" readonly value="{{ $cliente->Country }}"  class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="codigo">Codigo Postal:</label>
                        <div class="col-md-4">
                            <input id="codigo" name="nombre" type="text" readonly value="{{ $cliente->PostalCode }}" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="fax">Fax:</label>
                        <div class="col-md-4">
                            <input id="fax" name="nombre" type="text" readonly value="{{ $cliente->Fax }}"  class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Text input ....aqui se cambio el nombre del input-->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for="email">Email:</label>
                        <div class="col-md-4">
                            <input id="email" name="nombre" type="text" readonly value="{{ $cliente->Email }}"    class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="mb-3">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-4">
                            <a class="btn btn-danger float-right" href="{{url('clientes')}}">Regresar</a>
                        </div>
                    </div>

                </fieldset>
            </div>

        </form>
    </center>
@endsection
