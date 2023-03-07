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

    <li> {{ $prenda->tipo }} - {{ $prenda->color }} - {{ $prenda->talla }} - {{ $prenda->costo }} </li>
    <a href="{{ route('prenda.edit', $prenda) }}"> Editar</a>

    <br>
    <br>

    <form action="{{ route('prenda.destroy', $prenda) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"> Eliminar</button>
    </form>
</body>
</html>