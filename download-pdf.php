<?php
if(isset($_GET['idd']))
{
// if id is set then get the file with the id from database

 $conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
	mysql_select_db("cchub_api",$conect)or die("No database found!");
  
$id    = $_GET['idd'];
$query = "SELECT name, type, size " . "FROM upload WHERE idd = '$id'";

$resultx = mysql_query($query) or die('Error, query failed');

list($name, $type, $size) = mysql_fetch_array($resultx);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

  mysql_close($conect);
exit;
}

?>