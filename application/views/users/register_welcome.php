<div class="container mt-5">

    <div class="row">
        <div class="col-md-12"> 
                <?php  echo "Dear ${usr_fname}  ${usr_lname}, <br>
            Welcome to the site. Your password is : <strong> ${password} </strong><br>
            Regards,
            The Team"; 
             
            ?>
        </div>
    </div>
    <br>
    <div class="row">
       <div class="col-md-12">
       <?php echo anchor('Signin','Se connecter','class="btn btn-outline-warning"') ?>
       </div>
    </div>


</div>