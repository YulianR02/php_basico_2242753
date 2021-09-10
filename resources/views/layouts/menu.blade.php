<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
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
                    <h3 class="card-title"><i class="fas fa-plus">Agregar</i></h3>
                </a>

                <table class="table table-bordered  ">
                    <thead class="table-info">
                        <tr>
                        <tr>
                            {{-- <th >Id</th> --}}
                            <th> Nombres </th>
                            {{-- <th >Apellido </th>
                    <th >Compañia</th>
                    <th >Address</th> --}}
                            <th>Ciudad</th>
                            {{-- <th >State</th> --}}
                            <th>Pais</th>
                            {{-- <th> PostalCode </th>
                    <th >Phone</th>
                    <th >Fax</th> --}}
                            <th>Email</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                {{-- <td class="table" ">
                            {{  $cliente->CustomerId }}
                         </td> --}}
                                <td class="table-success" ">
                            {{ $cliente->FirstName }} {{ $cliente->LastName }}
                         </td>
                         {{-- <td class="table-success" ">
                            {{  $cliente->LastName  }}
                         </td>

                         <td class="table-success" ">
                            {{  $cliente->Company  }}
                         </td>

                         <td class="table-success" ">
                            {{  $cliente->Address  }}
                         </td> --}}

                         <td class=" table-success" ">
                            {{ $cliente->City }}
                         </td>

                         {{-- <td class="table-success" ">
                            {{  $cliente->State  }}
                         </td> --}}

                         <td class=" table-success" ">
                            {{ $cliente->Country }}
                         </td>
{{-- <td class="table-success" ">
                            {{  $cliente->PostalCode  }}
                         </td>

                         <td class="table-success" ">
                            {{  $cliente->Phone  }}
                         </td>

                         <td class="table-success" ">
                            {{  $cliente->Fax  }}
                         </td> --}}
                         <td class=" table-success" ">
                            {{ $cliente->Email }}
                         </td>
                         <td >
                            <a href=" {{ url('clientes/' . $cliente->CustomerId) }}">Show</a>
                                </td>
                                <td>
                                    <a href="{{ url('clientes/' . $cliente->CustomerId . '/edit') }}">Editar</a>
                                </td>
                                <td>
                                    <a href="#">Eliminar</a>
                                </td>
                                {{-- <td class="table-success" ">
                         </td> --}}
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    {{ $clientes->links() }}
                </nav>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
