<?php

function pengurangan($a, $b) {
    return $a - $b;
}

// Standar
echo pengurangan(5, 5) . PHP_EOL;
echo pengurangan(5, 6) . PHP_EOL;

// Named argument
echo pengurangan(b: 5, a: 6) . PHP_EOL;
// echo pengurangan(b: 5, 5) . PHP_EOL; // <- Tidak bisa sebab named argument itu harus semuanya juga named argument