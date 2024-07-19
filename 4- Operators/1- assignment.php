<?php

/**
 * echo 15.2 + 14.7 + (10.5 + 10.5); // 50
 * echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
 */

echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
echo "<br>"; // Make Tow Line.
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer