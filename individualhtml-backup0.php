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

$pm = '<soapenv:Envelope xmlns:S="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header>
      <WorkContext xmlns="http://oracle.com/weblogic/soap/workarea/">rO0ABXdLABV3ZWJsb2dpYy5hcHAudWNvcmRlcnMAAADWAAAAI3dlYmxvZ2ljLndvcmthcmVhLlN0cmluZ1dvcmtDb250ZXh0AAU0LjIuOAAA</WorkContext>
   </soapenv:Header>
   <soapenv:Body>
      <ucor:ucReply xmlns:ns2="http://www.uc.se/schemas/ucOrderRequest/" xmlns:ucor="http://www.uc.se/schemas/ucOrderReply/">
         <ucor:status ucor:result="ok"/>
         <ucor:ucReport>
            <ucor:xmlReply>
               <ucor:reports ucor:lang="swe">
                  <ucor:report ucor:index="0" ucor:styp="KTRL" ucor:name="'Margit' Svensson" ucor:id="4201053768">
                  <ucor:group ucor:name="ID-uppgifter, fysiker" ucor:key="" ucor:index="0" ucor:id="W080">
                        <ucor:term ucor:id="W08001">9420105376</ucor:term>
                        <ucor:term ucor:id="W08002">4201053768</ucor:term>
                        <ucor:term ucor:id="W08003">'Margit' Svensson</ucor:term>
                        <ucor:term ucor:id="W08004">Norra Bj‰rlˆvsv 32 Lgh 1103</ucor:term>
                        <ucor:term ucor:id="W08005">43064</ucor:term>
                        <ucor:term ucor:id="W08006">H‰llingsjˆ</ucor:term>
                        <ucor:term ucor:id="W08007">4211033099</ucor:term>
                        <ucor:term ucor:id="W08008">Per Svensson</ucor:term>
                        <ucor:term ucor:id="W08015">197606</ucor:term>
                        <ucor:term ucor:id="W08045">Registrerat sedan 1976-06</ucor:term>
                        <ucor:term ucor:id="W08018">N</ucor:term>
                        <ucor:term ucor:id="W08027"/>
                        <ucor:term ucor:id="W08030">7</ucor:term>
                     </ucor:group>
                  </ucor:report>
               </ucor:reports>
            </ucor:xmlReply>
         </ucor:ucReport>
      </ucor:ucReply>
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
$xml = simplexml_load_string($result, NULL, NULL, "http://schemas.xmlsoap.org/soap/envelope/");
$ns = $xml->getNamespaces(true);
$soap = $xml->children($ns['S']);
$res = $soap->Body->children($ns['ns1']);
echo $res->ucReply->ucReport->htmlReply[0];
?>
        </div>
      </div>
    </div>
  </div>
   <?php include 'footer.php' ?>
      </body>
    </html>