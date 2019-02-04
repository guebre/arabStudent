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
        <a class="navbar-brand" href="#"> <?php echo img($image_properties) ?>A.E.D.E.F.A.B</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">

          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle h5" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Langue</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown07">
                    <a class="dropdown-item active" href="index.html#">Francais</a>
                    <a class="dropdown-item" href="index.html#">Arabe</a>
                  </div>
              </li>
          </ul>

          <ul class="navbar-nav ml-auto">
    
              <?php if($this->session->userdata('logged_in')) :?> 
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle h5" href="#" id="dropdown071" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenue  <?php echo $this->session->userdata('usr_fname'); ?> </a>
                  <div class="dropdown-menu" aria-labelledby="dropdown071">
                    <a class="dropdown-item active" href="index.html#">Mon compte</a>
                    <a class="dropdown-item" href="<?php echo base_url('signin/signout'); ?>">Se d&eacute;connecter </a>
                    <a class="dropdown-item" href="<?php echo base_url('me/diplomes'); ?>">Mes dipl&ocirc;mes</a>
                  </div>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-warning" href="<?php echo base_url('signin'); ?>">Connexion <span class="sr-only">(current)</span></a>
              </li>
            <?php endif; ?>
          </ul>
          
        </div>

      </div>
</nav>