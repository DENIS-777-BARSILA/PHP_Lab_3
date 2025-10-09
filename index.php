<?php

require_once 'src/Point.php';

use App\Point;
use App\Vector;


$T1 = new App\Point(rand(-100,100), rand(-100,100));

$V1 = new App\Vector(new App\Point(0, 0), new App\Point(0, 7));

$V2 = new App\Vector(new App\Point(5, 5), new App\Point(5, 5));

$V3 = new App\Vector(new App\Point(0, 0), new App\Point(7, 0));

echo $V1->GetLenght() . "\n";
echo $V2->GetLenght() . "\n";
echo $V3->GetLenght() . "\n";

var_dump( $V3->CheckPerpendicular($V1));
echo "\n";

echo "Кординаты T1 до переноса:" .$T1->x . $T1->y . "\n";

$dx = $V1->y->x - $V1->x->x;
$dy = $V1->y->y - $V1->x->y;

$T1->ShiftPoint($dx, $dy);

echo "Кординаты T1 после переноса:" .$T1->x . $T1->y;
