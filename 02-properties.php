<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 02 - Properties */

// classes have properties that contain information about that object defined by the class
class Mobile {
    public $name; // Public makes sure we can access this properties outside the class.
    public $chipset;
    public $internalMemory;
}

$newMobile = new Mobile();
$newMobile->name = 'Samsung Galaxy S10';
$newMobile->chipset = 'Exynos 9810';
$newMobile->internalMemory = '128GB';

// in OOP and PHP we use the arrow operator ( -> ) for accessing properties

// we can assign those public properties in our class with this syntax
$newMobile->name = "Samsung s20";
$newMobile->chipset = "Exynos";
$newMobile->internalMemory = 128;

echo "<br>";

// we can also access properties value by the arrow operator
echo $newMobile->chipset;
echo $newMobile->internalMemory;
echo "<br>";


// what happens if we assign a non existing value or a wrong value?
$newMobile->ramMemory = 1;
$newMobile->internMemory = 8;


echo "<pre>";
var_dump($newMobile);
echo "</pre>";

echo "<br>";

//-----------------------------------------------------
// arrow operator is unique in objects and must not be
// confused with double arrow operator used in arrays
//-----------------------------------------------------

// this is an example using an array and double arrow operators
$mobileArray = [
    'name' => 'Xiaomi Mi10',
    'chipset' => 'Snapdragon',
    'internalMemory' => 64
];
echo $mobileArray['chipset'];