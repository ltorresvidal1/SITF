

function EliminarCliente(idcliente){

    
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
                document.getElementById('delete-'+idcliente).submit()
            }
        });

   
  }



function EliminarFinca(idfinca){

    
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
                document.getElementById('delete-'+idfinca).submit()
            }
        });

   
  }

