@push('css')
<link href="/assets/js/plugins/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet" >
        <link href="/assets/js/plugins/datatables/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <link href="/assets/js/plugins/datatables/css/buttons.bootstrap4.min.css" rel="stylesheet">

@endpush



@extends('layouts.plantillaFormularios')
@section('title','Fincas')

@section('nombrevista','fincas')
@section('hrefformulario')
{{route('sa_usuarios.index')}}
@endsection
@section('botonesformulario')
<div class="ms-auto">
    <a href="{{route('fincas.create',$clientes->ruta)}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw me-1"></i> Crear Fincas</a>
</div>
@endsection
@section('tituloformulario','Fincas')
@section('principalformulario','FINCAS')
@section('accionformulario','TODOS')
@section('descripcionformulario','Listado De Fincas Creadas')
@section('classformulario','')
{{-- 


@section('content')
                             
<table id="datatableDefault" class="table text-nowrap w-100">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Cliente</th>
            <th> </th>                                                     
        </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->documento}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->usuario}}</td>
            <td>{{$usuario->cliente}}</td>
          
            <td>

                <div class="dropdown text-center">
                    <a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-ellipsis-v fa-fw fa-lg"></i> </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('sa_usuarios.edit', $usuario->id) }}" class="dropdown-item"><i class="far fa-edit fa-fw fa-lg"></i> Editar</a>
                        <form id="delete-{{$usuario->id}}" action="{{route('sa_usuarios.destroy',$usuario)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="#" class="dropdown-item"  onclick="EliminarCliente({{ $usuario->id }})"><i class="far fa-trash-alt fa-fw fa-lg"></i> Eliminar</a>
                    </div>
                </div>

       
            </td>
         </tr>
        
        @endforeach
      
    
    </tbody>
</table>       

                                

                                    
@endsection


@push('scripts')

<script src="/assets/js/btnEventos.js"></script>

<script src="/assets/js/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/js/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="/assets/js/plugins/datatables/js/buttons.colVis.min.js"></script>
<script src="/assets/js/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="/assets/js/plugins/datatables/js/buttons.print.min.js"></script>
<script src="/assets/js/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/assets/js/plugins/datatables/js/responsive.bootstrap4.min.js"></script>


  <script>
  $('#datatableDefault').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    responsive: true,
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3,4] }}]
  });  
</script>
<!--
<script>
function envio(){
   
    notificacion_ok.click();
}
</script>

-->


  
@endpush

--}}