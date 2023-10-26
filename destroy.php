<?php

 echo" Data types" . "<br>". "<br>";

 $num = 10;
 echo "$num = 10". "<br>";

 $floatNum = 3.14;
 echo "$floatNum = 3.14;". "<br>";

 $str = "Hello, World!";
 echo " $str = 'Hello, World!';". "<br>";
 $isTrue = true;
 echo "$isTrue = true;". "<br>";

 $arr = [1, 2, 3];

 $obj = new stdClass();
$nullValue = null;
 echo "$nullValue = null;". "<br>" . "<br>";



 echo "String functions". "<br>". "<br>";

 $string = "Hello, World!";
 echo "Length of the string: " . strlen($string) . "<br>";
 echo "Lowercase string: " . strtolower($string) . "<br>";
 echo "Uppercase string: " . strtoupper($string) . "<br>";
 echo "String with first character capitalized: " . ucfirst($string) . "<br>";
 echo "Substring of the string: " . substr($string, 0, 5) . "<br>". "<br>". "<br>";

echo"Date and time functions". "<br>". "<br>";
echo "Current date and time: " . date("Y-m-d H:i:s") . "<br>";
$timestamp = strtotime("2023-08-17 14:30:00");
echo "Timestamp for '2023-08-17 14:30:00': " . $timestamp . "<br>";
echo "Current timestamp: " . time() . "<br>". "<br>". "<br>";
 echo"Math functions". "<br>". "<br>";
 echo abs(-10). "<br>"; 
 echo sqrt(16). "<br>"; 
echo pow(2, 3). "<br>"; 
 echo rand(1, 10). "<br>"; 

 $number = 4;
 $power = pow($number, 2);
 echo "Power: " . $power . PHP_EOL. "<br>";

 $squareRoot = sqrt($number);
 echo "Square Root: " . $squareRoot . PHP_EOL . "<br>";

 $ceil = ceil($number);
 echo "Ceiling: " . $ceil . PHP_EOL . "<br>";

$floor = floor($number);
echo "Floor: " . $floor . PHP_EOL . "<br>". "<br>". "<br>";

?>

<?php
echo" Array Functions". "<br>". "<br>";
$array = [1, 2, 3, 4, 5];

$sum = array_sum($array);
echo "Sum: " . $sum . PHP_EOL . "<br>";

    // array_push() 
array_push($array, 6, 7);
print_r($array). "<br>";
