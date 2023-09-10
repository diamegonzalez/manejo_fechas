<?php
    echo("**************************"."<br>"."**VALIDACIÓN DE FECHA**"."<br>"."**************************"."<br>");

    $dia= 29;
    $mes= 10;
    $anio= 2020;

    if(checkdate($mes,$dia,$anio)){
        echo("<p>El día $dia/$mes/$anio existe.</p>");
    } else {
        echo("<p>El día $dia/$mes/$anio no existe.</p>");
    }


    $dia=29;
    $mes=10;
    $anio=2019;

    if(checkdate($mes,$dia,$anio)){
        echo("<p>El día $dia/$mes/$anio existe.</p>");
    } else {
        echo("El día $dia/mes/$anio no existe.");
    }
?>