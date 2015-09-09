<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Here is where your page title must go -->
	<title>Travel Book</title>
	
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
        <li> <a class="current" href="index.php">Home</a> </li>
        <li> <a href="login.php">LogIn</a> </li>
        <li> <a href="login.php">Register</a>
            
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="icon" href="#"></a></li>
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
		  <!-- end grid -->
<div class="grid_3"></div>
<!-- end grid -->
	  </div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div align="center" class="grid_12" style="width: 930px;">
			  

				<fieldset>
					<legend> Terms of Use</legend>

			       
                    <div align="justify">To become a member of the Travel Book! service, you must read and accept all of the terms and conditions of this agreement. If you do not agree to be bound by the terms after you read this Agreement, you may not use the face service.
                      <br />
                      <br />
                      In the interest of making face  a fun way to connect and interact with other people, we ask that all members to follow key rules, including:
                      <br />
                      <br /><b>
                    
					  <br />
                     - You may only post a profile of yourself. Do not post a profile of another person.
                      <br />
					  <br />
                     - Do not post adult-oriented content (e.g. nudity, overtly sexual language or images, etc.)
                      <br />
					  <br />
                     - Do not post obscene, offensive, illegal or otherwise objectionable material.
                      <br />
					  <br />
                     - Do not harass, threaten or use abusive or vulgar languages and red flag words.
                      <br />
					  <br />
                     - Do not post a profile that includes discussions of illegal activities.
                      <br />
					  <br />
                     - Do not use this service for commercial purposes (i.e. spam, information gathering, etc.)
                      <br />
					  <br />
                     - Do not post a photo if it contains inappropriate hand gestures or  it shows nudity or photos that displays sexually explicit photograph of yourself or other people.
                 </b>

				    </div>
				</fieldset>

				
		  </div>
			<!-- end grid -->
			
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
