 <html>
<head>
<link rel="stylesheet" href="stylesheets/screen.css" media="Screen" type="text/css" />
</head>
<body>
<?php
	error_reporting(1);
  	 <div class="list">
        <h3>Top Rated</h3>
        <ul class="things">
          <?php
  	  $con = mysql_connect("182.72.63.18","fc_team_86","anupam123@");
	  $adr1= "https://www.facebook.com/";
	  $adr2= "https://graph.facebook.com/";
  	  if (!$con)
  	  {
  	  	die('Could not connect: ' . mysql_error());
  	  }
	  mysql_select_db("fc_team_86", $con);
  	  $result = mysql_query("SELECT * FROM movie ORDER BY init DESC");
          while($row = mysql_fetch_array($result))
  	  {
	 echo "<li><a href='". $adr1 . $row['uid'] . "'><img src='" . $adr2 . $row['uid'] . "/picture'>"  . $row['name'] . "</a></li>" ;
  	  }
	  mysql_close($con);
          ?>
        </ul>
      </div>
          ?>
        </body>
</html>