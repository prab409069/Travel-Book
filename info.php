<?php ob_start(); ?>
<?php session_start();?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#edit").click( function() {
		$("#forms").fadeIn();
		$("#cancel1").fadeIn();
		$("#form01").fadeOut();
		$("#edit").fadeOut();
	});	
	$("#cancel1").click( function() {
		$("#forms").fadeOut();
		$("#cancel1").fadeOut();
		$("#form01").fadeIn();
		$("#edit").fadeIn();
	});	
	$("#cancel2").click( function() {
		$("#forms2").fadeOut();
		$("#cancel2").fadeOut();
		$("#form02").fadeIn();
		$("#edit2").fadeIn();
	});	
	$("#edit2").click( function() {
		$("#forms2").fadeIn();
		$("#cancel2").fadeIn();
		$("#form02").fadeOut();
		$("#edit2").fadeOut();
	});	
	$("#change").click( function() {
		$("#account").fadeIn();
		$("#cancel3").fadeIn();
		$("#pass").fadeOut();
		$("#change").fadeOut();
	});	
	$("#cancel3").click( function() {
		$("#account").fadeOut();
		$("#cancel3").fadeOut();
		$("#pass").fadeIn();
		$("#change").fadeIn();
	});	
});
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
	<link rel="stylesheet" type="text/css" href="css/pswd.css" />
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
		
function passwordStrength(password)

{

        var desc = new Array();

        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Medium";
        desc[4] = "Strong";
        desc[5] = "Strongest";

        var score   = 0;

        //if password bigger than 6 give 1 point

        if (password.length > 6) score++;

        //if password has both lower and uppercase characters give 1 point      

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

        //if password has at least one number give 1 point

        if (password.match(/\d+/)) score++;

        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

        //if password bigger than 12 give another 1 point

        if (password.length > 12) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	
	<!-- Here is where your page title must go -->
 <?php
include ("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>Travel Book <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>
	
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
$error = "";
?>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
				<h2 class="logo">
					<a HREF="home.php"><span style="margin-top: 20px;">Travel Book</span></a>
				</h2>
			</div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="home.php">Home</a> </li>
        
              <li><a href="profile.php">Profile</a></li>
              <li><a class="current" href="info.php">Info</a></li>
              <li><a href="photos.php">My Photos</a></li>
        
        <li> <a href="friends.php">Friends
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
    
    </div>
   
  </div>

  <div class="clear"></div>
</div>

	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a id="cap" href="profile.php"><?php echo $display['firstname'] . "  " . $display['lastname'] ?></a> � Photos</p>
						
				<p> <?php
include ("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
	
if(isset($_POST['edit1'])){ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$birthdate = ($_POST['birthday_month'] . "/" . $_POST['birthday_day']. "/" . $_POST['birthday_year'] );
$b_month = $_POST['birthday_month'];
$b_day = $_POST['birthday_day'];
$b_year = $_POST['birthday_year'];
$gender = $_POST['gender'];
$relationship = $_POST['relationship'];
$hometown = $_POST['hometown']; {

$query = "UPDATE members SET firstname='$firstname', lastname='$lastname', birthdate='$birthdate', b_month='$b_month', b_day='$b_day', b_year='$b_year', address='$address', contact_no='$contact_no', email='$email', gender='$gender', relationship='$relationship', hometown='$hometown' WHERE username='$user'";
$result = mysql_query($query);
}

// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}

}

if(isset($_POST['edit2'])){ 
$college = $_POST['college'];
$high_school = $_POST['high_school'];
$quote =  $_POST['quote'];
$aboutme = $_POST['aboutme'];
$interest = $_POST['interest']; {

$sql2 = "UPDATE members SET interest='$interest', quote='$quote', college='$college', high_school='$high_school', aboutme='$aboutme'  WHERE username='$user'";
$result2 = mysql_query($sql2);
}

// if successful redirect to delete_multiple.php 
if($result2){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}

}
if(isset($_POST['edit3'])){ 
if(isset($_POST['old_pass'])){
$old = $_POST['old_pass'];}
if(isset($_POST['password'])){
$new = $_POST['password'];}
 {
 $oldpass = $display['password'];
 if($old !=  $oldpass){
$error = "Password Incorrect...";
}

if($old ==  $oldpass) {
if (empty($error)) {
$sql3 = "UPDATE members SET password='$new' WHERE username='$user'";
$result3 = mysql_query($sql3);
}

// if successful redirect to delete_multiple.php 
if($result3){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}
}
}

if (empty($error)) { $error = "Password updated"; }

}

?></p>
			</div>
			<!-- end grid -->
			
			<div class="grid_3">
				<form class="search" action="">
					<p>
						<input id="text_field" type="text" />
						<input class="button" value="Search" type="submit" />
					</p>
				</form>
			</div>
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 700px;">
			  <fieldset style="width: 700px;">
				<legend>Account Information</legend>
					<div id="pass">
					<span style="color:#222; font-weight:bold;">Username : </span><span id="info" style="margin-left: 61px; text-transform:none;"><?php echo $display['username'] ?></span><br />
					<script type="text/javascript">
					var password = <your password here>
var dispPassword = new String();
var n = password.length;
while(dispPassword.length < n){ 
        dispPassword.push("*"); 
}
document.getElementById("password").innerHTML = dispPassword;

</script>
					<span style="color:#222;; font-weight:bold;">Password : </span><span id="password" style="margin-left: 61px;">
			  <input type="password" name="password" value="<?php echo $display['password'] ?>" style="border: 0px black solid; width: 100px;
					font-weight: bold;" "readonly=readonly"></span><span style="color:#ff0000;"><?php echo $error;?></span></div>
					�<div id="change" style="font-size: 10px;"><a>Change Password</a></div>
				<div id="cancel3" style="display:none; padding-left: 620px;"><a>Cancel</a></div>
<div id="account" style="display:none;">
					<form id="form1" method="post" action="info.php">
						
						<p><label for="text_field">Current Password:</label>
						<div id="entry-text">
						 <input type="password" name="old_pass"/><br />
					  </div>
						</p>
						<p><label for="text_field">New Password:</label>
						<div id="entry-text">
						<input id="text" name="password" type="password" onKeyUp="passwordStrength(this.value)" /></label> 
						<br />
						<label for="passwordStrength">Password strength</label>

                        <div id="passwordDescription">Password not entered</div>

                        <div id="passwordStrength" class="strength0"></div>

                        </div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit3"/>
							<input class="button" value="Clear" type="reset" />
						</p>
	    </form></div>
			  </fieldset>

				<fieldset style="width: 700px;">
					<legend>Basic and Contact information</legend>
					<div id="edit" style="padding-left: 620px;"><a>Edit</a></div>
					<div id="cancel1" style="display:none; padding-left: 620px;"><a>Cancel</a></div>
					<div id="form01">
					<span style="color:#222; font-weight:bold;">Name : </span><span id="info" style="margin-left: 61px;"><?php echo $display['firstname'] . " " . $display['lastname'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Address : </span><span id="info" style="margin-left: 47px;"><?php echo $display['address'] ?></span><br />
					<?php $hometown = $display['hometown'];
					if($hometown != ""){
					echo '<span style="color:#222;; font-weight:bold;">Hometown : </span><span id="info" style="margin-left: 30px;">' . $hometown . '</span><br />'; } ?>
					<?php $contact = $display['contact_no'];
					if($contact != ""){
					echo '<span style="color:#222;; font-weight:bold;">Contact No. : </span><span id="info" style="margin-left: 25px;">' . $contact .'</span><br />'; } ?>
					<span style="color:#222; font-weight:bold;">Email : </span><span id="uu" style="margin-left: 64px;"><?php echo $display['email'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Birthdate : </span><span id="info" style="margin-left: 39px;"><?php echo $display['birthdate'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Gender : </span><span id="info" style="margin-left: 53px;"><?php echo $display['gender'] ?></span><br />
				<?php $rel = $display['relationship'];
					if($rel != ""){
					echo '<span style="color:#222;; font-weight:bold;">Relationship : </span><span id="info" style="margin-left: 20px;">' .$rel . '</span><br />'; }?></div>
					
<div id="forms" style="display:none;">
					<form id="form1" method="post" action="info.php">
						
						<p>
						
							<label for="text_field">Firstname:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="firstname" value="<?php echo $display['firstname'] ?>"/></div>
					  </p>

						<p>
							<label for="text_field">Lastname:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="lastname"   value="<?php echo $display['lastname'] ?>"/></div>
						</p>
						<p><label for="text_field">Address:</label>
					  <div id="entry-text">
							 <input type="text" id="cap" name="address"   value="<?php echo $display['address'] ?>" /></div>
						</p>
						<p><label for="text_field">Hometown:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="hometown"   value="<?php echo $display['hometown'] ?>" /></p></div>
						<p>
						  <label for="text_field">Contact No.:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="contact_no"   value="<?php echo $display['contact_no'] ?>" /></div>
						<p><label for="text_field">Email:</label>
						<div id="entry-text">
							 <input type="text" name="email" id="username" value="<?php echo $display['email'] ?>" /></div>
						</p>
						<p><label for="text_field">Birthdate:</label>
					  <div id="entry-text">
							 <select class="" style="width: 100px;" name="birthday_month" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, &quot;birthday_day&quot;, &quot;birthday_year&quot;);});">
                                  <option selected="selected"><?php echo $display['b_month'] ?></option>
                                  <option value="-1">Month:</option>
                                  <option value="January">Jan</option>
                                  <option value="February">Feb</option>
                                  <option value="March">Mar</option>
                                  <option value="April">Apr</option>
                                  <option value="May">May</option>
                                  <option value="June">Jun</option>
                                  <option value="July">Jul</option>
                                  <option value="August">Aug</option>
                                  <option value="September">Sep</option>
                                  <option value="October">Oct</option>
                                  <option value="November">Nov</option>
                                  <option value="December">Dec</option>
                        </select>
                                <select name="birthday_day" style="width: 100px;"  onchange="bagofholding" autocomplete="on">
                                  <option selected="selected"><?php echo $display['b_day'] ?></option>
                                  <option value="-1">Day:</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                </select>
                                <select name="birthday_year" style="width: 100px;" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});" autocomplete="on">
                                  <option selected="selected"><?php echo $display['b_year'] ?></option>
                                  <option value="-1">Year:</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select></div>
						</p>
						<p><label for="text_field">Gender:</label>
					  <div id="entry-text">
							 <select name="gender" id="drop cap">
                                <option selected="selected"><?php echo $display['gender'] ?></option>
                                <option value="-1">-Select Gender-</option>
                                <option>Female</option>
                                <option>Male</option>
                          </select></div>
						</p>
						<p><label for="text_field">Relationship:</label>
						<div id="entry-text">
							 <select name="relationship" id="drop cap">
                                <option selected="selected"><?php echo $display['relationship'] ?></option>
                                <option value="-1">-Select Status-</option>
                                <option>Single</option>
                                <option>In a relationship</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Seperated</option>
                          </select>
                      </div>
						</p><p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit1"/>
							<input class="button" value="Clear" type="reset" />
						</p>
						
					</form></div>
				</fieldset>
				<br />
				<fieldset style="width: 700px;">
				<legend>Education, Interest and Entertainment</legend>
				<div id="edit2" style="padding-left: 620px;"><a>Edit</a></div>
				<div id="cancel2" style="display:none; padding-left: 620px;"><a>Cancel</a></div>

					<div id="form02">
					<?php $high = $display['high_school'];
					if($high != ""){
					echo '<span style="color:#222; font-weight:bold;">High School :</span><span id="info" style="margin-left: 23px;">' .$high . '</span><br />'; } ?>
					<?php $college = $display['college'];
					if($college != ""){
					echo '<span style="color:#222; font-weight:bold;">College :</span><span id="info" style="margin-left: 55px;">' . $college . '</span><br />'; } ?>
					<?php $interest = $display['interest'];
					if($interest != ""){
					echo '<span style="color:#222; font-weight:bold;">Interests :</span><span id="info" style="margin-left: 45px;">' . $interest .'</span><br />'; } ?>
					<?php $aboutme = $display['aboutme'];
					if($aboutme != ""){
					echo '<span style="color:#222; font-weight:bold;">About You :</span><span id="info" style="margin-left: 34px;">' . $aboutme. '</span><br />'; } ?></div>
<div id="forms2" style="display:none;">
					<form id="form1" method="post" action="info.php">
						<p><label for="text_field">High School:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="high_school"   value="<?php echo $display['high_school'] ?>" /></div>
						</p>
						<p><label for="text_field">College:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="college"   value="<?php echo $display['college'] ?>" /></div>
						</p>
				<p><label for="text_field">Interests:</label>
					  <div id="entry-text">
						<input type="text" id="cap" name="interest" value="<?php echo $display['interest'] ?>" /></div>
</p>				
						<p>
						<label for="text_field">About You:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="aboutme"   value="<?php echo $display['aboutme'] ?>" /></div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit2"/>
							<input class="button" value="Clear" type="reset" />
						</p>
		</form></div>
				</fieldset>
		  </div>
			<!-- end grid -->
<!-- /Cols 1 -->
    
<br class="clear" />
    
</div>
</div><!-- end container -->
	</div>
	<!-- end content -->
	<!-- end footer -->
	
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>

<?php ob_flush(); ?>