<?php

/*
Exercițiul 4
Creați o clasă abstractă Geom. Clasa are câmpurile a și b. Clasa trebuie să conțină o metodă abstractă getArea. Trebuie moștenită clasa Geom a claselor Rectangle și Circle şi implementată corect metoda getArea pentru ambele clase. În constructorul clasei, trebuie creată parametrizarea, astfel încât în clasa Circle un parametru de intrare să fie mapat în câmpul a și acest câmp se utilizează ca r, în timp ce în clasa Rectangle ambele câmpuri sunt mapate pe a și b.
*/

abstract class Geom
{
    const PI = 3.14;   
    public $a;
    public $b;
    public abstract function getArea();
}
class Circle extends Geom
{
    public function __construct($r)
    {
        $this->a=$r;
    }
    public function getArea()
    {
        return self::PI * pow($this->a,2);
    }
}
class Rectangle extends Geom
{
        public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function getArea()
    {
        return $this->a*$this->b;
    }
}
$c=new Circle(2);
echo $c->getArea();
$r=new Rectangle(2,3);
echo $r->getArea();
?>
