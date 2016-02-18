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
          
<?php require_once('modules/person-check.php'); ?>
          
          <div class="row">
            <div class="col-lg-8">
              <div class="panel panel-yellow">
               <div class="panel-heading">Kreditupplysning<tr>
                    <td colspan="2"><span style="border:black solid thin;padding:2px;font-weight: bold;">UC</span></td>
                </tr>
</div>
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
                          <div style="display:inline-block; float:left;"> <input name="check1" value="check1" type="checkbox">&nbsp;&nbsp;Ny UC sökning &nbsp;<i data-hover="tooltip" data-original-title="Truncate a new UC search" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></div>
                            <div style="display:inline-block; float: right;">
                            <button id="credit" type="submit" onclick="setTimeout('history.go(0);',5000);" name='send'class="btn btn-primary">Sök</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

         <?php include 'modules/counter.php'; ?>
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
                  <?php include 'delete-rows.php'; ?>
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