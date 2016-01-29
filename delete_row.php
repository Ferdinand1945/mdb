
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'tMdUVx7xBmYUNvh5scU5sjBV';
$id = $_GET['idd'];
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "DELETE FROM upload WHERE idd='$id'";

mysql_select_db('cchub_api');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
header('Location: creditcheck.php');
mysql_close($conn);


?> 
<?php
//
//    mysql_connect("localhost","root","tMdUVx7xBmYUNvh5scU5sjBV")or
//    die(mysql_error());
//    mysql_select_db("cchub_api") or die(mysql_error());
//    $sql="DELETE FROM upload WHERE idd='$id'";
//    $result=mysql_query($sql);
//            if(isset($_GET['idd'])) {
//                $id=$_GET['idd'];
//                echo 'deleted successfully.';
//                echo "<BR>";
////                mysql_query("DELETE FROM upload WHERE idd = $id");
//            header("Location: creditcheck.php");
//        }else {
//    echo "ERROR";   
//    }
//    ?>
//    <?php
//    mysql_close();
    ?>