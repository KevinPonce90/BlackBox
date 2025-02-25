<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css_plantilla/styles.min.css') }}">
    <title>Agregar Provedor</title>
</head>

<body>
    <x-layout />
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('provedor.store') }}" method="POST">
                        @csrf
                        <div class="row justify-content-evenly">
                        <h5 class="card-title fw-semibold">Agregar Prenda</h5>
                            <div class="col-4">
                                <label for="nombreP" class="form-label">Nombre Provedor</label>
                                <input type="text" class="form-control" id="" aria-describedby="NombreProvedor" name="nombreP" value="{{ old('nombreP') }}" pattern="[A-Za-z ]+" required>
                                @error('nombreP')
                                <h4>{{ $message }}</h4>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="direccion" class="form-label">Direccion del Provedor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Direccion" name="direccion" value="{{ old('direccion') }}" required>
                                @error('direccion')
                                <h4>{{ $message }}</h4>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="" aria-describedby="Telefono" name="telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                <h4>{{ $message }}</h4>
                                @enderror
                            </div>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('/js_plantilla/sidebarmenu.js') }}"></script>
<script src="{{ asset('/js_plantilla/app.min.js') }}"></script>
<script src="{{ asset('/js_plantilla/dashboard.js') }}"></script>
<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('/libs/simplebar/dist/simplebar.js') }}"></script>

</html>