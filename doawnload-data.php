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
        <li><a href="#">Inställningar</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Inställningar</li>
      </ol>
      <div class="clearfix"></div>
    </div>
    <div class="page-content">
      <?php
  $conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
	mysql_select_db("cchub_api",$conect)or die("No database found!");

$result = "SELECT idd, name FROM upload";
$resulte = mysql_query($result) or die('Error, query failed');
if(mysql_num_rows($resulte) == 0)
{
  echo "Database is empty <br>";
}
else
{
  while(list($id, $name) = mysql_fetch_array($resulte))
  {
      ?>
                <div class="row">
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
                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                          Delete
                        </button>
                      </td>
                    </tr>
                  </textarea>


                  <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                    <thead>
                      <tr>
                        <th width="3%"><input type="checkbox" class="checkall"/></th>
                        <th width="9%">Nr.</th>
                        <th>Personnummer</th>
                        <th width="10%">Namn</th>
                        <th width="10%">Typ</th>
                        <th width="7%">Id</th>
                        <th width="12%">Sökdatum</th>
                        <th width="10%">Konto</th>
                        <th width="9%">Status</th>
                        <th width="12%">Actions</th>
                      </tr>

                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $name;?></td>
                        <td>Male</td>
                        <td><?php echo $id; ?></td>
                        <td>20-05-2014</td>
                        <td>ALD</td>
                        <td><span class="label label-sm label-success">Approved</span></td>
                        <td>
                          <a type="button" class="btn btn-green btn-xs" href="download-pdf.php?idd=<?php echo $id;?>">Download PDF</a>
                          &nbsp;
                          <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                            Delete
                          </button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <div class="row mbm">
                    <div class="col-lg-6">
                      <div class="pagination-panel">Page
                        &nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-prev"><i class="fa fa-angle-left"></i></a>&nbsp;<input type="text" maxlenght="5" value="1" class="pagination-panel-input form-control input-mini input-inline input-sm text-center gw-page"/>&nbsp;<a href="#" class="btn btn-sm btn-default btn-prev gw-next"><i class="fa fa-angle-right"></i></a>&nbsp;
                        of 6 | View
                        &nbsp;<select class="form-control input-xsmall input-sm input-inline gw-pageSize">
                        <option value="20" selected="selected">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="-1">All</option>
                        </select>&nbsp;
                        records | Found total 58 records
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
<!--<a type="button" class="btn btn-green" href="download-pdf.php?idd=<?php echo $id;?>"><?php echo $name;?></a>-->
      <?php
  }
}
      ?>
    </div>

    <?php include 'footer.php' ?>
    </body>
</html>