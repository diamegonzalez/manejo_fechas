<?php
    echo("**********************"."<br>"."****FUNCION TIME****"."<br>"."**********************"."<br>"."<br>");

    $hora=time();
    echo("Tiempo: ".$hora);
    
    echo("<br/>");

    $hora=getdate(time());
    echo("Resultado: ".$hora['hours'].":".$hora['minutes'].":".$hora['seconds']);
?>