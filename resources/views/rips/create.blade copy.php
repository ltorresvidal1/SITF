@extends('layouts.plantillaFormularios')
@push('css')
<link rel="stylesheet" href="/assets/js/plugins/dropzone/dropzone.min.css" type="text/css" />

<style>
 /*
.fileuploader {
    position: relative;
    width: 60%;
    margin: auto;
    height: 400px;
    border: 4px dashed #ddd;
    background: #f6f6f6;
    margin-top: 85px;
}
.fileuploader #upload-label{
  background: rgba(231, 97, 92, 0);
  color: #fff;
  position: absolute;
  height: 115px;
  top: 20%;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
  min-width: 20%;
  text-align: center;
  cursor: pointer;
}
.fileuploader.active{
  background: #fff;
}
.fileuploader.active #upload-label{
  background: #fff;
  color: #e7615c;
}

.fileuploader #upload-label i:hover {
    color: #444;
    font-size: 9.4rem;
    -webkit-transition: width 2s;
}

.fileuploader #upload-label span.title{
  font-size: 1em;
  font-weight: bold;
  display: block;
}
button.tittle {
    position: absolute;
    top: 80px;
}

span.tittle {
    position: absolute;
    top: 30px;
}

.fileuploader #upload-label i{
  text-align: center;
  display: block;
  color: #e7615c;
  height: 115px;
  position: absolute;
  top: -12px;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
}




*/
   
.preview-container{
  /*position: relative;
  bottom: 0px;
  width: 35%;
  margin: auto;
  top: 25px;*/
  visibility: hidden;

  
}

.preview-container #previews{
  max-height: 400px;
  overflow: auto; 
}
.preview-container #previews .zdrop-info{
  width: 88%;
  margin-right: 2%;
}
.preview-container #previews.collection{
  margin: 0;
  box-shadow: none;
  border: none;
}

.preview-container #previews.collection .collection-item {
    background-color: #e0e0e0;
}

.preview-container #previews.collection .actions a{
  width: 1.5em;
  height: 1.5em;
  line-height: 1;
}
.preview-container #previews.collection .actions a i{
  font-size: 1em;
  line-height: 1.6;
}
.preview-container #previews.collection .dz-error-message{
  font-size: 0.8em;
  margin-top: -12px;
  color: #F44336;
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
    


            <form action="{{route('cargarrips.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzone">
                @csrf
                
                <div id="upload-label" style="width: 200px;">
                  <img src="/assets/img/paginas/upload-cloud.svg"/> 
                 </div>
                  <span class="tittle">Haga clic en el botón o suelte los archivos RIPS aquí</span>
                  <br>
                  <button type="submit" id="button" class="tittle btn btn-outline-primary">Cargar RIPS</button>

            </form>






            <div class="preview-container">   

            <div class="row">							

              <div class="form-group col-md-2"  id="zdrop-template">
                
                  <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center">
                        <span class="flex-grow-1 fw-600"></span>          
                        <a href="#!" data-dz-remove class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a>
                    </div>
              
                    <div class="list-group list-group-flush">
                      <div class="list-group-item d-flex px-3">
                        <div class="flex-fill">
                          <div class="fw-600 text-dark"><span data-dz-name></span></div>      
                         
                          <hr class="mt-15px mb-15px">
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


<script src="/assets/js/plugins/dropzone/dropzone.min.js"></script>

<script>

var previewNode = document.querySelector("#zdrop-template");
			previewNode.id = "";
			var previewTemplate = previewNode.parentNode.innerHTML;
		

     Dropzone.autoDiscover = false;
     const dropzone = new Dropzone('#dropzone',{
            autoProcessQueue: false,
            dictDefaultMessage:'',
            dictCancelUpload = '',
            dictRemoveFile:'',
            maxFiles:10, 
            acceptedFiles:".txt",
            addRemoveLinks: true,
            previewTemplate: previewTemplate,
        




            clickable: "#upload-label",
       
            init: function() {
                this.on("maxfilesexceeded", function(file) {
                    this.removeAllFiles();
                    this.addFile(file);
                });

                $("#button").click(function (e) {
                    e.preventDefault();
                    dropzone.processQueue();
                });
            },
           /* uploadprogress: function(file, progress, bytesSent) {
                if (file.previewElement) {
                   var progressElement =  document.querySelector("[name=progress");
                    progressElement.style.width = progress + "%";
                    progressElement.textContent= progress + "%";
                //    document.querySelector('[name="progress"]').style.width =progress;
                   // document.querySelector('[name="progress"]').text= progress + "%";
                  //  progressElement.style.width = progress + "%";
                   // progressElement.querySelector(".progress-text").textContent = progress + "%";
                    

                   
                }
            },
            */
            success: function(file, response) 
            {
                //alert("cargue");
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
        });

        dropzone.on("addedfile", function(file) { 
          alert("hola");
			//	$('.preview-container').css('visibility', 'visible');
			});
/*
			dropzone.on("totaluploadprogress", function (progress) {
				var progr = document.querySelector(".progress .determinate");
					if (progr === undefined || progr === null)
							return;

						progr.style.width = progress + "%";
					});

					dropzone.on('dragenter', function () {
						$('.fileuploader').addClass("active");
					});

					dropzone.on('dragleave', function () {
						$('.fileuploader').removeClass("active");			
					});

					dropzone.on('drop', function () {
						$('.fileuploader').removeClass("active");	
					});
*/
   /*
   var fileList= new Array;
        var i=0;
     Dropzone.autoDiscover = false;
    const dropzone = new Dropzone('#dropzone',{
        dictDefaultMessage:'Buscar Archivos Rips',
        acceptedFiles:".txt",
        addRemoveLinks:true,
        dictRemoveFile:'Borrar Archivo',
        maxFiles:1,
        uploadMultiple:true,
        init: function(){
            this.on("success",function (file,serverFileName){
                file.serverFn =  serverFileName;
                fileList[i]={
                    "serverFileName":serverFileName,
                    "fileName":file.fileName,
                    "fileId":i,
                };
                i++;

            });


            
        },
    });
 */
  /*  dropzone.on("success",function (file,response){
        document.querySelector('[name="logo"]').value=response.imagen;
    });

     
    dropzone.on("removedfile",function (){
        document.querySelector('[name="logo"]').value='';
    });
*/



    </script>

@endpush
