<?php
//EJERCICIO 1
    $nombre= readLine ("ingrese su nombre \n");
    $apellido= readLine ("ingrese su apellido \n");

    echo ("BIENVENIDO $nombre $apellido \n");

//EJERCICIO 2
    $var1 = readLine("ingrese un número entero \n");
    $var2 = readLine("ingrese otro número entero \n");
    
    $resultado = $var1 + $var2;

    echo ("el resultado de la suma entre $var1 y $var2 es $resultado \n");
//EJERCICIO 3
    $var1 = readLine("ingrese un número entero \n");
    $var2 = readLine("ingrese otro número entero \n");

    $suma= $var1 + $var2;
    $resta= $var1 - $var2;
    $multiplica= $var1 * $var2;
    $divi = $var1 / $var2;

    echo "el resultado de la suma entre $var1 y $var2 es $suma \n";
    echo "el resultado de la resta entre $var1 y $var2 es $resta \n";
    echo "el restulado de la multiplicación entre $var1 y $var2 es $multiplica \n";
    echo "el resultado de la divición entre $var1 y $var2 es $divi \n";
//EJERCICIO 4
    $nombre = readLine("ingrese nombre del empleado \n");
    $sueldo = readLine("ingrese el salario base \n");

    $aumento= ($sueldo*0.15);
    $salarioTotal= $aumento + $sueldo;

    echo "Hola señor/a $nombre, su salario base es $sueldo, el aumento es $aumento, dando como salario total $salarioTotal";
?>
