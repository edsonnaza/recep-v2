   


       
// Selecciona en el modal el departamento solcitado en la atencion por el cliente.

 $('#SolicitarAtencion').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient0 = button.data('id')
        var recipient1 = button.data('name')
            
        var modal = $(this)    
    
        // creamos un variable que hace referencia al select
        var select=document.getElementById("id_dpto");
 
        // obtenemos el valor a buscar
        var buscar=recipient1;
      
        
            // recorremos todos los valores del select
            for(var i=1;i<select.length;i++)
            {
                if(select.options[i].text==buscar)
                {
                    // seleccionamos el valor que coincide
                    select.selectedIndex=i;

                }
            }

    //BuscarColaborador(select.selectedIndex);

    select.disabled=true;


});


 

  
   