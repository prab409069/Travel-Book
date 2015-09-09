<?php session_start();?>
<?php 
include('session/session.php');
include('session/DBConnection.php');
if(isset($_POST['reply'])){ 
$id = $_POST['id'];
$today = date("d/m/Y");
$recipient = $_POST['friend'];
$content = $_POST['content'];
$user = $_SESSION['log']['username'];
$status = 'unread';
if (empty($error)) {
$qry = "INSERT INTO messages SET sender='$user', recipient='$recipient', content='$content', status='$status', date_sent='$today'";
mysql_query($qry) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

header("location: read_message.php?id=$id");
exit();
}
?>
<?php 

/*if (isset($_GET["action"]) && ($_GET["action"] == "sendfrnd")) {

$today = date("d/m/Y");
$user = $_SESSION['log']['username'];
								
if (empty($error)) {
$query = "INSERT INTO messages SET sender='$user', recipient='$_POST[friend]', subject='$_POST[subject]', content='$_POST[content]', date_sent='$today'";
mysql_query($query) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

}*/
 
?>