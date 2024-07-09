<?

/**

    assignments1

    مطلوب كتابة تعليق في بداية الصفحة من أكثر من سطر يمكنك كتابة ما تريد فيه

    مطلوب كتابة نوع الترميز UTF-8 في المكان المخصص له بواسطة PHP

    مطلوب طباعة جملة My First PHP Page داخل وسم ال Title بإستخدام PHP بالطريقة المختصرة

    مطلوب طباعة جملة We Love في ال div الأول بإستخدام PHP

    مطلوب طباعة جملة Elzero Channel في ال div الثاني بإستخدام PHP

 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php echo "UTF-8" ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? //The Short Way
    ?>
    <title><? echo "My First PHP Page" ?></title>
</head>

<body>

    <div><?php echo "We Love"; ?></div>
    <div><?php echo " Elzero Channel" ?></div>
</body>

</html>

<?

/**


إستخدم التعليقات في كل من الأسطر التالية لمنع تشغيل ال Code
يجب إستخدام نوع مختلف من التعليقات مع كل سطر 

 */
?>
<php? //echo 'Prevent Me From Running Please' ; /*echo 'Prevent Me From Running Please' ; */ #echo 'Prevent Me From Running Please' ;
    ?>

/**
 My Application
 Version 1.0
 Created By Elzero

*/

/**
    THE END
*/