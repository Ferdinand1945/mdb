<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>
  

  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Inställningar</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Inställningar</a>&nbsp;&nbsp;</li>
       
      </ol>
      <div class="clearfix"></div>
    </div>
    <div class="page-content">
      <div class="row">
        <div class="col-lg-6">
        <?php include 'modules/period-settings.php'; ?>

                      
      <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-yellow">
          <?php include 'modules/log-settings.php'; ?>

        </div>
      </div>
              
                                
                                
     <div class="row">
        <div class="col-lg-6">
        <?php include 'modules/search-settings.php'; ?>
      
          <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-yellow">
            <div class="portlet-header">
              <div class="caption">Ladda ner data</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                <h4>Ladda ner XML data</h4> <button class="btn btn-primary">Hämta data</button>
          </div>
        </div>
      </div>
                
  
                
    </div>
  </div>

  <?php include 'footer.php' ?>
  </body>
</html>