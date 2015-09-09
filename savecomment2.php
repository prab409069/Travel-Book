<?php ob_start(); ?>
<?php session_start();?>
<?php
include("session/DBConnection.php");
include("session/session.php");
$error = "";
?>
                <?php


$messages = $_GET['comment'];
$user = $_GET['userid'];
$PIC = $_GET['pic'];
$id = $_GET['id'];
$date = strtotime(date("Y-m-d H:i:s"));

$query = "INSERT INTO photoscomment SET comment='$messages', commentby='$user', PIC='$PIC', upload_id='$id', date_comment='$date'";
$add_member = mysql_query($query);

header("location: friend_photoscomment.php?pid=$id");
exit();
?>
<?php ob_flush(); ?>