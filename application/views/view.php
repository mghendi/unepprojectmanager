<?php include_once('header.php'); ?>
<div class="container">
    <div class="card text-center mt-5">
        <div class="card-header">
            <h3>Project Activity Details</h3>
            <p>Activity Key: <?php echo $activity->Activity_Key;?></p>
            <ul class="nav nav-pills card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" id="info-tab" href="#home">Summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" id="dates-tab" href="#dates">Dates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" id="other-tab" href="#other">Status</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="info-tab">
                <p>PIMS Project Number : <?php echo $activity->PIMS_project_number;?></p>
                <p>Project Output Number : <?php echo $activity->Project_Output_Number;?></p>
                <p>Project Activity Number : <?php echo $activity->Project_Activity_Number;?></p>
                <p>Project Activity : <?php echo $activity->Project_Activity;?></p>
              </div>
              <div class="tab-pane" id="dates" role="tabpanel" aria-labelledby="dates-tab">
                <p>Start Date : <?php echo $activity->Start_Date;?></p>
                <p>End Date : <?php echo $activity->End_Date;?></p>
                <p>Modified : <?php echo $activity->Modified;?></p>
              </div>
              <div class="tab-pane" id="other" role="tabpanel" aria-labelledby="other-tab">
                <p class="text-capitalize">Status : <?php echo $project->Status;?></p>
                <p class="text-capitalize">Last Modified By : <?php echo $activity->User;?></p>
              </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <a class='btn btn-primary' href="<?php echo $_SERVER['PHP_SELF']?>?format=json">Load JSON</a>
            <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
        </div>
      </div>
    </div> 
</div>     
<?php include_once('footer.php'); ?>