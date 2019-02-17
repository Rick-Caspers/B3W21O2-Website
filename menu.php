<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
</head>
<body>
<?php 
echo '<ul>
  <li><a href="opdracht1/index.php">B3W2101</a></li>
  <li><a href="labs/lab2.php">Lab 2</a> </li>
  <li><a href="labs/lab3a.php">Lab 3a</a> </li>
  <li><a href="labs/lab3b.php">Lab 3b</a></li>
  <li><a href="labs/lab4.php">Lab 4</a></li>
</ul>'
 ?>
<style>
*{
	margin: 0px;
}
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
	}

li {
	float: left;
	}
li a {
	margin-left: 10px;
	margin-right: 65px;
	display: block;
	color: orange;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	}
li a:hover {
	background-color: rgb(93, 164, 120);
</style>
</body>
</html>