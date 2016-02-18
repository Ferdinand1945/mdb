<?php
include'conn.php';
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY idd DESC";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>
<table class="table table-hover table-striped table-bordered table-advanced tablesorter">
  <tr>
    <td><form name="form1" method="post" action="">

      <table id="txt" class="table table-hover table-striped table-bordered table-advanced tablesorter">
        
      
        <input class="btn btn-danger btn-s pull-right" name="delete" type="submit" id="delete" value="Delete">

   <thead>
    <tr>
      <th width="3%"><input type="checkbox" class="checkall"/></th>
      <th>Personnummer</th>
      <th width="10%">Namn</th>
      <th width="12%">SCT</th>
      <th width="12%">PDC</th>
      <th width="12%">PDS</th>
      <th width="12%">Sökdatum</th>
      <th width="12%">UC sökdatum</th>
      <th width="10%">Konto</th>
      <th width="9%">Status</th>
      <th width="7%">Notering</th>
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
      <td></td>
      <td></td>

      <td>
        <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm mbs"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
      </td>
     
      <td>
        <div data-date-format="dd-mm-yyyy" class="input-group date datepicker-filter input-group-sm mbs"><input type="text" readonly="" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>

      </td>
    <td><select class="form-control input-sm">
        <option value="">Ordning</option>
        <option value="0">ALD</option>
        <option value="1">NFFLEET</option>
        </select></td>
      <td></td>

    </tr>
  </thead>
        <?php
while($rows=mysql_fetch_array($result)){
        ?>
        <tbody>
          <tr>
            <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['idd']; ?>"></td>
            <td><?php echo $rows['personnumber']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $_SESSION['user']; ?></td>
            <td><?php echo 'in progress...'; ?></td>
            <td><?php echo 'in progress...'; ?></td>
            <td><?php echo $rows['datenow']; ?></td>
            <td><?php echo $rows['datenow']; ?></td>
            <td><?php echo 'ALD'; ?></td>
            <td><?php echo 'in progress...'; ?></td>
            <td>
              <a type="button" class="btn btn-green btn-xs" href="<?php echo $rows['name'];?>">Visa</a>
            </td>   
          </tr>
        </tbody>
        <?php
}
        ?>

        <?php
$checkbox = $_POST['checkbox'];
$delete = $_POST['delete'];
// Check if delete button active, start this
if($delete){
  for($i=0;$i<$count;$i++){
    $del_id = $checkbox[$i];
    $sql = "DELETE FROM $tbl_name WHERE idd='$del_id'";
    $result = mysql_query($sql);
  }
  // if successful redirect to delete_multiple.php
  if($result){
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=creditcheck.php\">";
  }
}
mysql_close();
        ?>
      </table>
      </form>
    </td>
  </tr>
</table>