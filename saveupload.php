<?php ob_start(); ?>
<?php session_start();?>
<?php
include("session/DBConnection.php");
include("session/session.php");
$error = "";
?>

<?php
$user = $_SESSION['log']['username'];
$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
	
if(isset($_POST['upload'])){ 
$mem_id = $display['member_id'];
$stat = "just uploaded a photo.";
$date = date("m/d/Y");
$qry = "INSERT INTO updates SET member_id='$mem_id', status='$stat', date='$date'";
$result = mysql_query($qry);
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=photos.php\">";
}
}

?>

<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("face") or die(mysql_error());


$file=$_FILES['image']['tmp_name'];


	if (!isset($file)) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploaded_photos/" . $_FILES["image"]["name"]);
			$user = $_SESSION['log']['username'];
			$today = strtotime(date("Y-m-d H:i:s"));
			$location="uploaded_photos/" . $_FILES["image"]["name"];
			$image_name=$_POST['image_name'];
			

			$sql = "INSERT INTO uploads SET username='$user', image='$location', image_name='$image_name', date_created='$today'";

if (!mysql_query($sql))
  {
  die('Error(change your file name) ' );
  }

header("location: photos.php");

exit();
}
}
?>
<?php ob_flush(); ?>