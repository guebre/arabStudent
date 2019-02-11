<div class="form-group">
        <label for="usr_add1"><?php echo $this->lang->line('usr_add1');?></label>
        <?php echo form_input($usr_add1); ?>
    </div>
    <div class="form-group">
        <label for="usr_add2"><?php echo $this->lang->line('usr_add2');?></label>
        <?php echo form_input($usr_add2); ?>
    </div>
    <div class="form-group">
        <label for="usr_add3"><?php echo $this->lang->line('usr_add3');?></label>
        <?php echo form_input($usr_add3); ?>
    </div>
    <div class="form-group">
        <label for="usr_town_city"><?php echo $this->lang->line('usr_town_city');?></label>
        <?php echo form_input($usr_town_city); ?>
    </div>
    <div class="form-group">
        <label for="usr_zip_pcode"><?php echo $this->lang->line('usr_zip_pcode');?></label>
        <?php echo form_input($usr_zip_pcode); ?>
    </div>
    <?php echo form_hidden($id); ?>