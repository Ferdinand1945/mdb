<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>
  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Personupplysning</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li><a href="#">Personupplysning</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active"></li>
      </ol>
      <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
      <div id="form-layouts" class="row">
        <div class="col-lg-12" style="font-size: 18px; color: #b1b2b3;">
    
<?php
$personnummer = $_POST['personnummer'];

$pm = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:ucor="http://www.uc.se/schemas/ucOrderRequest/">
   <soapenv:Header/>
   <soapenv:Body>
      <ucor:identityCheck ucor:htmlReply="true" ucor:identifier="'.$personnummer.'" ucor:version="2.2" ucor:worksites="?">
         <ucor:customer>
            <ucor:userId>EMPK5</ucor:userId>
            <ucor:password>UT</ucor:password>
            <!--Optional:-->
            <ucor:name>yyy</ucor:name>
            <!--Optional:-->
            <ucor:changePassword></ucor:changePassword>
         </ucor:customer>
         <!--Optional:-->
         <ucor:seekFysiker ucor:xmlReply="1" ucor:htmlReply="true">
         <ucor:seekName></ucor:seekName>
         <ucor:adress>
         <ucor:streetadress></ucor:streetadress>
         </ucor:adress>
         <ucor:repositoryaction>tes</ucor:repositoryaction>
         <ucor:creditSeeked></ucor:creditSeeked>
         </ucor:seekFysiker>
        <ucor:template ucor:id="ALD" />
      </ucor:identityCheck>
   </soapenv:Body>
</soapenv:Envelope>';

$soap_do = curl_init();
curl_setopt($soap_do, CURLOPT_URL,'https://www.uc.se/UCSoapWeb/services/ucOrders2' );
curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($soap_do, CURLOPT_TIMEOUT,        10);
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($soap_do, CURLOPT_POST,           true );
curl_setopt($soap_do, CURLOPT_POSTFIELDS,    $pm);
curl_setopt($soap_do, CURLOPT_HTTPHEADER,     array('Content-Type: text/xml; charset=utf-8', 'Content-Length: '.strlen($pm) ));
//curl_setopt($soap_do, CURLOPT_USERPWD, $user . ":" . $password);

$result = curl_exec($soap_do);
print_r($result);
exit;
?>
        </div>
      </div>
    </div>
  </div>
   <?php include 'footer.php' ?>
      </body>
    </html>