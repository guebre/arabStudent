<div class="container">
    <div class="jumbotron mt-3">
        <h3 class="text-white text-uppercase text-center">Bienvenue,sur notre plateforme </h3>
        <p  class="d-flex justify-content-center  text-uppercase  text-success  bg-light font-weight-bold ">association des eleves & etudiants diplomes des ecoles franco-arabe du burkina faso </p>
        <p  class="bg-light text-danger font-weight-bold text-center"> Incrivez-vous des à presents pour bénéficier de meilleurs opportinutés  sur le plan nationale et internationale </p>
    </div>

    <?php echo form_open('register'); ?> 
       <fieldset>   
            <legend class="text-info"><?php  echo $this->lang->line('register_accueil_message'); ?></legend>
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
    <!--<form>
        <div class="form-group row">
            <div class="col-md-3">
                <input type="text"  name="fname" class="form-control" placeholder="Nom">
            </div>
            <div class="col-md-3">
                <input type="text" name="lname" class="form-control" placeholder="Prenom">
            </div>
            <div class="col-md-3">
                <input type="text" name="usr_mail" class="form-control" placeholder="Email">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success btn-block">Valider</button>
            </div>
        </div>
    </form>-->
</div>