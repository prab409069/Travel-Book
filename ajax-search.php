<?php session_start();?>

<?php include_once ('session/database_connection.php');

if(isset($_GET['keyword'])){
    $keyword = 	trim($_GET['keyword']) ;
$keyword = mysqli_real_escape_string($dbc, $keyword);


$query = "select * from members where confirmation ='1' AND firstname like '%$keyword%' OR confirmation ='1' AND lastname like '%$keyword%'";

//echo $query;
$result = mysqli_query($dbc,$query);
if($result){
    if(mysqli_affected_rows($dbc)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  $uid = $row['member_id'];
     echo '<br /><div align="left" style="text-transform:capitalize;"><a href="friends_profile.php?userid='.$uid.'"><b><img class="framed" height=40 width=40 align="left" SRC="'. $row['image'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" /></a>&nbsp;<a href="friends_profile.php?userid='.$uid.'" style="padding-left: 10px;">'.$row['firstname']. " " .$row['lastname'].'</b></a><br /><br /><br /></div><div style="border-top: 1px dotted #fff;"></div>';
    }
    }else {
        echo 'No Results for :"'.$_GET['keyword'].'"';
    }
  
}
}else {
    echo 'Parameter Missing';
}

?>
