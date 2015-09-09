<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ppic.css" />	
	
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Travel Book<?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link rel="shortcut icon" HREF="images/aaa.png" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
		<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
			
	<!-- JQUERY -->
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {

	$("#editpic").click( function() {
		$("#forms").fadeIn();
		$("#editpic").fadeOut();
	});	
});
</script>
	<script language="Java Script" type="text/javascript">
function addSC(textToAdd)
{
document.form.content.value += textToAdd;
document.form.content.focus();
}
</script>

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
		<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
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
	
	<script SRC="js/portfolio.js" type="text/javascript"></script>
		<script type="text/javascript" src="js2/jquery.js"></script>
		<script type="text/javascript" src="js2/popup.js"></script>
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
<script language="javascript" type="text/javascript">
   
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
                <li> <a href="home.php">Home</a> </li>
         
                      <li><a class="current" href="profile.php">Profile</a></li>
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
			<div class="grid_11 suffix_1 clearfix" style="border-right: 1px solid #222; width: 600px;">
				<ul class="blog_brief">
				  <li class="entry clearfix">
						<?php 
$user= $_SESSION['log']['username'];
$image=mysql_query("SELECT * FROM members WHERE username='$user'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['image']= $row['image'];
			/*echo '<div class="pp_hoverContainer" style="margin-left: 20px; height: 273px; width: 204.005px;">
<a class="pp_next" href="#" style="visibility: visible;">Chage Profile Picture</a>
</div>';*/
			echo '<img class="framed" width=130 height=150 align="left" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
			?><?php  
		$user = $_SESSION['log']['username'];
		$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
						<div class="grid_7 omega">
							<h4><a href="profile.php" id="catchy"><?php echo $result['firstname'] . " " . $result['lastname']; ?></a></h4><div id="editpic"><a>Edit Profile Picture</a></div>
							<fieldset id="forms" style="display:none; background: #333; border: 1px solid #fff;">
							 <form action="editpropic.php" method="post" enctype="multipart/form-data"><p><span class="style23">Source:</span>
    <input name="image" type="file" size="30"> 
  </p>
  <br />
 
                       <input name="post" type="submit" class="button"  value="Upload"  />
                
</form>

							</fieldset>
							 				<form id="share" method="get" action="save.php" name="form">
            <label>
              <p>  <?php  
								$id = $_SESSION['log']['username'];
		$query = mysql_query("SELECT * FROM members WHERE username = '$id'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
                  <textarea name="content" id="sharetext"  cols="50" rows="1" onclick="this.value='';">share your travel experience....
                </textarea>
                </p>
               <p>
			   	<!--<a onClick="addSC(' (: ')"><img src='images/smiley/1.gif'></a> 
                  <a onClick="addSC(' :) ')"><img src='images/smiley/2.gif'></a> 
                  <a onClick="addSC(' :)) ')"><img src='images/smiley/3.gif'></a> 
                  <a onClick="addSC(' ((: ')"><img src='images/smiley/4.gif'></a> 
                  <a onClick="addSC(' (:: ')"><img src='images/smiley/5.gif'></a> 
                  <a onClick="addSC(' ::) ')"><img src='images/smiley/6.gif'></a>
				  <a onClick="addSC(' :) ')"><img src='images/smiley/7.gif'></a> 
                  <a onClick="addSC(' :)) ')"><img src='images/smiley/8.gif'></a> 
                  <a onClick="addSC(' ((: ')"><img src='images/smiley/9.gif'></a> 
                  <a onClick="addSC(' (:: ')"><img src='images/smiley/10.gif'></a> 
                  <a onClick="addSC(' ::) ')"><img src='images/smiley/11.gif'></a>--> 
                  <input name="username" type="hidden" id="namebox" value="<?php echo $result['username']?>"/>
                  <input name="firstname" type="hidden" id="namebox" value="<?php echo $result['firstname']?>"/>
                  <input name="lastname" type="hidden" id="namebox" value="<?php echo $result['lastname']?>"/>
                  <input name="picture" type="hidden" id="namebox" value="<?php echo $result['image']?>"/>
                </p>
			</label>
            <p>
                       <input name="post" class="button" id="speak" type="submit" value="Share" />		
      
            </p>
          </form>
		  <br /><br /><div align="left">
							<div id='basic-modal' style="margin-top: -18px; margin-left: 10px;">
                  <a class='basic' href="#" style="text-decoration:none;">
        Compose Message</a></div><div id="basic-modal-content">
                  <form id="form1" method="post" action="profile.php">
                  <p align="left" style="color: gold;">To:
                      <label>
                       <select name="friend" size="0" id="friend">
										  <option>-select friend-</option>
									 <?php
										$user = $_SESSION['log']['username'];
	$sql  = "SELECT * FROM friends WHERE username='$user' OR friend='$user' AND status = 'accepted'";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }

									?><?php 
									$query  = "SELECT * FROM members WHERE username='$friend'";
									$res = mysql_query($query);
									while($row1 = mysql_fetch_assoc($res))
									{?>
								<option value="<?php if ($row['friend'] != $user) { echo $row['friend']; } else { echo $row['username']; } ?>"><?php echo $row1['firstname'] . " " . $row1['lastname'] ?></option>
										<?php } ?><?php } ?>
								  </select>
                        </label>
                    </p>
					
                  <p align="left" style="color: gold;">Message:
                      <textarea name="content" cols="35" rows="6" id="textarea"></textarea>
                      <br />
                                            <input type="submit"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="send" value="Submit" /><br />
                      <input type="reset"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="reset" value="Reset" />

                      <br />
                    </p>
                  </form>
                </div></div><div id="divider"></div><div class="box" id="photos" style="margin-left: -148px; margin-bottom: 14px; margin-top: 10px;">
									
<?php
$username =  $_SESSION['log']['username'];
$query  = "SELECT * FROM uploads WHERE username = '$username' ORDER BY upload_id DESC LIMIT 4 ";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))
{
echo '<a rel="prettyPhoto[gallery]" class="lightbox" HREF="'. $row["image"] .'">';
echo '<img class="framed" height=100 width=100 SRC="'. $row["image"] .'" title="' . $row["image_name"] . '" />';
echo '</a>';
echo '&nbsp;';
}?> <p>&nbsp;</p>
      </div>
														
<?php
$error ="";
if(isset($_POST['send'])){ 
$today = strtotime(date("Y-m-d H:i:s"));
$user = $_SESSION['log']['username'];
$status = 'unread';

if (empty($error)) {
$query = "INSERT INTO messages SET sender='$user', recipient='$_POST[friend]', content='$_POST[content]', date_sent='$today', status='$status'";
mysql_query($query) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

}

?>

</div>			
<?php
$username =  $_SESSION['log']['username'];
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM post WHERE friend ='$username'  ORDER BY post_id DESC LIMIT 12";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))

{				 echo '<li class="entry clearfix" >';
				 echo '<div class="blog_info">';
				 /*echo '<span class="date"></span>';*/
				 echo '<span class="info" style="float: left;">';
$user = $row['username'];
$q = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$dis = mysql_fetch_array($q);
$username =  $_SESSION['log']['username'];
$id = $dis['member_id'];
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }
				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }

				 echo '&nbsp;says that..</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $row['picture'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';
				 echo '<div class="grid_7 omega">';
 $position=30; // Define how many character you want to display.

$content= $row['content']; 


				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . wordwrap($content, 8, "\n", true) . '</a></p><br />';
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
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE post_id=" . $row['post_id'] . " ORDER BY comment_id ASC LIMIT 3";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{				 
		echo '<br /><div style="color: #222">';
		$user = $row1['commentby'];
$s = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$d = mysql_fetch_array($s);
$id = $d['member_id'];

		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row1['picture'] .'" alt="'. $row1['firstname'] . " " . $row1['lastname'] .'" />';
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
		 $position1=30; // Define how many character you want to display.

$content1= $row1['content']; 
echo '<a style="color: #222;" HREF="postcomment.php?pid='. $row1['post_id'].'">' . wordwrap($content1, 8, "\n", true) . '</a>';
				 	
	
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
	echo '<form action="commentpost.php" method="GET">'; 
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
?>
				 <br />
				</ul>
				
			</div>
			
			<div class="sidebar grid_4">
			<div align="left" style="width: 300px;">
       <a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a>
	   &nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a></div><br />
		<form class="search" action="">
					<input type="text" class="search" id="searchbox" /><br />
<div id="display">
</div>

				</form>
<div align="left" style="height: auto; width: 230px; overflow:auto;">
				
      <div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 210px; height: 20px; border: 1px solid #666666;">Latest Updates</div>
	  <div class="separator_1"></div>
	  <?php /*?> <?php
	$user = $_SESSION['log']['username'];
	$sql  = "SELECT * FROM friends WHERE username='$user' OR friend='$user' AND status = 'accepted' order by date_added limit 6 ";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }
?>
<?php 
									$query  = "SELECT * FROM members WHERE username='$friend'";
									$res = mysql_query($query);
									while($row1 = mysql_fetch_assoc($res))
									{
								$f_id = $row1['member_id'];
								$m_id = $display['member_id'];
									 ?><?php */?>
  <?php 
$result = mysql_query("SELECT * FROM updates WHERE status !='' ORDER BY RAND() LIMIT 5");
while($row = mysql_fetch_array($result))
{
$mem_id = $row['member_id'];
$friend = $row['friend'];
$image = $row['image'];
			$query = mysql_query("SELECT * FROM members WHERE member_id = '$mem_id'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);
echo "<span style='text-transform: capitalize;'>";
$_SESSION['image']= $display['image'];	
echo '<img class="" width=20 height=20 align="left" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
echo "&nbsp;" . $display['firstname'] . "&nbsp;". $display['lastname'] . "</span>";
echo "&nbsp;";
echo $row['status'];
if($row['status']=="changed profile picture."){
echo "<br />";		
echo '<img width=40 height=40 align="left" SRC="' . $image . '" alt="Unable to view" />';
echo "&nbsp;". $row['date']."<br />";
}
elseif($row['status']=="just uploaded a photo."){
echo "&nbsp;". $row['date'];
echo "<br />";

}
elseif($row['friend']!=""){
echo "<span style='text-transform: capitalize;'>". $row['friend']."</span><br />";
}
echo "<br /><br />--------------------------------------<br />";
}
?>

				</div><!-- Cols 1 -->
<!-- /Cols 1 -->
<?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
 <?php
$user = $_SESSION['log']['username'];
	$sql_qry  = mysql_query("SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted'") or die (mysql_error());
$show_result = mysql_fetch_array($sql_qry);

if ($user != $show_result['friend'] ) { $friend = $show_result['friend']; } else { $friend = $show_result['username']; }

$result = mysql_query("SELECT * FROM members WHERE username != '$friend' and member_id != '".$display['member_id']."' AND confirmation = '1'  ORDER BY rand(member_id)  LIMIT 5");
if($result > 0){
echo ' <div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 210px; height: 20px; border: 1px solid #666666;">face</div>
	  <div class="separator_1"></div>';
	  }
while($row = mysql_fetch_array($result))
{
 echo '<div align="left" id="names">';
 echo '<a href="userprofile.php?userid='.$row["member_id"].'" valign="top" >';
   echo "<img style='padding-top: 10px; border-width: 0px;' align='center' width=50 height=50 alt='Unable to View' src='" . $row["image"] . "'>";
  echo '&nbsp;';
  echo '<div style="margin: -50px 113px 3px 55px;">';
  echo '<b align="left">'; 
  echo $row['firstname'] . " " . $row['lastname'];
  echo '</b>';
  echo '</div></a>';
  echo '</div>';
  echo '<br />';	
   } 
   ?>
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
	<script type="text/javascript"> Cufon.now(); </script></body> 
</html>
