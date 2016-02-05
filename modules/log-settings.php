            <div class="portlet-header">
              <div class="caption">Loggar</div>
              <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
            </div>
            <div class="portlet-body pan">
              <form role="form" class="form-horizontal form-separated">
                <div class="form-body pdl">
                
                  <form class="form">
                  <label for="hlimit">Kreditlogg: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                                       <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM creditperiod")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['creditPeriod'].
                          " mån</option>";
                        };
?></select> 
                    
                    <br>
                  <label for="hlimit">Systemlogg: &nbsp;<i data-hover="tooltip" data-original-title="Change the Hard limit if you are running out of querys" data-container="body" class="glyphicon glyphicon-info-sign tooltips"></i></label>
                                       <?php
                        $sqlHost = 'localhost';
                        $sqlUser = 'root';
                        $sqlPass = 'tMdUVx7xBmYUNvh5scU5sjBV';

                        $conn =  new mysqli($sqlHost, $sqlUser, $sqlPass, 'cchub_api') ;
                        if($conn->connect_errno){
                            printf("Connect failed: %s\n", $conn->connect_error);
                            exit();
                        }
                        $result = $conn->query("SELECT * FROM creditperiod")
                                or trigger_error($conn->error); ?>

                               <select class="form-control">
                         <?php
                        while ($row = $result->fetch_array(MYSQL_BOTH)){

                        echo "<option>"
                          .$row['creditPeriod'].
                          " mån</option>";
                        };
?></select> 

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