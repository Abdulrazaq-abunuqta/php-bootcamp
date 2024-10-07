<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

// نحدد طول المصفوفة حتى لا نستخدم أي أرقام مباشرة
$length = count($nums);

// استخدام حلقة foreach للوصول إلى العناصر
foreach ($nums as $index => $num) {
    // لحساب الرقم المقابل من الجهة الأخرى
    $opposite_index = $length - $index - 1;
    
    // طباعة الرقم مع الرقم الموازي له
    echo "\"$num + " . $nums[$opposite_index] . " = " . ($num + $nums[$opposite_index]) . "\"\n";
    
    // شرط لكسر الحلقة عند الوصول إلى منتصف المصفوفة
    if ($index >= $opposite_index) {
        break;
    }
}
?>
