<?php 

?>
<button class="btn btn-danger btn-xs pull-right">Delete</button><br><br>
<table class="table table-hover table-striped table-bordered table-advanced tablesorter">
  <thead>
    <tr>
      <th width="3%"><input type="checkbox" class="checkall"/></th>
      <th>Personnummer</th>
      <th width="10%">Namn</th>
      <th width="7%">Id</th>
      <th width="12%">Sökdatum</th>
      <th width="12%">UC sökdatum</th>
      <th width="10%">Konto</th>
      <th width="9%">Status</th>
      <th width="12%">Notering</th>
    </tr>
    <tr role="row" class="filter">
      <td></td>
      <td><input type="text" class="form-control form-filter input-sm"/></td>
      <td><input type="text" class="form-control form-filter input-sm"/></td>
      <td><select class="form-control input-sm">
        <option value="">Ordning</option>
        <option value="0">Asc</option>
        <option value="1">Desc</option>
        </select></td>
      <td>
        <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm mbs"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
      </td>
     
      <td>
        <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm mbs"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>

      </td>
      <td>
        </td>
      <td></td>

    </tr>
  </thead>
  <?php
$conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
mysql_select_db("cchub_api",$conect)or die("No database found!");

$result = "SELECT * FROM upload";
$resulte = mysql_query($result) or die('Error, query failed');
if(mysql_num_rows($resulte) == 0)
{
  echo "Database is empty <br>";
}
else
{
  while(list($id, $name, $type) = mysql_fetch_array($resulte))
  {
  ?>
  <tbody>
    <tr>
      <td><input type="checkbox"/></td>
      <td><?php echo $name;?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $id;?></td>
      <td>20-05-2014</td>
      <td>20-05-2014</td>
      <td>ALD</td>
      <td><span class="label label-sm label-success">Godkänd</span></td>
      <td>
        Kredit Godkänd
      </td>
    </tr>
  </tbody>
  <?php
  }
}
  ?>
</table>