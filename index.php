<?php

function findFactorial($number)
{
    $result = 1;
    for ($i = $number;$i > 1;$i--) {
        $result *= $i;
    }
    return $result;
}

echo findFactorial(3) . PHP_EOL;



$array = ["one","two","three","four"];
foreach ($array as $arr) {
    echo $arr . PHP_EOL;
}

function checkName($name): string
{
    if (strlen($name) > 5) {
        return 'Длинное имя';
    } else {
        return 'Короткое имя';
    }
}
checkName('Maksim');
