
 <!DOCTYPE html>
<html>
<head>
	<title>B3W21O1</title>

</head>
<body>
	<?php
date_default_timezone_set("europe/amsterdam");
$time = date("H");
$full_time = date("H : i : s");


if ($time >=6 && $time<12) {
	//ochtend
	echo "<H1 style='color:white; text-align: center; margin-top: 350px;'>"."Goede morgen!<br></H1>";
	echo "<body style='background: url(img/morning.png);'>";
}elseif ($time >=12 && $time <18) {
	//middag
	echo "<H1 style='color:white; text-align: center; margin-top: 400px;'>"."Goede middag!</H1>";
	echo "<body style='background: url(img/afternoon.png);'>";
}elseif ($time >=18 && $time <24) {
	//avond
	echo "<H1 style='color:white; text-align: center; margin-top: 400px;'>"."Goede avond!</H1>";
	echo "<body style='background: url(img/evening.png);'>";
}elseif ($time >=00 && $time <6) {
	//nacht
	echo  "<H1 style='color:white; text-align: center; margin-top: 400px;'>"."Goede nacht!</H1>";
	echo "<body style='background: url(img/night.png);'>";
}

echo"<H1 style='color:white; text-align: center; margin-top: 50px;'>"."het is nu ".$full_time."</H1>";
 ?>
</body>
</html>