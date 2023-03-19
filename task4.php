<?php
function getRandomHEXColor() {
    $alphabet = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"];
    $result = "#";
    $colorValue = array_rand($alphabet, 6);
    for ($i = 0; $i < count($colorValue); $i++) {
        $result .= $alphabet[array_rand($colorValue)];
    }
    return $result;
}
echo "<div style='width: 100px; height: 100px; background-color: ".getRandomHEXColor().";'></div>";