<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>
<?php
 require("form.php");
$personnummer = $_POST['personnummer'];

$pm = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:ucor="http://www.uc.se/schemas/ucOrderRequest/">
   <soapenv:Header/>
   <soapenv:Body>
      <ucor:individualReport ucor:xmlReply="false" ucor:htmlReply="true" ucor:product="3" ucor:version="2.2" ucor:worksites="">
         <ucor:customer>
            <ucor:userId>EMPK5</ucor:userId>
            <ucor:password>UT</ucor:password>
         </ucor:customer>
         <!--Optional:-->
         <ucor:repositoryaction>test</ucor:repositoryaction>
         <!--Optional:--> 
         <ucor:individualReportQuery ucor:xmlReply="false" ucor:htmlReply="true" ucor:reviewReply="false" ucor:pdfReply="false" ucor:extendedDetails="false" ucor:lang="">
            <ucor:object>'.$personnummer.'</ucor:object>
            <ucor:creditSeeked></ucor:creditSeeked>
            </ucor:individualReportQuery>
            <ucor:template ucor:id="M60" />
      </ucor:individualReport>
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
$err = curl_error($soap_do);
$xml = simplexml_load_string($result, NULL, NULL, "http://schemas.xmlsoap.org/soap/envelope/");
$ns = $xml->getNamespaces(true);
$soap = $xml->children($ns['S']);
$res = $soap->Body->children($ns['ns1']);

echo $res->ucReply->ucReport->htmlReply[0];

?>

  </body>
</html>