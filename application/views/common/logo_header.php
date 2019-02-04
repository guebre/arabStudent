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
            
            <?php echo anchor('Accueil','Accueil','class="btn btn-outline-warning"') ?>
            
      </div>
</nav>