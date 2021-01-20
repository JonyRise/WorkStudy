<?php
 

function Foo()
{   
    $fo=fopen("text.txt", 'r+');
   
    while (!feof($fo)) {
    fseek($fo,0,SEEK_CUR);
    yield fgets($fo);
    }
    fclose($fo);
}

foreach(Foo() as $item) {
    echo $item, "<br>";
}

$fo=fopen("text.txt", 'a+');
fwrite($fo, "\nHELLO");
fputs($fo," WORLD!");
echo"===================================================<br>";
$str=file_get_contents("text.txt");
echo $str;
//file_put_contents("text.txt", "<br>WorkStudy");