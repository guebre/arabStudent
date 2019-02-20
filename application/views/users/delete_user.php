
<?php if($query->num_rows() == 1 ):  ?>

<?php  $row = $query->row();  ?>
<div class="container mt-5">
   <div class="row">
      <div class="col-md-12">
          <h1> <?php echo  $this->lang->line('confirm_message').'?'; ?> </h1>
          <h5 class="text-warning"> <?php echo  $this->lang->line('confirm_delete') .''. $row->usr_fname.' '.$row->usr_lname.'?'; ?> </h5>
      </div>
   </div>
   <?php 
     echo form_open('me/delete_user');
     $data = array('id' => $row->usr_id);
     echo form_hidden($data);
     echo form_submit('mysubmit', ''.$this->lang->line('common_form_elements_action_delete').'',array('class' =>'btn btn-info btn-lg'));  
     echo anchor('me/users',$this->lang->line('common_form_elements_cancel'),array('class'=> 'btn btn-info btn-lg')) ; 
     echo form_close();
   ?>
</div>

<?php  endif; ?>
