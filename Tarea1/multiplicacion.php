<?php

function tabla(int $val)
{
    $res = 0;
    $nota = "<li> Tabla de Multiplicar del $val </li>";
    for ($a = 1; $a <= 10; $a++) {
        $res = $val * $a;
        $nota = $nota . "<li> $val x $a = $res </li>"/*  . "<br>" */;
    }
    return $nota;
}

function tabla10en10(int $val){
    $res = 0;
    $nota = "<li> Tabla de Multiplicar del $val de 10 en 10 hasta el 100</li>";
    $a = 10;
    while($a <= 100) {
        $res = $val * $a;
        $nota = $nota . "<li> $val x $a = $res </li>";
        $a = $a + 10;
    }
    return $nota;
}