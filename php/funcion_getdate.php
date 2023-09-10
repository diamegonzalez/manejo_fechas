<?php
    echo("**************************"."<br>"."****FUNCIÓN GETDATE****"."<br/>"."**************************"."<br>"."<br>");
    
    $fecha= getDate();
    echo("Día:".$fecha["mday"]."<br/>");
    echo ("Mes:".$fecha["mon"]."<br>");
    
    echo ("Año:".$fecha["year"]."<br/>");
    echo ("Hora:".$fecha["hours"]."<br>");
    echo ("Minutos:".$fecha["minutes"]."<br/>");
    echo ("Segundos:".$fecha["seconds"]."<br/>");
?>