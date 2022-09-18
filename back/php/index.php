<?php
include 'validator.php';

date_default_timezone_set('UTC');

function check_hit($x, $y, $r): bool
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

$start = microtime(true);
$validator = new Validator;

if (isset($_POST["x"]) && isset($_POST["y"]) && isset($_POST["r"])) {
    if ($validator->validate($_POST["x"], $_POST["y"], $_POST["r"])) {
        $x = intval($_POST["x"]);
        $y = floatval($_POST["y"]);
        $r = intval($_POST["r"]);
        $timezone = $_POST["timezone"];
        $current_time = date("H:i:s", time() - $timezone * 60);

        $checked_hit = check_hit($x, $y, $r) ? "TRUE" : "FALSE";

        $finish_time = number_format(microtime(true) - $start, 8, ".", "") * 1000000;

        exit("
            <tr>
                <th class=\"result\">$x</th>
                <th class=\"result\">$y</th>
                <th class=\"result\">$r</th>
                <th class=\"result\">$current_time</th>
                <th class=\"result\">$finish_time</th>
                <th class=\"result\">$checked_hit</th>
            </tr>");
    } else {
        exit("Сервер получил некорректные данные для проверки");
    }
}
?>