@extends('layouts.plantillaFormularios')



@section('title','Crear Costos Iniciales')

@section('nombrevista','Costos Iniciales')
@section('hrefformulario')
{{route('costosiniciales.index',$clientes)}}
@endsection

@section('tituloformulario','Costos Iniciales')
@section('principalformulario','COSTOS INICIALES')
@section('accionformulario','CREAR')
@section('descripcionformulario','Crear Nuevo Costo Inicial')
@section('classformulario','card')


@section('content')




    <form action="{{route('costosiniciales.store',$clientes)}}" method="POST">
        @csrf
                            
                            <div class="tab-content p-4">
                                <div class="row">													                                                    
                                    <div class="form-group col-4 m-0">
                                        <label class="form-label" for="idfinca">Fincas</label>
                                        <input type="hidden" class="form-control"  id="tempfinca" name="tempfinca" value="{{old('tempfinca')}}" />
                                        <div wire:ignore>
                                            <div class="form-control  @error('idfinca') is-invalid @enderror" >
                                            <select class="select2 form-control" id="idfinca" name="idfinca" >
                                     
                                                <option value="">-- Selecionar Finca --</option>
                                                @foreach($fincas as $finca)                                                     
                                                <option value="{{ $finca->id }}">{{ $finca->nombre }}</option>
                                            @endforeach
                                              
                                                                                
                                
                                            </select>
                                            </div>
                                        </div>
                                        @error('idfinca')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                     
                                    </div>
                                </div>
                                <br>
                                <div id="costosiniciales">
                                    <div class="card">
                                        <div class="card-header fw-600">Valor por Kilos iniciales por estado producción</div>
                                            <div class="row p-4">	
                                     
                                        <div class="form-group col-6 m-0">

                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label class="col-form-label"></label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Kilos:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label  class="col-form-label">Valor x Kg:</label>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label  class="col-form-label">Vaca Seca:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control  @error('csk') is-invalid @enderror"  name="csk" id="csk" value="{{old('csk')}}" >
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control  @error('csvk') is-invalid @enderror"  name="csvk" id="csvk" value="{{old('csvk')}}" >
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label class="col-form-label">Vaca Parida:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('cpk') is-invalid @enderror" name="cpk" id="cpk" value="{{old('cpk')}}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('cpvk') is-invalid @enderror" name="cpvk" id="cpvk" value="{{old('cpvk')}}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label class="col-form-label">Novilla Vientre:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('nvk') is-invalid @enderror" name="nvk" id="nvk" value="{{old('nvk')}}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('nvvk') is-invalid @enderror" name="nvvk" id="nvvk" value="{{old('nvvk')}}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label  class="col-form-label">Cria Hembra:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('chk') is-invalid @enderror" name="chk" id="chk" value="{{old('chk')}}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('chvk') is-invalid @enderror" name="chvk" id="chvk" value="{{old('chvk')}}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-4">
                                                <label class="col-form-label">Hembra Levante:</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('hlk') is-invalid @enderror"name="hlk" id="hlk" value="{{old('hlk')}}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('hlvk') is-invalid @enderror" name="hlvk" id="hlvk" value="{{old('hlvk')}}">
                                                </div>
                                            </div>
                                       </div>


                                       <div class="form-group col-6 m-0">

                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label class="col-form-label"></label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="col-form-label">Kilos:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="col-form-label">Valor x Kg:</label>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label class="col-form-label">Cria Macho:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('cmk') is-invalid @enderror"  name="cmk" id="cmk"  value="{{old('cmk')}}">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('cmvk') is-invalid @enderror"  name="cmvk" id="cmvk" value="{{old('cmvk')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label class="col-form-label">Macho Levante:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('mlk') is-invalid @enderror"  name="mlk" id="mlk" value="{{old('mlk')}}">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('mlvk') is-invalid @enderror"  name="mlvk" id="mlvk" value="{{old('mlvk')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label  class="col-form-label">Macho Ceba:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('mck') is-invalid @enderror"  name="mck" id="mck" value="{{old('mck')}}">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('mcvk') is-invalid @enderror"  name="mcvk" id="mcvk" value="{{old('mcvk')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label  class="col-form-label">Torete:</label>
                                             </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('tk') is-invalid @enderror"  name="tk" id="tk" value="{{old('tk')}}">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('tvk') is-invalid @enderror" name="tvk" id="tvk"  value="{{old('tvk')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <div class="col-sm-4">
                                            <label class="col-form-label">Reproductor:</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('rk') is-invalid @enderror"  name="rk" id="rk"  value="{{old('rk')}}">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control @error('rvk') is-invalid @enderror"  name="rvk" id="rvk"  value="{{old('rvk')}}">
                                            </div>
                                        </div>
                                  
                                   </div>
                                </div>
                            </div>


                            <br>

                            <div class="card">
                                <div class="card-header fw-600">Valor por dias de gestacion</div>
                                <br>
                                    <div class="row p-4">	
                            
                                        

                                <div class="form-group col-4 m-0">
                               
                                    <div class="form-group row mb-12">
                                        <label for="nvgv" class="col-7 col-form-label">Novilla Vientre G:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control @error('nvgv') is-invalid @enderror"    name="nvgv" id="nvgv"   value="{{old('nvgv')}}">
                                        </div>
                                    </div>
                                    
                               </div>
                                <div class="form-group col-4 m-0">
                               
                                    
                                    <div class="form-group row mb-12">
                                        <label for="vsgv" class="col-7 col-form-label">Vaca Seca G:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control @error('vsgv') is-invalid @enderror"   name="vsgv" id="vsgv"   value="{{old('vsgv')}}">
                                        </div>
                                    </div>
                                    
                               </div>
                               

                               <div class="form-group col-4 m-0">
                               
                                
                                <div class="form-group row mb-12">
                                    <label for="vpgv" class="col-7 col-form-label">Vaca Parida G:</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control @error('vpgv') is-invalid @enderror"   name="vpgv" id="vpgv"   value="{{old('vpgv')}}">
                                    </div>
                                </div>
                                <br>
                                </div>
                                
                                </div>
                            </div>
                                     <div class="row">  
                                             
                                                <div class="form-group col-3 m-0">   
                                                    <br>                                                     
                                                    <button type="submit" class="btn btn-primary">Crear Costos Iniciales</button>
                                                </div>
                                            </div>
	</form>
      
@endsection

@push('scripts')

  
<script>
    
    
$(document).ready(function() {
    
    $('.select2').select2();

    
    $("#idfinca").change(function () {     
        $('#tempfinca').val($('#idfinca').val());
    });


    if ($('#idfinca').hasClass("select2-hidden-accessible")) {
        $('#idfinca').val($('#tempfinca').val());
        $('#idfinca').trigger('change');
    }

});






</script>
@endpush