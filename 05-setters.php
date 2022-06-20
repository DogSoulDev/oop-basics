<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 05 - Setters */

// Setters are methods for modifying properties values
class Mobile
{
    public $name;
    public $chipset;
    public $internalMemory;


    public function getInternalMemory( )
    {
        return $this->internalMemory;
    }

    // setters are methods for changing properties
    public function setInternalMemory($internalMemory)
    {
        echo "* CHANGED internal memory from " . $this->internalMemory;
        $this->internalMemory = $internalMemory;
        echo " to " . $this->internalMemory;
        echo "<br>";
    }
}

echo "<br>";

$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;



echo "<br>";
echo $modernMobile->getInternalMemory();
echo "<br>";
$modernMobile->setInternalMemory(256);
echo "<br>";
echo $modernMobile->getInternalMemory();
