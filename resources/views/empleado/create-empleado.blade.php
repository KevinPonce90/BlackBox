<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css_plantilla/styles.min.css') }}">
    <title>Agregar Empleado</title>
</head>

<body>
    <x-layout />
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('empleado.store') }}" method="POST">
                        @csrf
                        <div class="container text-center">
                            <h5 class="card-title fw-semibold">Agregar Prenda</h5>
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="nombre" class="form-label">Nombre(s)</label>
                                    <input type="text" class="form-control" id="" aria-describedby="nombre" name="nombre" value="{{ old('nombre') }}" pattern="[A-Za-z ]+" required>
                                    @error('nombre')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="ApellidoPaterno" name="apellidoP" value="{{ old('apellidoP') }}" pattern="[A-Za-z ]+" required>
                                    @error('apellidoP')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="" aria-describedby="ApellidoMaterno" name="apellidoM" value="{{ old('apellidoM') }}" pattern="[A-Za-z ]+" required>
                                    @error('apellidoM')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="number" class="form-control" id="" aria-describedby="Telefono" name="telefono" value="{{ old('telefono') }}" required>
                                    @error('telefono')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="salario" class="form-label">Salario</label>
                                    <input type="number" class="form-control" id="" aria-describedby="Salario" name="salario" value="{{ old('salario') }}" required>
                                    @error('salario')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="rfc" class="form-label">RFC</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="RFC" name="rfc" value="{{ old('rfc') }}" required>
                                    @error('rfc')
                                    <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
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