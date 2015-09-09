<?php session_start();?>
<?php
include("session/DBConnection.php");
$username = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$username'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
$password = $display['password'];
$sql = "DELETE FROM users WHERE username = '$username' AND password = '$password'";
	$add_member = mysql_query($sql);
header('location:index.php');
?>
<?php
  @session_unregister('log');
  @session_unset();

header('location:index.php');
 ?>
