<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//con un array asociativo (con índices de cadena de texto) con los 5 valores del IBEX que más han subido hoy junto con sus subidas porcentuales.
//        Recorre el array mostrando las claves y sus valores y finalmente, la media de las subidas.

$top5 = ["B.SABADELL" => 2.05,
    "ARCELOR" => 1.20,
    "IAG" => 1.19,
    "REPSOL" => 0.91,
    "BANKINTER"=> 0.73];

$acumulador = 0;
foreach ($top5 as $key => $value) {
    echo "La clave es $key y su valor es $value <br/>";
    $acumulador += $value;
}

$media = $acumulador / count($top5);
//https://www.php.net/manual/en/function.array-sum.php
//$media = array_sum($top5)/count($top5);

echo "La media es $media";

