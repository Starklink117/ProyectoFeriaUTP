@extends('adminlte::page')

@section('title', 'CREAR JURADOS')

@section('content_header')
    <h1>CREAR JURADOS</h1>
@stop

@section('content')
<p>Apartado de crear jurados.</p>
<div class="card">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Revise los campos!</strong> Revise los campos que se le solicitan.
            @foreach ($errors->all() as $error)
            <span>{{$error}}</span>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form method="POST" action="{{ route('jurados.store') }}">
            @csrf

        
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="id_usuario">Usuario</label>
                        <select name="id_usuario" class="form-control">
                            @foreach($usuario as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="proyectos" >Proyectos a calificar:</label><br>
                        <select name="proyectos[]" id="proyectos"  class="selectpicker form-group" data-live-search="true" multiple data-actions-box="true" title="Seleccione los proyectos" data-width="100%">
                            @foreach($proyectos as $id => $proyecto)
                                <option value="{{ $id }}">{{ $proyecto }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            
        
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a  class="btn btn-danger "  href="{{route('jurados.index')}}">Cancelar</a>
            </div>
        </form>
        
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@stop