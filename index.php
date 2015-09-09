<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/cycle.css" />
	
	<!-- Here is where your page title must go -->
	<title>Travel Book </title>
	
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="description" name="Social networking " />
    <meta content="KeyWords" name="face,login,sign up,chat,message,photos,groups" />
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	
	$("#bi").click( function() {
		$("#backin").fadeIn();
		$("#bi").fadeOut();
	});
	
	$("#mis").click( function() {
		$("#mission").fadeIn();
		$("#mis").fadeOut();
	});
	
	$("#vis").click( function() {
		$("#vision").fadeIn();
		$("#vis").fadeOut();
	});
	
	$("#man").click( function() {
		$("#mandate").fadeIn();
		$("#man").fadeOut();
	});	
	
	$("#int").click( function() {
		$("#intrams").fadeIn();
		$("#int").fadeOut();
	});	
	
	$("#che").click( function() {
		$("#cheer").fadeIn();
		$("#che").fadeOut();
	});	
	
	$("#ac").click( function() {
		$("#acq").fadeIn();
		$("#ac").fadeOut();
	});	
	
});
</script>
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Cycle -->
	<script type='text/javascript' SRC="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			if ($('#slides').length > 0) {
				$('#slides').cycle({ 
					fx: 'fade',
					speed: 750,
					timeout: 6000, 
					randomizeEffects: false, 
					pager:  '#slidepager',
					cleartypeNoBg: true
				});
			}
		});
	</script>
	<!-- -END- Cycle -->
	
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
				<h2 class="logo">
					<a HREF="index.php">Travel Book</a>
                    
				</h2>
			</div><!-- end grid -->
			<div class="grid_9">
				<ul class="sf-menu">
					<li>
						<a class="current" HREF="index.php">Home</a>
					</li>
					<li>
						<a href="login.php">LogIn</a>					</li>
					<li>
						<a HREF="reg.php">Sign Up</a>

			
					</li>
					<li><a HREF="contact.php">Contact</a></li>
					
					
				</ul>
				<!-- end sf-menu -->
			</div><!-- end grid -->
		</div><!-- end container -->
		<div class="clear"></div>
	</div><!-- end header -->

	
	<div id="content">
	  <div class="container_16 clearfix">

			<div id="featured">
				<div class="grid_12">
					<div id="slideshow">
					<form  method="post" action="login.php">
						<h3>&nbsp;</h3>

						<p>
							<label for="text_field">Username:</label>
							
							<input  type="text"  onclick="this.value='';" name="username"/>
						</p>

						
							<label for="password">Password:</label>
						
							<input name="password" type="password" value=""  />
						

						<br /><br />
							<input class="button" value="login" type="submit" name="login"/>
													

					</form><br>
						<div id="slides">


							<img class="framed" SRC="images/featured/a.jpg" alt="Slide 1" />
							<img class="framed" SRC="images/featured/b.jpg" alt="Slide 2" />
							<img class="framed" SRC="images/featured/c.jpg" alt="Slide 3" />
							<img class="framed" SRC="images/featured/d.jpg" alt="Slide 4" />
							
						</div>
						<div id="slidepager"></div>
					</div><!-- end slideshow -->
				</div><!-- end grid -->
				<div class="clear"></div>
			</div><!-- end featured -->
			<div class="grid_4">
				
				<p align="justify">
				


			</div>
			


	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
