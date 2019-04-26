$(document).ready(function(){
    // let edit;
    // console.log(edit);
    listar();

    $(document).on('click', '#insertarP', function(e){
        e.preventDefault();
            let element = $(this)[0].parentElement.parentElement;
            const postData = {
                idInsumo : $(element).attr('idInsumo'),
                valor : $(element).attr('valor'),
                cantidad : $('#cantidad_'+ $(element).attr('idInsumo')).val(),
            }
            // console.log(postData);
            $.post('http://localhost/Jornan/Controlador/cotizacionAjax.php', postData, function(response){
                    // listar();
                    // console.log(response);
                    if (response==1) {
                        alert("Agregaste Este producto");
                        // swal({title: "LISTO",    
                        //       text: "La Categoria ha sido registrada correctamente.", 
                        //       type:"success", 
                        //       confirmButtonText: "OK", 
                        //       closeOnConfirm: true 
                        //     }, 
                        //     function(){
                                listar(); 
                            // });  
                    } else {
                        // console.log(response);
                    swal({title: "ERROR",    
                        text: "No se púdo registrar la categoria. Intenta más tarde."+response, 
                        type:"error", 
                        confirmButtonText: "OK", 
                        closeOnConfirm: true 
                      }, 
                      function(){ 
                      });  
                    }
                });

    }); $(document).on('click', '#eliminar', function(e){
        e.preventDefault();
        let element = $(this)[0].parentElement.parentElement;
          const postData = {
            idInsumo : $(element).attr('idInsumo'),
        }
        // console.log(postData);
            $.post('http://localhost/Jornan/Controlador/cotizacionAjax.php', postData, function(response){
                    listar();
                    $('#categoria-form').trigger('reset');
                    // console.log(response);
                    if (response) {
                        swal({title: "LISTO",    
                              text: "La Categoria ha sido registrada correctamente.", 
                              type:"success", 
                              confirmButtonText: "OK", 
                              closeOnConfirm: true 
                            }, 
                            function(){
                                listar(); 
                            });  
                    } else {
                        // console.log(response);
                    swal({title: "ERROR",    
                        text: "No se púdo registrar la categoria. Intenta más tarde."+response, 
                        type:"error", 
                        confirmButtonText: "OK", 
                        closeOnConfirm: true 
                      }, 
                      function(){ 
                      });  
                    }
                });
    });

    $(document).on('click', '#cargarP', function(e){
        // console.log("produtos");
        $.ajax({
            url : 'http://localhost/Jornan/Controlador/cotizacionAjax.php',
            type : 'GET',
            success : function(response){
                // console.log(response);
                let productos = JSON.parse(response);
                let template = '';
                productos.forEach(productos => {
                    template += `
                        <tr idInsumo="${productos.idInsumo}" valor="${productos.valor}">
                        <td style="display: none"></td>
                        <td>${productos.nombre}</td>
                        <td>${productos.valor}</td>
                        <td>
                        <input type="number" id="cantidad_${productos.idInsumo}" value="0">
                        </td>
                        <td>
                        <button class="btn btn-success text-center" id="insertarP">mas</button>
                        </td>
                        </tr>
                    `;
                });
                $('#product').html(template);
            } 
        });
        e.preventDefault();
});

    function listar(){
        let listar="listar";
        let total=0;
            $.post('http://localhost/Jornan/Controlador/cotizacionAjax.php', listar, function(response){
                // $('#categoria-form').trigger('reset');
                // console.log(response);
                if (response) {
                  let productos = JSON.parse(response);
                  let template = '';
                  productos.forEach(productos => {
                      total+=parseInt(productos.valor);
                      template += `
                          <tr idInsumo="${productos.idTmp}">
                          <td>${productos.nombre}</td>
                          <td>${productos.cantidad}</td>
                          <td>${productos.valor}</td>
                          <td>
                          <button class="btn btn-success text-center" id="eliminar">eliminar</button>
                          </td>
                          </tr>
                      `;
                  });
                  $('#dir').val(total);
                  $('#insumo').html(template);
                } else {
                    console.log(response);
                swal({title: "ERROR",    
                    text: "No se púdo registrar la categoria. Intenta más tarde."+response, 
                    type:"error", 
                    confirmButtonText: "OK", 
                    closeOnConfirm: true 
                  }, 
                  function(){ 
                  });  
                }
            });
    }

    $(document).on('click', '.categoria-delete', function(){
        let element = $(this)[0].parentElement.parentElement;
        let estado = $(element).attr('estado');
        let id = $(element).attr('idCategoria');
        const postData = {
            estado : estado,
            id : id,
        }
        swal({title: "LISTO",    
          text: "El estado ha sido editado correctamente.", 
          type:"success", 
          confirmButtonText: "OK", 
          closeOnConfirm: true 
        }, 
        function(){ 
            $.post('http://localhost/SIR/Controller/categoriaController.php', postData, function(response) {
                console.log(response);
                listar();
            });
        });  
    });

    $(document).on('click', '.categoria-edit', function(){
        $('#btnR').html("Actualizar");
        let element = $(this)[0].parentElement.parentElement;
        let consul = $(element).attr('idCategoria');

        $.post('http://localhost/SIR/Controller/categoriaController.php', {consul}, function(response) {
            let categor = JSON.parse(response);
            $('#categoria').val(categor[0].nombre);
            $('#estado').val(categor[0].estado);
            $('#id_categoria').val(categor[0].id_Categoria);
            edit = true;
        });
        
    });

    $(document).on('click', '.boton-limpiar', function(){
        $('#btnR').html("Registrar");
        console.log(edit);
        edit = null;
    });
});