<?php 

?>
<a class="btn btn-danger btn-xs pull-right" name="delete" href="delete_row.php">Delete</a><br><br>
  <table id="txt" class="table table-hover table-striped table-bordered table-advanced tablesorter">
                    <thead>
                      <tr>
                        <th width="3%"><input type="checkbox" class="checkall"/></th>
                        <th width="20%">Personnummer</th>
                        <th width="30%">Namn</th>
                        <th width="12%">Sökdatum</th>
                        <th width="12%">UC sökdatum</th>
                        <th width="10%">Konto</th>
                        <th width="12%">Funktion</th>
                      </tr>

                    </thead>
                    <?php   $date_create = date('Y-m-d H:i:s');

$conect = @mysql_connect("localhost", "root", "tMdUVx7xBmYUNvh5scU5sjBV") or die("No server found!");
mysql_select_db("cchub_api",$conect)or die("No database found!");

$result = "SELECT * FROM upload ORDER BY idd DESC";
$resulte = mysql_query($result) or die('Error, query failed');
if(mysql_num_rows($resulte) == 0)
{
  echo "Database is empty <br>";
}
else
{
  while(list($id, $personnumber, $name, $type, $date_create) = mysql_fetch_array($resulte))
  {
                    ?>
  <form method="POST">
                    <tbody>
                      <tr>
                        <td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['idd']; ?>"></td>
                        <td><?php echo $personnumber; ?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $date = date('Y-m-d H:i:s'); ?></td>
                        <td><?php echo $date_create; ?></td>
                        <td>ALD</td>
                        <td>
                          <a type="button" class="btn btn-green btn-xs" href="<?php echo $name;?>">Visa</a>
                        </td>
                      </tr>
                       <tr>
    
                    </tbody>
                    <?php
                        }
                      }
                    ?>
    <td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
    </tr>
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
    </form>
                  </table>