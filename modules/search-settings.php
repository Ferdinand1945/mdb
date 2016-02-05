  <div class="portlet box portlet-yellow">
            <div class="portlet-header">
              <div class="caption">Sökningar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                
                  <form class="form" action="" method="post">
                  <label for="hlimit">Mjuk gräns: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                   <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM Soft")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['Softlimit'].
                          "</option>";
                        };
?></select> 
                    
                    <br>
                  <label for="hlimit">Hård gräns: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                    <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM Hard")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['Hardlimit'].
                          "</option>";
                        };
?></select> 
                    
                    <br>
                    
                     <label for="hlimit">Epost notifering: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label><br>
<input type="text" placeholder="Kund@google.se">
                    
                    <br>

                </div>
                </div>
              <div class="form-actions">
                <div class="col-md-offset-3 col-md-9">
                  <button type="submit" class="btn btn-primary">Spara ändringar</button>
                  &nbsp;
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
              </form>
             
          </div>
        </div>
      </div>