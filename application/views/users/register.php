<div class="container mt-5">

    <?php echo validation_errors(); ?>
    <h1>  <?php echo $this->lang->line('register_page_title'); ?></h1>
    <?php echo form_open('register'); ?> 
       <fieldset>   
            <div class="form-group">
               <input type="text" class="form-control" name="usr_fname" placeholder="<?php echo $this->lang->line('register_first_name'); ?>" autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="usr_lname" placeholder="<?php echo $this->lang->line('register_last_name'); ?>" >
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="usr_email" placeholder="<?php echo $this->lang->line('register_email');?>" >
            </div>
            <?php echo form_submit('submit', 'Register', 'class="btn btn-success btn-block"'); ?>
        </fieldset>
   <?php echo form_close(); ?>
</div>