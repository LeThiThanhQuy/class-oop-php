<?php
include 'Circle.php';
include "Cylinder.php";
$circle= new Circle(2,'red');
$cylinder=new Cylinder(4,'blue',7);
$circle->toString();
echo '<br>';
$cylinder->toString();