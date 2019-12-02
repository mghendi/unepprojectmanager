<?php include_once('header.php'); ?>
  <div class="container-fluid my-5">
    <h3>Project Activities</h3>
    <?php if($msg = $this->session->flashdata('msg')):?>
        <?php
          $successful_states = array('Project Activity Saved Successfully', 'Project Activity Updated Successfully', 'Project Activity Deleted Successfully');
          $color = in_array($msg, $successful_states)?'success':'danger';
        ?>
        <div class="alert alert-<?=$color;?> alert-dismissible fade show close alert-close">
          <?php echo $msg; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php endif;?> 
    <?php echo anchor('welcome/create', 'Add New Project Activity', ['class'=>'btn btn-primary']);?>
    <?php echo anchor('welcome/chart', 'View Programme Delivery Dashboard', ['class'=>'btn btn-primary']);?>
    <a class = 'btn btn primary' href="<?php echo $_SERVER['PHP_SELF']?>?format=json">Load JSON</a>
    <div class="mt-3 table-responsive">
    <table id="project_activities" class="table table-borderless table-hover">
      <thead>
        <tr>
          <th scope="col">Activity Key</th>
          <th scope="col">PIMS Project Number</th>
          <th scope="col">Project Output Number</th>
          <th scope="col">Project Activity Number</th>
          <th scope="col">Project Activity</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Status</th>
          <th scope="col">Modified</th>
          <th scope="col">User</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php if(isset($activities)): ?>
        <?php foreach($activities as $activity): ?>
          <tr>
            <th scope="row"><?php echo $activity->Activity_Key;?></th>
            <td><?php echo $activity->PIMS_project_number;?></td>
            <td><?php echo $activity->Project_Output_Number;?></td>
            <td><?php echo $activity->Project_Activity_Number;?></td>
            <td><?php echo $activity->Project_Activity;?></td>
            <td><?php echo $activity->Start_Date;?></td>
            <td><?php echo $activity->End_Date;?></td>
            <td><?php echo $activity->Status;?></td>
            <td><?php echo $activity->Modified;?></td>
            <td><?php echo $activity->User;?></td>
            <td>
              <?php echo anchor("welcome/view/{$activity->Activity_Key}", 'View', ['class'=>'badge badge-primary']);?>
              <?php echo anchor("welcome/update/{$activity->Activity_Key}", 'Update', ['class'=>'badge badge-success']);?>
              <?php echo anchor("welcome/delete/{$activity->Activity_Key}", 'Delete', ['class'=>'badge badge-danger']);?>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>  
          <tr>
            No Activities Found.
          </tr>
        <?php endif;?>
      </tbody>
    </table> 
    </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#project_table').DataTable();});
  </script>
<?php include_once('footer.php'); ?>