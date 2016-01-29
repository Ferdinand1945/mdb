<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>
  <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
      <div class="page-header pull-left">
        <div class="page-title">Sök</div>
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
          
           <div class="row">
            <div class="col-lg-8">
              <div class="panel panel-yellow">
               <div class="panel-heading">Personupplysning<tr>
                    <td colspan="2"><span style="border:black solid thin;padding:2px;font-weight: bold;">UC</span></td>
                </tr></div>
                <div class="panel-body pan">
                  <form id="myForm" name='send' action='' method='POST' class="form-horizontal">
              
                    <div class="form-body pal">
                      
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group"><label for="inputLastName" class="col-md-3 control-label">Personnummer <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input id="inputLastName" type="text" name='personnummer' placeholder="Personnummer" class="form-control" require />
                            </div>
                          </div>
                          <div class="form-actions text-right pal">
                            <button type="submit" onclick="setTimeout('history.go(0);',5000);" name='send'class="btn btn-primary">Sök</button>
                            &nbsp;
<!--                            <button type="button" class="btn btn-green" onclick="formReset()">Cancel</button>-->
                          </div>
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
              
                <tr><td>&nbsp;</td></tr>
                <tr><td><?php $a1 = explode('">',$mydata[2]); echo $a1[1] ; ?></td></tr>
                <tr><td><?php $a1 = explode('">',$mydata[3]); echo $a1[1];?></td></tr>
                <tr><td><?php $a1 = explode('">',$mydata[4]); echo $a1[1];?></td></tr>
                <tr><td><?php $a1 = explode('">',$mydata[5]); echo $a1[1];?></td></tr>
               
            </table>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-lg-8">
              <div class="panel panel-yellow">
               <div class="panel-heading">Kreditupplysning</div>
                <div class="panel-body pan">
                  <form name='send' action='individualhtml.php' method='POST' class="form-horizontal" target="_blank">
                    <div class="form-body pal">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group"><label for="inputLastName" class="col-md-3 control-label">Personnummer <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" name='personnummer' placeholder="Personnummer" class="form-control" require />
                            </div>
                          </div>
                          <div class="form-actions  pal">
                          <div style="display:inline-block; float:left;"> <input type="checkbox">&nbsp;&nbsp;Ny UC sökning &nbsp;<i data-hover="tooltip" data-original-title="Truncate a new UC search" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></div>  
                            <div style="display:inline-block; float: right;">
                            <button type="submit" onclick="setTimeout('history.go(0);',5000);" name='send'class="btn btn-primary">Sök</button>
                            </div>
<!--                            <button type="button" class="btn btn-green" onclick="formReset()">Cancel</button>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div id="lista" class="row">
            <div class="col-lg-12">
              <div class="portlet box">
                <div class="portlet-body">
                  <div class="row mbm">
                    <div class="col-lg-12">
                      <div style="display: none;" class="alert alert-danger tb-alert-error">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>
                      <div style="display: none" class="alert alert-success tb-alert-success">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>
                    </div>
                  </div>         
                  <textarea style="display: none;" class="gw-row">
                    <tr>
                      <td>{checkbox}</td>
                      <td>{index}</td>
                      <td>{name}</td>
                      <td>{country}</td>
                      <td>{gender}</td>
                      <td>{order}</td>
                      <td>{date}</td>
                      <td>{price}</td>
                      <td>{status}</td>
                      <td>
                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                          Edit
                        </button>
                        &nbsp;
                        <button type="button" name="delete_id" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                          Delete
                        </button>
                      </td>
                    </tr>
                  </textarea>
                  <?php include 'section-list.php'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <!--END CONTENT--><!--BEGIN FOOTER-->
      <?php include 'footer.php' ?>
      </body>
    </html>