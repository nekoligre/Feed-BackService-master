function anadir(u) {
    $('aliasDisponible').remove();
    if (u == 0) {
        $("#avisoAlias").append("<span id='aliasDisponible' style='color:red'>*Alias no disponible, introduzca uno diferente.</span>")
        $('#aliasRegistro').val('');
    }
    else {
        $("#avisoAlias").append("<span id='aliasDisponible' style='color:green'>*Alias disponible.</span>")
    }
 
    //El aviso de disponibilidad de alias desaparece:
$('#aliasDisponible').fadeOut(5000);
}

$('document').ready(function() {

    //DatePicker en español y con opción de cambiar el año y el mes:
$('#fechaNac').datepicker({
		defaultDate : "+1w",
		changeMonth : true,
		changeYear : true,
		numberOfMonths : 1,
		firstDay : 1,
		yearRange : '-99:+0',
		maxDate : '+0m +0d',
	});
	$.datepicker.regional['es'] = {
		closeText : 'Cerrar',
		prevText : '&#x3c;Ant',
		nextText : 'Sig&#x3e;',
		currentText : 'Hoy',
		monthNames : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		monthNamesShort : ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
		dayNames : ['Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
		dayNamesShort : ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Juv', 'Vie', 'S&aacute;b'],
		dayNamesMin : ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
		weekHeader : 'Sm',
		dateFormat : 'dd/mm/yy',
		firstDay : 1,
		isRTL : false,
		yearSuffix : ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);
	$("#fechaNac").datepicker("option", "showMonthAfterYear", true);


//AJAX para comprobar si el alias existe en la base de datos:
    $('#aliasRegistro').change(function() {
        $.ajax({
            type: "POST",
            url: "ajax_checkAlias.php",
            data: "alias=" + $("#aliasRegistro").val(),
            success: function(datos)
            {
                if (datos == 0)
                {
                    anadir(1);
                } else {
                    anadir(0);
                }
            }
        });
    });




//Eventos/validaciones boton:
    $('#boton').click(function() {

        //Datos del datepicker y los metemos en fechaNacBueno para poder recogerlos:
        $('#fechaNacBuena').val($('#fechaNac').datepicker('getDate'));

        $('#aviso').remove();
        if ($('#terminos').is(':checked')) {
            var valido = chequeaMail($('#email').val());
            if (valido) {
                if($('#passRegistro').val()== $('#passRegistro2').val()){
                if ($('#aliasRegistro').val() != '' && $('#passRegistro').val() != ''  && $('#nombre').val() != '' && $('#apellidos').val() != '' && $('#profesion').val() != '' && $('#provincia').val() != ''&& $("input[name='sexo']:checked").val() ) {
                    $('#formulario').submit();
                } else {
                    $('#ultimo').append("<span id='aviso' style='color:red;'>**Debe rellenar todos los campos<br/></span>");
                }
            }else{
                $('#ultimo').append("<span id='aviso' style='color:red;'>**Las contraseñas no coinciden.<br/></span>");
            }
            } else {
                $('#ultimo').append("<span id='aviso' style='color:red;'>**Debe introducir una cuenta de correo v&aacute;lida<br/></span>");
            }
        } else {
            $('#ultimo').append("<span id='aviso' style='color:red;'>**Debe aceptar los t&eacute;rminos y condiciones.<br/></span>");
        }

    });
//&& $('#fechaNac').datepicker('getDate') != ''
});

