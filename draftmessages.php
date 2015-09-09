<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
<?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>face - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
	
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
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
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
url: "search2.php",
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
	<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>

	
	   <style type="text/css">

    </style>
</head>
<?php include("session/DBConnection.php");
include("session/session.php");
$error ="";
?>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
      <h1 class="logo"> <a href="index.php">face</a> </h1>
    </div>
    <!-- end grid -->
<div class="grid_9">
              <ul class="sf-menu">
                <li> <a href="home.php">Home</a> </li>
                <li> <a href="#">My Page</a>
                    <ul>
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="info.php">Info</a></li>
                      <li><a href="photos.php">My Photos</a></li>
                    </ul>
                </li>
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
                <li> <a class="current" href="mail.php">Messages
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
				<p><a HREF="profile.php" style="text-transform: capitalize;"><?php echo $display['firstname'] . "  " . $display['lastname'] ?></a> » Messages</p>
				<p> </p>
			</div>
			
			
		</div>
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 350px; margin-top: -5px;">
			  <div align="left"><table width="944" height="600" border="1" align="left">
  <tr>
    <td width="253" style="background-color:#222;;">
	<div >
<div id='basic-modal'>
                  <h3 class="hx-style01 nom"></h3>
                  <h3 class="hx-style01 nom"><a class='basic' href="#" style="text-decoration:none;"><button type="submit" name="edit" onclick="buttonclicked(this)"><strong> Compose Message</strong></button>
                  </a></h3>
                  <p>
<?php 
if(isset($_POST['send'])){ 
$today = date("m/d/Y");
$user = $_SESSION['log']['username'];
$status = 'unread';
/*$subject = $_POST['subject'];
*/
if (empty($error)) {
$query = "INSERT INTO messages SET sender='$user', recipient='$_POST[friend]', content='$_POST[content]', date_sent='$today', status='$status'";
mysql_query($query) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

}

?>
</p>
                  <p class="hx-style01 nom" style="color:#66FF00; font-weight:bold; size:13px;"><?php echo $error; ?></p>
				 
      </div>
                <div id="basic-modal-content">
                  <form id="form1" method="post" action="draftmessages.php">
                 <p align="left" style="color: gold;">To:
                      <label>
                       <select name="friend" size="0" style="width: 200px; color: #fff; background-color: #333; border:none; text-transform:capitalize;">
										  <option>-Select Friend-</option>
<?php
$user = $_SESSION['log']['username'];
$sql  = "SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted'";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{

if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }
$query  = "SELECT * FROM members WHERE username='$friend'";
$res = mysql_query($query);
while($row1 = mysql_fetch_assoc($res))
{?>

								<option id="cap" value="<?php if ($row['friend'] != $user) { echo $row['friend']; } else { echo $row['username']; } ?>"><?php echo $row1['firstname'] . " " . $row1['lastname'] ?></option>
										<?php } ?><?php } ?>
					  </select>
                      </label>
                    </p><br />
                 <p align="left" style="color: gold;">Message:
                      <textarea name="content" cols="100" rows="6" style="width: 300px; color: #fff; background-color: #333; border:none;"></textarea>
                      <br />
					  <br />
                      <input type="submit"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="send" value="Submit" /><br />
                      <input type="reset"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="reset" value="Reset" />
                     
                    </p>
                  </form>
                </div>
                  <p><img src="images/image_31.png" alt="" width="17" height="16" /> <a href="mail.php" style="text-decoration:none;">Inbox&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="sentmessages.php" style="text-decoration:none;">
	<img src="images/sent.png" alt="" width="17" height="16" /> Sent items&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE sender='" . $user."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="draftmessages.php" style="text-decoration:none;">
	<img src="images/draft.png" alt="" width="17" height="16" /> Draft&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE recipient = '$user' AND status = 'draft'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a><br />
	<a href="trashmessages.php" style="text-decoration:none;">
	<img src="images/trash.png" alt="" width="17" height="16" /> Trash&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE recipient = '$user' AND status = 'trash'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a><br />
</p>
    
    <br />
    <div class="separator_1"></div>
<span style="color:#FFFFFF; font-size: 18px;">CONTACTS</span>	
	<br /><br /><?php
$user = $_SESSION['log']['username'];
$sql  = "SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted' ORDER BY RAND() LIMIT 2";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }

 $q  = "SELECT * FROM members WHERE username='$friend'";
$a = mysql_query($q);
while($b = mysql_fetch_assoc($a))
{
$email = $b['email'];
if($email != "" ) {
echo '<img class="framed" height=40 width=40 align="left" SRC="'. $b['image'] .'" alt="'. $b['firstname'] . " " . $b['lastname'] .'" />';
echo '<span style="text-transform:capitalize; color: #fff;">&nbsp;' . $b['firstname'] . " " . $b['lastname'] .'</span>';
    echo '<p>&nbsp;'. $b['type'] . '<br /><br />';
    echo 'Email : <span style="color:#6666FF;">' . $b['email'] . '</span></p><br /><div class="separator_1"><br />';
}} }   ?>
    
</div>

</td><td width="700" border="0" style="border-bottom-width: 0px;">
<?php
 $username = $_SESSION['log']['username'];
	$query  = "SELECT * FROM messages WHERE recipient='$username' AND status = 'draft' ORDER BY message_id DESC LIMIT 30";
$result = mysql_query($query);
$count=mysql_num_rows($result);
if($count > 0) {
echo '<div align="left">
<table width="700" height="572" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td style="border: 0px;"><form name="form1" method="post" action="">
	<table width="650" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
<td align="center" style="background: #333; border: 1px solid #331; color:#fff; font-weight: bold; width: 150px;">Options</td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold; width: 166px;"><strong>Sender</strong></td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold;width: 166px;"><strong>Message</strong></td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold; width: 166px;"><strong>Date</strong></td>
   </tr>';
   while($rows=mysql_fetch_array($result)){
echo '<tr>';
echo '<td align="center" bgcolor="#FFFFFF"><center><input style="width: 20px;" name="checkbox[]" type="checkbox" id="checkbox[]" value="' .$rows['message_id'] .'"></center></td>';
$friend = $rows['sender'];
$q  = "SELECT * FROM members WHERE username='$friend'";
$a = mysql_query($q);
while($b = mysql_fetch_assoc($a))
{
echo '<td align="center" bgcolor="#FFFFFF"><a href="userprofile.php?userid=' . $b['member_id'] . '" style="text-transform: capitalize; text-decoration:none; color: #222;">' . $b['firstname'] . " " . $b['lastname'] . '</a></td>';
$position=20; 
$message= $rows['content']; 
$msg = substr($message, 0, $position); 

echo '<td align="center" bgcolor="#FFFFFF"><a href="msg_stat.php?id='.$rows['message_id'].'" style="text-decoration:none; color: #666;">' . $msg .'...</a></td>';
 echo '<td align="center" bgcolor="#FFFFFF"><font style="color:#000099;font-size: 10px;">';
	echo $rows['date_sent'];
		
			echo '</font>';

}
}
echo '<tr>';
echo '<td style="border-bottom-width: 0px; border-left-width: 0px; border-right-width: 0px;">';
echo '<div style="width: 200px; margin-top: 40px;"><input name="delete" type="submit" id="delete" class="button" value="Trash"><input class="button" name="save" type="submit" id="save" value="Save"></div</td>';
echo '</tr></form>';



if(isset($_POST['delete'])){
$checked = $_POST["checkbox"];
for($i=0; $i < count($checked); $i++) {
$del_id = $checked[$i];
$sql ="UPDATE messages SET status = 'trash' WHERE message_id='$del_id'";
$result = mysql_query($sql);
}


if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=draftmessages.php\">";
}
}

if(isset($_POST['save'])){
$checked = $_POST["checkbox"];
for($i=0; $i < count($checked); $i++) {
$save_id = $checked[$i];
$sql2 = "UPDATE messages SET status = 'draft' WHERE message_id='$save_id'";
$result2 = mysql_query($sql2);
}


if($result2){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=draftmessages.php\">";
}
}
}

?>
</table></td></tr>
	</table></div>
	
</td>
  </tr>
</table>
</div>
	
		  </div>
			
			
		</div>
	</div>
	
	<div id="sub_footer">
      <div class="container_12 clearfix">
        <div class="grid_12"> <a class="logo left" href="#">face</a>
          <p><small>&copy;&nbsp; All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
        </div>
      
      </div>
	
    </div>
	
	<script type="text/javascript"> Cufon.now(); </script>
	
	
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
