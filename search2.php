<style type="text/css">
<!--
a {
color: #51B22E;
text-decoration: none;
}
a:hover {
color: #FFFF33;
text-decoration: underline;
}
#ngalan {
float: left; text-transform: capitalize; margin-left: 5px;
}
#type{
float: left; text-transform: capitalize; margin-left: 5px; font-size:9px; color: #999;
}
#res {
background-color: #333; border:1px solid #888; color:#BBB; width=100px; height:110px; text-transform: capitalize;
}
-->
</style>

<?php
include('session/config.php');
if($_POST)
{

$q=$_POST['searchword'];
$con = '1';
$sql_res=mysql_query("SELECT * FROM members WHERE firstname LIKE '%" . $q. "%' or lastname LIKE '%" .$q . "%' AND confirmation = '$con' ORDER BY member_id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['firstname'];
$lname=$row['lastname'];
$img=$row['image'];
$type=$row['type'];
$id=$row['member_id'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);

/*				$c= $row['confirmation'];
				if ($c=="1")
				  header("location:memberlist.php");
				else
    				header("location:home.php");
*/
?>
<div class="display_box" id="res">
<br /><br /><?php 
echo '<a href=userprofile.php?userid=' . $id . '><img src="' . $row['image'] . '" width=30 height=50 class="framed" style="float:left; margin-left:6px; margin-top: -4px; margin-bottom: 7px;" /></a>';
echo '&nbsp;';
echo '<a href=userprofile.php?userid=' . $id . '><span id="ngalan">' . $final_fname . '&nbsp;';
echo $final_lname . '</span></a><br/>';
echo '<span id="type">' . $type .'</span>';
?>
</div>


<?php

}

}
else
{
 echo "No results";
}


?>


