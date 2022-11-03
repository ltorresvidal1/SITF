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
                
                <div id="upload-label" style="width: 200px;" class="dz-clickable center">
                  <img src="/assets/img/paginas/upload-cloud.svg"/> 
                 </div>
                  <span class="tittle">Haga clic en el botón o suelte los archivos RIPS aquí</span>
                  <br>
                  <input type="text" class="form-control"  id="temporal" name="temporal"  value="" />
                  <button type="submit" id="button" class="tittle btn btn-outline-primary">Cargar RIPS</button>
                  <br>
            </form>






            <div class="preview-container">   

            <div class="row">							

              <div class="dz-preview2 dz-file-preview"  id="zdrop-template">
                
                  <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="alert-info card-header d-flex align-items-center">
                            <span data-dz-name></span>       
                        <a href="#!" data-dz-remove class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a>
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
     
      
@endsection
@push('scripts')


<script src="/assets/js/plugins/dropzone/dropzone.min.js"></script>

<script>

var previewNode = document.querySelector("#zdrop-template");
			previewNode.id = "";
			var previewTemplate = previewNode.parentNode.innerHTML;
		

     Dropzone.autoDiscover = false;
     const myDropzone = new Dropzone('#dropzone',{
    
            autoProcessQueue: false,
            autoDiscover: false,
            uploadMultiple: true,
            parallelUploads: 11,
            dictDefaultMessage:'',
            dictRemoveFile:'',
            maxFiles:10, 
            acceptedFiles:".txt",
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
                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        // Make sure that the form isn't actually being sent.
                        e.preventDefault();
                       // e.stopPropagation();
                        myDropzone.processQueue();
                        });
                        /*
                $("#button").click(function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    dropzone.processQueue();
                });
*/

                this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
                this.on("successmultiple", function(files, response) {
                //    $('form').append('<input type="text" name="archivo[]" value="' + "hol" + '">');
                // Gets triggered when the files have successfully been sent.
                // Redirect user or notify of success.
                  console.log(response);

              // $.each(files['name'], function (key, val) {
             
                //uploadedDocumentMap[data[key].name] = val;
                ///  });
              
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
        
       
    </script>

@endpush
