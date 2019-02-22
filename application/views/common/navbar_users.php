<?php
$image_properties = array(
    'src'   => 'assets/images/logo.jpg',
    'alt'   => 'images association ',
    'class' => ' rounded-circle',
    'width' => '50',
    'height'=> '50',
    'title' => 'Logo',
    'rel'   => ''
);

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <?php echo img($image_properties) ?>A.E.D.E.F.A.B</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
        <?php //if(!$this->session->userdata('logged_in')) : ?> 
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle h5" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php  echo $this->lang->line('langue');?></a>
                  <div class="dropdown-menu" aria-labelledby="dropdown07">
                    <a class="dropdown-item" href="<?php echo base_url('accueil/setLang/french'); ?>"><?php  echo $this->lang->line('fr_lang');?></a>
                    <a class="dropdown-item" href="<?php echo base_url('accueil/setLang/arabe'); ?>"><?php echo $this->lang->line('ar_lang');?></a>
                  </div>
              </li>
          </ul>
        <?php //endif; ?>
          <ul class="navbar-nav ml-auto">
    
              <?php if($this->session->userdata('logged_in')) : ?> 
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle h5" href="#" id="dropdown071" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php  echo $this->lang->line("welcome"); ?>  <?php echo $this->session->userdata('usr_fname'); ?> </a>
                  <div class="dropdown-menu" aria-labelledby="dropdown071">
                    <a class="dropdown-item" href="<?php echo base_url('me'); ?>"><strong><?php  echo $this->lang->line("mon_compte"); ?> </strong></a> 
                    <a class="dropdown-item" href="<?php echo base_url('password'); ?>"> <strong> <?php  echo $this->lang->line("update_password"); ?></strong> </a>
                    <?php if ($this->session->userdata('usr_access_level') == 1) : ?>
                    <a class="dropdown-item" href="<?php echo base_url('me/users'); ?>"><strong> <?php  echo $this->lang->line("users_list"); ?> </strong></a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="<?php echo base_url('signin/signout'); ?>"><strong> <?php  echo $this->lang->line("logout_message"); ?></strong> </a>
                   
                  </div>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-warning" href="<?php echo base_url('signin'); ?>"><?php echo $this->lang->line('top_nav_signin'); ?> <span class="sr-only">(current)</span></a>
              </li>
            <?php endif; ?>
          </ul>
          
        </div>

      </div>
</nav>