<?php session_start();?>
<style type="text/css">
<!--
.rounded, .blog_info, .framed, input, textarea, select, fieldset, legend, ul.pagination .current, a.switch_thumb
{ 
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
}
img.framed { padding:5px;}
img.framed { background-color:#333; border:1px solid #555; }
a img.framed:hover { background-color:#444;  }

-->
</style>
<?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	

//function createForm(){
?>

<?php 
	if (isset($_GET['msg'])){
		if (file_exists('msg.html')) {
		   $f = fopen('msg.html',"a+");
		} else {
		   $f = fopen('msg.html',"w+");
		}

      $nick = isset($_GET['nick']) ? $_GET['nick'] : "Hidden";
	  $image = $display['image'];
      $msg  = isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : ".";
      $line = "<p><span class=\"name\" style='text-transform:capitalize; color: #FFFFFF; font-weight: bold; font-size: 10px;'><img class='framed' src='$image' height=20 width=20 />&nbsp; $nick: </span><span class=\"txt\" style='color: #098202; font-size: 10px; 
	font-weight: bold;'>$msg</span></p>";
		fwrite($f,$line."\r\n");
		fclose($f);
		
		echo $line;
		
	} else if (isset($_GET['all'])) {
	   $flag = file('msg.html');
	   $content = "";
	   foreach ($flag as $value) {
	   	$content .= $value;
	   }
	   echo $content;

	}
?>	
