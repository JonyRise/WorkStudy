<?php
    #1
    //integer цулочисленый тип данных
    $_a = 10;
    $b = 15;
    settype($c, "integer");
    $_c = $a + $b;
    //double  плавающей запятой
    $first = 1.3;
    $sec = 2.1;
    $div_h = $first / $sec;

    if($div_h <= 0.1) {
        echo $div_h;
    }else {
        echo "NULL<br>";
    }

    //boolean
    $h = true;
    $h1 = false;
    $stringFirst = "Hello world!<br>";
    if($h) {
        echo $stringFirst;
    }

    #2 Функции преобразования строки и типов данных между собой.
    $templ = (binary) "hello";

    /*???????kkkkkkkkkkkkkkkkkhhhhhhhhhhhhhhhhhh
    sssssssssssssssssssssssssssssssssssssssssssssf*/


    $templ = b"hello";
    var_dump($templ);
    echo "<br>///////////////////////////////////////<br>";

    $var = 15.6;
    var_dump($var);
    echo "<br>///////////////////////////////////////<br>";

    $var = (int)$var;
    var_dump($var);

    echo"<br>///////////////////////////////////////<br>";

    $var = (string)$var;
    var_dump($var);
    echo "<br>///////////////////////////////////////<br>";

    $var = "1332" . $var;
    var_dump($var);
    echo "<br>///////////////////////////////////////<br>";

    $var = intval($var) ;
    var_dump($var);
    strval($var);
    var_dump($var);

    echo "<br>///////////////////////////////////////<br>";
    $var = $var.".45gh";
    echo "$var-->";
    $var = floatval($var);
    var_dump($var);

    echo time()."<br>";
    echo date('Y-m-d') . "<br>";
    echo date('Y-m-d',strtotime("+1 Week")). "<br>";
    echo date('l d D N z') . "<br>";
    echo date(
        'c l',
         mktime(1, 12, 3, 4, 5, 2019)
    );
 
