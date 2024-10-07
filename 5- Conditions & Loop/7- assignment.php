<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
// 6
// 10
// 15

$numDo= 0;

foreach($nums as $doul){
    if($doul%2 == 0 ){
        $numDo = $doul / 2;
        echo $numDo . "<br>";
    }
}