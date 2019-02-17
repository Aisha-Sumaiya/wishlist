<?php
	include("connection.php");
	$wish = mysql_real_escape_string( $_POST['wish']);
	mysql_query("INSERT INTO wishlist (wishes) VALUES ($wish)");
?>