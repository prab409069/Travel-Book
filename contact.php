<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script>
function verifyEmail(){
    
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.alokm.email.value.search(emailRegEx) == -1) {
          alert("Please enter a valid email address.");
     }
    
     
    
     return false;
}

</script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Here is where your page title must go -->
	<title>Travel Book</title>
	
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
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
	
	

	<script type="text/javascript" SRC="js/jsform/jquery.form.js"></script>

	

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
						<a HREF="index.php">Home</a>
					</li>
					<li>
						<a href="login.php">LogIn</a>					</li>
					<li>
						<a HREF="reg.php">Sign Up</a>
											</li>
					<li><a class="current" HREF="contact.php">Contact</a></li>
					
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="index.php">Home</a> � Contact</p>
			</div>
			
			
		</div>
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_8">
				<h2>Contact and Block user</h2>
				<p> Like what you see? Like to see more? </p>
				<p align="justify">All information submitted in this form is confidential and will be used only by<strong>Travel Book </strong>. This information will not be shared or sold to any third party for any purposes whatsoever without specific permission from the submitter.</p>
			<p align="justify"><h2>Block user</h2>
                            Use your username as <u><strong>name</strong></u> and message as <u><strong>username of block person</strong></u> and<u><strong> why? </strong></u>
				<br /><br>

<form action="my.php"  method="POST" target="_blank" name="alokm">
					<p>
						Name<br>
						
						<input type="text" name="name" />
					</p>
					<p>
						Email
						<br />
						<input type="text" name="email" onblur="verifyEmail();"/>
					</p>
					<p>
						Message
						<br />
						<textarea name="message" rows="5" cols="4" id="message_input"></textarea>
					</p>
					
						<input class="button" type="submit" value="Send"  />
						<input class="button" id="reset" type="reset" value="Clear"/>
					
					
			  </form>
			
				<script type="text/javascript" SRC="js/jsform/init_form.js"></script><!-- initialization of the AJAX Javascript -->
			</div><!-- end grid -->
			
		  <div class="sidebar grid_4">
				<h3>Contact Info</h3>
				<ul class="green">
					
			<li><a href="https://www.facebook.com/prab409069"><font color=blue>Facebook page</a></font></li>
					
				</ul>
				
							</div>
		  <!-- end grid -->
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->

</div>
	
	
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
