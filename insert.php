<?php
error_reporting(E_ALL);
$name=$_POST["mname"];
$dirc=$_POST["Director"];
$cast=$_POST["cast"];
$about=$_POST["Description"];
$rating=$_POST["rating"];
$rating=(int)$rating;
if($name!="" && $dirc!="" && $cast!="" && $about!="" && $rating>0 && $rating<6)
{
	$con = mysql_connect("182.72.63.18","fc_team_86","anupam123@");
	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

	mysql_select_db("fc_team_86", $con);
	$query="select * from movie";
	$res=mysql_query($query,$con);
	$code=mysql_num_rows($res);
	$code=$code+1;
	$query="INSERT INTO movie(mcode,name,cast,director,about,init)VALUES('$code', '$name', '$cast','$dirc','$about','$rating')";
	$res=mysql_query($query,$con)or die(mysql_error());
	echo "<br>Row inserted<br>";
	mysql_close($con);
}
else
{
	echo "Empty field...";
	echo "<a href="./movieadd.php">GO back</a>";
}
?>

