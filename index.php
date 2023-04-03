<?php include "./Plant.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $plant = new Plant();
    print_r($plant);

    echo "<br>";
    echo "<br>";

    $plant->name = "Sunflower";
    $plant->latinName = "Helianthus annuus";
    $plant->perennial = true;
    $plant->height = 3;
    $plant->year = 1523;
    $plant->continents = ["Europe", "America", "Asia"];
    print_r($plant);
    echo "<br>";
    echo "<br>";

    $plant1 = new Plant();
    $plant1->name = "Tulip";
    $plant1->latinName = "Tulipa";
    $plant1->perennial = true;
    $plant1->height = 1;
    $plant1->year = 1683;
    $plant1->continents = ["Europe", "America", "Africa", "Australia"];
    print_r($plant1);
    echo "<br>";
    echo "<br>";

    $plant2 = new Plant();
    $plant2->name = "Cactus ";
    $plant2->latinName = "Cactaceae";
    $plant2->perennial = false;
    $plant2->height = 8;
    $plant2->year = 1850;
    $plant2->continents = ["Europe", "America", "Asia"];
    print_r($plant2);
    echo "<br>";
    echo "<br>";

    $plant3 = new Plant();
    $plant3->name = "Lavender ";
    $plant3->latinName = "Lavandula ";
    $plant3->perennial = true;
    $plant3->height = 0.5;
    $plant3->year = 1863;
    $plant3->continents = ["Europe", "America", "Australia"];
    print_r($plant3);
    echo "<br>";
    echo "<br>";

    $plant4 = new Plant();
    $plant4->name = "Redwood";
    $plant4->latinName = "Sequoia sempervirens";
    $plant4->perennial = false;
    $plant4->height = 10;
    $plant4->year = 1785;
    $plant4->continents = ["Europe", "America", "Asia", "Australia"];
    print_r($plant4);


    echo "<br>";
    echo "<br>";

    $plant5 = new Plant("Orchid ", "Orchidaceae family", true, 1, 1854, ["Europe", "America", "Africa", ""]);
    var_dump($plant5);

    echo "<br>";
    echo "<br>";

    $plant6 = new Plant("Carnation ", "Dianthus caryophyllus", false, 1, 1900, ["Europe", "America", "Africa"]);
    var_dump($plant6);
    echo "<br>";
    echo "<br>";

    $plant7 = new Plant("Bamboo ", "Bambusoideae subfamily", false, 2, 1688, ["Europe", "Australia", "America", "Africa", "Asia"]);
    var_dump($plant7);
    echo "<br>";
    echo "<br>";

    $plant8 = new Plant("Eucalyptus ", "Eucalyptus", true, 1, 1588, ["Europe", "Australia", "America", "Africa"]);
    var_dump($plant8);
    echo "<br>";
    echo "<br>";

    $plant9 = new Plant("Lavender ", "Lavandula ", false, 2, 1766, ["Europe", "America", "Africa", "Asia"]);
    var_dump($plant9);


    echo "<br>";
    echo "<br>";

    $plants = [
        $plant, $plant1, $plant2, $plant3, $plant4, $plant5, $plant6, $plant7, $plant8, $plant9
    ];


    foreach ($plants as $plant) {
        echo "Name: " . $plant->name . "<br>";
        echo "Latin name: " . $plant->latinName . "<br>";
        echo "Perennial: " .  $plant->perennial . "<br>";
        echo "Height: " . $plant->height . "<br>";
        echo "Year: " . $plant->year . "<br>";
        echo "Continents: " . implode(", ", $plant->continents) . "<br>";
        echo "<br>";
    }

    ?>
</body>

</html>