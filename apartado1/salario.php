<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
const HORA_EXTRA = 12.5;
$dias = [2, 1.5, 0.5, 0, 9, 0, 0];
$contador = 0;
foreach($dias as $hora){
    $contador += $hora *HORA_EXTRA;
}

//for($i=0; $i<count($dias); $i++){
//    $contador += $dias[$i]*HORA_EXTRA;
//}
echo "Esta semana cobrará $contador por las horas extra";
