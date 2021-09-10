@extends('templates.template')
@section('contenido')
        <section class="content">

            @if (session('mensaje_exito'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('mensaje_exito') }}
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
        </section>
        <h1>Catalogo cliente</h1>
        <hr>
        <a type="button" class="btn btn-tool" href="{{ route('clientes.create') }}">
            <h4 class="card-title"><i class="fas fa-plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>  Agregar</i></h4>
        </a>

        <table class="table table-bordered  ">
            <thead class="table-info">
                <tr>
                <tr>
                    <th> Nombres </th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Email</th>
                    <th colspan="4">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                {{-- @if ($cliente->habilitado==1 || $cliente->habilitado==2) --}}
                    <tr>
                        <td class="table-success" ">
                            {{ $cliente->FirstName }} {{ $cliente->LastName }}
                         </td>
                         <td class=" table-success" ">
                            {{ $cliente->City }}
                         </td>
                         <td class=" table-success" ">
                            {{ $cliente->Country }}
                         </td>
                         <td class=" table-success" ">
                            {{ $cliente->Email }}
                         </td>
                         <td >
                            <a href=" {{ url('clientes/' . $cliente->CustomerId) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg></a>
                        </td>
                        <td>
                            <a href="{{ url('clientes/' . $cliente->CustomerId . '/edit') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg></a>
                        </td>
                        <td>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                              </svg></a>
                        </td>
                        <td>
                            @switch($cliente->habilitado)
                                @case(null)
                                <strong class="alert-warning">Cliente sin estado
                                    <a href="{{ url('clientes/'.$cliente->CustomerId.'/habilitar')}}">asignar estado</a>
                                </strong>
                                    @break

                                    @case(1)
                                        <strong class="alert-success">
                                            Activo
                                            <a class="btn btn-danger" href="{{ url('clientes/'.$cliente->CustomerId.'/habilitar')}}">Desactivar</a>
                                        </strong>

                                    @break

                                    @case(2)
                                        <strong class="alert-danger">
                                            Inactivo
                                            <a class="btn btn-danger" href="{{ url('clientes/'.$cliente->CustomerId.'/habilitar')}}">Activar</a>
                                        </strong>

                                    @break
                                @default

                            @endswitch

                        </td>
                         {{-- @endif --}}
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            {{ $clientes->links() }}
        </nav>
        @endsection
