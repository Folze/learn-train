<?php

function findFactorial($number)
{
    $result = 1;
    for ($i = $number;$i > 1;$i--) {
        $result *= $i;
    }
    return $result;
}

echo findFactorial(8);



$array = ["one","two","three","four"];
foreach ($array as $arr) {
    echo $arr . '\n';
}

function checkEvenNumber($num)
{
    if ($num % 2 === 0) {
        echo "Число четное";
    } else {
        echo "Нечетное";
    }
}


checkEvenNumber(2);
checkEvenNumber(3);

$num1 = $argv[1];
$num2 = $argv[2];
$operation = $argv[3];
function calculator($num1, $num2, $operation)
{
    switch ($operation) {
        case "+":
            return  $num1 + $num2;
        case "-":
            return  $num1 - $num2;
        case "*":
            return  $num1 * $num2;
        case '/':
            if ($num1 == 0 && $num2 == 0) {
                return 'Ошибка:Деление на ноль!';
            }
            return  $num1 / $num2;
        default:
            return "Неизвестная операция \n";
    }
}
echo calculator($num1, $num2, $operation);


function checkName($name): string
{
    if (strlen($name) > 5) {
        return 'Длинное имя';
    } else {
        return 'Короткое имя';
    }
}
checkName('Maksim');
