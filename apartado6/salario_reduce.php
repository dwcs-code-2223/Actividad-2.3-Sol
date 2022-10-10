<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

const HORA_EXTRA = 12.5;
$dias = [2, 1.5, 0.5, 0, 9, 0, 0];

$salario = array_reduce($dias, "calcularSalarioExtra", 0);


var_dump($salario);

function calcularSalarioExtra(float $acumulador, float $hora):float{
   $acumulador+= $hora*HORA_EXTRA;
   return $acumulador;
}