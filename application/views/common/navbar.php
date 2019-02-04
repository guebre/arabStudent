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
                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Langue</a>
                <div class="dropdown-menu" aria-labelledby="dropdown07">
                  <a class="dropdown-item active" href="index.html#">Francais</a>
                  <a class="dropdown-item" href="index.html#">Arabe</a>
                </div>
              </li>
          </ul>


          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link btn btn-outline-warning" href="<?php echo base_url('signin'); ?>">Connexion <span class="sr-only">(current)</span></a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Langue</a>
                <div class="dropdown-menu" aria-labelledby="dropdown07">
                  <a class="dropdown-item" href="index.html#">Se d&eacute;connecter </a>
                  <a class="dropdown-item" href="index.html#">Dd&eacute;tails</a>
                </div>
              </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item" href="index.html#">Action</a>
                <a class="dropdown-item" href="index.html#">Another action</a>
                <a class="dropdown-item" href="index.html#">Something else here</a>
              </div>
            </li>-->
          </ul>
        </div>
      </div>
</nav>