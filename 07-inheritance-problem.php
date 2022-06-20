<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 07 - Why Inheritance?  */

// Inheritance is another basic principle of OOP

class Samsung
{
    public $name;
    public $chipset;
    public $internalMemory;

    public function __construct($name, $chipset, $internalMemory)
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        echo "+ " . $this->name . " CREATED +<br>";
    }

    function __destruct()
    {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory -<br>";
    }
}

// We need a class for mobiles with extra properties and methods that won't have every mobile
// For example we could need a class for a mobile device with physical keyboard so we create a new one

class Blackberry
{
    public $name;
    public $chipset;
    public $internalMemory;
    public $keyboard;


    public function __construct($name, $chipset, $internalMemory, $keyboard)
    {
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->keyboard = $keyboard;
        echo "+ " . $this->name . " CREATED +<br>";
    }

    //new method for getting keyboard type
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    function __destruct()
    {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory. It uses " . $this->keyboard . " Keyboard -<br>";
        
    }
}

$samsung = new Samsung('Samsung s20', 'Exynos', 128);
$blackberry = new BlackBerry('BlackBerry', 'ARM', 1, 'qwerty');
echo "<br>";

// Seems that we are repeating too much code...