<?php
#Упорядоченые масивы
echo "<h3>Упорядоченые масивы:</h3>";
$arr = array(112, 21, 31, 41, 51, 61, 71);

$arr1[] = 11;
$arr1[] = 12;
$arr1[] = 13;
echo "Первый масив:";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "\t";
}
echo "<br>";
echo "Первый масив:";
foreach ($arr1 as $item) {
    echo "$item\t";
}

#асоциативный масив
echo "<h3>Асоциативные масивы:</h3>";
$arr2 = array(
    'phone' => 'Apple', 
    'PC' => 'Microsoft',
    'TV' => 'Samsung'
);

$fr['KIVI'] = 'kivi';
$fr['ORANGE'] = 'orange';
$fr['BANANA'] = 'banana';

$veg['TOMATO'] = 'tomato';
$veg['POTATO'] = 'potato';
$veg['CUCUMBER'] = 'cucumber';

echo "Третий масив: ";
print_r($arr2);

$prod = array(
    'fruits' => $fr,
    'vegetable' => $veg
);

echo "<br>";

echo "Двойной асоциативный  масив: ";
print_r($prod);
echo "<br>";
echo "<h5>Двойной асоциативный  масив перебор через foreach </h5>";
foreach ($prod as  $clas => $item) {
    echo $clas . ": ";
    foreach ($item as $item1) {
        echo $item1;
        if ($item1 != end($item)) {
            echo ",\t";
        } else {
            echo ';';
        }
    }
    echo "<br>"; 
}

function Add($a, $b, $c, $v)
{
    return ($a + $b + $c + $v);
}
$a = array(1, 6, 7, 8);
$b = 2;
$c = 3;
echo Add(...$a) . "<br>";

$r = range(0, 50, 25);
foreach ($r as $item) {
    echo $item . ":";
}
echo "<br>//////////////////////////////////////////////////<br>";

$firstarr = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
$i = 0;
while ($i < count($firstarr)) {
    echo $firstarr[$i] . "\t";
    $i++;
}
echo "<br>/////////////////////////////////////////////////<br>";

do {
    echo $firstarr[0] . "\t"; //отработет как минимум один раз, даже при невыполнении условия в блоке while 
} while (false);

$foo = function ($item) {
    return strval($item * 5);
};
$secarr = array_map($foo, $firstarr);
print_r($secarr);
var_dump($secarr[0]);
echo "<br>";
echo "<br>///////////////////////фильтр по ключу//////////////////////////<br>";
$key = array_filter($secarr, function ($item) {
    return $item < 3; 
}, ARRAY_FILTER_USE_KEY);
print_r($key);
echo "<br>";
echo "<br>///////////////////////фильтр по значению//////////////////////////<br>";
$key = array_filter($secarr, function ($item) {
    return $item < 30; 
}, ARRAY_FILTER_USE_KEY);
print_r($key);

$stringarr = array('hello ', 'world ', 'HELLO'=>'friend', '!');
echo "<br><br>";    

function Str($str, $i) 
{
    return $str . $i;
};

$s = array_reduce($stringarr, "Str", 'Hey, ');
echo $s;
echo "<br>/////////////////////////////////////////////<br>";
var_dump($s);
echo "<br>////////////////////////////////////////////////<br>";
$r = array_reduce($secarr, function ($c, $i) {
    return $c + $i;
}, 10);
var_dump($r);
echo "<br>////////////////////////////////////////////////<br>";
array_walk($stringarr, function ($i, $k) {
    //return $i = $i . '*';
    echo $i . '_';
});
var_dump($stringarr);
$mergArr = array_merge($stringarr, $secarr);
print_r($mergArr);
echo "<br>////////////////////////////////////////////////<br>";
$r = array_fill_keys($secarr, '.');
print_r($r);

$secarr = array(65, 65, 21, 35, 86, 1, 4, 68);
echo "<br>////////////////////////////////////////////////<br>";
print_r($secarr);

usort($secarr, function($prev, $next) { 
if($prev == $next) {
    return 0;
} 
return ($prev < $next) ? -1 : 1;  
});
echo "<br>/////////////////////g///////////////////////////<br>";
print_r($secarr);