<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>face - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link rel="shortcut icon" HREF="images/aaa.png" />
	<!-- METAS -->
    <meta name="description" content="Welcome to FlowCounts template created by Devilcantburn for Envato ThemeForest Marketplace" />
    <meta name="keywords" content="devilcantburn, envato, template, webdesign, julian chaniolleau" />
	<!-- /METAS -->
    
    <!-- CSS -->

	<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/violine.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />

    <!-- /CSS -->
		
    <!-- JQUERY & PLUGINS -->
	<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>

	
    <script type="text/javascript" SRC="js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" SRC="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" SRC="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" SRC="js/twitter.js"></script>
    <script type="text/javascript" SRC="js/jquery.validate.js"></script>
    <script type="text/javascript" SRC="js/jquery.googlemaps1.01.js"></script>
    <script type="text/javascript" SRC="js/custom.js"></script>
    <!-- /JQUERY & PLUGINS -->
    
    
    
    <!-- CUFON REPLACEMENT FONT -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
    <script SRC="js/tindog_400.font.js" type="text/javascript"></script>
    <script type="text/javascript">
        Cufon.replace('h2, h3, h4, h5, .homeSlogan',{ hover: true });
    </script>
    <!-- /CUFON REPLACEMENT FONT -->
    
    <!-- Google Map Key -->
    <script SRC="../../maps.google.com/maps@file=api&v=2&sensor=false&key=ABQIAAAA6kQ5d_ZZG2I52I3jLyR1nhTXd0YQg71M1t3hrj1DiXIODFdA9xSXETe8CnnQO2z6WyekEE43BB77A" type="text/javascript"></script>
	
	
     
    <style type="text/css">
<!--
.style26 {font-size: 16px;
	font-weight: bold;
}
.style25 {font-family: Arial, Helvetica, sans-serif;
	color: #ff3000;
}
.style26 {color: #000}
-->
    </style>
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#reply").click( function() {
		$("#forms").fadeIn();
		$("#reply").fadeOut();
	});	
});
</script>
</head>
<?php include("session/DBConnection.php");
include("session/session.php");
$error ="";
?>
<body>

<!-- HEADER -->
<div id="header">
    <!-- content of header -->
    <div class="content">
    
    <!-- Logo -->
    <div id="logo">
        <h1><a HREF="index.php" title="FlowCounts A real nice folio template"><span class="inv">FlowCounts</span></a></h1>
    </div>
    <!-- /Logo -->
    
    <!-- Twitter -->
     <div class="twitter">
    	<div id="deadTweets"><a style="color: #66FF00; text-decoration:none;" id="cap" href="profile.php"><?php echo $display['firstname'] . "  " . $display['lastname'] ?>&nbsp;<span class="style4">|</span> <a href="logout.php" style="color: #66FF00; text-decoration:none;" id="cap">Logout</a> </div>
    </div>
    <!-- /Twitter -->
    

    	<!-- Menu -->
    	<div class="nav">
			<ul><li><a HREF="home.php" class="navstyle " title="Home"><span>Home</span></a></li>
                <li> <a href="#" class="navstyle "><span>My Page</span></a>
                    <ul>
                     <li><a href="profile.php"><span>Profile</span></a></li>
                      <li><a href="info.php"><span>Info</span></a></li>
					  <li><a href="photos.php"><span>Photos</span></a></li>
                    </ul>
                </li>
                <li> <a href="friends.php" class="navstyle"><span>Friends <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?></span></a></li>
                <li> <a href="mail.php" class="navstyle"><span class="current">Messages <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></span></a></li>
                <li> <a href="forums.php" class="navstyle "><span>Forums</span></a>
                    
                </li>
               
			</ul>
		</div>
    	<!-- /Menu -->
        
        <!-- Search -->
        <!-- /Search -->
        <br class="clear" />
  </div>
    <!-- /content of header -->
</div>
<!-- /HEADER -->

<!-- MAIN -->
<div id="main">
    <!-- content of main -->
    <div class="content">
   <?php
if (isset($_GET["delete"])) {

$query="DELETE FROM messages WHERE message_id='$_GET[delete]'";
@mysql_query($query) or die('Error, delete query failed');
$error = "Deleted!";
}
?>
<?php echo $error; ?>

<?php
include ("session/DBConnection.php");
$id = $_GET['id'];
			$query = mysql_query("SELECT * FROM messages WHERE message_id = '$id'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
			
		 <?php
include ("session/DBConnection.php");
$user = $display['sender'];
			$qry = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$a = mysql_fetch_array($qry);
			echo '<img class="framed" width=50 height=50 src="' . $a['image'] .'"/>';
			echo '&nbsp;&nbsp;<a href="userprofile.php?userid=' . $a['member_id'] . '" style="font-weight: bold; text-decoration:none; text-transform: capitalize; color: #51B22E;">';
			echo $a['firstname'] . " " . $a['lastname'] . '</a>';
			echo '<br />';
			echo '&nbsp;&nbsp;' . $display['content'];
			echo '<br /><br />';
			echo '<div style="border-top:1px solid #999999; width:600px;"></div>';
/*			echo '<span id="del" style="float:right; margin-right:350px;"><a href="read_message.php?delete='.$display['message_id'] . '">X</a></span>';
*/
			echo '<br />';
$id = $_GET['id'];
			
				?>
			<br />
<a href="sentmessages.php" style="text-decoration:none;">Back to Messages</a>

  </div>
<!-- /Cols > 1 -->
 
</table>
</td>
</tr>
</table>
</div>
</div>
<!-- /Cols > 3 -->

<br class="clear" />
    
    </div>
    <!-- /content of main -->
</div>
<!-- /MAIN -->


<!-- FOOTER -->

<div id="footer">
    <!-- content of footer -->
    <!-- /content of footer -->
</div>
<!-- /FOOTER -->
<script type="text/javascript"> Cufon.now(); </script></body>
</html>



