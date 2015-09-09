<?php session_start();
include("session/DBConnection.php");
include("session/session.php");
$error = "";
$user = $_SESSION['log']['username'];
$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
if (isset($_GET["status"]))  {
$get = $_GET['status'];
if ($get=="approve")  {
$mem_id = $display['member_id'];
$stat = "are now friends with ";
}
if ($get=="decline")  {
$mem_id = $display['member_id'];
$stat = "";
}
$friend= $_GET['accept'];
$qry1 = mysql_query("SELECT * FROM friends WHERE friend_id = '$friend'") or die (mysql_error()); 
			$disp1 = mysql_fetch_array($qry1);
$frnd = $disp1['username'];
$qq = mysql_query("SELECT * FROM members WHERE username = '$frnd'") or die (mysql_error()); 
			$disp2 = mysql_fetch_array($qq);
			$f_id = $disp2['member_id'];	
			$firstname = $disp2['firstname'];
			$lastname = $disp2['lastname'];
$friend = $firstname . " " . $lastname .  ".";
$date = date("m/d/Y");
$qry = "INSERT INTO updates SET member_id='$mem_id', status='$stat', friend='$friend', date='$date'";
$result = mysql_query($qry);

}


if (isset($_GET["delete"]))  { $delete = $_GET["delete"]; }
if (isset($_GET["decline"]))  { $decline = $_GET["decline"]; }
if (isset($_GET["accept"]))  { $accept = $_GET["accept"]; }
$error ="";

if (isset($_GET["decline"])) {
$id = $_GET["decline"];
		$qry = mysql_query("SELECT * FROM friends WHERE friend_id = '$id'") or die (mysql_error()); 
		$show = mysql_fetch_array($qry);
		$fid = $show['username'];	
		
	$sql = mysql_query("SELECT * FROM members WHERE username = '$fid'") or die (mysql_error()); 
		$display = mysql_fetch_array($sql);
		$friend_id = $display['member_id'];
							
$query="UPDATE friends SET status='declined' WHERE friend_id='$decline'";
@mysql_query($query) or die('Error, update query failed');
$error = "User declined!";
echo $fid;
echo $friend_id;
header("location: userprofile.php?userid=$friend_id");
}
if (isset($_GET["accept"])) {
$id = $_GET["accept"];
	$qry = mysql_query("SELECT * FROM friends WHERE friend_id = '$id'") or die (mysql_error()); 
		$show = mysql_fetch_array($qry);
		$fid = $show['username'];	
		
	$sql = mysql_query("SELECT * FROM members WHERE username = '$fid'") or die (mysql_error()); 
		$display = mysql_fetch_array($sql);
		$friend_id = $display['member_id'];

$query="UPDATE friends SET status='accepted' WHERE friend_id='$accept'";
@mysql_query($query) or die('Error, update query failed');
$error = "User accepted!";
header("location: userprofile.php?userid=$friend_id");
}
if (isset($_GET["delete"])) {

$query="DELETE FROM friends WHERE friend_id='$delete'";
@mysql_query($query) or die('Error, delete query failed');
header("location: friends.php");
}


?>