<?php

/**
 * $name = "elzero";
 * $$name = "Web";
 */


$name = "elzero";
$$name = "Web";
$a = $name;
$$name = $name;
$$name = &$name;


echo $name;
echo "</br>";
echo $a;
echo "</br>";
echo $$name;
echo "</br>";
echo $name;
echo "</br>";
echo $name;