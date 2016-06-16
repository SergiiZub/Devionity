<?php


class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;
    public static $count = 0;

    public function __construct($str = 'Car created')
    {
         echo self::$count++;
        echo $str . "<br/>\n";
    }

    public function showBrand(){
        echo $this->brand . "\n";
    }

    public function showModel(){
        echo $this->model . "\n";
    }

    public function setPrice($price){
        $this->price = round($price, 2);
    }

    public function getPrice($true = false){
        if ($true == true){
            return number_format($this->price, 2, ',', ' ');
        }
        else {
            return $this->price;
        }
        
    }
}