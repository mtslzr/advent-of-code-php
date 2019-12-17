<?php

include "2018/day1/day1.php";
include "2019/day1/day1.php";
include "2019/day2/day2.php";

switch($argv[1]) {
    case "2018":
        switch($argv[2]) {
            case "day1":
                $day = new day118;
                break;
            default:
                errorMsg();
        }
        break;
    case "2019":
        switch($argv[2]) {
            case "day1":
                $day = new day1;
                break;
            case "day2":
                $day = new day2;
                break;
            default:
                errorMsg();
        }
        break;
    default:
        errorMsg();
}

$day->part1();
$day->part2();

function errorMsg() {
    echo "Usage: php index.php <year> <day>";
    exit();
}

?>