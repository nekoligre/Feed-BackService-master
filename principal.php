<?php

if(isset($_SESSION['id'])){
   
    header("Location:home");
}else{
?>
<div class= "container text-center" style="height: 430px;">
<!-- Filosofia FeedBack Sevice -->
<div class="row">
    <div id="colum1" class="col-md-9 col-xs-12 col-lg-9">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
        <p>'Feed-Back Service' es una Aplicación Web que nos permite acercanos al trueque de una forma más actual. Gracias a la magnifica red social que existe hoy en dia en internet, podemos aprovecharnos de los servicios de los demás, a la par que aportamos los nuestros, facilitando cubrir necesidades propias y las de otros sin necesidad de una moneda de intercambio. Este concepto no se encuentra muy introducido en la sociedad de hoy en dia, donde todo cuesta mucho y nos da la sensación de que unos servicios son más importantes que otros. </p>
            <p>En Feed-Back, creemos que todas las necesidades a cubrir son igual de importantes, ya sea una receta médica, un proyecto arquitectónico o el cuidado de una persona mayor. Este concepto nos ayuda a valorarnos a todos por igual, ya que todos pertenecemos a esta sociedad y todos tenemos servicios que cubrir y servicios que ofrecer.</p>
            <p>Con este proyecto pretendemos acercarnos más los unos a los otros y crear un sistema alternativo donde podamos cubrir necesidades, siendo unos buenos profesionales, como siempre, a pesar de que nos encontremos en una situación económica desfavorable o sin trabajo.</p>
            <p>Actualmente existe mucha gente que, aunque posee los conocimientos, la experiencia o la titulación necesaria para ejercer una profesion específica, no encuentra la oportunicad para realizarse. Por otro lado existe un gran numero de gente que precisa de esos servicios, pero que, por diferentes causas, no se encuentra al alcance de poder adquirirlos de la manera convencional. A su vez, los primeros precisan de otros servicios para los cuales no están capacitados. Nosotros nos preguntamos por tanto...¿Dónde esta el problema?¿Por qué tanta gente no puede realizarse profesionalmente, existiendo mucha gente que no puede permitirse esos servicios pero que los necesita igualmente, pudiendo aportar otros igual de necesarios?</p>
            <p>Ayudanos a mejorar nuestra sociedad y crear un Feed-Back social donde no estemos tan espuestos a las necesidades de unos pocos... Entre nosotros es posible, y podemos hacerlo real!</p>
            </div>
        <div id="botonRegistro" class="col-md-12 col-xs-12 col-lg-12">
            <button class="btn btn-primary btn-lg botonesFeedStrong" data-toggle="modal" data-target="#myModal">
                Registrate!
            </button>
        </div>
        </div>
    </div>

    <!-- Login -->
    <div id="colum2" class="col-md-3 col-xs-12 col-lg-3">
        <form role="form" action="login.php" method="POST" id="formularioLogin">
            <div class="form-group">
                <input type="text" class="form-control" id="alias" placeholder="Introduzca su Alias" name="alias">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
            </div>
            <div class="checkbox">
                <label>
                    <input  id="condiciones" type="checkbox" style="text-align: left;"> Acepto las <a href="http://www.google.es/intl/es/policies/terms/regional.html" target="_blank">condiciones de uso.</a>
                </label>
            </div>
            <div id="avisoLogin"></div>
            <button type="button" id="botonLogin" class="btn btn-default botonesFeed">Entrar</button>
        </form>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Únete a FeedBack Service.</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="registro.php" method="POST" id="formulario">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <input type="text" class="form-control" id="aliasRegistro" placeholder="Alias" name="aliasRegistro">
                        <div id="avisoAlias">

                            <input type="password" class="form-control"  id="passRegistro" placeholder="Contraseña" name="passRegistro">
                            <input type="password" class="form-control"  id="passRegistro2" placeholder="Repita la Contraseña" name="passRegistro2"><br/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
                            <input type="text" class="form-control" id="profesion" placeholder="Profesion" name="profesion">
                            <label>Sexo:</label>
                            <div class="radio" class="sexo">
                                <label>
                                    <input type="radio" name="sexo" id="mujer" value="mujer">
                                    Mujer
                                </label>
                            </div>
                            <div class="radio"  class="sexo">
                                <label>
                                    <input type="radio" name="sexo" id="hombre" value="hombre">
                                    Hombre
                                </label>
                            </div>
                            <input type="text" class="form-control" id="fechaNac" placeholder="Fecha de nacimiento" name="fechaNac">
                            <input type="hidden" class="form-control" id="fechaNacBuena" name="fechaNacBuena">
                            <select class="form-control" id="provincia" name="provincia">
                                <option selected="" value="null">Seleccione una provincia</option>
                                <option value="A Coruña">A Coruña</option>
                                <option value="Álava">Álava</option>
                                <option value="Albacete">Albacete</option>
                                <option value="Alicante">Alicante</option>
                                <option value="Almería">Almería</option>
                                <option value="Asturias">Asturias</option>
                                <option value="Ávila">Ávila</option>
                                <option value="Badajoz">Badajoz</option>
                                <option value="Baleares">Baleares (Illes)</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Burgos">Burgos</option>
                                <option value="Cáceres">Cáceres</option>
                                <option value="Cádiz">Cádiz</option>
                                <option value="Cantabria">Cantabria</option>
                                <option value="Castellón">Castellón</option>
                                <option value="Ceuta">Ceuta</option>
                                <option value="Ciudad Real">Ciudad Real</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Cuenca">Cuenca</option>
                                <option value="Girona">Girona</option>
                                <option value="Granada">Granada</option>
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Guipúzcoa">Guipúzcoa</option>
                                <option value="Huelva">Huelva</option>
                                <option value="Huesca">Huesca</option>
                                <option value="Jaén">Jaén</option>
                                <option value="La Rioja">La Rioja</option>
                                <option value="Las Palmas">Las Palmas</option>
                                <option value="León">León</option>
                                <option value="Lleida">Lleida</option>
                                <option value="Lugo">Lugo</option>
                                <option value="Madrid">Madrid</option>
                                <option value="Málaga">Málaga</option>
                                <option value="Melilla">Melilla</option>
                                <option value="Murcia">Murcia</option>
                                <option value="Navarra">Navarra</option>
                                <option value="Ourense">Ourense</option>
                                <option value="Palencia">Palencia</option>
                                <option value="Pontevedra">Pontevedra</option>
                                <option value="Salamanca">Salamanca</option>
                                <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                                <option value="Segovia">Segovia</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Soria">Soria</option>
                                <option value="Tarragona">Tarragona</option>
                                <option value="Teruel">Teruel</option>
                                <option value="Toledo">Toledo</option>
                                <option value="Valencia">Valencia</option>
                                <option value="Valladolid">Valladolid</option>
                                <option value="Vizcaya">Vizcaya</option>
                                <option value="Zamora">Zamora</option>
                                <option value="Zaragoza">Zaragoza</option>
                            </select>
                        </div>
                        <div class="checkbox" class="terminos">
                            <label>
                                <input type="checkbox" id="terminos" name="terminos">
                                Acepto los <a target="_blank" href="https://www.youtube.com/static?gl=ES&template=terms&hl=es">Términos y condiciones.</a>
                            </label>
                        </div>
                        <div id="ultimo"></div>
                        <button type="button" class="btn btn-default" id="boton">Registrame!</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php } ?>