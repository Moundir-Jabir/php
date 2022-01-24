<?php
// fonction anonyme
$numbers = [22,3,5,9,10];
$s = 2;
$result = array_map(function ($item) use ($s){
    return $item * $s;
}, $numbers);
// print_r($numbers);
// echo "<br/>";
// echo "<br/>";
// print_r($result);

// arrow function

$resultat = array_map(fn($item) => $item * $s, $numbers);
print_r($resultat);