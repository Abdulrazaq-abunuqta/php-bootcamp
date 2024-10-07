<?php

$index = 0;

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

//Use For

for($i=20; $index<=$i; $i-- ){
    if($i%2 == 0){
        echo $i . "<br>";
    }else{
        echo $i . "<br>";
    }
    // echo $i . "<br>";
};

//Use While  

$i= 0;
While($i <= 20){
    if( $i % 2 == 0){
        echo $i ."<br>";
    }
    $i++;   
};

//Use Do-While

$i = 1;

do{
    
    if( $i % 2 == 0){
        echo $i ."<br>";
    }

    $i++;

}while($i <= 20);