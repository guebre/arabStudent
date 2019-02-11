<form id="frm_profile1">
    <div class="form-group">
        <?php //echo form_error('usr_fname'); ?>
        <label for="usr_fname"><?php echo $this->lang->line('usr_fname');?></label>
        <?php echo form_input($usr_fname); ?>
        <div class="error"> </div>
    </div>
    <div class="form-group">
        <?php //echo form_error('usr_lname'); ?>
        <label for="usr_lname"><?php echo $this->lang->line('usr_lname');?></label>
        <?php echo form_input($usr_lname); ?>
        <div class="error"> </div>
    </div>
    <div class="form-group">
        <?php //echo form_error('usr_uname'); ?>
        <label for="usr_uname"><?php echo $this->lang->line('usr_uname');?></label>
        <?php echo form_input($usr_uname); ?>
        <div class="error"> </div>
    </div>
    <div class="form-group">
        <label for="usr_email"><?php echo $this->lang->line('usr_email');?></label>
        <?php echo form_input($usr_email); ?>
        <div class="error"> </div>
    </div>
    <div class="form-group">
        <label for="usr_confirm_email"><?php echo $this->lang->line('usr_confirm_email');?></label>
        <?php echo form_input($usr_confirm_email); ?>
        <div class="error"> </div>
    </div>
   
    <div class="form-group">
        <button type="submit" class="btn btn-success" id="submit_profile">
            <?php echo $this->lang->line('common_form_elements_go');?>
            <i></i>
            </button>
            or <?php echo anchor('users',$this->lang->line('common_form_elements_cancel'),'class="btn btn-info"');?>
    </div>
</form> <br>
<?php echo anchor('me/pwd_email/'.$id,'Reset Email') ; ?>