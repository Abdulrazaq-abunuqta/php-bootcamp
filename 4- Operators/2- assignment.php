<?php

/**
 * $a = "10";

 *Needed Ouput
 *  10
 *  "integer"
 *  10
 *  "integer"
 *  10
 *  "integer"

 * For The People Who Love Searching
 *  10
 *  "integer"
 *  10
 *  "integer"
 */


$a = "10";

// الطريقة 1: استخدام (int)
$b = (int)$a;
echo $b . "\n";
echo "<br>";
echo gettype($b) . "\n";
echo "<br>";

// الطريقة 2: استخدام intval()
$b = intval($a);
echo $b . "\n";
echo "<br>";
echo gettype($b) . "\n";
echo "<br>";

// الطريقة 3: استخدام (integer)
$b = (integer)$a;
echo $b . "\n";
echo "<br>";
echo gettype($b) . "\n";
echo "<br>";

// الطريقة 4: استخدام + 0 
$b = $a + 0;
echo $b . "\n";
echo "<br>";
echo gettype($b) . "\n";
echo "<br>";

// الطريقة 5: استخدام settype()
settype($a, "integer");
echo "<br>";
echo $a . "\n";
echo "<br>";
echo gettype($a) . "\n";
?>


