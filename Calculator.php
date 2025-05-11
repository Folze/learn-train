<?php

class Calculator
{
    private $num1;
    private $num2;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add()
    {
        return $this->num1 + $this->num2;
    }

    public function subtract()
    {
        return $this->num1 - $this->num2;
    }

    public function multiply()
    {
        return $this->num1 * $this->num2;
    }

    public function divide()
    {
        return ($this->num2 == 0) ? 'Делить на ноль нельзя' : $this->num1 / $this->num2;
    }

    public function checkEven()
    {
        return ($this->num1 % 2 == 0 && $this->num2 % 2 == 0) ? 'Четное число ' : 'Нечетное';
    }
}
$calc = new Calculator(10, 5);

// Вызываем методы
echo $calc->add() . PHP_EOL;
echo $calc->subtract() . PHP_EOL;
echo $calc->multiply() . PHP_EOL;
echo $calc->divide() . PHP_EOL;
echo $calc->checkEven() . PHP_EOL;
