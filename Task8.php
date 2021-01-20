<?php
class People
{
    protected string $name;
    private int $age;

    
    public function __construct(string $name = 'noname', int $age = 0)
    {
        $this->name = $name;
        $this->age = $age;    
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name) 
    {
        if (strlen($name) <= 10) {
            $this->name = $name;
        } else {
            throw new Exception("So long name");
        }
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setAge(string $age) 
    {
        if (strlen($age) > 0) {
            $this->age = $age;
        } else {
            throw new Exception("NOT CORECT AGE");
        }
    }

    public function printInfo()
    {
        echo "Name:" . $this->name . ", Age:" . $this->age;
    }

    public function helloUser()
    {
        echo "<br>Hello $this->name";
    }
}

class Employer
extends People
{

    public string $company;

    function __construct(string $company, string $name, int $age)
    {
        $this->company = $company;
        parent::__construct($name, $age);
    }
    function printInfo()
    {
        parent::printInfo();
        echo "Company" . $this->company . "<br>";
    }
    public function helloUser()
    {
        echo "<br>Hi $this->company<br>";
    }
}

abstract class AbstractUser
{
    public $name;
    public $login;
    abstract public function printUser();
}

class Student 
extends AbstractUser
{
    public function printUser()
    {
        echo "Студента зовут: $this->name<br>";
    }
    public static $variable1 = 10;
    static function mullFunct($var1, $var2)
    {
        return $var1 * $var2;
    }
}

class Teacher 
extends AbstractUser
{
    public int $salary;
    public function printUser()
    {
        echo "Учителя зовут: $this->name и он зарабатывает $this->salary<br>";
    }
}

interface Team
{
    public function printMember();
    public function countScore($val);
}

class Player
implements Team
{
    public string $status;
    public int $score;
    public function printMember()
    {
        echo "This player is $this->status, him score: ";
    }

    public function countScore($val)
    {
        return $this->score * $val;
    }
    function __construct(string $status, int $score)
    {
        $this->status = $status;
        $this->score = $score;
    }
}
//////////////////////Наследование////////////////////
$first = new People();
$first->setName("Ivan");
$first->PrintInfo();
$first->helloUser();

echo "<br>";
$empl = new Employer("Google", "John", 25);
$empl->printInfo();
$empl->helloUser();

//////////////////////Абстрактный клас////////////////////
$stud = new Student;
$stud->name = "VAsya";
$stud->printUser();
echo  Student::mullFunct(4, 6) . "<br>"; //вызов статической функции
echo  Student::$variable1 . "<br>"; //вызов статического атрибута

$teac = new Teacher;
$teac->salary = 1000;
$teac->name = "Vasily Mikhailovych";
$teac->printUser();
//////////////////////Интерфейс////////////////////
$player = new Player("Coach", 35);
$player->printMember();
echo $player->countScore(3);
define("PI", 3.14); //инициализация константы
echo "<br>";
echo PI;
