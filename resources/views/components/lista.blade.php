<div>

    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
        <link rel="stylesheet" href="{{ asset('/css_plantilla/styles.min.css') }}">

    <body>
        <div class="container">
            <div class="table-wrapper">
                <!-- add Modal HTML -->
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('prenda.store') }}" method='POST'> <!-- FORMULARIO -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Registro de prenda</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        @csrf
                                        <label>Tipo</label>
                                        <input type="text" class="form-control" name='tipo' id='tipo' value="{{old('tipo')}}" required>
                                        @error('tipo')
                                        <h4>{{ $message}}</h4>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="form-control" name='color' id='color' value="{{old('color')}}" required>
                                        @error('color')
                                        <h4>{{ $message}}</h4>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Talla</label>
                                        <input type="number" class="form-control" name='talla' id='talla' value="{{old('talla')}}" required>
                                        @error('talla')
                                        <h4>{{ $message}}</h4>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Costo</label>
                                        <input type="number" class="form-control" name='costo' id='costo' value="{{old('costo')}}" required>
                                        @error('costo')
                                        <h4>{{ $message}}</h4>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{$slot}}
            </div>
        </div>
    </body>