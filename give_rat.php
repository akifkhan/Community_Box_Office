<?php
$str="rang";
if (!$link = mysql_connect('182.72.63.18', 'fc_team_86', 'anupam123@')) 
{
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('fc_team_86', $link)) 
{
    echo 'Could not select database';
    exit;
}

$sql    = "SELECT * FROM movie where name like '%$str%'";
$result = mysql_query($sql, $link);

if (!$result) 
{
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
while ($row = mysql_fetch_assoc($result))
{
	$no=1+$row["five"]+$row["four"]+$row["three"]+$row["two"]+$row["one"];
	$rat=($row["init"]+5*$row["five"]+4*$row["four"]+3*$row["three"]+2*$row["two"]+$row["one"])/$no;
	echo "Name:".$row["name"];
	echo "<br>Cast:".$row["cast"];
	echo "<br>Director:".$row["director"];
	echo "<br>Rating:".$rat;
	echo "<br><br><br>";
}
mysql_free_result($result);
?>
