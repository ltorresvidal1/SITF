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
{{route('rips.index',$clientes)}}
@endsection

@section('tituloformulario','Rips')
@section('principalformulario','RIPS')
@section('accionformulario','CREAR')
@section('descripcionformulario','Cargar Nuevo Rips')
@section('classformulario','card')


@section('content')


	<!-- BEGIN #tabsWithCard -->



    <div class="row">		
                                                
        <div id="profileWidget" class="mb-5">
    


            <form action="{{route('cargarrips.store')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-nk needsclick" id="dropzone">
                @csrf
                @method('POST')
                <div id="upload-label" style="width: 200px;" class="dz-clickable center">
                  <img src="/assets/img/paginas/upload-cloud1.svg"  id="imagencargar" onmouseOver="Imagen1();" onmouseOut="Imagen2();"  onClick="Limpirar();"/> 
                 </div>
                  <span class="tittle">Haga clic en el botón o suelte los archivos RIPS aquí</span>
                  <br>
                  <input type="hidden" class="form-control"  id="temporal" name="temporal"  value="" />
               <!--   <button type="submit" id="button" class="tittle btn btn-outline-primary">Cargar RIPS</button>  -->
                  <br>
            </form>






            <div class="preview-container">   

            <div class="row">							

              <div class="dz-preview2 dz-file-preview"  id="zdrop-template">
                
                  <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="alert-info card-header d-flex align-items-center">
                            <span data-dz-name></span>       
                     <!--    <a href="#!" data-dz-remove class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a> -->
                    </div>
              
                    <div class="list-group list-group-flush">
                      <div class="list-group-item d-flex px-3">
                        <div class="flex-fill">
                          <div class="fw-600 text-dark"></div>      
                         
                        
                          <div class="fw-600"><span data-dz-size></span></div>
                       </div>
                      </div>
                   </div>                  
                 </div>            
              </div>
            </div>
              
            
          </div>

        </div>

        </div>
    </div>  
     
    <div class="modal fade"  id="modalvalidacionrips">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Validacion inical de archivos</h5>
            </div>
          <div class="modal-body">
            

            <div class="list-group list-group-flush">
              
              <div id='rips_ct' style="display: none;">                 
                <div class="list-group-item d-flex px-3" >
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de control (CT) encontrado</div>
                  </div>
                </div>
              </div>

              <div id='err_rips_ct'>         
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo de control (CT)</div>
                 </div>
                </div>
              </div>

              <div id='rips_af' style="display: none;">       
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de transacciones (AF) encontrado</div>
                  </div>
                </div>
              </div>

              <div id='err_rips_af'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo de transacciones (AF)</div>
                </div>
                </div>
              </div>

              <div id='rips_us' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de usuarios (US) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_us'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo usuarios (US)</div>
                </div>
                </div>
              </div>

              <div id='rips_ac' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de consultas (AC) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_ac'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo consultas (AC)</div>
                </div>
                </div>
              </div>

              <div id='rips_ap' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de procedimientos (AP) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_ap'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo procedimientos (AP)</div>
                </div>
                </div>
              </div>

              <div id='rips_au' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de urgencias (AU) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_au'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo urgencias (AU)</div>
                </div>
                </div>
              </div>


              <div id='rips_ah' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de hospitalizaciones (AH) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_ah'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo hospitalizaciones (AH)</div>
                </div>
                </div>
              </div>

              <div id='rips_an' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de recien nacidos (AN) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_an'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo recien nacidos (AN)</div>
                </div>
                </div>
              </div>

              <div id='rips_am' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de medicamentos (AM) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_am'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo medicamentos (AM)</div>
                </div>
                </div>
              </div>

              <div id='rips_at' style="display: none;">
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-check-circle text-success fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">Archivo de otros servicios (AT) encontrado</div>
                </div>
                </div>
              </div>

              <div id='err_rips_at'>
                <div class="list-group-item d-flex px-3">
                  <div class="me-3">
                    <i class="far fa-times-circle text-danger fa-fw fa-lg"></i>
                  </div>
                  <div class="flex-fill">
                    <div class="fw-600 text-dark">No se pudo encontrar el archivo otros servicios (AT)</div>
                </div>
                </div>
              </div>
             
              <br>
              <div id='mensaje_ok'>
                <div class="alert alert-success">
                  <strong>Exitoso!</strong> Los Archivos Rips Comenzaran el proceso de validacion.
                </div>
              </div>

              <div id='mensaje_error'>
                <div class="alert alert-danger">
                  <strong>Error!</strong> Los Archivos Rips no contienen los archivos minimos para el preceso de validacion.
                </div>
              </div>

            </div>

            <br>
            <br>


            <form action="{{route('rips.index',$clientes)}}">
                 
                    <div class='text-right'>
                      <button type="submit" id="boton_ok" class="btn btn-primary">Aceptar</button>
                      <button type="button" id="boton_cerrar" class="btn btn-default" data-bs-dismiss="modal">Cerrar</button>
                    </div>
  
            </form>
                       
          
        </div>
      </div>
    </div>





@endsection
@push('scripts')


<script src="/assets/js/plugins/dropzone/dropzone.min.js"></script>

<script>


function Limpirar(){
  myDropzone.removeAllFiles();
}

function Imagen1(){
    $("#imagencargar").attr("src","/assets/img/paginas/upload-cloud2.svg");
  
}
function Imagen2(){
    $("#imagencargar").attr("src","/assets/img/paginas/upload-cloud1.svg");
}
var previewNode = document.querySelector("#zdrop-template");
			previewNode.id = "";
			var previewTemplate = previewNode.parentNode.innerHTML;
		
        
    Dropzone.autoDiscover = false;
     const myDropzone = new Dropzone('#dropzone',{
    
            autoProcessQueue: true,
            autoDiscover: false,
            uploadMultiple: true,
            parallelUploads: 11,
            dictDefaultMessage:'',
            dictRemoveFile:'',
            dictCancelUpload: '',
            maxFiles:11, 
            acceptedFiles:"text/plain",
           
            addRemoveLinks: true,


            previewTemplate: previewTemplate,
            clickable: "#upload-label",
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
             },
           
            init: function() {
                this.on("maxfilesexceeded", function(file) {
                    this.removeAllFiles();
                    this.addFile(file);
                });
            

          //      this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        // Make sure that the form isn't actually being sent.
                     
                       /*

                       
                        swal({
                                title: "Desea eliminar este registro?",
                                icon: "warning",
                                dangerMode: true,
                                buttons: {
                                    confirm: { text: "OK", value: true, visible: true, className: "", closeModal: true },
                                    cancel: { text: "Cancel", value: null, visible: true, className: "", closeModal: true }
                                }
                            })
                                .then((willDelete) => {

                                    if (willDelete) {
                                      */  
                               ///       $("#miModalGrupos").modal("show");
                             //       e.preventDefault();
                               //     e.stopPropagation();
                                 //   myDropzone.processQueue();
                           /* }

                        });
                    
                       */

                    
                      //   $('#agrupador').removeAttr('style');

                  //       document.getElementById("agrupador").style.display  = "none"; // hide

                ///        });
        
                        

                this.on("sendingmultiple", function() {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                    });
                this.on("successmultiple", function(files, response) {
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
                var contador=0;
               
                $("#rips_ct").attr("style","display:none;");
                $("#rips_af").attr("style","display:none;");
                $("#rips_us").attr("style","display:none;");
                $("#rips_ac").attr("style","display:none;");
                $("#rips_ap").attr("style","display:none;");
                $("#rips_au").attr("style","display:none;");
                $("#rips_ah").attr("style","display:none;");
                $("#rips_an").attr("style","display:none;");
                $("#rips_am").attr("style","display:none;");
                $("#rips_at").attr("style","display:none;");
                $("#mensaje_ok").attr("style","display:none;");          
                $("#boton_ok").attr("style","display:none;");          


                $("#err_rips_ct").removeAttr('style');
                $("#err_rips_af").removeAttr('style');
                $("#err_rips_us").removeAttr('style');
                $("#err_rips_ac").removeAttr('style');
                $("#err_rips_ap").removeAttr('style');
                $("#err_rips_au").removeAttr('style');
                $("#err_rips_ah").removeAttr('style');
                $("#err_rips_an").removeAttr('style');
                $("#err_rips_am").removeAttr('style');
                $("#err_rips_at").removeAttr('style');
                $("#mensaje_error").removeAttr('style');
                $("#boton_cerrar").removeAttr('style');

              for (i = 0; i < response.length; i++) {
               
                if(response[i]=='CT_SI'){
                 $('#rips_ct').removeAttr('style');
                 $("#err_rips_ct").attr("style","display:none;");
                 contador=contador+10;
                }
                if(response[i]=='AF_SI'){
                  $('#rips_af').removeAttr('style');
                  $("#err_rips_af").attr("style","display:none;");
                  contador=contador+10;
                }               
                if(response[i]=='US_SI'){
                 $('#rips_us').removeAttr('style');
                 $("#err_rips_us").attr("style","display:none;");
                 contador=contador+10;
                }
                if(response[i]=='AC_SI'){
                 $('#rips_ac').removeAttr('style');
                 $("#err_rips_ac").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AP_SI'){
                 $('#rips_ap').removeAttr('style');
                 $("#err_rips_ap").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AU_SI'){
                 $('#rips_au').removeAttr('style');
                 $("#err_rips_au").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AH_SI'){
                 $('#rips_ah').removeAttr('style');
                 $("#err_rips_ah").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AN_SI'){
                 $('#rips_an').removeAttr('style');
                 $("#err_rips_an").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AM_SI'){
                 $('#rips_am').removeAttr('style');
                 $("#err_rips_am").attr("style","display:none;");
                 contador=contador+1;
                }
                if(response[i]=='AT_SI'){
                 $('#rips_at').removeAttr('style');
                 $("#err_rips_at").attr("style","display:none;");
                 contador=contador+1;
                }
              } 


              if(contador>=31){
                $('#mensaje_ok').removeAttr('style');
                $("#mensaje_error").attr("style","display:none;");
                $('#boton_ok').removeAttr('style');
                $("#boton_cerrar").attr("style","display:none;");
                
              }else{
                $('#mensaje_error').removeAttr('style');
                $("#mensaje_ok").attr("style","display:none;");
                $('#boton_cerrar').removeAttr('style');
                $("#boton_ok").attr("style","display:none;");
              }
              
                console.log(response);
              
                
  
             
           
                $('#modalvalidacionrips').modal({backdrop: 'static', keyboard: false});
                $("#modalvalidacionrips").modal("show");
               // window.location = '{{ route('rips.index',$clientes) }}';
                 
                });

                this.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                return false;
                });
            },
      
            
        });

    
        myDropzone.on("addedfile", function(file) { 
         
            if (this.files.length==1) {
             document.querySelector("#temporal").value=Date.now();
            }
            
            if (this.files.length) {
                var _i, _len = this.files.length;
                 for (_i = 0; _i < _len - 1; _i++){
                   if(this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModifiedDate.toString() === 
                    file.lastModifiedDate.toString()){
                    this.removeFile(file);
                    break;
            }
        }
    
    }
});
        
         /* dictDefaultMessage : "Drop files here to upload",
            dictFallbackMessage : "Your browser does not support drag'n'drop file uploads.",
            dictFallbackText : "Please use the fallback form below to upload your files like in the olden days.",
            dictFileTooBig : "File is too big (filesizeMiB). Max filesize: maxFilesize MiB.",
            dictInvalidFileType : "You can't upload files of this type.",
            dictResponseError : "Server responded with statusCode code.",
         
            dictCancelUploadConfirmation : "Are you sure you want to cancel this upload?",
            dictRemoveFile : "Remove file",
            dictMaxFilesExceeded : "You can not upload any more files.",
        */
       
    </script>

@endpush
