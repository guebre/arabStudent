<?php 
$image_properties1 = array(
  'src'   => 'assets/images/entete3.png',
  'alt'   => 'Responsive image',
  'class' => 'img-fluid border border-secondary',
  'title' => 'Logo',
  'rel'   => '',
);
 ?>
  <div class="container mt-3 mb-1">
      <div class="row">
          <div class="col-md-12"> <?php echo img($image_properties1) ;?></div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
           <div class="col-md-12 bg-secondary text-white text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><?php echo $this->lang->line('copyright1'); ?>  </li>
                    <li class="list-inline-item"><?php echo $this->lang->line('copyright2'); ?> </li>
                    <li class="list-inline-item"> <?php echo $this->lang->line('copyright3'); ?> </li>
                </ul>
            </div>
      </div> 
  </div>
  <script type="text/javascript" src="<?php  echo  js_url('jquery-3.3.1'); ?>"></script>  
  <script type="text/javascript" src="<?php  echo  js_url('popper'); ?>"></script> 
  <script type="text/javascript" src="<?php  echo  js_url('bootstrap'); ?>"></script> 
  <script type="text/javascript" src="<?php  echo  js_url('code'); ?>"> </script> 
</body>
</html>