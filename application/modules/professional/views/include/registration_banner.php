
   <?php 
    if($this->session->userdata('app_session')){
        $application_id = $this->session->userdata('app_session')['application_id'];
    }else{
        $application_id = 0;
    }?>    
        <!-- <div id="banner-grid" class="py-5 px-2 bg-red online-red-banner mb-5" style="background-image: url(<?php echo base_url('assets/images/online-exam.png'); ?>);">  -->
        <div id="banner-grid" class="py-5 px-2 bg-red online-red-banner mb-5"> 
            <div class="container">
                <!-- <h4 class="text-left text-uppercase text-white">Initial Driver's License Application</h4> -->
                <h3 class="text-center text-uppercase text-white">Professional Registration</h3>
                	
            </div>
        </div>

        <!-- <div class="online-exam">
            <img src="<?php echo base_url('assets/images/online-exam.png'); ?>" alt="">
        </div> -->
