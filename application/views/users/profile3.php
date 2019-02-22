<form id="frm_profile3">
    <fieldset>
        <legend> <h3><u><?php echo $this->lang->line('nouveau_diplome');?> </u></h3>  </legend> 
        <div id="profile3">
               
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lib_diplome"><strong><?php echo $this->lang->line('lib_diplome');?> </strong></label>
                <input name="usr_lib_diplome" type="text" id="usr_lib_diplome" class="form-control" placeholder="<?php echo $this->lang->line('lib_diplome');?>" required>
                <div class="error"> </div>
            </div>
            <div class="form-group col-md-6">
                <label for="date_obtention"><strong><?php echo $this->lang->line('date_obtention');?></strong></label>
                <select name="usr_date_diplome" id="usr_date_diplome" class="form-control">    
                    <option value="undefined"> <?php echo $this->lang->line('choose_year');?> </option> 
                </select>
                <div class="error"> </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-block" id="submit_profile3">
                <?php echo $this->lang->line('common_form_elements_add');?>
            <i></i>
        </button>
    </fieldset>
</form>  
<br>
<hr>
<div class="row">
    <div class="col-md-12"><h3><?php echo $this->lang->line('mes_diplomes'); ?> </h3></div>
</div>
<div class="row">
    <div class="col-md-12 table-responsive" id="list_diplome">
      
    </div>

</div>