<!DOCTYPE html>
<html>
<head>
	<title>Lab 3b</title>
</head>
<body>
<?php
function tafels(){
	$array = ["3", "5", "8", "12"];

	for ($i=0; $i <11 ; $i++) { 
echo "$i x 6 = " . $i * 6 . "<br>";
}
echo "<br><br>";


for ($b=0; $b < 11; $b++) {
	echo "$b x " . $array[0] . " = " . $b * $array[0] . "<br>";
}


echo "<br><br>";
for ($b=0; $b < 11; $b++) {
	echo "$b x " . $array[1] . " = " . $b * $array[1] . "<br>";
}


echo "<br><br>";
for ($b=0; $b < 11; $b++) {
	echo "$b x " . $array[2] . " = " . $b * $array[2] . "<br>";
}


echo "<br><br>";
for ($b=0; $b < 11; $b++) {
	echo "$b x " . $array[3] . " = " . $b * $array[3] . "<br>";
	}
}
tafels();
?>
</body>
</html>