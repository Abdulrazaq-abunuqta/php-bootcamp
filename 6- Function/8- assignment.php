<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// Output
// "Sayed"
// "Osama"


// استخدام حلقة for بدون أرقام مباشرة
for ($i = $help_num - 2; $i <= $help_num - 1; $i++) {
    echo "\"" . $names[$nums[$i]] . "\"\n";
}
?>

