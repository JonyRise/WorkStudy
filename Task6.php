<?php
class Week
implements Iterator
{
    public $day_of_week = array(
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    );
    static function StatFoo() 
    {
        BreakLine("=");
        echo 13;
    }

    function current()
    {
        return current($this->day_of_week);
    }
    function key()
    {
        return key($this->day_of_week);
    }
    function next()
    {
        next($this->day_of_week);
    }
    function rewind()
    {
        reset($this->day_of_week);
    }
    function valid()
    {
        return null !== key($this->day_of_week); 
    }
}

class Year
implements IteratorAggregate
{
    public $month = array(
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November'
    );
    function __invoke(int $num_of_month)
    {
        if ($num_of_month <= 12 && $num_of_month > 0) {
            echo $this->month[$num_of_month];
        }
    }
    function getIterator()
    {
        $i = 0;
        while(($this->month[$i]) !== NULL) {
            yield $this->month[$i];
            $i++;
        }
    }
    
}

function BreakLine(string $a = "")
{
    echo "<br>";
    for($i = 0; $i < 100; $i++) {
        echo "$a";
    }
    echo "<br>";
}
$week1 = new Week();
echo "<h3>Дни недели</h3>";
foreach ($week1 as $key => $item) {
    echo $item, "\t";
}

echo "<h3>Месяца года</h3>";
$year = new Year();
foreach ($year as $item) {
    echo $item, "\t";
}


function Foo()
{
    $a = $b = 1;
    while (true) {
        yield $a;
        [$a, $b] = [$b, $a + $b];
    }
} 
$i = 0;
foreach(Foo() as $item) {
    echo $item . "\t";
    $i++;
    if ($i > 10) {break;}
}
BreakLine("=");
////////////////////////////////////////////////////////////////////////
$fun = function() {echo "hello world!";};
$fun();
if (is_callable($fun)) {
    echo "-Function Is Callable";
}

$str = "Week::StatFoo";
$str();
if (is_callable($str)) {
    echo "-Function Is Callable";
}
call_user_func($str);

if (is_callable(['Week', 'StatFoo'])) {
    echo "-Function Is Callable";
}

BreakLine('=');
$year(4);

if(is_callable($year)) {
    echo "-Function Is Callable";
}





















/*
class Card
{
    public int $val;
    public string $name;

    function __construct(int $v, string $n)
    {
        $this->val = $v;
        $this->name = $n;
    }
    function __toString()
    {
        return $this->val;
    }
}
 echo "<br>////////////////////////////////////////////////<br>";
$arrsuit = array('heart', 'diamond', 'club', 'spade');
$arrface = array(1, 2, 3, 4, 6, 7, 8, 9, 10);

$card_deck = array();

for ($i = 0; $i < count($arrsuit); $i++) {
    for ($j = 0; $j < count($arrface); $j++) {
        
        $var = new Card($arrface[$j], $arrsuit[$i]);
        $card_deck[] = $var;
    }
}
count($card_deck);
$var=0;
$fun = fn($holder, $item) => $holder += intval($item->__toString());
echo array_reduce($card_deck, $fun, 0); */
