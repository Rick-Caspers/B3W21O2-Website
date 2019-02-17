<!DOCTYPE html>
<html>
<head>
	<title>Lab 2</title>
</head>
<body>
<h1><?php
echo "Hello World!";


echo "<br>";


define("hi","Hello World!");
echo constant("hi");


echo "<br>";


$learningPHP = "Hello World!";
echo $learningPHP;


echo "<br>";


$a = "Hello ";
$b = "World!";
echo $a . $b;


echo "<br>";

$array = ['Hello ', 'World!'];
for ($i=0; $i < 2; $i++) { 
echo $array[$i];
}


?></h1>
</body>
</html>
