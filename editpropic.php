<?php ob_start(); ?>
<?php session_start();

include("session/DBConnection.php");
include("session/session.php");
$error = "";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("face") or die(mysql_error());

$user= $_SESSION['log']['username'];



	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "You have entered an invalid file!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
			
			$location="uploads/" . $_FILES["image"]["name"];
			if(!$update=mysql_query("UPDATE members SET image = '$location' WHERE username='$user'")) {
				echo "error(change the name of image)";

			}
			$user = $_SESSION['log']['username'];
$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
	
if(isset($_POST['post'])){ 
$mem_id = $display['member_id'];
$stat = "changed profile picture.";
$date = date("m/d/Y");
$image = $location;
$qry = "INSERT INTO updates SET member_id='$mem_id', status='$stat', image='$image', date='$date'";
$result = mysql_query($qry);
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=profile.php\">";
}
}
			
			
			
			header("location: profile.php");
			exit();
			}
	}


?>

<?php ob_flush(); ?>