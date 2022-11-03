@extends('layouts.plantillaFormularios')



@section('title','Crear Fincas')

@section('nombrevista','Fincas')
@section('hrefformulario')

@endsection

@section('tituloformulario','Fincas')
@section('principalformulario','FINCAS')
@section('accionformulario','CREAR')
@section('descripcionformulario','Crear Nuevo Finca')
@section('classformulario','card')


@section('content')


	<!-- BEGIN #tabsWithCard -->

    <ul class="nav nav-tabs pt-3 px-3">
        <li class="nav-item me-1"><a href="#general" class="nav-link active" data-bs-toggle="tab">General</a></li>
        <li class="nav-item me-1"><a href="#costosiniciales" class="nav-link" data-bs-toggle="tab">Costos Iniciales</a></li>
        <li class="nav-item me-1"><a href="#parametrizacion" class="nav-link" data-bs-toggle="tab">Parametrizacion</a></li>
    </ul>
     
    <form action="{{route('fincas.store',$clientes)}}" method="POST">
        @csrf
                            
                            <div class="tab-content p-4">
                              
                                <div class="tab-pane fade show active" id="general">
                                    <div class="row">													                                                    
                                        <div class="form-group col-4 m-0">
                                            <label class="form-label" for="codigo">Codigo</label>
                                            <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="codigo" name="codigo" value="{{old('codigo')}}"  />
                                            @error('codigo')
                                                <br>
                                                <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                        <div class="form-group col-8 m-0">
                                            <label class="form-label" for="nombre">Nombre</label>
                                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"  id="nombre" name="nombre"  value="{{old('nombre')}}" />
                                                @error('nombre')
                                                <br>
                                                <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="tab-pane fade" id="costosiniciales">
                                    <div class="card">
                                        <div class="card-header fw-600">Valor por Kilos iniciales por estado producción</div>
                                            <div class="row">	
                                        <div class="form-group col-1 m-0">
                                        </div>
                                        <div class="form-group col-5 m-0">
                                            <div class="form-group row mb-2">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Kilos:</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label  class="col-form-label">Valor x Kg:</label>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label  class="col-4 col-form-label">Vaca Seca:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control  @error('csk') is-invalid @enderror"  name="csk" id="csk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control  @error('csvk') is-invalid @enderror"  name="csvk" id="csvk">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label class="col-4 col-form-label">Vaca Parida:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control @error('cpk') is-invalid @enderror" name="cpk" id="cpk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control @error('cpvk') is-invalid @enderror" name="cpvk" id="cpvk">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label class="col-4 col-form-label">Novilla Vientre:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control @error('nvk') is-invalid @enderror" name="nvk" id="nvk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control @error('nvvk') is-invalid @enderror" name="nvvk" id="nvvk">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label  class="col-4 col-form-label">Cria Hembra:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="chk" id="chk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="chvk" id="chvk">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label class="col-4 col-form-label">Hembra Levante:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="hlk" id="hlk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="hlvk" id="hlvk">
                                                </div>
                                            </div>
                                       </div>


                                       <div class="form-group col-5 m-0">
                                        <div class="form-group row mb-2">
                                            <label class="col-4 col-form-label"></label>
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Kilos:</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Valor x Kg:</label>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-4 col-form-label">Cria Macho:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="cmk" id="cmk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="cmvk" id="cmvk">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-4 col-form-label">Macho Levante:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="mlk" id="mlk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="mlvk" id="mlvk">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label  class="col-4 col-form-label">Macho Ceba:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="mck" id="mck">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="mcvk" id="hlvk">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label  class="col-4 col-form-label">Torete:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="tk" id="tk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control"name="tvk" id="tvk">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-4 col-form-label">Reproductor:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="rk" id="rk">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="rvk" id="rvk">
                                            </div>
                                        </div>
                                  
                                   </div>
                                </div>
                            </div>


                            <br>

                            <div class="card">
                                <div class="card-header fw-600">Valor por dias de gestacion</div>
                                <br>
                                    <div class="row">	
                                <div class="form-group col-1 m-0">
                                </div>

                                <div class="form-group col-3 m-0">
                               
                                    
                                    <div class="form-group row mb-12">
                                        <label for="nvgv" class="col-7 col-form-label">Novilla Vientre G:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"  name="nvgv" id="nvgv">
                                        </div>
                                    </div>
                                    
                               </div>
                                <div class="form-group col-3 m-0">
                               
                                    
                                    <div class="form-group row mb-12">
                                        <label for="vsgv" class="col-7 col-form-label">Vaca Seca G:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="vsgv" id="vsgv">
                                        </div>
                                    </div>
                                    
                               </div>
                               

                               <div class="form-group col-3 m-0">
                               
                                
                                <div class="form-group row mb-12">
                                    <label for="vpgv" class="col-7 col-form-label">Vaca Parida G:</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="vpgv" id="vpgv">
                                    </div>
                                </div>
                                <br>
                                </div>
                                
                                </div>
                            </div>
                                    
                                </div>

                                <div class="tab-pane fade" id="parametrizacion">
                                
                                    <div class="form-group row mb-2">

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header fw-600">Reclasificacion</div>
                                            
                                                <div class="row p-4">
                                                    <div class="form-group row mb-2">
                                                        <label for="inputPassword" class="col-6 col-form-label"></label>
                                                        <div class="col-sm-3">
                                                            <input type="radio" value="" name="radio_1" id="defaultRadio1" checked />
                                                            <label for="inputPassword" class="form-check-label">Peso >=</label>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="radio" value="" name="radio_1" id="defaultRadio1" />
                                                            <label for="inputPassword" class="form-check-label">Meses</label>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        
                                                        <label class="col-6 col-form-label">Para pasar a Novilla:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="rnvp" id="rnvp">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="rnvm" id="rnvm">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-6 col-form-label">Para pasar a Ceba:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control"  name="rmcp" id="rmcp">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control"  name="rmcm" id="rmcm">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label  class="col-6 col-form-label">Para pasar a Reproductor:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control"  name="rtp" id="rtp">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="rtpm" id="rtm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           <br>
                                                <div class="card">
                                                    <div class="card-header fw-600">Configuracion Adicional</div>
                                                
                                                    <div class="row p-4">
                                     
                                                        
                                                        <div class="form-group row mb-2">
                                                            
                                                           
                                                             
                                                               <label for="cvpac" class="col-9">% Costo Vaca Parida a Cria:</label>
                                                                <div class="col-sm-3">
                                                                    <input class="form-control" type="number"  id="cvpac" name="cvpac" min="0" max="100" value="0" >
                                                                </div>
                                                                                                  
                                                        </div>
                                                            
                                                        <div class="form-group row mb-2">
                                                            
                                                            <label for="cdpn" class="col-9 col-form-label">% Calcular diferecia peso para ganacia Novilla:</label>
                                                            <div class="col-sm-3">
                                                                
                                                                <input type="text" class="form-control" id="cdpn" mame="cdpn">
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                </div>
                                       
                                                
                                         
                                                
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header fw-600">Salvamento</div>
                                            
                                                <div class="row p-4">
                                                    <div class="form-group row mb-2">
                                                        <label  class="col-6 col-form-label"></label>
                                                        <div class="col-sm-6">
                                                            <label  class="col-form-label">Valor Minimo</label>
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        
                                                        <label for="vsv" class="col-7 col-form-label">Valor salvamento vacas:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="vsv" name="vsv">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label for="vsr" class="col-7 col-form-label">Valor salvamento reproductor:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="vsr" name="vsr">
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card">
                                                <div class="card-header fw-600">Amortizacion</div>
                                            
                                                <div class="row p-4">
                                                    <div class="form-group row mb-2">
                                                        <label class="col-6 col-form-label"></label>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Valor Minimo</label>
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        
                                                        <label for="avsv" class="col-7 col-form-label">Valor salvamento vacas:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="avsv" name="avsv">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label for="avsr" class="col-7 col-form-label">Valor salvamento reproductor:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="avsr" name="avsr">
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>



                                    </div>   


                                    <div class="form-group row mb-2">

                                        <div class="col-sm-6">
                                        
                                        </div>
                                    </div>  
                                    <br>




                                    
                                </div>
                              
    

        
											
                                       
                                    

                                           


                                            <div class="row">    
                                             
                                                <div class="form-group col-3 m-0">   
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