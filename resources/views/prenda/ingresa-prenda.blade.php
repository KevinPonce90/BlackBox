<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ingresa" method="POST">
    @csrf

    <label for="tipo">Tipo</label><br>
    <input type="text" name="tipo" id="tipo">
    @error('tipo')
        <h4>{{ $message }}</h4>
    @enderror
    <br><br>
    <label for="color">Color</label><br>
    <input type="text" name="color" id="color">
   @error('color')
        <h4>{{ $message }}</h4>
    @enderror
    <br><br>
    <label for="talla">Talla</label><br>
    <input type="number" name="talla" id="talla">
    @error('talla')
        <h4>{{ $message }}</h4>
    @enderror
    <br><br>
    <label for="costo">Costo</label><br>
    <input type="number" name="costo" id="costo">
    @error('costo')
        <h4>{{ $message }}</h4>
    @enderror
    <br><br>
    <input type="submit"> 
    </form>
</body>
</html>