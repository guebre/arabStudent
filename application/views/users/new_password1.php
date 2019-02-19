<div class="container mt-5">
<div class="row">
    <div class="col-md-12 text-center text-secondary"> <h1> <?php echo $this->lang->line('new_password_message'); ?> </h1></div>
</div>
<?php echo form_open('password/new_password1'); ?>
    <div class="form-group">
       
        <label for="usr_email"><strong><?php echo $this->lang->line('signin_new_pwd_pwd');?> </strong></label>
        <?php echo form_input($usr_password1); ?>
        <?php echo form_error('usr_password1'); ?>
    </div>
    <div class="form-group">
       
        <label for="usr_lname"><strong><?php echo $this->lang->line('signin_new_pwd_confirm');?> </strong></label>
        <?php echo form_input($usr_password2); ?>
        <?php echo form_error('usr_password2'); ?>
        
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" id="submit_profile">
            <?php echo $this->lang->line('common_form_elements_go');?> 
        </button>
           
    </div>
<?php  echo form_close(); ?>
</div>
