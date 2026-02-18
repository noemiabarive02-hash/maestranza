<?php
    include "vista/cabecera/cabecera.php";

    if (isset($_GET["url"])){
        $ruta=$_GET["url"];
        if ($ruta=="inicio" || $ruta=="nosotros"){
            include "vista/modulos/".$ruta.".php";
        } 
        else {
            include "vista/modulos/404.php";
        }
    }else {
        include "vista/modulos/inicio.php";
    }
    include "vista/foooter/footer.php";