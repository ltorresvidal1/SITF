@extends('layouts.plantillaFormularios')


@section('title','Crear Fincas')

@section('nombrevista','Fincas')
@section('hrefformulario')
{{route('fincas.index',$clientes)}}
@endsection

@section('tituloformulario','Fincas')
@section('principalformulario','FINCAS')
@section('accionformulario','CREAR')
@section('descripcionformulario','Crear Nuevo Finca')
@section('classformulario','card')


@section('content')


	<!-- BEGIN #tabsWithCard -->


     
    <form action="{{route('fincas.store',$clientes)}}" method="POST">
        @csrf
                            
                            <div class="tab-content">
                              
                                <div id="general">
                                    <div class="row">													                                                    
                                        <div class="form-group col-md-4">
                                            <label class="form-label" for="codigo">Codigo</label>
                                            <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="codigo" name="codigo" value="{{old('codigo')}}"  />
                                            @error('codigo')
                                                <br>
                                                <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label class="form-label" for="nombre">Nombre</label>
                                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"  id="nombre" name="nombre"  value="{{old('nombre')}}" />
                                                @error('nombre')
                                                <br>
                                                <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">      
                                        <div class="form-group col-md-4">
                                            <label class="form-label" for="idestado">Estado</label>
                                            <select class="form-control" id="idestado" name="idestado">
                                                @foreach ($desplegables as $desplegable)
                                                <option value="{{$desplegable->id}}">{{$desplegable->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">                 
                                     <div class="form-group col-md-3">   
                                                    <br>                                                     
                                                    <button type="submit" class="btn btn-primary">Crear Finca</button>
                                    </div>
                            </div>
    </form>
      
@endsection

@push('scripts')

  
<script>
    
    /*
$(document).ready(function() {
    
    $('.select2').select2();

    $("#idperfil").change(function () {     
        $('#temperfil').val($('#idperfil').val());
    });


    if ($('#idperfil').hasClass("select2-hidden-accessible")) {
        $('#idperfil').val($('#temperfil').val());
        $('#idperfil').trigger('change');
    }
 
    
    $("#idcliente").change(function () {     
        $('#tempcliente').val($('#idcliente').val());
    });


    if ($('#idcliente').hasClass("select2-hidden-accessible")) {
        $('#idcliente').val($('#tempcliente').val());
        $('#idcliente').trigger('change');
    }

});

*/




</script>
@endpush