<?php
function convertTemp($a, $b, float $amount): float{
    $c = $amount;
    $f = $amount;
    $k = $amount;
    $formulas =["C" => ["F" => (($c * 9/5) +32),
                        "K" => ($c + 273.15)],
                "F" => ["C" => (($f - 32) * 5/9),
                        "K" => (($f - 32) * 9/5 + 273.15)],
                "K" => ["C" => ($k - 273.15),
                        "F" => (($k - 273.15) * 9/5 + 32)]];
    if($a === $b) {
        return $amount;
    } elseif ($a === "C"){
        return $b === "K" ? $formulas["C"]["K"] : $formulas["C"]["F"];
    } elseif ($a === "F"){
        return $b === "C" ? $formulas["F"]["C"] : $formulas["F"]["K"];
    } elseif ($a === "K"){
        return $b === "C" ? $formulas["K"]["C"] : $formulas["K"]["F"];
    }
}