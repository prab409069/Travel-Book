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
<title>CHMSCnet - Administrator </title>	
<link rel="shortcut icon" HREF="images/aaa.png" />
	<!-- METAS -->
    <meta name="description" content="" />
    <meta name="keywords" content="devilcantburn, envato, template, webdesign, julian chaniolleau" />
	<!-- /METAS -->
    
    <!-- CSS -->

	<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/violine.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	

    <!-- /CSS -->
		
    <!-- JQUERY & PLUGINS -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	
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
url: "search3.php",
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
    <!-- /CUFON REPLACEMENT FONT -->

      
    <style type="text/css">
<!--
a:visited {
text-decoration: none;
}
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

<!-- HEADER -->
<div id="header">
    <!-- content of header -->
    <div class="content">
    
    <!-- Logo -->
    <div id="logo">
        <h1><a HREF="index.php" title="face"><span class="inv">face</span></a></h1>
    </div>
    <!-- /Logo -->
    
    <!-- Twitter -->
   
    <!-- /Twitter -->
    

    	<!-- Menu -->
         <div class="nav">
			<ul><li><a HREF="memberlist.php" class="navstyle " title="Home"><span>Home</span></a></li>
                <li> <a href="#" class="navstyle "><span>Members</span></a>
                    <ul>
                     <li><a href="student.php"><span>Student</span></a></li>
                      <li><a href="faculty.php"><span>Faculty</span></a></li>
					  <li><a href="staff.php"><span>Staff</span></a></li>
					   <li><a href="alumni.php"><span>Alumni</span></a></li>
                    </ul>
                </li>
                <li> <a href="logout.php" class="navstyle "><span>Logout</span></a>
                    
                </li>
               
			</ul>
		</div>
        <!-- /Menu -->
        
        <!-- Search -->
    	<div id="search_form">
        <form class="search" action="">
            <div class="field"><input type="text" name="keyword" id="searchbox"  class="search" value="Search..." onclick="this.value='';" /></div>
<div id="display">
</div>

		  </form>
      </div>
        <!-- /Search -->
    
<br class="clear" />
  </div>
    <!-- /content of header -->
</div>
<!-- /HEADER -->

<!-- MAIN -->
<div id="main">
    <!-- content of main -->
    <div class="content" style="padding-bottom: 0px; padding-top: 0px;">
    
<!-- Cols > 1 -->
<div class="col_1">New Members
<div class="separator_1" style="height: 12px;">
</div><img src="images/image_31.png" alt="" width="17" height="16" /> <a href="studentlist.php" style="text-decoration:none;">Students &nbsp;&nbsp;<?php
$result = mysql_query("SELECT * FROM members WHERE confirmation='0' AND type='Student'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="facultylist.php" style="text-decoration:none;">
	<img src="images/sent.png" alt="" width="17" height="16" /> Faculty &nbsp;&nbsp;<?php
$result = mysql_query("SELECT * FROM members WHERE confirmation='0' AND type='Faculty'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="stafflist.php" style="text-decoration:none;">
	<img src="images/draft.png" alt="" width="17" height="16" /> Staff &nbsp;&nbsp;<?php
$result = mysql_query("SELECT * FROM members WHERE confirmation='0' AND type='Staff'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a><br />
	<a href="alumnilist.php" style="text-decoration:none;">
	<img src="images/trash.png" alt="" width="17" height="16" /> Alumni &nbsp;&nbsp;<?php
$result = mysql_query("SELECT * FROM members WHERE confirmation='0' AND type='Alumni'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
    </div>
</div>
<!-- /Cols > 1 -->
 <div class="col_3 design">
<div align="left" >
<table width="700" cellspacing="1" cellpadding="2" style="border-left: 1px solid #333;border-bottom: 1px solid #333;border-right: 1px solid #333;">
<tr>
<td>
<table width="800" cellspacing="1" cellpadding="2" border="0" bgcolor="#CCCCCC" style="width: 700px;"><tr>
<td align="left" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold; width: 400px;"><strong>&nbsp;face</strong></td>
</tr>

<tr>
<?php
$result = mysql_query("SELECT * FROM members WHERE confirmation = '1' AND type != 'Admin' ORDER BY member_id DESC LIMIT 5");
while($row = mysql_fetch_array($result))
{?>
<td align="center" bgcolor="#FFFFFF" width="250"><a href="memberinfo2.php?id=<?php echo $row["member_id"]; ?>" valign="top"><img style="padding-top: 15px; border-width: 0px; margin-left: 20px;" align="left" width=50 height=50 alt="Unable to View" src="<?php echo $row["image"]; ?> "></a><br />&nbsp;<span style="text-transform:capitalize; margin-right: 0px; text-decoration: none;"><a href="memberinfo2.php?id=<?php echo $row["member_id"]; ?>" style="margin-left: -272px;"> <?php echo $row['firstname'] . " " . $row['lastname']; ?></a></span>&nbsp;<span style="text-transform: capitalize; margin-right: 0px; text-decoration: none; margin-left: 30px;"> Registered as  <?php echo $row['type']?></span></td>
</tr>
<?php
}

?>
</table>
</td>
</tr><br />
</table>
</div>
</div>
<!-- /Cols > 3 -->

<br class="clear" />
    
    </div>
    <!-- /content of main -->
</div>
<!-- /MAIN -->

<script type="text/javascript"> Cufon.now(); </script></body>
</html>