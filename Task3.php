<?php
    #Упорядоченые масивы
    echo "<h3>Упорядоченые масивы:</h3>";
    $arr = array(112, 21, 31, 41, 51, 61, 71);

    $arr1[] = 11;
    $arr1[] = 12;
    $arr1[] = 13;
    echo "Первый масив:";
    for($i = 0; $i < count($arr); $i++){
      echo $arr[$i] . "\t";
    }
    echo "<br>";
    echo "Первый масив:";
    foreach($arr1 as $item){
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
    foreach($prod as  $clas => $item){
        echo $clas . ": ";
        foreach($item as $item1){
            echo $item1;
            if($item1 != end($item )){
                 echo",\t";
            }else{
                 echo';';
                }
        }
        echo "<br>"; 
    }
    
    function Add ($a, $b, $c, $v)
    {
        return ($a + $b + $c + $v);
    }
$a= array(1, 6, 7, 8);
    $b = 2;
    $c = 3;
    echo Add(...$a) . "<br>";

    $r= range(0, 50, 25);
    foreach($r as $item){
         echo $item . ":";
    }
