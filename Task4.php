<?php
//передача аргумента переменной длины

/**
 * Method sum
 *
 * @param ...$collect  [default info]
 *
 * @return int
 */
function sum(...$collect)
{
    $Sum = 0;
    foreach ($collect as $item) {
        $Sum += $item;
    }
    return $Sum;                //возвращаемый тип идентичен типу переменной Sum
}

$arr = array(1, 2, 3, 4, 5, 6, 7);
$t = 10;
echo sum($arr[1], $t, $arr[5], ...$arr) . "<br>";

// анонимная функция
$fnctn = function (int $var) {
    echo "This tag: $var";      //возвращаемый тип void
};
$fnctn(11.5);
//стрелочная функция
echo "<br>";
$f = fn ($var) => print $var;
$f(255); //передача аргумента в функцию
echo "<br>";
//передача аргумента по умолчанию и агргумента с подсказкой типа в функцию
function sum1(int $t, $var = 10)
{
    return $t + $var;
}


/**
 * Method sum2
 *
 * @param $t  [var gjhgjhgh]
 * @param $var  [explicite description]
 * 
 * @return int
 */

function sum2($t, $var = 10)
{
    return $t + $var;
}


// функции php
$var = '12hkhuh';
var_dump(10);
intval($var);

$a = array(1, 2, 3, 3, 5, 6);
shuffle($a);
print_r($a);
echo count($a);

echo "<br>";

echo array_reduce($a, function ($hold, $item) {
    return $hold += $item;
});

echo "<br>";

echo array_reduce($a, fn ($hold, $item) => $hold += $item);
echo "<br>";
echo next($a);
