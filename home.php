<?php

if(!isset($_SESSION['id'])){
   
    header(".");
}else{
?>

<div class= "container text-center">
    <div class="espacio"></div>
    <div class="row ">
        <div class="col-md-2 col-xs-2 col-lg-2 margen">
            <!-- Nav tabs -->
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" id="menuLateral">
                    <li class="active"><a href="#perfil" data-toggle="tab">Tu perfil</a></li>
                    <li><a href="#buscador" data-toggle="tab">Buscador</a></li>
                    <li><a href="#messages" data-toggle="tab">Messages</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>

            </div>
        </div>
        <div id="colum2home" class=" col-md-10 col-xs-10 col-lg-10 tab-content">
            
            <!-- Tab panes -->
            
                <div class="tab-pane active " id="perfil">
                    <?php
                    require("perfil.php");
                    ?>
                </div>
                <div class="tab-pane" id="buscador">
                    <?php
                    require("buscador.php");
                    ?>
                </div>
                <div class="tab-pane" id="messages">
                    <?php
                    ?>
                </div>
                <div class="tab-pane" id="settings">
                    <?php
                    ?>
                </div>
           
        </div>
    </div>
    <div class="margen"></div>

</div>

<?php }?>