<!-- 
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf" 
-->


<?php   
// طباعة Document Root
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

// طباعة Server Name
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";

// طباعة System Root (عادة ما يكون في بيئات Windows فقط)
echo "System Root: " . $_SERVER['SystemRoot'] . "<br>";

// طباعة Open SSL Configuration (تحتاج إلى التحقق من وجود هذا المفتاح)
echo "Open SSL Configuration: " . $_SERVER['OPENSSL_CONF'] . "<br>";

?>
