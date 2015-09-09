<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	
	<!-- Here is where your page title must go -->

<title>face - Administrator </title>
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
include ("session/DBConnection.php");
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
        <li> <a href="memberlist.php">Home</a> </li>
        <li> <a href="#">Members</a>
            <ul>
            <li><a href="student.php"><span>Student</span></a></li>
                      <li><a href="faculty.php"><span>Faculty</span></a></li>
					  <li><a href="staff.php"><span>Staff</span></a></li>
					   <li><a href="alumni.php"><span>Alumni</span></a></li>

            </ul>
        </li>
        
        <li> <a href="logout.php">Logout</a></li>
      </ul>
      <!-- end sf-menu -->
    </div>
    <!-- end grid -->
  </div>
  <!-- end container -->
  <div class="clear"></div>
</div>
<!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
			
			<?php  
		$user= $_GET['id'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$user'") or die (mysql_error()); 
							$show = mysql_fetch_array($query);	
															?>
				<a href="#" id="catchy"><?php echo $show['firstname'] . " " . $show['lastname']; ?></a> &gt;&gt; Info&nbsp;&nbsp;
			</div>
			<!-- end grid -->
		
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix">
				<ul class="blog_brief">
				  <li class="entry clearfix">
<?php
$id = $_GET['id'];$image=mysql_query("SELECT * FROM members WHERE member_id = '$id'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['image']= $row['image'];
			echo '<img class="grid_4 alpha blog_img framed" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
    		/*			echo "<img class='grid_4 alpha blog_img framed' SRC='" . $_SESSION['image'] . "' alt='Unable to view' />";
*/			/*echo "<img width=190 height=180 alt='Unable to View' src='" . $_SESSION['image'] . "'>";*/
?>
<?php  
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM members WHERE member_id = '$id'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
						<div class="grid_7 omega">
							<h4><a href="" id="catchy"><?php echo $result['firstname'] . " " . $result['lastname']; ?></a></h4>
							<p><?php echo date("M  d, 20y"); ?>&nbsp;&nbsp;Login as <span id="type"><?php echo $result['type']?></span>							</p>
							<br />
							
							<?php
							$position=120; // Define how many character you want to display.

$message= $result['quote']; 
$post = substr($message, 0, $position); 

//echo $post;
//echo "...";?>
						<div id="quotes" style="overflow: auto; width:320px; padding-left:30px;"><?php echo '<span style="padding-left: 35px; padding-top: 100px;">' . $post ."...</span.";?></div>
</li></ul><div id="divider"></div>
				<br /><fieldset style="width: 700px;">
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
			
		  </div>
			<!-- end grid -->
<!-- /Cols 1 -->
    
<br class="clear" />
    
</div>
		</div><!-- end container -->
	</div>
	<!-- end content -->
	<!-- end footer -->
	<div id="sub_footer">
      <div class="container_12 clearfix">
        <div class="grid_12"> <a class="logo left" href="#">face</a>
          <p><small>&copy;&nbsp; face. All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a  href="about.php">About Us</a></small></p>
        </div>
        <!-- end grid -->
      </div>
	  <!-- end container -->
    </div>
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
