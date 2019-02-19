<div class="page-header">
    <h1><?php /*echo $page_heading ;*/ echo $this->lang->line('me_infos'); ?></h1>
</div>

<div class="container mb-5">
    <p class="lead"><?php echo $this->lang->line('usr_form_instruction');?></p>
    <nav class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><strong>Profil_1 </strong> </a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><strong>Profil_2</strong></a>
        <a class="nav-item nav-link" id="nav-profil3-tab" data-toggle="tab" href="#nav-profil3" role="tab" aria-controls="nav-profil3" aria-selected="false"><strong>Mes diplômes </strong></a>
    </nav>
    <div class="tab-content nav-pill " id="nav-tabContent">
    <br>
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div id="profile1">
            </div> 
            <?php  $this->load->view('users/profile1'); ?>          
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div id="profile2">
            </div>
           <?php  $this->load->view('users/profile2'); ?>
        </div>
        <div class="tab-pane fade" id="nav-profil3" role="tabpanel" aria-labelledby="nav-profil3-tab">
            <?php  $this->load->view('users/profile3'); ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12"></div>
    </div>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
</div>