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
         <ucor:seekFysiker ucor:xmlReply="0" ucor:htmlReply="true">
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
$pos = strpos($result,'xmlReply');
$ndata = substr($result,$pos+9);
$mydata = explode('<ns1:term',$ndata);
?>
            <!-- New template for html starts here-->
            <table>
                <tr>
                    <td colspan="2"><span style="border:black solid thin;padding:2px;font-weight: bold;">UC</span>&nbsp;&nbsp;Personupplysning</td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>Lable 1 = </td><td><?php echo $mydata[0];?></td></tr>
                <tr><td>Lable 1 =</td><td><?php $a1 = explode('">',$mydata[1]); echo $a1[1];?></td></tr>
                <tr><td>Lable 1 =</td><td><?php $a1 = explode('">',$mydata[2]); echo $a1[1];?></td></tr>
                <tr><td>Lable 1 =</td><td><?php $a1 = explode('">',$mydata[3]); echo $a1[1];?></td></tr>
                <tr><td>Lable 1 =</td><td><?php $a1 = explode('">',$mydata[4]); echo $a1[1];?></td></tr>
                <tr><td>Lable 1 =</td><td><?php $a1 = explode('">',$mydata[5]); echo $a1[1];?></td></tr>
               
            </table>