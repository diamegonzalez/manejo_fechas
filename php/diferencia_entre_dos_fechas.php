<?php
    echo("***************************************"."<br>"."****DIFERENCIA ENTRE DOS FECHAS****"."<br>"."***************************************");

    function dias_restantes($fecha_final)
    {
        $fecha_actual= date("Y-m-d");
        $s= strtotime($fecha_final)-strtotime($fecha_actual);
        $d= intval($s/86400);

        echo ("Dias restantes hasta la fecha $fecha_final:$d");
    }




    echo("<p> Hora Actual: </p>");
    $fecha_actual= localtime(time(),1);
    $anio_actual= $fecha_actual['tm_year']+ 1900;
    $mes_actual= $fecha_actual['tm_mon'] + 1; $dia_actual= $fecha_actual['tm_mday'] - 1;
    echo("<h1>Hoy es el $dia_actual/$mes_actual/$anio_actual.<h1>");




    echo("<br>"."<h4> Fecha Actual en español: </h4>");
    function fecha_actual(){
        $week_days = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
        $months= array("", "Enero", "Febrero", "Marzo", "Äbril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $year_now= date("Y");
        $month_now= date("n");
        $day_now= date("m");
        $week_day_now= date("w");
        $date= $week_days[$week_day_now].", ".$day_now." de ".$months[$month_now]."de ".$year_now;
        echo $date;
    }
    
    fecha_actual();
?>