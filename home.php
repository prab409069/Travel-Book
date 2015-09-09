<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/divbelow.css" />
<link rel="stylesheet" type="text/css" href="css/chatlayout.css" />


<script type="text/javascript" src="js/chat.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ppic.css" />	
	<!-- Here is where your page title must go -->
 <?php
include("session/DBConnection.php");
$user=$_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Travel Book <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link rel="shortcut icon" HREF="images/aaa.png" />
	
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	    <script type="text/javascript" SRC="js/js2/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.easing.1.3.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.nivo.slider.js"></script>
    <script type="text/javascript" SRC="js/js2/twitter.js"></script>
    <script type="text/javascript" SRC="js/js2/custom.js"></script>
	<script SRC="js/js2/cufon-yui.js" type="text/javascript"></script>
    <script SRC="js/js2/tindog_400.font.js" type="text/javascript"></script>

	
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
	
<script type="text/javascript" src="js2/popup.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
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
<script type="text/javascript">
$(document).ready( function() {

	$("#edit3").click( function() {
		$("#quote2").fadeIn();
		$("#quote").fadeOut();
		$("#edit3").fadeOut();
	});	
$("#cancel").click( function() {
		$("#quote2").fadeOut();
		$("#quote").fadeIn();
		$("#edit3").fadeIn();
	});	
});
</script>

<script language=JavaScript>

</script>
<style type="text/css">

</style>	
</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
?>

<body>
	<div id="header">
	  <div class="container_12">
			<div class="grid_3">
				<h2 class="logo">
					<a HREF="home.php">Travel Book</a>
				</h2>
			</div><!-- end grid -->
			<div class="grid_9">
              <ul class="sf-menu">
                <li> <a class="current" href="home.php">Home</a> </li>
               
                
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
	<div id="content" style="min-height:400px;">
		<div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix">
				<ul class="blog_brief">
				  <li class="entry clearfix">
<?php
$user= $_SESSION['log']['username'];
$image=mysql_query("SELECT * FROM members WHERE username='$user'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['image']= $row['image'];
			echo '<img class="grid_4 alpha blog_img framed" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
    		
?>
<?php  
		$user = $_SESSION['log']['username'];
		$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
						<div class="grid_7 omega">
							<h4><a href="profile.php" id="catchy"><?php echo $result['firstname'] . " " . $result['lastname']; ?></a></h4>
							<p><span style="color: #000099"><?php echo date("M  d, 20y"); ?></span>&nbsp;&nbsp;Login as <?php echo $result['firstname']?> </p>
							<br />
							
							
							<div id="divider"></div><?php
							
$message= $result['quote']; 
$post3 = wordwrap($message, 8, "\n", true);
?>  
							<b style="padding-left:300px;"> <a href="edit.php?height=250&width=300&modal=true" class="thickbox" title="Quote for the day">Edit</a></b>
							<div id="quotes"><br /><?php echo '<span style="padding-left: 35px; padding-top: 100px;">' . $post3 ."...</span.";?></div>
							<br />
							
						 </li><div style="width:600px; border-top: dotted #333;"> </div><br /><div>
<?php
	$user = $_SESSION['log']['username'];
	$sql  = "SELECT * FROM friends WHERE username='$user' OR friend='$user' AND status = 'accepted'";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{

echo '<br /><div class="separator_3">';

if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }

$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM post WHERE (username = '$friend' OR username = '$user') ORDER BY post_id DESC LIMIT 5";
$result = mysql_query($query);



while($row = mysql_fetch_assoc($result))

{				 echo '<li class="entry clearfix">';
				 echo '<div class="blog_info" style="width: 580px;">';
				 echo '<span class="info" style="float: left;">';
$user = $row['username'];
$q = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$dis = mysql_fetch_array($q);
$ff = $row['friend'];
$ss = mysql_query("SELECT * FROM members WHERE username = '$ff'") or die (mysql_error()); 
$gwa = mysql_fetch_array($ss);
$username =  $_SESSION['log']['username'];
$id = $dis['member_id'];
if($row['username'] == $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';}

				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; 

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />'; }
				 echo '<div class="grid_7 omega">';
 
$content= $row['content']; 

				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . wordwrap($content, 8, "\n", true) . '</a></p><br />';
				 }
				 
		if($row['username'] != $row['friend']){
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }
				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }

				 echo '&nbsp;&nbsp;says to</span>';
				 if($row['friend'] == $username){
				 echo '<a href="profile.php">';
				 echo '<span style="font-size: 10px; text-transform: capitalize;">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</span></a>'; }
				elseif($row['friend'] != $username){
				 echo '<a href="userprofile.php?userid=' . $gwa['member_id'] . '">';
				 echo '<span style="text-transform: capitalize; font-size: 10px;"">' .$row['friend_firstname'] . " " . $row['friend_lastname'] . '</span></a>'; }
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $dis['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';
				 echo '<div class="grid_7 omega">';
$str= $row['content']; 
$post = wordwrap($str, 8, "\n", true);

				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . $post . '</a></p><br />';
				 }
		 
		 
				 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

$qqq = mysql_query("SELECT * FROM postcomment WHERE post_id='" . $row['post_id']."'");
	$numberOfRows = MYSQL_NUMROWS($qqq);
	if ($numberOfRows > 0){
	if ($numberOfRows == 1){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>1 comment</small></a>';}
	if ($numberOfRows==3 || $numberOfRows==2){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>' . $numberOfRows. " comments</small></a>";}
	if ($numberOfRows >= 4){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>('. $numberOfRows.')View all comments</small></a>'; }
	}echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE post_id=" . $row['post_id'] . " ORDER BY date_created ASC LIMIT 3";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{				 
		echo '<br /><div id="comment">';
		$user = $row1['commentby'];
$s = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$d = mysql_fetch_array($s);
$id = $d['member_id'];

		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $d['image'] .'" alt="'. $row1['firstname'] . " " . $row1['lastname'] .'" />';
		echo '&nbsp;';
		echo '<span class="nn">';
		$username =  $_SESSION['log']['username'];
$id = $d['member_id'];
if($user == $username){
 echo '<a href="profile.php" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }
elseif($user != $username){
 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }	
$content1= $row1['content']; 
$post1 = wordwrap($content1, 8, "\n", true); 
echo '<a style="color: #222;" HREF="postcomment.php?pid='. $row1['post_id'].'">' . $post1 . '</a>';
				 	
	
		echo '<br />';
		echo '&nbsp;';
		echo '<font style="color:#000099;font-size: 10px;">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
		echo '</div>';
	
	}
		$qr = mysql_query("SELECT * FROM members WHERE username='".$_SESSION['log']['username'] ."'");
echo "<br />";
while($row3 = mysql_fetch_array($qr))
  {  
	echo '<div class="fieldcomment">';
	echo '<form action="postcommenthome.php" method="GET">'; 
	echo'<input type="hidden" name="post_id" value="'. $row['post_id'] .'">';
	echo'<input type="hidden" name="username" value="'. $row3['username'] .'">';
	echo'<input type="hidden" name="firstname" value="'. $row3['firstname'] .'">';
	echo'<input type="hidden" name="lastname" value="'. $row3['lastname'] .'">';
	echo'<input type="hidden" name="picture" value="'. $row3['image'] .'">';
	echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row3['image'] .'" alt="'. $row3['firstname'] . " " . $row3['lastname'] .'" />';
	echo '&nbsp;';
	echo '<input type="text" value="Leave a comment" onclick="this.value=\'\'" style="color: #333333; width: 200px;" name="postcomment" />';
	echo '&nbsp;<input type="submit" value="Post" style="background-color: #333; color: #fff; width: 50px;" name="post" />';
	echo '</form></div>';
	echo '</div></li>';
		} 
}
}
?>
</div>
				 <br />
				</ul>
				
			</div>
			
			<div class="sidebar grid_4">
			<div align="left" style="width: 300px;">
       <a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a>
	   &nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a></div><br />
		<form class="search" action="">
					<input type="text" class="search" id="searchbox"  /><br />
<div id="display">
</div>

			  </form>
			  <br />
			  <div align="left" style="width: 220px; overflow:auto;">
				
      <div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 210px; height: 20px; border: 1px solid #666666;">



Latest Updates</div><div class="separator_1"></div><br />
  

<?php
  include("session/DBConnection.php");
$result = mysql_query("SELECT * FROM photoscomment  ORDER BY RAND() LIMIT 6");
while($row = mysql_fetch_array($result))
{
$mem_id = $row['commentby'];
$friend = $row['comment'];}

echo "<span style='text-transform: capitalize;'>". $row['commentby']."</span><br />";
			
echo $row['comment'];



?>

				</div>
  <div style="width: 300px; margin-left: -25px;" class="grid_3"><ul class="flickr">
  <div align="center" style="margin-right: 50px; background: #111; color: #fff; width: 250px;">FRIENDS chat</div> 
			
<?php 
	 include("session/DBConnection.php");
	 $user = $_SESSION['log']['username'];
	$sql  = "SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted' ORDER BY RAND() LIMIT 9";
	

       $result = mysql_query($sql);

  


if(!$result)
{die('errorr'.mysql_error());}

$alok=mysql_num_rows($result);
echo 'Total friends:'.$alok.'<br>';



while($row = mysql_fetch_array($result))
{

if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }

 $q  = "SELECT * FROM members WHERE username='$friend'"; //members=users
$a = mysql_query($q);


if(!$a)
{die('errorr:'.mysql_error());}

$count_1 = mysql_num_rows($a);

//echo $count_1;


if($count_1 == 0){
 echo '<span style="margin-right: 50px; color: #ff0000; width: 250px;">No One is Online</span><br>';
 }



while($b = mysql_fetch_assoc($a))
{
$id = $b['username'];
$query_sql = "SELECT * FROM members WHERE username='$id' ";
$result2 = mysql_query($query_sql);

if(!$result2)
{die('errorr'.mysql_error());}

while($row2 = mysql_fetch_assoc($result2))
{
?>
<li class="grid_1 alpha" style="margin-right:40px; margin-bottom:auto; text-transform: capitalize;">
<?php 
	
$unym=$row2['username'];
$sql_result = mysql_query("SELECT * FROM chat WHERE recipient = '".$user."' AND username = '".$unym."' AND status = 'unread'");
$count = mysql_num_rows($sql_result); 
if ($count > 0 ){
echo '<span align="left" class="framed" style="font-weight:bold; font-size: 14px;width: 100px; height: 20px;color: #fff; background: #ff0000; border: 1px solid #000;">' . $count .'</span>&nbsp;<img src="images/envelope.gif" alt="" />'; } 
echo '&nbsp;<a href="try.php?action='.$unym.'&keepThis=true&TB_iframe=true&height=350&width=300" class="thickbox"><img width=40 height=40 title="'.$row2['firstname'].'&nbsp;'. $row2['lastname'].'" class="comment_gravatar framed" SRC="'.$row2['image'].'" />' . "<center> " . $row2['firstname']. ' ' . $row2['lastname']. '</center>';
echo '</a>';
} }}  	
   ?>
  
 </li>
</ul></div>
</div>

</div>


			</div>
		</div>

		  
		</div>
</div>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
	</script>
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>





