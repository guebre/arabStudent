<?php 
$image_properties1 = array(
  'src'   => 'assets/images/banner2.png',
  'alt'   => 'Responsive image',
  'class' => ' img-fluid img-thumbnail border border-secondary',
  'title' => 'Logo',
  'rel'   => '',
);
 ?>
  <div class="container mt-3 mb-1">
    
      <!--<div class="row mt-5 bg-secondary">
           <div class="col-md-4 text-white">
             <h5>Contact</h5>
           <ul class="list-unstyled">
              <li class="list-item">Tel: (+226) 62 63 19 79  </li>
              <li class="list-item">Cel: (+226) 76 31 65 42 / 78 11 72 87 </li>
              <li class="list-item">Email: aedefab2015@gmail.com</li>
           </ul>
           </div>  
           <div class="col-md-4 bg-secondary text-white">  <?php //echo img($image_properties) ;?> </div>

           <div class="col-md-4 bg-secondary text-white">  </div>
      </div>-->
      <div class="row">
          <div class="col-md-12"> <?php echo img($image_properties1) ;?></div>
      </div>
  </div>
  <div class="container-fluid">
  <div class="row">
           <div class="col-md-12 bg-secondary text-white text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"> Copyright © 2019  </li>
                    <li class="list-inline-item">Powered by Ibrahim GUEBRE </li>
                    <li class="list-inline-item"> Tel: (+226) 78936114  Mail: guebbou@hotmail.com </li>
                </ul>
            </div>
      </div>
  </div>
  <script type="text/javascript" src="<?php  echo  js_url('jquery-3.3.1'); ?>"></script>  
  <script type="text/javascript" src="<?php  echo  js_url('popper'); ?>"></script> 
  <script type="text/javascript" src="<?php  echo  js_url('bootstrap'); ?>"></script> 
</body>
</html>