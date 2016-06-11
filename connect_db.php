<?php
	$link =mysql_connect("localhost","root","P@ssw0rd");
	if($link){
		mysql_select_db("sicitem",$link);
	}
?>
