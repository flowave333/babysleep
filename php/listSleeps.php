<?php 
header ("content-type: text/plain");

$mysqli = new mysqli ('localhost', 'root', '', 'babysleep');

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
{
	echo "connected to database:  ";
	print_r($mysqli);
}
if (!($res = $mysqli->query("CALL babysleepsum()")))
{
	echo "Call failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
else
{

	print_r($res);

	while($row = $res->fetch_assoc())
	{
		echo $row["babyname"], "," , $row["sleepday"], "," ,$row["duration"], "\n";
	}
}
?>