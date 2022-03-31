<?php
/*
1. Convert kilometers per hour to meters per second
2. Convert kilometers per hour to knots 
*/ 
function covertSpeed ($kilometersInput, $unitsOption) {
    if ($kilometersInput == "") {
        return "Please enter a number";
    } elseif ($kilometersInput > 0) {
        switch ($unitsOption) {
            case "meters per seconds": 
                $result = number_format(($kilometersInput * 1000) / 3600, 2);
                break;
            case "knots":
                $result = number_format(($kilometersInput * 0.539957), 2);
                break;
            }
        return "Convert from $kilometersInput km/h to $result $unitsOption";
    } else {
        return "Please enter a positive number";
    }
}

?>