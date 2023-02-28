<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prendas</h1>

    <a href="{{ route('prenda.create') }}">Agrega Prenda</a>
    <br><br>

    @foreach ($prendas as $prenda)
        <li>
            {{ $prenda->tipo }} - {{ $prenda->color }} - {{ $prenda->talla }} - {{ $prenda->costo }}
            <a href="{{ route('prenda.show', $prenda) }}"> Ver Detalles</a>
            <a href="{{ route('prenda.edit', $prenda) }}"> Editar</a>
        </li>
    @endforeach

</body>
</html>