<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method one
$d = "$a $b $c";

// Method Two
$d = "{$a} {$b} {$c}";

// Method Three
$d = "$a "."$b "."$c ";

// Method Four
$d = $a." " . $b." " . $c ;

echo $d; // Elzero Web School