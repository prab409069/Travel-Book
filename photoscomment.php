<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>face - <?php echo $display['firstname'] . " " . $display['lastname']; ?> </title>	
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Superfish Menu -->
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
								   // due to slight rounding differences and font-family 
			}).superfish();  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
		}); 
	</script>
	<!-- -END- Superfish Menu -->
	
	<!-- Photo Gallery ********************************************************************** -->
	<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<!-- -END- Photo Gallery **************************************************************** -->
	
	<!-- IE6 PNG Transparency Fix -->
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	<!-- -END- IE6 PNG Transparency Fix -->
	
	<!-- CUFON Font Replacement -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	<!-- -END- CUFON Font Replacement -->
	
</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
?>
<body>
	<div id="header">
	  <div class="container_12">
			<div class="grid_3">
				<h1 class="logo">
					<a HREF="home.php">face</a>
				</h1>
			</div><!-- end grid -->
			<div class="grid_9">
              <ul class="sf-menu">
                <li> <a href="home.php">Home</a> </li>
                <li> 
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="info.php">Info</a></li>
                      <li><a class="current"  href="photos.php">My Photos</a></li>
                   
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
				<p><a HREF="profile.php" id="cap"><?php echo $display['firstname'] . " " . $display['lastname']; ?></a> » <a HREF="photos.php">Photos</a> » Comments</p>
			</div><!-- end grid -->
			
			<div class="grid_3">
				
			</div><!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content" style="min-height:400px;">
	<?php
$qry  = "SELECT * FROM uploads WHERE upload_id = '". $_GET['pid'] ."'";
$r = mysql_query($qry);
while($a = mysql_fetch_assoc($r))
{?>		

		<div class="container_12 clearfix">
			<div class="grid_12 portfolio_single"	>
				<div align="center"><h2 id="cap"><?php echo $a["image_name"]; ?></h2>
				<img height=300 width=500 align="center" class="framed" SRC="<?php echo $a["image"]; ?>" alt="<?php echo $a["image_name"]; ?>" /></div><br />
<!--				<img height=189 width=262 class="framed" SRC="" alt="" /><?php } ?>
-->				<?php $sql  = "SELECT *, UNIX_TIMESTAMP() - date_comment AS TimeSpent FROM photoscomment WHERE upload_id = '". $_GET['pid'] ."' ORDER BY comment_id ASC LIMIT 10";
$s = mysql_query($sql);
while($b = mysql_fetch_assoc($s))
{?>		

			<?php
$user = $b['commentby'];
$c  = "SELECT * FROM members WHERE username = '$user'";
$y = mysql_query($c);
while($a = mysql_fetch_assoc($y))
{?>		<p><?php 

echo '<br /><div id="comment" style="padding-left: 220px;">';
		$user = $b['commentby'];
		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $a['image'] .'" alt="'. $a['firstname'] . " " . $a['lastname'] .'" />';
		echo '&nbsp;';
		echo '<span class="nn">';
		$id = $a['member_id'];
		echo '<a href="profile.php?userid=' . $id . '" style="text-transform: capitalize; color:#222;">';
		echo $a['firstname'] . " " . $a['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;<span style="color: #000";>';
		echo $b['comment'];
		echo '</span><br />';
		echo '&nbsp;';
		echo '<font style="color:#000099;font-size: 10px;">';
						$days2 = floor($b['TimeSpent'] / (60 * 60 * 24));
						$remainder = $b['TimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $b['date_comment']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
		echo '</div>'; } }
		?>
				
				<br /><div style="padding-left: 220px;">
				<p><form action="savecomment.php" method="get">
				<input name="userid" type="hidden" value="<?php echo $display['username']; ?>" />
				<input name="pic" type="hidden" value="<?php echo $display['image']; ?>" />
				<input name="id" type="hidden" value="<?php echo $_GET['pid']; ?>" />
				<img class="framed" height=40 width=40 align="left" SRC="<?php echo $display['image']; ?>" alt="<?php echo $display['firstname'] . " " . $display['lastname']; ?>" />&nbsp;&nbsp;
				<input name="comment" type="text" value="Leave a comment.." onclick="this.value='';" /></form></p></div>

				
		  </div>
	  </div><!-- end grid -->
</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
<div id="sub_footer">
		<div class="container_12 clearfix">
		  <div class="grid_12"> <a class="logo left" href="#">face</a>
		    <p><small>&copy;&nbsp; All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
	      </div>
		  <!-- end grid -->
		</div><!-- end container -->
</div><!-- end subfooter -->
	
	<!-- PRETTYPHOTO SCRIPT INICIALITATION -->
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
	</script>
	<!-- END PRETTYPHOTO SCRIPT INICIALITATION -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
