<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />

    <!-- /CSS -->
		
    <!-- JQUERY & PLUGINS -->
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
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
	
	<!-- Here is where your page title must go -->
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Travel Book  <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>		
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
	
	<script SRC="js/portfolio.js" type="text/javascript"></script>

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
                <li> <a href="home.php">Home</a>
                    
                </li>
              
               
                      <li><a href="profile.php">Profile</a></li>
                      <li><a href="info.php">Info</a></li>
                      <li><a class="current" href="photos.php">My Photos</a></li>
                   
            
                <li> <a href="friends.php">Friends <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
    
                </a>                </li>
                <li> <a href="mail.php">Messages <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?></a> </li>
                
               
              </ul>
			
            </div>
		
	  </div><!-- end container -->
		<div class="clear"></div>
	</div><!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a> » Photos</p>
			</div><!-- end grid -->
			
			<div class="grid_3">
				<form class="search" action="">
					<input type="text" class="search" id="searchbox" value="Search" onclick="this.value='';" /><br />
<div id="display">
</div>

			  </form>
			</div><!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content" style="min-height:400px;">
		<div class="container_12 clearfix">
			<ul class="portfolio clearfix"><a class='basic' href="#" style="text-decoration:none;">Upload Photo</a><br />
			<div id="basic-modal-content" style=" width: 300px; height: 200px;">
                <form action="saveupload.php" method="post" enctype="multipart/form-data">
 <br /><br /><br /><br /><br /><span style="color:#FFFF00">Choose photo to upload:</span><br />
    <input name="image" type="file" style="width:250px;"> 
  <br />
  <span style="color:#FFFF00">Photoname:</span><br />
    <label>
    <input name="image_name" type="text" style="width: 200px; color: #fff; background-color: #333;" />
    </label>
  
  <br /><br />
						  <input name="upload" type="submit" class="button" value="Upload" id="" />
                    
</form>
              </div><?php
	include('session/DBConnection.php');
$user=$_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM uploads WHERE username='$user'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	echo '<span>Photos </span> <font size="2" color="blue"><b>' . $numberOfRows .'</b></font><br />'; 
	?><br /><?php
									$con=mysql_connect("localhost","root","");
									
									mysql_select_db("face", $con);
									if (isset($_GET['chmsc']))
									{
									$chmsc=$_GET['chmsc'];
									$chmsc=mysql_real_escape_string($chmsc);
									}
									else
										$chmsc=1;
									?>
                                         
                                            <?php
 									$user = $_SESSION['log']['username'];
									$result=mysql_query("SELECT * FROM uploads WHERE username='$user'",$con);
									$rows=mysql_num_rows($result);
									$per_page=9;
									
									$total_pages=ceil($rows/$per_page);
										echo"page $chmsc of $total_pages<br>";
										
										if($chmsc!=1)
										{
										echo "<a href='photos.php?chmsc=1'>First </a>","  ";
										$previous=$chmsc-1;
										echo "<a href='photos.php?chmsc=$previous'> Previous</a>", "  ";
										}
										if (($chmsc!=1) && ($chmsc!=$total_pages))
										echo "||";
										if($chmsc!=$total_pages)
										{
										$next=$chmsc+ 1;
										echo "<a href='photos.php?chmsc=$next'>Next </a>","  ";
										echo "<a href='photos.php?chmsc=$total_pages'> Last</a>";
										}
										echo "<br/><br/>";
										$x=($chmsc-1)*$per_page;
										
										$sql="SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM uploads WHERE username= '$user' ORDER BY upload_id DESC limit $x, $per_page";
										$z= mysql_query($sql, $con);
									
									while($r = mysql_fetch_array($z))
									
									{
						
						echo '<li class="grid_view grid_4 clearfix">';				
					echo '<a class="lightbox clearfix" HREF="'. $r["image"] .'" rel="prettyPhoto[gallery]">';
					echo '<img height=189 width=262 class="framed" SRC="'. $r["image"] .'" alt="'. $r["image_name"] . '" /></a>';
					echo '<div class="text">';
					echo '<h3><a HREF="">' .$r['image_name']. '</a></h3>';
					echo '<p>';
											 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($r['TimeSpent'] / (60 * 60 * 24));
			$remainder = $r['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $r['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

			$id = $r['upload_id'];		
				echo '</p>';
						echo '<a HREF="portfolio_single.php"><small>';
						$result = mysql_query("SELECT * FROM photoscomment WHERE upload_id='" .$id."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<a href="photoscomment.php?pid=' . $id . '">';
	echo $numberOfRows .'&nbsp;Comment/s</small></a>';
					echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo '</div></li>';
									/*echo '<div align="left">';
									echo '<a href="'. $row["image"] .'" title="Photos" rel="gallery-plants" class="thickbox">';
									echo "<img width=100 height=100 src='" . $row["image"] . "'>";
									echo '</a>';
									echo '<br />';
									echo '<br />';
									echo '<span class="style40">' .$row["image_name"]. "</span>";
									echo '<br />';
									$name =  $row['username'];
									$query = mysql_query("SELECT * FROM members WHERE username = '$name' ") or die (mysql_error()); 
									$display = mysql_fetch_array($query);
									
									echo "uploaded by:  " . '<b class="style40">' . $display["firstname"] . " " . $display["lastname"] . '</b>';
									echo '</div>';
									*/
									  
									
									}				
										
									?>
				<!-- end grid -->
				<!-- end grid -->
			   
			</ul>
			<!-- end portfolio -->
			<!-- end grid -->
	  </div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->

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
