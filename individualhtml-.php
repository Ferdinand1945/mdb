<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>
<?php
$personnummer = $_POST['personnummer'];

header("Content-type:application/pdf");
error_reporting(0);
$pm = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:ucor="http://www.uc.se/schemas/ucOrderRequest/">
   <soapenv:Header/>
   <soapenv:Body>
      <ucor:individualReport ucor:xmlReply="false" ucor:htmlReply="false" ucor:product="3" ucor:version="2.2" ucor:worksites="">
         <ucor:customer>
            <ucor:userId>EMPK5</ucor:userId>
            <ucor:password>UT</ucor:password>
         </ucor:customer>
         <!--Optional:-->
         <ucor:repositoryaction>test</ucor:repositoryaction>
         <!--Optional:-->
         <ucor:individualReportQuery ucor:xmlReply="false" ucor:htmlReply="false" ucor:reviewReply="false" ucor:pdfReply="true" ucor:extendedDetails="false" ucor:lang="">
            <ucor:object>'.$personnummer.'</ucor:object>
            <ucor:creditSeeked></ucor:creditSeeked>
            </ucor:individualReportQuery>
            <ucor:template ucor:id="ALD" />
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
//print_r($result);exit;
$err = curl_error($soap_do);
$xml = simplexml_load_string($result, NULL, NULL, "http://schemas.xmlsoap.org/soap/envelope/");
$ns = $xml->getNamespaces(true);
$soap = $xml->children($ns['S']);
$res = $soap->Body->children($ns['ns1']);
$mypdf = $res->ucReply->ucReport->pdfReply[0];
$ppdf = base64_decode($mypdf);
echo $ppdf;
$filename = mt_rand(2,1000).$personnummer.'.pdf';
file_put_contents($filename,$ppdf);
$filesize = filesize($filename);
$filtype = 'pdf';
$con = mysql_connect('localhost','root','tMdUVx7xBmYUNvh5scU5sjBV');
$conn = mysql_select_db('cchub_api',$con);
mysql_query("insert into upload (name,type,size) VALUES ('$filename','$filtype',$filesize)");
//echo 'data done, file uplaoded to path.';
?>

  </body>
</html>