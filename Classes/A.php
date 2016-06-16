<?php


class A
{
    public $bar = 1;
    public $foo = 2;
    public $foobar = 123;

    public function __sleep()
    {
        return array('bar', 'foo');
    }

    public function __wakeup()
    {
        echo 'Awaken';
    }

}

$a = new A;
echo $s = serialize($a) . "\n";
var_dump(unserialize($s));
echo "\n";

class B
{
    public function __invoke($a)
    {
        echo $a . "\n";
    }

}

$a = new B;
$a('Hello'); // Hello