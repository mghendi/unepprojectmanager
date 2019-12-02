<?php include_once('header.php'); ?>
<div>
</div>
  <div class="container">
    <h4>Project Activities Table</h4> 
    <?php echo anchor('welcome/create', 'Add New Activity', ['class'=>'btn btn-primary']);?>
    <?php echo anchor('welcome/chart', 'View Programme Delivery Dashboard', ['class'=>'btn btn-primary']);?>
    <a class = 'btn btn primary' href="<?php echo $_SERVER['PHP_SELF']?>?format=json">Load JSON</a>
    <table class="table table-hover">
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
          <th scope="col">Last Modified By</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php if(count($activities)): ?>
        <?php foreach($activities as $activity): ?>
          <tr class="table-active">
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
            <?php echo anchor('welcome/view', 'View', ['class'=>'badge badge-primary']);?>
            <?php echo anchor('welcome/update', 'Update', ['class'=>'badge badge-success']);?>
            <?php echo anchor('welcome/delete', 'Delete', ['class'=>'badge badge-danger']);?>
            </td>
          </tr>
          <?php endforeach; ?>
            <?php else: ?>  
            <tr>
              <tr>No Activities Found.</td>
            </tr>
          <?php endif;?>
      </tbody>
    </table>
    </div>
<?php include_once('footer.php'); ?>