<?php
	$conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
	mysql_select_db("cchub_api",$conect)or die("No database found!");
    $result = mysql_query("SELECT * FROM admin");
?>