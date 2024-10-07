<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// Output
// 2
// 3
// 4

$arrLength = count($mix);

for($start ; $start+1 <= $arrLength; $start ++){
    if($mix[$start] ==2 ){
        echo $mix[$start] ."<br>";
    }elseif($mix[$start] ==3){
        echo $mix[$start] ."<br>";
    }elseif($mix[$start] ==4){
        echo $mix[$start] ."<br>";
    }
};

