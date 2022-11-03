@push('css')
<link href="/assets/js/plugins/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet" >
        <link href="/assets/js/plugins/datatables/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <link href="/assets/js/plugins/datatables/css/buttons.bootstrap4.min.css" rel="stylesheet">

@endpush



@extends('layouts.plantillaFormularios')
@section('title','Rips')

@section('nombrevista','rips')
@section('hrefformulario')
{{route('rips.index',$clientes)}}
@endsection
@section('botonesformulario')
<div class="ms-auto">
    <a href="{{route('rips.create',$clientes->ruta)}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw me-1"></i> Cargar Rips</a>
</div>
@endsection
@section('tituloformulario','Rips')
@section('principalformulario','RIPS')
@section('accionformulario','TODOS')
@section('descripcionformulario','Listado De Rips Cargados')
@section('classformulario','')


@section('content')


<table id="datatableDefault" class="table text-nowrap w-100">
    <thead>
        <tr>
            <th>Codigo Rips</th>
            <th>Periodo</th>
            <th>Año</th>          
            <th>Usuario</th>
            <th>Fecha Registro</th>
            <th>Estado</th>
            <th></th>                                                     
        </tr>
    </thead>
    <tbody>

    
    
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
    paging:false,
    ajax:"{{route('datatable.ripsmaestro',$clientes)}}",
    columns:[
        {data:'codigo_rips'},
        {data:'periodo'},
        {data:'ano'},
        {data:'usuario'},
        {data:'fecharegistro'},
        {data:'idestado'},
        {data:'action',orderable:false},
        ],
    info:false,
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3,4] }}]
  });  



function actualizador(){
 $('#datatableDefault').DataTable().ajax.reload();
}

function descargar_errores(rips){
window.location = "{{route('rips.export', '')}}"+"/"+rips;
}

setInterval('actualizador()',10000);


/* origignal
$('#datatableDefault').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    responsive: true,
    paging:false,
    info:false,
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3,4] }}]
  });  
*/
</script>


  
@endpush

