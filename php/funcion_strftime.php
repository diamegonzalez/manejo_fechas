<?php
    echo("***************************"."<br>"."****FUNCION STRFTIME****"."<br/>"."***************************"."<br>");

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    setlocale(LC_TIME,'spanish');
    echo("<h1>".strftime("Ejemplo1: %A, %d de %B de %Y")."<h1>");
?>