<?php

// Write Function Content Here

use function PHPSTORM_META\map;

function get_arguments(...$name){
    return $name+=$name."";
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP