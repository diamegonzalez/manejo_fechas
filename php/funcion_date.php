<?php
    echo("**********************"."<br>"."****FUNCION DATE****"."<br>"."**********************"."<br>"."<br>");

    $prueba= date("Y/m/d");
    echo("Hoy es: ".date("d/m/Y"));
    echo("</br>");

    if($prueba < "2020/11/01"){
        echo("Sitio web en mantenimiento hasta el 01/11/2020");
    } else {
        echo("¡Bienvenido a nuestro sitio!");
    }
?>