<div class="container mt-5">

    <div class="row">
        <div class="col-md-12"> 
                <?php  echo "{ $this->lang->line('register_info1') } {$usr_fname}  {$usr_lname}";  ?> <br>
                 <?php echo "{$this->lang->line('register_info2')} <strong> {$password} </strong><br>{$this->lang->line('register_info3')}"; ?>
        </div>
    </div>
    <br>
    <div class="row">
       <div class="col-md-12">
       <?php echo anchor('Signin',''.$this->lang->line('admin_login_header').'','class="btn btn-outline-warning"') ?>
       </div>
    </div>


</div>