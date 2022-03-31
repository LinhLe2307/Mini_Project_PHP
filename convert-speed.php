<?php
/*
1. Convert kilometers per hour to meters per second
2. Convert kilometers per hour to knots 
*/ 
function convertSpeed ($usersInput, $baseOptions, $targetOptions) {
    if ($usersInput === "") {
        return "Please enter a number";

    } elseif ($usersInput > 0) {

        $speedList = ["kilometers per hour" => [
                        "meters per second" => ($usersInput * 1000) / 3600,
                        "knots" => ($usersInput * 0.539957)
                    ],
                    "meters per second" => [
                        "kilometers per hour" => ($usersInput * 3.6),
                        "knots" => ($usersInput * 1.943844)],
                    "knots" => [
                        "kilometers per hour" => ($usersInput * 1.85),
                        "meters per second" => ($usersInput * 0.514444)]];

        $result = number_format(($baseOptions === $targetOptions) ? $usersInput : $speedList[$baseOptions][$targetOptions], 2);
        return "Convert from <span>$usersInput</span> $baseOptions to <span>$result</span> $targetOptions";

    } else {
        return "Please enter a positive number";
    }
}

?>