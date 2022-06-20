<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 04 - Getters */

// Encapsulation is one of the principles in OOP, we use getters methods in order to keep information safe.
class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;

    // methods for getting properties
    public function getName( )
    {
        return $this->name;
    }
    {
        return "--- " . $this->name . " ---";
    }

    public function getChipset( )
    {
        return $this->chipset;
    }
    public function getInternalMemory( )
    {
        return $this->internalMemory;
    }
}

$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo "--- GETTERS ---";
echo "<br>";
echo $modernMobile->getName();
echo "<br>";
echo $modernMobile->getChipset();
echo "<br>";
echo $modernMobile->getInternalMemory();


//-----------------------------------------------------
// with this scenario where all properties are public
// there won't be any differences between using getters
// or accessing  the properties via arrow operator
//-----------------------------------------------------

echo "<br><br>";
echo "--- ARROW OPERATOR ---";
echo "<br>";

echo $modernMobile->name;
echo "<br>";
echo $modernMobile->chipset;
echo "<br>";
echo $modernMobile->internalMemory;

