<?php

//Output a simple message
echo "Welcome to New Horizons!\n";
 
//Using for loop to cycle through given numbers
for ($i = 1; $i <= 10; $i++) {
    echo "This is iteration $i\n";
}

//Define function to increment given number
function incrementNumber($number) {
	$number++;
	return $number;
}

//Using while loop to cycle through numbers, incrementing each cycle
$num = 0;
while ($num < 10) {
	$num = incrementNumber($num);
	echo "The current number is $num\n";
}

//Using if/else conditional to evaluate a value
$value = 10;
if ($value > 10) {
	echo "The value is higher than 10\n";
} elseif ($value < 10) {
	echo "The value is lower than 10\n";
} else {
	echo "The value is 10\n";
}

// Using an array to store values
$languages = array("PHP", "HTML", "CSS", "JavaScript");
echo "We offer code classes in:\n";
foreach ($languages as $language) {
	echo "  - $language\n";
}

//Using switch statement to evaluate values
$color = "blue";
switch ($color) {
	case "red":
		echo "The chosen color is red\n";
		break;
	case "blue":
		echo "The chosen color is blue\n";
		break;
	case "green":
		echo "The chosen color is green\n";
		break;
	default:
		echo "No color chosen\n";
		break;
}

//Using try/catch blocks to catch errors
try {
	echo "This code will not produce an error.\n";
} catch (Exception $e) {
	echo "An error occurred: $e\n";
}

//Using require statement to include file
require "functions.php";

//Using do/while loop to cycle through
$num = 0;
do {
	echo "Current number is $num\n";
	$num++;
} while ($num < 10);

//Using array_push() function to add item to array
$languages = array("PHP", "HTML", "CSS", "JavaScript");
array_push($languages, "Python");
echo "We now offer code classes in:\n";
foreach ($languages as $language) {
	echo "  - $language\n";
}

//Using isset() function to determine if variable is set
$name = "John";
if (isset($name)) {
	echo "The name is set\n";
}

//Using unset() function to remove variable
unset($name);
if (!isset($name)) {
	echo "The name is not set\n";
}

//Using str_replace() function to replace a string
$string = "This is a string";
$string = str_replace("string", "sentence", $string);
echo $string;

//Using sort() function to sort array
$numbers = array(2, 5, 6, 3, 7);
sort($numbers);
echo "Sorted array: \n";
print_r($numbers);

//Using in_array() function to determine if value is present in array
$languages = array("PHP", "HTML", "CSS", "JavaScript");
if (in_array("PHP", $languages)) {
	echo "PHP is present in the languages array.\n";
}

//Using ini_set() function to set a configuration value
ini_set("max_execution_time", 30);
echo "The max execution time is now 30 seconds.\n";

//Using date() function to get current date
echo "The current date is: " . date("Y-m-d") . "\n";

//Using substr() function to get portion of string
$string = "This is a string";
$substring = substr($string, 8, 6);
echo "The substring is: $substring\n";

//Using fopen() function to open a file
$file = fopen("file.txt", "r");
if ($file) {
	echo "File opened successfully.\n";
}

//Using fwrite() function to write to a file
$file = fopen("file.txt", "a");
fwrite($file, "Hello, world!");
fclose($file);

//Using filesize() function to determine file size
$file = "file.txt";
echo "The file size is: " . filesize($file) . " bytes\n";

//Using strtotime() function to convert string to timestamp
$time = strtotime("5 days ago");
echo "5 days ago was: " . date("Y-m-d", $time) . "\n";

//Using md5() function to generate a hash of a string
$string = "This is a string";
$hash = md5($string);
echo "The MD5 hash is: $hash\n";

//Using json_encode() function to encode array as json
$array = array("PHP", "HTML", "CSS", "JavaScript");
$json = json_encode($array);
echo "The JSON encoded data is: $json\n";

//Using isset() function to determine if variable is set
$name = "John";
if (isset($name)) {
	echo "The name is set\n";
}

//Using array_search() to search an array
$languages = array("PHP", "HTML", "CSS", "JavaScript");
$key = array_search("HTML", $languages);
echo "The key for HTML is: $key\n";

//Using time() function to get current timestamp
$timestamp = time();
echo "The current timestamp is: $timestamp\n";

//Using explode() function to split a string
$string = "PHP,HTML,CSS,JavaScript";
$array = explode(",", $string);
echo "The exploded array is: \n";
print_r($array);

//Using implode() function to join an array
$array = array("PHP", "HTML", "CSS", "JavaScript");
$string = implode(",", $array);
echo "The imploded string is: $string\n";

//Using preg_match() function to check if pattern matches string
$data = "This is a string";
if (preg_match("/string/", $data)) {
	echo "The pattern matches the string.\n";
}

//Using array_diff() function to compare two arrays
$array1 = array("PHP", "HTML", "CSS", "JavaScript");
$array2 = array("PHP", "JavaScript");
$diff = array_diff($array1, $array2);
echo "The difference between the two arrays is: \n";
print_r($diff);

//Using chmod() function to change file permissions
$file = "file.txt";
if (chmod($file, 0755)) {
	echo "The permissions have been changed.\n";
}

//Using unlink() function to delete a file
$file = "file.txt";
if (unlink($file)) {
	echo "The file has been deleted.\n";
}

//Using htmlspecialchars() function to escape special characters
$string = "<script>alert('hello')</script>";
$string = htmlspecialchars($string);
echo "The escaped string is: $string\n";

?>