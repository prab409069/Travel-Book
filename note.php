<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Here is where your page title must go -->
	<title>Travel Book </title>
	
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
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
      <h2 class="logo"> <a href="index.php">Travel Book</a> </h2>
    </div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="login.php">LogIn</a> </li>
        <li> <a href="stud_reg.php">Sing Up</a>
            
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li></li>
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
				<p><a HREF="index.php">Home</a> » Note</p>
			</div><!-- end grid -->
			
			<div class="grid_3">
				<form class="search" action="">
					<p>
						<input id="text_field" type="text" />
						<input class="button" value="Search" type="submit" />
					</p>
				</form>
			</div><!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content" style="height: 330px;">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 350px;">
			  

				<fieldset>
					
					
							<label for="text_field" style="color:#000099">Thank You for registering at face!!</label>
				<br /><br />
                <label for="text_field" style="color:#000099">now you login with your username and password.<a href="login.php"><u>Login</u></a></label>
				</fieldset>

				
		  </div>
			<!-- end grid -->
			
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
	
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
