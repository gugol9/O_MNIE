<?php

function pole_kwadratu($a)
{
    
    $pole = $a * $a;  
    return $pole;
}

function pole_prostokata($a, $b)
{
    $pole = $a * $b;
    return $pole;
}

function pole_trojkata($a, $h)
{
    $pole = 0.5 * $a * $h;
    return $pole;
}

function pole_kola($r){
    $pole = 3.14 * $r^2;
    return $pole;
}

?>