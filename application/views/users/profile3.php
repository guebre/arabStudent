<form id="frm_profile3">
    <fieldset>
        <legend> <h3><u><?php echo $this->lang->line('nouveau_diplome');?> </u></h3>  </legend> 
        <div id="profile3">
               
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lib_diplome"><strong><?php echo $this->lang->line('lib_diplome');?> </strong></label>
                <input name="usr_lib_diplome" type="text" id="usr_lib_diplome" class="form-control" placholder="BAC francais" required>
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
    <div class="col-md-12" id="list_diplome">
       <h3> Liste des diplômes </h3>
       <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nom diplôme</th>
                <th scope="col">Date obtention</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Bac French</td>
            <td>2011</td>
            <td><button  type="button" class="btn btn-danger btn-sm" id="diplome-1"> <i class = "fas fa-trash-alt"> </i> Supprimer </button></td>
            </tr>
            <tr>
            <td>Licence Frech</td>
            <td>2014</td>
            <td><button  type="button" class="btn btn-danger btn-sm" id="diplome-1"> <i class = "fas fa-trash-alt"> </i> Supprimer </button></td>
            </tr>
        </tbody>
        </table>
    
    </div>
</div>