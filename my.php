<?php

//echo "<meta http-equiv=\"refresh\" content=\"0;URL=photos.php\">";

$con = mysql_connect('localhost', 'alok0077', 'alok0077');
	 if (!$con)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("chmscian_chmscnet", $con);


$alok="  insert into alok values ('$_POST[name]','$_POST[email]','$_POST[message]')  ";


if(!mysql_query($alok,$con))

{die('only 500 character message');}
echo "message sent";

?>


