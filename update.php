<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <head>   
    
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="js.js">
  <link rel="stylesheet" href="update style.css">
    </head>
    <body>
        <form action="" method="post">
        
        <div class="form-group">
                          
            <div class="col-xs-6">
                <h2>  Update Data ..</h2>
                <h2>Name Of The Project</h2>                    
                
                <input type="text" class="form-control" name="recoverproject_name" id="recoverproject_name" placeholder="Enter your project name." >
                <br>
                <button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <br>
            </div>
            </div>     
    
       </form>
      
      <?php
             
            


            if(isset($_POST['recoverproject_name'])){
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="register";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $project_name = $_POST['recoverproject_name'];
            $sql= "SELECT * FROM data_store WHERE project_name='$project_name' LIMIT 1";
              
            $matches = $conn->query($sql);
                   
            if ($matches->num_rows > 0) {
                while($row = $matches->fetch_assoc()) {
                    $project_name = $row['project_name'];
                    $clint_address = $row['clint_address'];
                    $clint_req = $row['clint_req'];
                    $s_time = $row['s_time'];
                    $delivery_target = $row['delivery_target'];
                    $project_correction = $row['project_correction'];
                    $completed_date = $row['completed_date'];
                    $project_drop = $row['project_drop'];
                    $pro_restart = $row['pro_restart'];
                    $drop_reason = $row['drop_reason'];
                    $delivery_date = $row['delivery_date'];
                    $archi_name = $row['archi_name'];
                    $engin_name = $row['engin_name'];
                    $challenge_project = $row['challenge_project'];
                    $supervision = $row['supervision'];
                    $construction = $row['construction'];
                    $quality_control = $row['quality_control'];
                    $major_deision = $row['major_deision'];
                    $project_management = $row['project_management'];
                    $one_quater = $row['one_quater'];
                    $one_half = $row['one_half'];
                    $three_quarter = $row['three_quarter'];
                    $full = $row['full'];
                   
                }
             }
            else{ 
                if ($conn->query($sql) === TRUE) echo "No record found.";
                else echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?>

<hr>
<div class="container bootstrap snippet">
    
         
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
        
          <form class="form" action="" method="post" id="registrationForm" enctype="multipart/form-data">
        
        </div><!--/col-3-->
    	<div class="col-sm-10">
          
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="project_name"><h4>Name Of The Project</h4></label>                       
                            <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Enter your project name." >
                            </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="clint_address"><h4>Name Of Client & Address</h4></label>
                              <input type="text" class="form-control" name="clint_address" id="clint_address" placeholder="Enter your client address.">
                              </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="clint_req"><h4>Client Requirment</h4></label>
                              <input type="text" class="form-control" name="clint_req" id="clint_req" placeholder="Enter your client requirment. ">
                           </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="s_time"><h4>Project Starting Time</h4></label>
                              <input type="date" class="form-control" name="s_time" id="s_time" placeholder="Enter your Projecct starting Date." >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="delivery_target"><h4>Delivery Target</h4></label>
                              <input type="date" class="form-control" name="delivery_target" id="delivery_target" placeholder="Enter delivery target. ">
                          </div>
                      </div>                                                                                                 
                            

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="project_correction"><h4>Project Correction</h4></label>
                              <input type="text" class="form-control" name="project_correction" id="project_correction" placeholder="Project Correction ..">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="completed_date"><h4>Work Completed By Date</h4></label>
                              <input type="date" class="form-control" name="completed_date" id="completed_date" placeholder="Work completed by date.." >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="project_drop"><h4>Project Dropped </h4></label>
                              <input type="text" class="form-control" name="project_drop" id="project_drop" placeholder="Yes OR No ..">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="pro_restart"><h4>Project Restart </h4></label>
                              <input type="date" class="form-control" name="pro_restart" id="pro_restart" placeholder="Project Restart ..">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="drop_reason"><h4>Project Dropped Reason </h4></label>
                              <input type="text" class="form-control" name="drop_reason" id="drop_reason" placeholder="Project Dropped Reason  ..">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="delivery_date"><h4>Actual Delivery Date </h4></label>
                              <input type="date" class="form-control" name="delivery_date" id="delivery_date" placeholder="Enter your Delivery Date." >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="archi_name"><h4>Name Of Architect </h4></label>
                              <input type="text" class="form-control" name="archi_name" id="archi_name" placeholder="Name of Architect..">
                          </div>
                      </div>
          
                         <div class="form-group">
                              <div class="col-xs-6">
                              <label for="engin_name"><h4>Name Of Engineer</h4></label>
                              <input type="text" class="form-control" name="engin_name" id="engin_name" placeholder="Name of Enginer.." >
                          </div>
                      </div>

                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="challenge_project"><h4>Challenge Of The Project</h4></label>
                              <input type="text" class="form-control" name="challenge_project" id="challenge_project" placeholder="Challenge Of The Project.." >
                          </div>
                      </div>

                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="supervision"><h4>Supervision</h4></label>
                              <input type="text" class="form-control" name="supervision" id="supervision" placeholder="Supervision.." >
                          </div>
                      </div>

                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="construction"><h4>Construction</h4></label>
                              <input type="text" class="form-control" name="construction" id="construction" placeholder="Construction.." >
                          </div>
                      </div>


                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="quality_control"><h4>Quality Control</h4></label>
                              <input type="text" class="form-control" name="quality_control" id="quality_control" placeholder="Quality Control.." >
                          </div>
                      </div>

                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="major_decision"><h4>Major Decision During Construction</h4></label>
                              <input type="text" class="form-control" name="major_deision" id="major_deision" placeholder="Major Decision During Construction.." >
                          </div>
                      </div>

                      <div class="form-group">
                              <div class="col-xs-6">
                              <label for="project_management"><h4>Project Management</h4></label>
                              <input type="text" class="form-control" name="project_management" id="project_management" placeholder="Project Management.." >
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-6">
                                <label for="work_prog"><h4>Works In Progress</h4></label><br>

                                <div class=" col-xs-3">
                                <input type="text" class="form-control" name="one_quater" id="one_quater" placeholder="One Quater . !">
                                </div>

                                <div class="col-xs-3">
                                <input type="text" class="form-control" name="one_half" id="one_half" placeholder="One Half.!">
                                </div>

                                <div class="col-xs-3">
                                <input type="text" class="form-control" name="three_quarter" id="three_quarter" placeholder="Three Quarter.!">
                                </div>

                                <div class="col-xs-3">
                                <input type="text" class="form-control" name="full" id="full" placeholder="Full.!"> 
                                </div>
                              </div>
                            </div>                                                                                                         
                            
                      
                     
                      <div class="form-group">
                           <div class="col-xs-1">
                                <br>
                              	<button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<br>
                            </div>
                      </div>
     
              	</form>
              
              <hr>
              
        </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    <hr>

    
</div>
</div>
 
             
        <?php
      }
        
            $project_name="";
            $clint_address="";
            $clint_req="";
            $s_time="";
            $delivery_target="";
            $project_correction="";
            $completed_date="";
            $project_drop="";
            $pro_restart="";
            $drop_reason="";
            $delivery_date="";
            $archi_name="";
            $engin_name="";
            $challenge_project="";
            $supervision="";
            $construction="";
            $quality_control="";
            $major_deision="";
            $project_management="";
            $one_quater="";
            $one_half="";
            $three_quarter="";
            $full="";

            if(isset($_POST['project_name'])) $project_name = $_POST['project_name'];
            if(isset($_POST['clint_address'])) $clint_address = $_POST['clint_address']; 
            if(isset($_POST['clint_req']))  $clint_req = $_POST['clint_req'];
            if(isset($_POST['s_time']))  $s_time = $_POST['s_time'];
            if(isset($_POST['delivery_target']))  $delivery_target = $_POST['delivery_target'];
            if(isset($_POST['project_correction'])) $project_correction = $_POST['project_correction'];
           if(isset($_POST['completed_date']))  $completed_date = $_POST['completed_date'];
           if(isset($_POST['project_drop'])) $project_drop = $_POST['project_drop'];
           if(isset($_POST['pro_restart'])) $pro_restart = $_POST['pro_restart'];
           if(isset($_POST['drop_reason'])) $drop_reason = $_POST['drop_reason'];
           if(isset($_POST['delivery_date'])) $delivery_date = $_POST['delivery_date'];
           if(isset($_POST['archi_name'])) $archi_name = $_POST['archi_name'];
           if(isset($_POST['engin_name'])) $engin_name = $_POST['engin_name'];
           if(isset($_POST['challenge_project'])) $challenge_project = $_POST['challenge_project'];
           if(isset($_POST['supervision'])) $supervision = $_POST['supervision'];
           if(isset($_POST['construction'])) $construction = $_POST['construction'];
           if(isset($_POST['quality_control'])) $quality_control = $_POST['quality_control'];
           if(isset($_POST['major_deision'])) $major_deision = $_POST['major_deision'];
           if(isset($_POST['project_management'])) $project_management = $_POST['project_management'];
           if(isset($_POST['one_quater'])) $one_quater = $_POST['one_quater'];
           if(isset($_POST['one_half'])) $one_half = $_POST['one_half'];
           if(isset($_POST['three_quarter'])) $three_quarter = $_POST['three_quarter'];
           if(isset($_POST['full'])) $full = $_POST['full'];
           

         
            if(isset($_POST['project_name'])){

                $servername="localhost";
                $username="root";
                $password="";
                $dbname="register";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "UPDATE data_store SET project_name='$project_name',clint_address='$clint_address',clint_req='$clint_req',s_time='$s_time',delivery_target='$delivery_target',project_correction='$project_correction',completed_date='$completed_date',project_drop='$project_drop',pro_restart='$pro_restart',drop_reason='$drop_reason',delivery_date='$delivery_date',archi_name='$archi_name',engin_name='$engin_name',challenge_project='$challenge_project',supervision='$supervision',construction='$construction',quality_control='$quality_control',major_deision='$major_deision',project_management='$project_management',one_quater='$one_quater',one_half='$one_half',three_quarter='$three_quarter',full='$full' WHERE project_name='$project_name'" ;
    
            if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }    
         
                $conn->close();
            }
        ?>
      </div>

      
    </body>
    </html> 