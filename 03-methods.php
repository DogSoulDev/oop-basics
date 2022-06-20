<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 03 - Properties */

// in a class we have properties and methods. This methods act like functions and allow classes to develop tasks and functionalities.
class Mobile
{
    public $name;
    public $camera;
    public $price;
    public $color;

    // method that returns class properties in a string.
    public function showSpecs( )
    {
        return "Name: " . $this->name . " Camera: " . $this->camera . " Price: " . $this->price . " Color: " . $this->color;
    }
    
}


$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo $modernMobile->showSpecs();
