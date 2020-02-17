<?php
class Circle{
    const pi =3.142;

    public function __construct($radius){
        $this->Radius($radius);
    }

    public function Area($radius){
        return self::pi *($radius*$radius);
    }
}

$circle = new circle;
echo $circle->Area(100);
//echo $circle::pi;

?>