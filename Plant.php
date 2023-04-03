<?php

class Plant{
    public $name;
    public $latinName;
    public $perennial;
    public $height;
    public $year;
    public $continents;


function __construct($name = null, $latinName = null, $perennial = false, $height = 0, $year = 0, $continents = [])
{

    $this->name = $name;
    $this->latinName = $latinName;
    $this->perennial = $perennial;
    $this->height = $height;
    $this->year = $year;
    $this->continents = $continents;
}
}





?>

<!-- 

Sukurti klasę Plant.

Plant properties:
name
latinName
perennial
height
continents[]
year

sukurti optional pilną konstruktorių.
sukurti 5 augalus su tuščiu konstruktoriu ir susetinti reikšmessukurti 5 augalus su pinlu konstruktoriu

Sudėti augalus į masyvą.
prasukti ciklą pro masyvą ir atspausdinti augalus -->