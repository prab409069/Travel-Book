<?php
include("session/DBConnection.php");
if(isSet($_POST['username']))
{
$username = $_POST['username'];

$sql_check = mysql_query("select member_id from members where username='".$username."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="red"><STRONG>'.$username.'</STRONG> is not available.</font>';
}
else
{
echo 'OK';
}

}

?>