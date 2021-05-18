<!DOCTYPE html>
<html lang="en-419">

<head>
    <title>Lista de Paises</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <h1>Lista de Paises</h1>
    <table class="table table-hover table-responsive-xl table-dark   ">
      <thead class="">
        <tr>
            <th class="text-muted">Nombre</th>
            <th class="text-muted">Capital </th>
            <th class="text-muted">Moneda</th>
            <th class="text-muted">Moneda</th>Poblacion
        </tr>
      </thead>
      <tbody>
            @foreach ($naciones as $nombre => $nacion):
                <tr>
                    <th>{{ $nombre}}</th>
                    <th>{{ $nacion["capital"]}}</th>
                    <th>{{ $nacion["moneda"]}}</th>
                    <th>{{ $nacion["poblacion"]}}</th>
                </tr>
            @endforeach;
      </tbody>
    </table>



</body>

</html>