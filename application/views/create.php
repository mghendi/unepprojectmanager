<?php include_once('header.php'); ?>

    <div class="container-fluid my-5">
        <?php echo form_open('welcome/save', ['class'=>'form form-horizontal']);?>
            <fieldset class="row d-flex my-3">
                <legend class="col-md-6 col-sm-10 col-xs-12 mx-auto">Add a New Project Activity</legend>

                <!-- Activity Key Field  
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="activitykey">Activity Key</label>
                <?php echo form_input(['name'=>'Activity_Key', 'placeholder'=>'Enter a unique Activity Key', 'class'=>'form-control']);?>
                <?php echo form_error('Activity_Key', '<div class="text-danger">', '</div>');?>
                </div> -->
                
                <!-- PIMS Project Number Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="pimsprojectnumber">PIMS Project Number</label>
                <?php echo form_input(['name'=>'PIMS_project_number', 'placeholder'=>'Enter PIMS Project Number', 'class'=>'form-control']);?>
                <?php echo form_error('PIMS_project_number', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Project Output Number Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="projectoutputnumber">Project Output Number</label>
                <?php echo form_input(['name'=>'Project_Output_Number', 'placeholder'=>'Enter Project Output Number', 'class'=>'form-control']);?>
                <?php echo form_error('Project_Output_Number', '<div class="text-danger">', '</div>');?>
                </div>
                    
                <!-- Project Activity Number Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label">Project Activity Number</label>
                <?php echo form_input(['name'=>'Project_Activity_Number', 'placeholder'=>'Enter Project Activity Number', 'class'=>'form-control']);?>
                <?php echo form_error('Project_Activity_Number', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Form code ends --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label">Project Activity</label>
                <?php echo form_input(['name'=>'Project_Activity', 'placeholder'=>'Enter Project Activity', 'class'=>'form-control']);?>
                <?php echo form_error('Project_Activity', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Start Date --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label" for="Start_Date">Start Date</label>
                <?php echo form_input(['name'=>'Start_Date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control']);?>
                <?php echo form_error('Start_Date', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- End Date -->
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label" for="End_Date">End Date</label>
                <?php echo form_input(['name'=>'End_Date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control']);?>
                <?php echo form_error('End_Date', '<div class="text-danger">', '</div>');?>
                </div>   

                <!-- Status Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="duration">Status</label>
                <?php echo form_input(['name'=>'Status', 'placeholder'=>'What is the Current Status of this Activity', 'class'=>'form-control']);?>
                <?php echo form_error('duration', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Date Modified Field (include Today's date js) --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="Modified">Modified</label>
                <input type="date" name="Modified" id="theDate" class= "form-control">
                <!-- <?php echo form_input(['name'=>'Modified', 'placeholder'=>'Last Modified Date', 'class'=>'form-control']);?> -->
                <?php echo form_error('Modified', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- User Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label">User</label>
                <?php echo form_input(['name'=>'User', 'placeholder'=>'Work Email', 'class'=>'form-control']);?>
                <?php echo form_error('User', '<div class="text-danger">', '</div>');?>
                </div>
        
                <div class="col-md-4 col-sm-10 col-xs-12 mx-auto d-flex form-group">
                    <!-- Submit Form --> 
                    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger ml-auto']);?>
                    <?php echo form_reset(['name'=>'reset', 'value'=>'Clear Form', 'class'=>'btn btn-warning mx-auto']);?>
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Save', 'class'=>'btn btn-primary mr-auto']);?>
                </div>

  
            </fieldset>
        <?php echo form_close();?>
    </div>
<?php include_once('footer.php'); ?>