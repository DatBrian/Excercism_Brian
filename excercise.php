<?php
//? Excercise 3 (Resistor Color)

declare(strict_types=1);


define("COLORS", [
    "black",
    "brown",
    "red",
    "orange",
    "yellow",
    "green",
    "blue",
    "violet",
    "grey",
    "white"
]);

function colorCode(string $color): int
{
    return array_search($color, COLORS);
};

?>