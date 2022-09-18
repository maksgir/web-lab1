<?php

date_default_timezone_set('UTC');

function check_hit($x, $y, $r)
{
    $triangle_hit = false;
    $circle_hit = false;
    $square_hit = false;

    if (($x <= 0 && $x >= -$r / 2) && ($y <= $x + $r / 2) && ($y >= 0 && $y <= $r / 2)) {
//        echo ("триугольничек");
        $triangle_hit = true;
    }

    if ((($x ** 2 + $y ** 2) <= $r ** 2 / 4) && ($x <= 0 && $x >= -$r / 2) && ($y <= 0 && $y >= -$r / 2)) {
//        echo ("круглик");
        $circle_hit = true;
    }

    if (($x >= 0 && $x <= $r) && ($y <= 0 && $y >= -$r / 2)) {
//        echo ("прямоуглик");
        $square_hit = true;
    }

    return $triangle_hit || $circle_hit || $square_hit;
}


$x = $_POST["x"];
$y = $_POST["y"];
$r = $_POST["r"];


exit(check_hit($x, $y, $r) ? "попал" : "не попал");
?>