<?php

// Write Function Content Here

function greeting($name,$gnder = ""){
    if($gnder ==="Male"){
         echo "Hello Mr" . $name . "<br>";
    }elseif($gnder ==="Female"){
        echo "Hello Miss" . $name . "<br>";
    }else{
         echo "Hello " . $name;
    };
};

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh

?>