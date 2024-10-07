<?php

use function PHPSTORM_META\map;

$mix = [1, 2, "A", "B", "C", 3, 4];

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"

// foreach($mix as $x){
//     if($x == is_int($x)){
//         echo $x . "<br>"; 
//     };
// };

$mix = [1, 2, "A", "B", "C", 3, 4];

// متغيرات لحساب عدد الأرقام والحروف
$numbersCount = 0;
$lettersCount = 0;

// التكرار على عناصر المصفوفة
foreach ($mix as $item) {
    if (is_numeric($item)) {
        // إذا كان العنصر رقمًا، قم بطباعته وزيادة عدد الأرقام
        echo $item . "<br>";
        $numbersCount++;
    } else {
        // إذا كان العنصر حرفًا، قم بزيادة عدد الحروف التي تم تجاهلها
        $lettersCount++;
    }
}

// طباعة عدد الأرقام التي تم طباعتها
echo $numbersCount.' Numbers Printed . <br>';

// طباعة عدد الحروف التي تم تجاهلها

echo  $lettersCount .'Letters Ignored . <br>'
?>

