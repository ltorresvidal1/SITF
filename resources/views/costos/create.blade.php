@extends('layouts.plantillaFormularios')


     

@section('title','Crear Costos')

@section('nombrevista','Costos')
@section('hrefformulario')

@endsection

@section('tituloformulario','Costos')
@section('principalformulario','Costos')
@section('accionformulario','CREAR')
@section('descripcionformulario','Crear Nuevo Costos')
@section('classformulario','card')


@section('content')




      
    <ul class="nav nav-tabs pt-3 px-3">
        <li class="nav-item me-1"><a href="#m1" class="nav-link active" data-bs-toggle="tab">Novilla Vientre</a></li>
        <li class="nav-item me-1"><a href="#m2" class="nav-link" data-bs-toggle="tab">Vava Parida</a></li>
        <li class="nav-item me-1"><a href="#m2" class="nav-link" data-bs-toggle="tab">Vaca Seca</a></li>
        <li class="nav-item me-1"><a href="#m4" class="nav-link" data-bs-toggle="tab">Cria Hembra</a></li>
        <li class="nav-item me-1"><a href="#m5" class="nav-link" data-bs-toggle="tab">Cria Macho</a></li>
        <li class="nav-item me-1"><a href="#m6" class="nav-link" data-bs-toggle="tab">Hembra Levante</a></li>
        <li class="nav-item me-1"><a href="#m7" class="nav-link" data-bs-toggle="tab">Macho Levante</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">Macho Ceba</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">Torete</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">Reproductor</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">G Novilla</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">G Vaca Parioda</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">G Vaca Seca</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">Todos</a></li>
    </ul>
     
    <form action="{{route('fincas.store',$clientes)}}" method="POST">
        @csrf
                            
                            <div class="tab-content p-4">
                              
                                    <div class="tab-pane fade show active" id="m1">
                                        <div class="row">													                                                    
                                            <div class="form-group col-12 m-0">
                                                
                                                <table id="datatablem1" class="table text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Tipo</th>
                                                            <th>Descripcion</th>
                                                            <th>Valor</th>
                                                            <th> </th>                                                     
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                               
                                                       <tr>
                                                            <td>erterter erterterter1</td>
                                                            <td>2tertre ret reerterte</td>
                                                            <td>3erterteterertert</td>
                                                            <td>
                                                
                                                                <div class="dropdown text-center">
                                                                    <a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-ellipsis-v fa-fw fa-lg"></i> </a>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item"><i class="far fa-edit fa-fw fa-lg"></i> Editar</a>
                                                                        <form id="delete-" action="" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                        </form>
                                                                        <a href="#" class="dropdown-item"  onclick=""><i class="far fa-trash-alt fa-fw fa-lg"></i> Eliminar</a>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>     
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                             
                                    <div class="tab-pane fade" id="m2">
                                                                            
                                    </div>

                                    <div class="tab-pane fade" id="m3">
                                    
                                    </div>











                            </div>
    
                            
                                            <div class="row">    
                                                
                                                <div class="form-group col-3 m-0">   
                                                    <br>                                                     
                                                    <button type="submit" class="btn btn-primary">Crear Costos</button>
                                                </div>
                                            </div>
											</form>
        
        
        
        <!---
        <div class="row">  

                                        <div class="d-flex">
                                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link border active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Novilla Vientre</button>
                                            <button class="nav-link border" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Vava Parida</button>
                                            <button class="nav-link border" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Vaca Seca</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cria Hembra</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cria Macho</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Hembra Levante</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Macho Levante</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Macho Ceba</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Torete</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Reproductor</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">G Novilla</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">G Vaca Parioda</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">G Vaca Seca</button>
                                            <button class="nav-link border" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Todos</button>
                                               
                                        </div>
                                            <div class="tab-content" id="v-pills-tabContent">

                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                
                                                <div class="card p-4">
                                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Descripcion</th>
                                                                <th>Valor</th>
                                                                <th> </th>                                                     
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                    
                                                        
                                                            <tr>
                                                                <td> erterter erterterter1</td>
                                                                <td>2tertre ret reerterte</td>
                                                                <td>3erterteterertert</td>
                                                                <td>
                                                    
                                                                    <div class="dropdown text-center">
                                                                        <a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-ellipsis-v fa-fw fa-lg"></i> </a>
                                                                        <div class="dropdown-menu">
                                                                            <a href="" class="dropdown-item"><i class="far fa-edit fa-fw fa-lg"></i> Editar</a>
                                                                            <form id="delete-" action="" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                            </form>
                                                                            <a href="#" class="dropdown-item"  onclick=""><i class="far fa-trash-alt fa-fw fa-lg"></i> Eliminar</a>
                                                                        </div>
                                                                    </div>
                                                    
                                                        
                                                                </td>
                                                            </tr>
                                                            
                                                            
                                                        
                                                        
                                                        </tbody>
                                                    </table>                                                  
                                                 </div>    
                                          
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                torres
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                            </div>
                                           </div>
                                        
                                                                            
                                        </div>                       
                                                                    

                                           


                                            <div class="row">    
                                                
                                                <div class="form-group col-3 m-0">   
                                                    <br>                                                     
                                                    <button type="submit" class="btn btn-primary">Crear Finca</button>
                                                </div>
                                            </div>
											</form>

                                        -->
      
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

  $('#datatablem1').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    responsive: true,
    paging: false,
    infor: false,
    ordering: false,
    info: false,
    searching: false,
    columnDefs:[
       // { width: "100%", targets: 0 },
       // { width: "150%", targets: 1 },
        //{ width: "50%", targets: 2 },
        { width: 60, targets: 3 }
    ],
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3] }}]
  });  
  
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