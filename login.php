<?php ob_start();
session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
	<title>face</title>
	
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
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
      <h2 class="logo"> <a href="index.php">Travel Book</a> </h2>
    </div>
    
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="index.php">Home</a> </li>
        <li> <a class="current" href="login.php">LogIn</a> </li>
        <li> <a href="reg.php">Sign Up</a>
                    </li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      
    </div>
    
  </div>
  
  <div class="clear"></div>
</div>

	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="index.php">Home</a> � LogIn</p>
				<p> <?php
  		require("session/DBConnection.php");
 		if (isset($_POST['login'])) 
  	{	
	
		$username = $_POST['username'];			
		$password = $_POST['password'];
	
		$result = mysql_query("SELECT * FROM members
				WHERE ((`members`.`username` = '$username') AND (`members`.`password` = '$password') AND (`members`.`confirmation` = '1'))");
				
				if (!$result) 
					{
					
header("location:login.php");
					}
					$numberOfRows = MYSQL_NUMROWS($result);				
					If ($numberOfRows == 0) 
						{
						echo " <font color= 'red'>Invalid username and password!</font>";
						
						}
					else if ($numberOfRows > 0) 
						{
						
						$_SESSION['is'];
						$_SESSION['log']['login']    = TRUE;
						$_SESSION['log']['username'] = $username;
						$session = "1";	
		$query = mysql_query("SELECT * FROM members WHERE username = '$username'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
				$image = $display['image'];
		$insert = "INSERT INTO users SET username = '$username', password = '$password', session_id= '', created_date = CURRENT_TIMESTAMP, modified_date = '0000-00-00 00:00:00', image = '$image'";
	$add_member = mysql_query($insert);
						
				$type= $display['type'];
				if ($type=="Admin"){
				  header("location:memberlist.php");
				  }
				else{
    				header("location:home.php");
    				}
				}
			}
?></p>
 	

			</div>
			
			
		</div>
	</div>
	
	<div id="content" style="min-height:350px;">
	<div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix" style="width: 410px;">
			  

				<fieldset>
					<legend>LogIn</legend>

					<form id="form1" method="post" action="login.php">
						<h3>&nbsp;</h3>

						<p>
							<label for="text_field">Username:</label>
							<br />
							<input id="txt_field" type="text" onclick="this.value='';" name="username"/>
						</p>

						<p>
							<label for="password">Password:</label>
							<br />
							<input id="password" name="password" type="password" value=""  />
						</p>

						<p>
							<input class="button" value="login" type="submit" name="login"/>
													</p>

					</form>

				</fieldset>

				
		  </div>
			
			<div class="sidebar grid_4">
	<div class="grid_3" style="width: 300px;"><ul class="flickr">
			<?php
	$sql  = "SELECT * FROM members WHERE confirmation = '1' AND type != 'Admin' AND image != 'uploads/propic.jpg' ORDER BY RAND() LIMIT 9";
$result = mysql_query($sql);
if($result > 0){
echo '<div align="center" style="margin-left: 35px; background: #111; color: #fff; width: 250px;">friends</div>'; }
while($row = mysql_fetch_assoc($result))
{
$first = $row['image'];
 ?>      <li  class="grid_1 alpha" style="margin-left: 35px;"><a href="#"><?php echo '<img width=60 height=60 title="'.$row['firstname'].'&nbsp;'. $row['lastname'].'" class="comment_gravatar framed" SRC="'.$first.'" />'; } ?></a></li>
		
				

			</ul>
			
			

					</div>
								</div>
			</div>
		</div>
	</div>
	
	
	
	
	<script type="text/javascript"> Cufon.now(); </script>
	
	
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
<?php ob_flush(); ?>