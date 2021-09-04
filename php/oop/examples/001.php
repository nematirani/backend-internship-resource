<?php


class Person
{   # property
    public string $name;

    public function sayHello(): string
    {
        return 'Hello';
    }
}

# encapsulation -> private protected public


$p1 = new Person();

$p1->name = 'john';
// var_dump($p1->sayHello());


# magic method
class Person2
{
    private string $name;

    public function __construct(string $name)
    {
        // $this->name = $name;
        $this->setName($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        // check
        // > 2
        // $#&*
        // ...
        $this->name = $name;
    }
}


$p2 = new Person2('john');
// var_dump($p2->getName());
$p2->setName('doe');
// var_dump($p2->getName());

// self vs static -> lsb
class Person3
{
    public static function john(): string
    {
        var_dump(self::doe());
        return 'john';
    }

    public static function doe(): string
    {
        return 'doe';
    }
}

// var_dump(Person3::john());


class Person4
{
    private static array $people = [];

    public static function addSomeone(string $name)
    {
        self::$people []= $name;
    }

    public static function people(): array
    {
        return self::$people;
    }
}


Person4::addSomeone('john');

// var_dump(Person4::people());

// class object static enccapsulation


// inehritance interface abstract trait namespace ...


class Animal
{
    public function walk()
    {
        return __METHOD__;
    }
}


class Falcon extends Animal
{
    public function fly()
    {
        return __METHOD__;
    }
}


$f1 = new Falcon();
// var_dump($f1->walk());


class Falcon2 extends Animal
{
    public function fly()
    {
        return __METHOD__;
    }

    public function walk()
    {
        return __METHOD__;
    }
}


$f2 = new Falcon2();
// var_dump($f2->walk());


class Falcon3 extends Animal
{
    public function fly()
    {
        return __METHOD__;
    }

    public function walk()
    {
        return __METHOD__ . ' ' . parent::walk();
    }
}

$f3 = new Falcon3();

// var_dump($f3->walk());


class Falcon4 extends Animal
{
    public function fly()
    {
        return $this->walk() . ' ' . __METHOD__;
    }
}

$f4 = new Falcon4();
// var_dump($f4->fly());


interface Car
{
    public function move();
}

interface WarCar extends Car
{
    public function shoot();
}


class Truck implements Car
{
    public function move()
    {
        return 'moving ...';
    }
}

class Tunk implements WarCar
{
    public function move()
    {
        return __METHOD__;
    }

    public function shoot()
    {
        return __METHOD__;
    }
}

// $c2 = new Tunk();
// var_dump($c2->move());
// var_dump($c2->shoot());

abstract class Worker
{
    protected function sayHello()
    {
        var_dump(__METHOD__);
    }

    protected function eatSomething()
    {
        var_dump(__METHOD__);
    }

    protected function sleep()
    {
        var_dump(__METHOD__);
    }

    public function work()
    {
        $this->sayHello();
        $this->doWork();
        $this->eatSomething();
        $this->sleep();
    }

    protected abstract function doWork();
}


class Developer extends Worker
{
    public function doWork()
    {
        var_dump('coding ...');
    }
}


class Teacher extends Worker
{
    public function doWork()
    {
        var_dump('teaching ...');
    }
}


$d = new Developer();
// var_dump($d->work());


$t = new Teacher();
// var_dump($t->work());


// single inheritance

trait SaysHello
{
    public function hello()
    {
        // var_dump($this);
        return 'Hello';
    }
}

trait SaysGoodby
{
    public function by()
    {
        return 'By';
    }
}


class Person5 extends Person2
{
    // use SaysHello, SaysGoodby;
    use SaysHello;
    use SaysGoodby;
}


$p5 = new Person5('John');
var_dump($p5->hello());
var_dump($p5->getName());
var_dump($p5->by());

