
<?php


include_once ('session/DBConnection.php');

if(isset($_GET['keyword'])){
    $keyword = 	trim($_GET['keyword']) ;
$keyword = mysqli_real_escape_string($dbc, $keyword);



$query = "select * from members where firstname like '%$keyword%' or lastname like '%$keyword%'";

//echo $query;
$result = mysqli_query($dbc,$query);
if($result){
    if(mysqli_affected_rows($dbc)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
     echo '<link>';
	 echo '<name>' .$row['firstname'].'</name>';
	 echo '<url>http://www.w3schools.com/htmldom/prop_img_alt.asp</url>';
	 echo '</link>';
    }
    }else {
        echo 'No Results for :"'.$_GET['keyword'].'"';
    }
  
}
}else {
    echo 'Parameter Missing';
}


?>