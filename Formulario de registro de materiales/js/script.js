$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validar Nombre 
        if( $('#names').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

    // Validar materiales
        if( $('#materials').val() == '' ){
            errores += '<p>Escriba el tipo de material</p>';
            $('#materials').css("border-bottom-color", "#F14B4B")
        } else{
            $('#materials').css("border-bottom-color", "#d1d1d1")
        }


        // Validar Correo
        if( $('#email').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }


        // Validar contraseña
        if( $('#password').val() == '' ){
            errores += '<p>Digite una contraseña</p>';
            $('#password').css("border-bottom-color", "#F14B4B")
        } else{
            $('#password').css("border-bottom-color", "#d1d1d1")
        }

        // Validar Mensaje 
        if( $('#mensaje').val() == '' ){
            errores += '<p>Escriba un mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else{
            $('#mensaje').css("border-bottom-color", "#d1d1d1")
        }

        // ventana errores
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // boton cerrar
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
