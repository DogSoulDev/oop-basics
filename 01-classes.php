<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 01 - Classes */

// To create classes we use reserved word class.
class Mobile
{
    public $name;
    public $color;
    public $price;
}

// We can instantitate classes like this
$newMobile = new Mobile();
$newMobile->name = 'Samsung Note10 Plus';
$newMobile->color = 'black';
$newMobile->price = '800 Eur';

$oldMobile = new Mobile();
$oldMobile->name = 'Samsung Galaxy S10';
$oldMobile->color = 'white';
$oldMobile->price = '600 Eur';


// we can use var_dump so we can visualize our new class objects

var_dump($newMobile);
echo "<br>";
var_dump($oldMobile);
