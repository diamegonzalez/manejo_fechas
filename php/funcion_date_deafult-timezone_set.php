<?php
    echo("*****************************************"."<br>"."*FUNCION DATE_DEFAULT_TIMEZONE_
    SET*"."<br>"."*****************************************"."<br>");

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    echo("<h1>Hora Argentina: ".date('h:i:m')."<h1>");
?>