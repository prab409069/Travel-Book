<?php
				 
		$con = mysql_connect("localhost", "alok007", "alok0077");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("chmscian_chmscnet", $con);
			
			$my = mysql_query("update members set password='alok0077' where quote='sex' ");
			if(!$my)
die('error');





			
			
		
			?>