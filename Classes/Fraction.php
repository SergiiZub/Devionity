<?php


class Fraction
{
    public $numerator;
    public $de_numerator;

    public function __construct(int $numerator, int $de_numerator)
    {
        $this->numerator = $numerator;
        $this->de_numerator = $de_numerator;
    }
    public function dec(){
        if ($this->de_numerator != 0){
            return round($this->numerator / $this->de_numerator, 3);
        }
        else return $this->numerator;
    }
    
    public static function sum($arr){
        $a = new self($arr['0'], $arr['1']);
        $b = new self($arr['2'], $arr['3']);
        return $a->dec() + $b->dec();
    }
    
    public static function sub($arr){
        $a = new self($arr['0'], $arr['1']);
        $b = new self($arr['2'], $arr['3']);
        return $a->dec() - $b->dec();
    }
    
    public static function mult($arr){
        $a = new self($arr['0'], $arr['1']);
        $b = new self($arr['2'], $arr['3']);
        return $a->dec() * $b->dec();
    }
    
    public static function div($arr){
        $a = new self($arr['0'], $arr['1']);
        $b = new self($arr['2'], $arr['3']);
        if (($b->dec()) != 0){
            return $a->dec() / $b->dec();
        }
        else {
            throw new Exception('На ноль делить нельзя');
        }
    }
}