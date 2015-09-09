<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	
	
 <?php
include ("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Travel Book <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
	
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	
	
	
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,  
				maxWidth:    27, 
				extraWidth:  1      
			}).superfish(); 
		}); 
	</script>
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	
		<script type="text/javascript" src="js2/jquery.js"></script>
<script type="text/javascript" src="js2/jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	
	
	}




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>
<script type="text/javascript" src="js2/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {

	$("#edit3").click( function() {
		$("#quote2").fadeIn();
		$("#quote").fadeOut();
		$("#edit3").fadeOut();
	});	
});
</script>
</head>
<?php
include ("session/session.php");
include ("session/DBConnection.php");
?>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
      <h2 class="logo"> <a href="index.php">Travel Book</a> </h2>
    </div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="home.php">Home</a> </li>
       
              <li><a href="profile.php">Profile</a></li>
              <li><a href="info.php">Info</a></li>
              <li><a href="photos.php">My Photos</a></li>
          
        <li> <a href="friends.php">Friends
          <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
        </a> </li>
        <li> <a href="mail.php">Messages
          <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?>
        </a> </li>
       
      </ul>
    
    </div>
  
  </div>
 
  <div class="clear"></div>
</div>

	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
			
			<?php  
		$user= $_GET['userid'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$show = mysql_fetch_array($query);	
															?>
				<a style="color:#51B22E; text-decoration:none;" id="cap" href="userprofile.php?userid=<?php echo $_GET['userid']; ?>"><?php echo $show['firstname'] . "  " . $show['lastname'] ?></a> » Info&nbsp;
			</div>
			
			<div class="grid_3">
				<form class="search" action="">
					<input type="text" class="search" id="searchbox"  /><br />
<div id="display">
</div>

			  </form>
			</div>
			
		</div>
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 350px;">
			  

				<fieldset style="width: 700px;">
					<legend>Basic and Contact information</legend>
					<div align="left" id="form01">
		
					<span style="color:#51B22E;; font-weight:bold;">Name : </span><span id="info" style="margin-left: 61px;"><?php echo $show['firstname'] . " " . $show['lastname'] ?></span><br />
					<span style="color:#51B22E;; font-weight:bold;">Address : </span><span id="info" style="margin-left: 47px;"><?php echo $show['address'] ?></span><br /><?php $hometown = $show['hometown'];
					if($hometown != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">Hometown : </span><span id="info" style="margin-left: 30px;">' . $hometown . '</span><br />'; } ?>
					<?php $contact = $show['contact_no'];
					if($contact != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">Contact No. : </span><span id="info" style="margin-left: 25px;">' . $contact .'</span><br />'; } ?>
					<span style="color:#51B22E;; font-weight:bold;">Email : </span><span id="uu" style="margin-left: 64px;"><?php echo $show['email'] ?></span><br />
					<span style="color:#51B22E;; font-weight:bold;">Birthdate : </span><span id="info" style="margin-left: 39px;"><?php echo $show['birthdate'] ?></span><br />
					<span style="color:#51B22E;; font-weight:bold;">Gender : </span><span id="info" style="margin-left: 53px;"><?php echo $show['gender'] ?></span><br />
					<?php $rel = $show['relationship'];
					if($rel != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">Relationship : </span><span id="info" style="margin-left: 20px;">' .$rel . '</span><br />'; }?></div>
				</fieldset>
				<br />
				<fieldset style="width: 700px;">
				<legend>Education, Interest and Entertainment</legend>
				
					<div id="form02" align="left">
					<?php $high = $show['high_school'];
					if($high != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">High School :</span><span id="info" style="margin-left: 23px;">' .$high . '</span><br />'; } ?>
					<?php $college = $show['college'];
					if($college != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">College :</span><span id="info" style="margin-left: 55px;">' . $college . '</span><br />'; } ?>
					<?php $interest = $show['interest'];
					if($interest != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">Interests :</span><span id="info" style="margin-left: 45px;">' . $interest .'</span><br />'; } ?>
					<?php $aboutme = $show['aboutme'];
					if($aboutme != ""){
					echo '<span style="color:#51B22E;; font-weight:bold;">About You :</span><span id="info" style="margin-left: 34px;">' . $aboutme. '</span><br />'; } ?></div>
				</fieldset>
				<br />
				<fieldset style="width: 700px;">
				<legend>Favorite Quotation</legend>
				
					<div id="form02" align="left" style="width: 690px; overflow: auto;">
					<?php $fave = $show['quote'];
					if($fave != ""){
					echo '<span id="info" style="margin-left: 23px;">' .$fave . '</span><br />'; } ?>
					</div>
				</fieldset>
		  </div>
			
<!-- /Cols 1 -->
    
<br class="clear" />
    
</div>
		</div>
	</div>
	
	
	 
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
