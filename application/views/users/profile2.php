
 <form id="form_profile2">
    <div class="form-group">
        <?php echo form_error('date_naiss'); ?>
        <label for="date_naiss"><?php echo $this->lang->line('date_naiss');?></label>
        <?php echo form_input($usr_date_naiss); ?>
        <div class="error2"> </div>
    </div>
    <div class="form-group">
        <label for="lieu_naiss"><?php echo $this->lang->line('lieu_naiss');?></label>
        <?php echo form_input($usr_lieu_naiss); ?>
    </div>
    <div class="form-group">
        <label for="situation_mat"><?php echo $this->lang->line('situation_mat');?></label>
        <?php echo form_dropdown('usr_situation_mat',array('0' => 'Célibataire','1'=> 'Marié','2'=> 'Divorcé','3' =>'Autres'),''.$usr_situation_mat.'',array('class' =>'form-control')); ?>
    </div>
    <div class="form-group">
        <label for="formation"><?php echo $this->lang->line('formation');?></label>
        <?php echo form_input($usr_formation); ?>
        <div class="error2"> </div>
    </div>
    <div class="form-group">
        <label for="association"><?php echo $this->lang->line('association');?></label>
        <?php echo form_input($usr_association); ?>
        <div class="error2"> </div>
    </div>
    <div class="form-group">
        <label for="secteur_act"><?php echo $this->lang->line('secteur_act');?></label>
        <?php echo form_input($usr_sect_activite); ?>
        <div class="error2"> </div>
    </div>
    <div class="form-group">
        <label for="telephone"><?php echo $this->lang->line('telephone');?></label>
        <?php echo form_input($usr_phone); ?>
        <div class="error2"> </div>
    </div>
    <?php echo form_hidden($id); ?>
    <div class="form-group text-center mb-5">
        <button type="submit" class="btn btn-success btn-block" id="submit_profile2">
            <?php echo $this->lang->line('common_form_elements_update');?>
            <i></i>
        </button>
    </div>
    <?php echo form_close() ; ?> 

