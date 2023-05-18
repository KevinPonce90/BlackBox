<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css_plantilla/styles.min.css') }}">
    <title>Document</title>
</head>

<body>
    <x-layout />
    <div class="container">
        <div class="row">
            <div class="col-lg d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Almacen</h5>
                        <a href="{{ route('prenda.create') }}">Agregar</a>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tipo</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Color</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Talla</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Costo</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Acciones</h6>
                                        </th>
                                    </tr>
                                </thead>
                                @foreach( $prendas as $p)
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $p->tipo }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $p->color }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $p->talla }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-primary rounded-3 fw-semibold">{{ $p->costo }}</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4"><a href="#editEmployeeModal{{$p->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <form action="{{ route('prenda.destroy', $p) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"> Eliminar</button>
                                                </form>
                                                <a href="{{ route('prenda.edit', $p) }}">VER</a>
                                            </h6>
                                        </td>
                                    </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
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