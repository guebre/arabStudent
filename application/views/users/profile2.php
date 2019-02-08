<?php echo validation_errors() ; ?>
<div class="container" id="profile2">
<p class="lead"><?php echo $this->lang->line('usr_form_instruction');?></p>
    
 <form id="form_profile2">
    <div class="form-group">
        <?php echo form_error('date_naiss'); ?>
        <label for="date_naiss"><?php echo $this->lang->line('date_naiss');?></label>
        <?php echo form_input($date_naiss); ?>
    </div>
    <div class="form-group">
        <label for="lieu_naiss"><?php echo $this->lang->line('lieu_naiss');?></label>
        <?php echo form_input($lieu_naiss); ?>
    </div>
    <div class="form-group">
        <label for="situation_mat"><?php echo $this->lang->line('situation_mat');?></label>
        <?php echo form_input($situation_mat); ?>
    </div>
    <div class="form-group">
        <label for="fin_etude"><?php echo $this->lang->line('fin_etude');?></label>
        <?php echo form_input($fin_etude); ?>
    </div>
    <div class="form-group">
        <label for="formation"><?php echo $this->lang->line('formation');?></label>
        <?php echo form_input($formation); ?>
    </div>
    <div class="form-group">
        <label for="association"><?php echo $this->lang->line('association');?></label>
        <?php echo form_input($association); ?>
    </div>
    <div class="form-group">
        <label for="secteur_act"><?php echo $this->lang->line('secteur_act');?></label>
        <?php echo form_input(); ?>
    </div>
    <div class="form-group">
        <label for="telephone"><?php echo $this->lang->line('telephone');?></label>
        <?php echo form_input($telephone); ?>
    </div>
    <?php echo form_hidden($id); ?>
    <div class="form-group">
        <button type="submit" class="btn btn-success" id="prfil2">
            <?php echo $this->lang->line('common_form_elements_go');?></button>
    </div>
    <?php echo form_close() ; ?> 
</div>

