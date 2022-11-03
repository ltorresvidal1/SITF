@extends('layouts.plantillaFormularios')
@push('css')
<link rel="stylesheet" href="/assets/js/plugins/dropzone/dropzone.min.css" type="text/css" />

<style>
 
   
.preview-container{
  visibility: hidden;
}

.dropzone .dz-preview2 {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 4px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/*media queries*/

@media only screen and (max-width: 601px){
  .fileuploader {
    width: 100%;
  }

 .preview-container {
    width: 100%;
  }
}
</style>
@endpush

@section('title','Cargar Rips')

@section('nombrevista','Rips')
@section('hrefformulario')
{{route('auditarfacturas.index')}}
@endsection


@section('tituloformulario','Auditar Facturas')
@section('principalformulario','Auditar Facturas')
@section('accionformulario','CREAR')
@section('descripcionformulario','Facturas Auditadas')
@section('classformulario','card')



@section('content')


	<!-- BEGIN #tabsWithCard -->

  <div class="row">		

      <div class="form-group col-md-4">
        <label class="form-label" for="idestado">Prestador</label>
        <select class="form-control" id="idestado" name="idestado">
          <option value="00">seleccione</option>
            <option value="01">PRESTADOR 001</option>
            <option value="02">PRESTADOR 002</option>
            <option value="03">PRESTADOR 003</option>
            <option value="04">PRESTADOR 004</option>
            <option value="05">PRESTADOR 005</option>
      
        </select>
    </div>
           <div class="form-group col-md-4">
                                            <label class="form-label" for="idestado">Facturas</label>
                                            <select class="form-control" id="idestado" name="idestado">
                                              <option value="00">seleccione</option>
                                                <option value="01">FACTURA 001</option>
                                                <option value="02">FACTURA 002</option>
                                                <option value="03">FACTURA 003</option>
                                                <option value="04">FACTURA 004</option>
                                                <option value="05">FACTURA 005</option>

                                          
                                            </select>
                                        </div>
    </div>  
     
    


<br><br>
      
      
    <div class="row">


      <img src="https://filedn.com/lVFISEyFhGgpfAXJURKKk4j/ventana.jpeg" alt="" />

     <!-- <div class="col-xl-8">
      
      <div class="row">
        

      
      <div class="col-sm-12 mb-3">
      
      <div class="card h-100">
      
      <div class="card-body">
      <div class="d-flex mb-3">
      <div class="flex-grow-1">
      <h5 class="mb-1">Web Traffic</h5>
      <div class="fs-13px">Traffic source and category</div>
      </div>
      <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
      </div>
      <div class="mb-4">
      <h3 class="mb-1">320,958</h3>
      <div class="text-success fs-13px fw-600">
      <i class="fa fa-caret-up"></i> +20.9%
      </div>
      </div>
      <div class="progress mb-4" style="height: 10px;">
      <div class="progress-bar" style="width: 42.66%"></div>
      <div class="progress-bar bg-teal" style="width: 36.80%"></div>
      <div class="progress-bar bg-yellow" style="width: 15.34%"></div>
      <div class="progress-bar bg-pink" style="width: 9.20%"></div>
      <div class="progress-bar bg-gray-200" style="width: 5.00%"></div>
      </div>
      <div class="fs-13px">
      <div class="d-flex align-items-center mb-2">
      <div class="flex-grow-1 d-flex align-items-center">
      <i class="fa fa-circle fs-9px fa-fw text-primary me-2"></i> Direct visit
      </div>
      <div class="fw-600 text-dark">42.66%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
      <div class="flex-grow-1 d-flex align-items-center">
      <i class="fa fa-circle fs-9px fa-fw text-teal me-2"></i> Organic Search
      </div>
      <div class="fw-600 text-dark">36.80%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
      <div class="flex-grow-1 d-flex align-items-center">
      <i class="fa fa-circle fs-9px fa-fw text-warning me-2"></i> Referral Website
      </div>
      <div class="fw-600 text-dark">15.34%</div>
      </div>
      <div class="d-flex align-items-center mb-2">
      <div class="flex-grow-1 d-flex align-items-center">
      <i class="fa fa-circle fs-9px fa-fw text-danger me-2"></i> Social Networks
      </div>
    
      </div>
      <div class="d-flex align-items-center mb-15px">
      <div class="flex-grow-1 d-flex align-items-center">
      <i class="fa fa-circle fs-9px fa-fw text-gray-200 me-2"></i> Others
      </div>
      <div class="fw-600 text-dark">5.00%</div>
      </div>
      <div class="fs-12px text-end">
      <span class="fs-10px">powered by </span>
      <span class="d-inline-flex fw-600">
      <span class="text-primary">G</span>
      <span class="text-danger">o</span>
      <span class="text-warning">o</span>
      <span class="text-primary">g</span>
      <span class="text-green">l</span>
      <span class="text-danger">e</span>
      </span>
      <span class="fs-10px">Analytics API</span>
      </div>
      </div>
      </div>
      
      </div>
      
      </div>
      
      </div>
      
      </div>
      
      
      <div class="col-xl-4 mb-3">
      
      <div class="card h-100">
      
      <div class="card-body">
      <div class="d-flex mb-3">
      <div class="flex-grow-1">
      <h5 class="mb-1">Sales Analytics</h5>
      <div class="fs-13px">Weekly sales performance chart</div>
      </div>
      <a href="#" data-bs-toggle="dropdown" class="text-muted"><i class="fa fa-redo"></i></a>
      </div>
 
      
      
      </div>
      
      </div>
      
    -->
      
      </div>




@endsection
@push('scripts')


<script src="/assets/js/plugins/dropzone/dropzone.min.js"></script>

<script>


       
    </script>

@endpush
