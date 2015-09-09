<?php ob_start(); ?>
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
<title>Travel Book<?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
	
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
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
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

<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery.watermark.js"></script>
<script type="text/javascript">
 
 
      $(document).ready(function() {

$("#faq_search_input").watermark("Type a friend's name here..");

$("#faq_search_input").keyup(function()
{
var faq_search_input = $(this).val();
var dataString = 'keyword='+ faq_search_input;
if(faq_search_input.length>3)

{
$.ajax({
type: "GET",
url: "ajax-search.php",
data: dataString,
beforeSend:  function() {

$('input#faq_search_input').addClass('loading');

},
success: function(server_response)
{

$('#searchresultdata').html(server_response).show();
$('span#faq_category_title').html(faq_search_input);

if ($('input#faq_search_input').hasClass("loading")) {
 $("input#faq_search_input").removeClass("loading");
        } 

}
});
}return false;
});
});
	  
</script>


	<!-- -END- CUFON Font Replacement -->
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
</head>
<?php include("session/DBConnection.php");
include("session/session.php");
$error ="";
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
                <li> <a href="#">My Page</a>
                    <ul>
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="info.php">Info</a></li>
                      <li><a href="photos.php">My Photos</a></li>
                    </ul>
                </li>
                <li> <a class="current" href="friends.php">Friends
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
			  <!-- end sf-menu -->
            </div>
  </div>
  <!-- end container -->
  <div class="clear"></div>
</div>
<!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
			 <?php  
		$user= $_GET['userid'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$show = mysql_fetch_array($query);	?>
				<p><a style="color:#51B22E; text-decoration:none;" id="cap" href="userprofile.php?userid=<?php echo $_GET['userid']; ?>"><?php echo $show['firstname'] . "  " . $show['lastname'] ?></a> » Friends &nbsp;
				
				<?php
	$user_1 = $show['username'];
$result = mysql_query("SELECT * FROM friends WHERE (username='$user_1' OR friend='$user_1') AND status = 'accepted'");
while($row = mysql_fetch_assoc($result))
{
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 ){
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' . " ";
				  }
				else
    			{
				}
				?></p>
				<p> </p>
			</div><!-- end grid -->
			
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content" style="min-height:400px;">
		<div class="container_12 clearfix">
		<div id="prod-content">
      <div class="prod-subsubhead">
        <h4 id="faq_title"> <strong></strong> </h4>
      </div>
      <div class="prod-subcontent">
        <div class="prod-lcol fl-left">
          <div class="prod-content">
            <div class="faqsearch">
              <div class="faqsearchinputbox">
                <!-- The Searchbox Starts Here  -->
                <input style="width: 200px; background: #333; color: #fff;"  name="query" type="text" id="faq_search_input" />
                <!-- The Searchbox Ends  Here  -->
              </div>
            </div>
            <div id="searchresultdata" class="faq-articles"> </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>                
      </div><br />
			<center><table width="1200">
  <tr>
    <td align="center" width="800" style="background-color:#ddfece; border:none;"><div style="background-color: #ddfece;">
	 <div class="separator_3"></div>
	 <?php 
	$user_1 = $show['username'];
	$sql  = "SELECT * FROM friends WHERE (username='$user_1' OR friend='$user_1') AND status = 'accepted'";
	$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user_1) { $friend = $row['friend']; } else { $friend = $row['username']; }

 $q  = "SELECT * FROM members WHERE username='$friend' ORDER BY RAND() LIMIT 5";
$a = mysql_query($q);
while($b = mysql_fetch_assoc($a))
{
$id = $b['member_id'];
echo '<p><img class="framed" height=40 width=40 align="left" SRC="'. $b['image'] .'" alt="'. $b['firstname'] . " " . $b['lastname'] .'" />';
echo '&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<h5 style="text-transform: capitalize; margin-top: -35px; margin-left: 60px;"><a style="color:#000; text-decoration:none;" href="userprofile.php?userid=' . $id . '" >' . $b['firstname'] . " " . $b['lastname'] . '</a>             ';
echo '</span></h5>';
$position=25; 

$message= $b['quote']; 
$post = substr($message, 0, $position); 

//echo $post;
//echo "...";
echo '<div class="quote">&nbsp;&nbsp;' .$post .' ...</div><div class="separator_3"></div></p>'; }}
?>
</div>
</td>
     <td width="400" style="background-color:#ddfece; border:none;">
	<div align="left" style="width: 270px; background-color:#ddfece; border-left: 1px solid #333; padding-left: 10px;">
	<div align="left" style="width: 300px;">
       <a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a>
	   &nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a></div><br />
	 <br />
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

$result = mysql_query("SELECT * FROM members WHERE username != '$friend' and member_id != '".$display['member_id']."' AND confirmation = '1' AND type != 'Admin' ORDER BY member_id DESC LIMIT 5");
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
  echo '</div></a><br />';
  echo '</div>';
  echo '<br />';	
   } 
   ?>
			</div>
    		
</td>
  </tr>
</table>
</center>
</div><!-- end container -->

	</div><!-- end content -->
	<!-- end footer -->
	
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
<?php } ?>
<?php ob_flush(); ?>