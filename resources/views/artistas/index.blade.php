<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <title>Catalogo - Artistas</title>
</head>
<body>
    <div class="container text-center title">
        <h1>Catalogo artistas</h1>
        <table class="table table-bordered  ">
            <thead class="table-info">
                <tr>
                <tr>
                    <th >Artista / Banda</th>
                    <th> Discos </th>
                </tr>
            </thead>
            <tbody  >
                @foreach ($artistas as $artista )
                    <tr>
                        <td class="table-success"  rowspan="{{  $artista->discos->count() > 0 ? $artista->discos->count(): 1 }}">
                            {{  $artista->Name  }}
                         </td>
                         @if ($artista->discos->count()==0)
                            <td class="table-danger">
                                <strong>El artista no tiene Discos</strong>
                            </td>
                        </tr>
                       @else
                       @foreach($artista->discos as $disco )
                            <td>
                                {{  $disco->Title  }}
                            </td>
                            </tr>
                         @endforeach
                         @endif
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            {{ $artistas->links()}}
        </nav>
    </div>

</body>
</html>
