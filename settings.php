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
          <div class="portlet box portlet-violet">
            <div class="portlet-header">
              <div class="caption">Period inställningar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                
                  <form class="form">
                    <label for="limit">Kredit period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Expiration dateof the credit checks" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                    <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM creditperiod")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['creditPeriod'].
                          " mån</option>";
                        };
?></select> 
                    <br>
                    <label for="fperiod">Frys period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                     <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM Frysperiod")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['frysperiod'].
                          " mån</option>";
                        };
?></select> 
                 
                  <br>
                    <label for="slimit">Cache period: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i> </label>
                             <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM cacheperiod")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['cachePeriod'].
                          " mån</option>";
                        };
?></select> 

                </div>
                </div>
              <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                  &nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
              </form>
          </div>
        </div>
      </div>
                      
                              <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-violet">
            <div class="portlet-header">
              <div class="caption">Loggar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                
                  <form class="form">
                  <label for="hlimit">Kreditlogg: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <select class="form-control">
                      <option>150</option>
                      <option>200</option>
                      <option>300</option> 
                    </select>
                    
                    <br>
                  <label for="hlimit">Systemlogg: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <select class="form-control">
                      <option>2 mån</option>
                      <option>3 mån</option>
                      <option>4 mån</option> 
                    </select>
                    <br>

                </div>
                </div>
              <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                  &nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
              </form>
          </div>
        </div>
      </div>
              
                                
                                
     <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-violet">
            <div class="portlet-header">
              <div class="caption">Sökningar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                
                  <form class="form" action="" method="post">
                  <label for="hlimit">Mjuk gräns: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                   <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM Soft")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['Softlimit'].
                          "</option>";
                        };
?></select> 
                    
                    <br>
                  <label for="hlimit">Hård gräns: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM Hard")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['Hardlimit'].
                          "</option>";
                        };
?></select> 
                    
                    <br>
                    
                     <label for="hlimit">Epost notifering: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label><br>
<input type="text" placeholder="Kund@google.se">
                    
                    <br>

                </div>
                </div>
              <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                  &nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
              </form>
             
          </div>
        </div>
      </div>
      
          <div class="row">
        <div class="col-lg-6">
          <div class="portlet box portlet-violet">
            <div class="portlet-header">
              <div class="caption">Sökningar</div>
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