<div class="container mt-5">
    <?php if (isset($login_fail)) : ?>
    <div class="alert alert-danger"><?php echo $this->lang->line('admin_login_error') ; ?></div>
    <?php endif ; ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('signin/index', 'class="form-signin" role="form"') ; ?>
       
        <h1 class="form-signin-heading"><?php echo $this->lang->line('admin_login_header') ; ?></h2>
        <div class="form-group">
             <input type="email" name="usr_email" class="form-control" placeholder="<?php echo $this->lang->line('admin_login_email') ; ?>" required autofocus>
        </div>
        <div class="form-group">
             <input type="password" name="usr_password" class="form-control" placeholder="<?php echo $this->lang->line('admin_login_password') ; ?>" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->lang->line('admin_login_signin') ; ?></button>
        <?php echo anchor('password',$this->lang->line('signin_forgot_password')); ?>
    <?php echo form_close() ; ?>
</div>