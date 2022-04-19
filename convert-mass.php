<?php
/*
1. Convert kilogram to gram
2. Convert gram to kilogram 
*/
function convertMass($x, $y, $mass){
    $kg = $mass;
    $g = $mass;

    $cal =["g" => ["kg" => ($kg/1000)],
                "kg" => ["g" => ($g * 1000)]];
                 
    if($x === $y) {
        return $mass;
    } elseif ($x === "kg"){
        return $y === "g" ? $cal["kg"]["g"] : $cal["g"]["kg"];
    } elseif ($x === "g"){
        return $y === "kg" ? $cal["g"]["kg"] : $cal["kg"]["g"];}
}
?>