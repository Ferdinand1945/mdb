<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Systemlogg</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Systemlogg</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active"></li>
      </ol>
      <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
      <div id="form-layouts" class="row">
        <div class="col-lg-12">
<?php include 'systemlog.php'; ?>
 
  <div class="">
<!--  <h1>Log actions</h1>-->
    <?php /*include 'serv.php';
if(isset($_POST['submit'])) {
      echo 'Buscaste un credit check';
} 
if (!$conect)
  {
  echo 'Could not connect: ' . mysql_error();
  }
else {
  echo 'Succesfully loged in at: ' . date("Y/m/d H:i:s");
}


if ($_POST['id'] >= 0) {
  echo '<br> ID: Checked';
}
else {
  echo '<br> WARNING: This ID is loged in other device or open in another window';
}

if ($_POST['user'] == $_SESSION['user']) {
  echo '<br> User: Checked';
}
else {
  echo '<br> WARNING: This User is loged in other device or open in another window';
}

if ($_POST['email']  == $_SESSION['user']) {
  echo '<br> Email: Checked';
}
else {
  echo '<br> WARNING: This email session is open in other device or in another window';
}

    ?>
    
    <?php 
    
    
    ?>
    <h3>Company data</h3>
    <?php while($row = mysql_fetch_array($result))
{echo "Company ID: " .$row['id']. "<br> Company email: ".$row['email']. "<br> Username: " .$row['user']; } 
    ?>
    
    <h3>Errors</h3>
    <?php
$errors = error_reporting(E_ALL);
  if ($errors >= 1) {
    echo ini_set('display_errors', '1');
  } else {
  echo 'No errors found';
  }*/
?>
          </div>
        </div>
      </div>
  </div>
  
<?php include 'footer.php' ?>
</body>
</html>