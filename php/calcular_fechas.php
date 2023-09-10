<?php
    echo("***************************"."<br>"."****CALCULAR FECHAS****"."<br>"."***************************"."<br>"."<br>");

    echo("12 horas"."<br>");
    echo $date=date("d/m/Y H:i:s", strtotime("-12hours"));
    echo("<br/>");echo("<br/>");

    echo("2 Días"."<br>");
    echo $date2=date("d-m-Y H:i:s", strtotime("-2days"));
    echo("<br/>");echo("<br/>");

    echo("1 Año"."<br>");
    echo $date3=date("d-m-Y H:i:s", strtotime("-1years"));
    echo("<br/>");echo("<br/>");

    echo("Proximo Jueves"."<br>");
    echo $date4=date("d-m-Y H:i:s", strtotime("next Thursday"));
    echo("<br>");echo("<br/>");

    echo("Proximo Lunes"."<br>");
    echo $date5=date("d-m-Y H:i:s", strtotime("last Monday"));
    echo("<br/>");echo("<br/>");

    //Descripcion int strtotime(string $hora[,int $ahora])

    echo("Otro ejemplo:"."<br>");

    echo("Ahora"."<br>");
    echo strtotime("now"),"\n";
    echo("<br>");echo("<br/>");

    echo("10 de Septiembre del 2000"."<br>");
    echo strtotime("10 September 2000"),"\n";
    echo("<br>");echo("<br/>");

    echo("Un día mas"."<br>");
    echo strtotime("+1 days"),"\n";
    echo("<br>");echo("<br/>");

    echo("1 semana"."<br>");
    echo strtotime("1 week"),"\n";
    echo("<br>");echo("<br/>");

    echo("Una semana mas, 2 días, 4 horas y 2 segundos"."<br>");
    echo strtotime("+1 week 2 days 4 hours 2 seconds");
    echo("<br/>");echo("<br/>");
    

    echo("Proximo Jueves"."<br>");
    echo strtotime("next Thursday"),"\n";
    echo("<br>");echo("<br/>");

    echo("Ultimo Lunes"."<br>");
    echo strtotime("last Monday"),"\n";
    echo("<br>");

?>