function cancelaEdicion() {
        window.location.href="home";
    };
function modificaLarga() {
        
        var larga= $('#descLarga').val();
        var usuario= $('input[name=id]').val();
        var servicio= $('input[name=servicio]').val();
        
        $.ajax({
            type: "POST",
            url: "ajax_editaLarga.php",
            data: "desc=" + larga+"&usu="+usuario+"&serv="+servicio,
            success: function(datos)
            {
                if (datos) {
                    
                    if(datos==1){
                        
                        window.location.href="index.php?p=home&error=12";
                    }
                    else{
                        
                        window.location.href="index.php?p=home&error=13";
                    }
                }
            }
        });
    };

function modificaCorta() {
        
        var corta= $('input[name=descCorta]').val();
        var usuario= $('input[name=id]').val();
        var servicio= $('input[name=servicio]').val();
        
        $.ajax({
            type: "POST",
            url: "ajax_editaCorta.php",
            data: "desc=" + corta+"&usu="+usuario+"&serv="+servicio,
            success: function(datos)
            {
                if (datos) {
                    
                    if(datos==1){
                        
                        window.location.href="index.php?p=home&error=12";
                    }
                    else{
                        
                        window.location.href="index.php?p=home&error=13";
                    }
                }
            }
        });
    };


$(document).ready(function() {
    
  
    $('.botonEditaDatos').click(function() {

        var fotoPerfil = $("#fotoPerfil").html();

        $('#imagenVieja').remove();
        $('#fotoPerfil').append("<label for='fotoPerfilNueva'><a class='enlaceFoto'>" + fotoPerfil + "</a></label>");
        $('#fotoPerfil').append("<input class='form-control' type='file' name='fotoPerfilNueva' class='btn btn-lg' id='inputNuevo'>");
        
        var apellidos =$("input[name=apellidos]").val();
        var nombre = $("input[name=nombre]").val();
        $('#nombre').empty();
        $('#nombre').append("<input class='form-control' type='text' name='nombre' placeholder='" + nombre + "' value='"+nombre+"'><input class='form-control' type='text' name='apellidos' value='"+apellidos+"'>");

        var provincia = $("#provincia").text();
        
        $('#provincia').empty();
        $('#provincia').append("<select class='form-control' id='provincia' name='provincia'>\
                                <option selected='' value='null'>Seleccione una provincia</option>\
                                <option value='A Coruña'>A Coruña</option>\
                                <option value='Álava'>Álava</option>\
                                <option value='Albacete'>Albacete</option>\
                                <option value='Alicante'>Alicante</option>\
                                <option value='Almería'>Almería</option>\
                                <option value='Asturias'>Asturias</option>\
                                <option value='Ávila'>Ávila</option>\
                                <option value='Badajoz'>Badajoz</option>\
                                <option value='Baleares'>Baleares (Illes)</option>\
                                <option value='Barcelona'>Barcelona</option>\
                                <option value='Burgos'>Burgos</option>\
                                <option value='Cáceres'>Cáceres</option>\
                                <option value='Cádiz'>Cádiz</option>\
                                <option value='Cantabria'>Cantabria</option>\
                                <option value='Castellón'>Castellón</option>\
                                <option value='Ceuta'>Ceuta</option>\
                                <option value='Ciudad Real'>Ciudad Real</option>\
                                <option value='Córdoba'>Córdoba</option>\
                                <option value='Cuenca'>Cuenca</option>\
                                <option value='Girona'>Girona</option>\
                                <option value='Granada'>Granada</option>\
                                <option value='Guadalajara'>Guadalajara</option>\
                                <option value='Guipúzcoa'>Guipúzcoa</option>\
                                <option value='Huelva'>Huelva</option>\
                                <option value='Huesca'>Huesca</option>\
                                <option value='Jaén'>Jaén</option>\
                                <option value='La Rioja'>La Rioja</option>\
                                <option value='Las Palmas'>Las Palmas</option>\
                                <option value='León'>León</option>\
                                <option value='Lleida'>Lleida</option>\
                                <option value='Lugo'>Lugo</option>\
                                <option value='Madrid'>Madrid</option>\
                                <option value='Málaga'>Málaga</option>\
                                <option value='Melilla'>Melilla</option>\
                                <option value='Murcia'>Murcia</option>\
                                <option value='Navarra'>Navarra</option>\
                                <option value='Ourense'>Ourense</option>\
                                <option value='Palencia'>Palencia</option>\
                                <option value='Pontevedra'>Pontevedra</option>\
                                <option value='Salamanca'>Salamanca</option>\
                                <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>\
                                <option value='Segovia'>Segovia</option>\
                                <option value='Sevilla'>Sevilla</option>\
                                <option value='Soria'>Soria</option>\
                                <option value='Tarragona'>Tarragona</option>\
                                <option value='Teruel'>Teruel</option>\
                                <option value='Toledo'>Toledo</option>\
                                <option value='Valencia'>Valencia</option>\
                                <option value='Valladolid'>Valladolid</option>\
                                <option value='Vizcaya'>Vizcaya</option>\
                                <option value='Zamora'>Zamora</option>\
                                <option value='Zaragoza'>Zaragoza</option>\
                            </select>\
                            ");
        $.each($('select').children(),function(){
            
            if($(this).attr("value")== provincia){
                $(this).attr('selected','');
            }
        });

        var email = $("#email").text();
        $('#email').empty();
        $('#email').append("<input class='form-control' type='text' name='email' placeholder='" + email + "' value='"+email+"'>");
        
        var sexo = $("#sexo").text();
        $('#sexo').empty();
        $('#sexo').append("<div class='radio' class='sexo'>\
                                <label>\
                                    <input type='radio' name='sexo' id='mujer' value='mujer'>\
                                    Mujer\
                                </label>\
                            </div>\
                            <div class='radio'  class='sexo'>\
                                <label>\
                                    <input type='radio' name='sexo' id='hombre' value='hombre'>\
                                    Hombre\
                                </label>\
                            </div>\n\
");
        $.each($('input[name=sexo]'),function(){
            
            if($(this).attr("value")== sexo){
                $(this).prop("checked", "checked");
            }
        });
        var profesion = $("#profesion").text();
        $('#profesion').empty();
        $('#profesion').append("<input class='form-control'  type='text' name='profesion' placeholder='" + profesion + "'value='"+profesion+"'>");

        $('.EditaPerfil').empty();
        $('.EditaPerfil').append("<a name='botonFinalEdita' id='botonFinalizaEdita' class='btn btn-lg botonesFeed'  style='margin-top:25px;margin-left:20px;'>Guardar Cambios</a><a name='botonCancela' id='botonCancelaE' class='btn btn-lg botonesFeed' style='margin-top:25px;margin-left:5px;'onclick='cancelaEdicion()'>Cancelar</a>");

        $('.enlaceFoto').click(function() {

            $("#inputNuevo").trigger("click");
        });

        $('#inputNuevo').change(function() {
            var tiempo = new Date();
            var nombreFoto=tiempo.getTime()+'.jpg';
            
            $.ajaxFileUpload
                    (
                            {
                                url: 'ajax_fileupload.php?id_file=fotoNueva&destino=img_db/'+ nombreFoto+".jpg",
                                secureuri: false,
                                fileElementId:"fotoNueva",
                                dataType: 'json',
                                success: function(data)
                                {
                                    if (data == 1)
                                    {
                                        alert(data);
//                                        imgSubida(nombre);
                                    }
                                    else
                                    {
                                        alert(data);
//                                        imgSubida("-1");
                                    }
                                }
                            }
                    )
        })
         $('#botonFinalizaEdita').click(function() {
             
            
             var nombreForm = $("input[name=nombre]").val();
             var apellidosForm= $("input[name=apellidos]").val();
             var provinciaForm = $("select[name=provincia]").val();
             var emailForm = $("input[name=email]").val();
             var sexoForm = $("input[name=sexo]").val();
             var profesionForm = $("input[name=profesion]").val();
             var id=$("input[name=id]").val();
             
             $.ajax({
		            type : "POST",
		            url : "modificaDatosPersonales.php",
		            data : "nombre="+nombreForm+"&apellidos="+apellidosForm+"&provincia="+provinciaForm+"&email="+emailForm+"&sexo="+sexoForm+"&profesion="+profesionForm+"&id="+id,
		            success : function(data) 
					{
		                if (data==1)
		                {
		                   
                                   window.location.href="index.php?p=home&error=3";
		                }
		                else if(data==0)
		                {
		                    
                                    window.location.href="index.php?p=home&error=4";
		                }
                                else{
                                    
                                    window.location.href="index.php?p=home&error=5";
                                }
		            }
		        });
    });
   
    });

   
   $('.basura').click(function() {
        var ids=$(this).attr('id').split(",");
       var idUsuario=ids[0]; 
      
       var idServicio=ids[1];
       
        $.ajax({
		            type : "POST",
		            url : "ajax_eliminaServicio.php",
		            data : "idServicio="+idServicio+"&idUsuario="+idUsuario,
		            success : function(data) 
					{
                                            
		                if (data==1)
		                {
		                   window.location.href="index.php?p=home&error=12";
                                   
		                }
		                else if(data==0)
		                {
		                    
                                    window.location.href="index.php?p=home&error=8";
		                }
                                else{
                                    
                                    window.location.href="index.php?p=home&error=9";
                                }
		            }
		        });
    });

    $("#sectoresAñade").change(function() {
       
        $('#serviciosAñade').empty();
        

        var sector = $("#sectoresAñade").val();

        $.ajax({
            type: "POST",
            url: "ajax_buscarServicios.php",
            data: "sector=" + sector,
            dataType: 'json',
            success: function(datos)
            {
                if (datos) {
                    
                    $.each(datos, function(ind, elem) {

                        $('#serviciosAñade').append("<option value='" + elem + "'>" + elem + "</option>");

                    })
                }
            }
        });
    });
    
    $("#botonAñadeServicios").click(function() {
        $('#ultimo').empty();
         alert($("#serviciosAñade").val());
        if($('#descripcionCortaAñade').val()!= "" && $("#sectoresAñade").val()!="" && $("#serviciosAñade").val()!=""){
          
           $('#formServicios').submit();

              
        }
        else{
            $('#ultimo').append('<span style="color:red;">** Debe rellenar todos los campos.</span>');
        }
    });
    
    $(".Corta").click(function() {
        var ids=$(this).attr('id').split(",");
       var idUsuario=ids[0]; 
       var idServicio=ids[1];
       
        var corta= $('#cajaCorta').text();
        $('#cajaCorta').empty();
        $('#cajaCorta').append('<input type="text" class="form-control" name="descCorta" placeholder="'+corta+'" style="margin:5px;width:80%"><span id="botonEditaCorta" style="margin-left:20px;cursor: pointer;text-decoration: underline;" onclick="modificaCorta()">Guardar cambios</span><input type="hidden" name="id" value="'+idUsuario+'"><span id="botonCancelaDes" style="margin-left:20px;cursor: pointer;text-decoration: underline;"onclick="cancelaEdicion()">Cancelar</span><input type="hidden" name="id" value="'+idUsuario+'"><input type="hidden" name="servicio" value="'+idServicio+'">');
        $('.Corta').remove();
    });
    
     $(".Larga").click(function() {
        var larga= $('#cajaLarga').text();
        var ids=$(this).attr('id').split(",");
       var idUsuario=ids[0]; 
       var idServicio=ids[1];
       
        $('#cajaLarga').empty();
        $('#cajaLarga').append('<textarea type="text" class="form-control" name="descLarga" rows="4" cols="50" style="margin:5px;width:80%" id="descLarga">'+larga+'</Textarea><span id="botonEditaLarga" style="margin-left:30px;cursor: pointer;text-decoration: underline;" onclick="modificaLarga()">Guardar cambios</span><span id="botonCancelaDes" style="margin-left:20px;cursor: pointer;text-decoration: underline;"onclick="cancelaEdicion()">Cancelar</span><input type="hidden" name="id" value="'+idUsuario+'"><input type="hidden" name="servicio" value="'+idServicio+'">');
        $('.Larga').remove();
    });
    
    
});


