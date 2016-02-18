<?php // db.php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'tMdUVx7xBmYUNvh5scU5sjBV';

function dbConnect($db='cchub_api') {
    global $dbhost, $dbuser, $dbpass;
    
    $dbcnx = @mysql_connect($dbhost, $dbuser, $dbpass)
        or die('The site database appears to be down.');

    if ($db!='' and !@mysql_select_db($db))
        die('The site database is unavailable.');
    
    return $dbcnx;
}
?>
