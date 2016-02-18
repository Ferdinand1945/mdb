<?php
//$dbhost = 'localhost';
//$dbuser = 'root';
//$dbpass = 'tMdUVx7xBmYUNvh5scU5sjBV';
//$id = $_GET['idd'];
//$conn = mysql_connect($dbhost, $dbuser, $dbpass);
//if(! $conn )
//{
//  die('Could not connect: ' . mysql_error());
//}
//$sql = "DELETE FROM upload WHERE idd='$id'";
//
//mysql_select_db('cchub_api');
//$retval = mysql_query( $sql, $conn );
//if(! $retval )
//{
//  die('Could not delete data: ' . mysql_error());
//}
//header('Location: creditcheck.php');
//mysql_close($conn);

?> 
<?php
if (isset($_POST['delete'])) {
    $checkbox = $_POST['checkbox'];
    $count = count($checkbox);

    for($i =0; $i < $count; $i++) {
        $id = (int) $checkbox[$i]; // Parse your value to integer

        if ($id > 0) { // and check if it's bigger then 0
            mysql_query("DELETE FROM upload WHERE idd =" .$_POST['idd']);
        }
    }
}
?>