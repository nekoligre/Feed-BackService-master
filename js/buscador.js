//la funcion que se comunica con el ajax
//function recibirDatosAjax(direccion, datos) {
//    $.ajax({
//        url: direccion,
//        type: "post",
//        async: false,
//        data: datos,
//        complete: function(request) {
//            resultado = request.responseText;
//        }
//    });
//}
function validaForm() {

    if ($("#provincia").val() == null) {
        alert("El campo Provincia no puede estar vacío.");
        return false;
    }
    if ($("#sector").val() == null) {
        alert("El campo Sector no puede estar vacío.");
        return false;
    }
    if ($("#servicio").val() === null || $("#servicio").val() === "") {
        alert("El campo Servicio no puede estar vacío.");
        return false;
    }

    return true; // Si todo está correcto
}

$(document).ready(function() {
    
    $("#sectorb").change(function() {
       
        $('#servicio').empty();
        

        var sector = $("#sectorb").val();

        $.ajax({
            type: "POST",
            url: "ajax_buscarServicios.php",
            data: "sector=" + sector,
            dataType: 'json',
            success: function(datos)
            {
                if (datos) {
                    
                    $.each(datos, function(ind, elem) {

                        $('#servicio').append("<option value='" + elem + "'>" + elem + "</option>");

                    })
                }
            }
        });
    });
    
    
    //funcion que se ejecuta al tocar el boton mostrar 
    
    $("#mostrar").click(function() {
        
        
        if (validaForm()) {
            var servicio = $("#servicio").val();
            var provincia = $("select[name=provincia]").val();
            var datos = {
                servicio: servicio,
                provincia: provincia
            };
            recibirDatosAjax("ajax_resultado.php", datos);
            $("#resultado").html(resultado);
        }

    });

});