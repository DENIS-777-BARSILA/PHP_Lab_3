<?php

namespace App;


class Point
{ 
    public $x;
    public $y;

    public function __construct($x = null, $y = null) {
        $this->x = $x;
        $this->y = $y;
    }

    public function ShiftPoint($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }
}

class Vector
{
    public $x;
    public $y;

    public function __construct($x = null, $y = null) {
        $this->x = $x;
        $this->y = $y;
    }

    public function GetLenght(){
        $Lenght_x = $this->y->x - $this->x->x;
        $Lenght_y = $this->y->y - $this->x->y;
        
        return sqrt($Lenght_x*$Lenght_x + $Lenght_y*$Lenght_y);
    }

    public function IsZero(){
        return $this->GetLenght() == 0;
    }

    public function CheckPerpendicular($vector){
        if ($this->IsZero() || $vector->IsZero()){
            return false;
        }

        $dx1 = $this->y->x - $this->x->x;
        $dy1 = $this->y->y - $this->x->y;
 
        $dx2 = $vector->y->x - $vector->x->x;
        $dy2 = $vector->y->y - $vector->x->y;

        return ($dx1 * $dx2 + $dy1 * $dy2) == 0;
    }
}