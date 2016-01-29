<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>
  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Hem</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active"></li>
      </ol>
      <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
      <div id="form-layouts" class="row">
        <div class="col-lg-12">
         <h1> Välkommen till ALD Master Dashboard!</h1>
        </div>
      </div>
      
      <!--END CONTENT--><!--BEGIN FOOTER-->
      <?php include 'footer.php' ?>
      </body>
    </html>