$(document).ready(function(){
    $('#botonLogin').click(function(){
        $('#avisoLogin').empty();
        if ($('#condiciones').is(':checked') && 
            $('#pass').val()!="" && 
            $('#alias').val()!="")  {
                $('#formularioLogin').submit();
        }
        else if(!$('#condiciones').is(':checked')){
            $('#avisoLogin').append("<span id='aviso' style='color:red;'>**Debe aceptar las condiciones de uso.<br/></span>");
        }
        else{
            $('#avisoLogin').append("<span id='aviso' style='color:red;'>**Debe rellenar todos los campos.<br/></span>");
        }
    })
    
    
})

