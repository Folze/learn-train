<?php


interface CalculatorInterface
{
    public function add(): float;
    public function subtract(): float;
    public function multiply(): float;
    public function divide(): float;
    public function getResult(): float;
    public function checkEven(): string;
}

class Calculator implements CalculatorInterface
{
    protected $num1;
    protected $num2;
    protected ?float $lastResult = null;
    protected bool $lastEvenCheck = false;

    public function __construct(int|float $num1, int|float $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception('Только числа!');
        }
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add(): float
    {
        return $this->lastResult = $this->num1 + $this->num2;
    }

    public function subtract(): float
    {
        return $this->lastResult = $this->num1 - $this->num2;
    }

    public function multiply(): float
    {
        return $this->lastResult = $this->num1 * $this->num2;
    }

    public function divide(): float
    {
        $this->lastResult = ($this->num2 == 0) ? throw new DivisionByZeroError('Делить на ноль нельзя') : $this->num1 / $this->num2;
        return $this->lastResult;
    }

    public function checkEven(): string
    {
        $this->lastEvenCheck = $this->num1 % 2 == 0 && $this->num2 % 2 == 0;
        return $this->lastEvenCheck ? 'Четное' : 'Нечетное';
    }

    public function getResult(): float
    {
        if ($this->lastResult === null) {
            throw new Exception('Ни одна операция не была выполнена');
        }

        if ((bool)$this->lastResult) {
            ($this->lastResult == true) ? 'Четное' : 'Нечетное';
        }
        return $this->lastResult;
    }
}
$calc = new Calculator(10, 5);

// Вызываем методы
echo $calc->add() . PHP_EOL;
echo $calc->getResult() . PHP_EOL;
echo $calc->subtract() . PHP_EOL;
echo $calc->getResult() . PHP_EOL;
echo $calc->multiply() . PHP_EOL;
echo $calc->getResult() . PHP_EOL;
echo $calc->divide() . PHP_EOL;
echo $calc->getResult() . PHP_EOL;
echo $calc->checkEven() . PHP_EOL;
echo $calc->getResult() . PHP_EOL;

if ($calc instanceof CalculatorInterface) {
    echo "Класс соответствует интерфейсу!";
}

class ScientificCalculator extends Calculator implements CalculatorInterface
{
    public function power(): float
    {
        return $this->num1 ** $this->num2;
    }

    public function sqrt(): float
    {
        return sqrt($this->num1);
    }
}

$sciCalc = new ScientificCalculator(4, 3);

echo $sciCalc->power() . PHP_EOL;
echo $sciCalc->sqrt() . PHP_EOL;
echo $sciCalc->add() . PHP_EOL;
