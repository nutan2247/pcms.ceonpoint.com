<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="banner-grid" class="py-5 px-2 bg-red mb-5">
    <h2 class="text-center text-uppercase text-white">Request for Verification of Registration</h2>
</div>

<!-- steps start -->
<div class="container">
    <div class="row pro-steps text-center">
        <div class="col-3">
            <a href="#" class="stepActive">
                <span>
                    <strong>1</strong><i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Personal & Professional Information Verification</label>
            </a>
        </div>
            
        <div class="col-3">
        <a href="#" class="stepActive">
                <span>
                    <strong>2</strong><i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Receipient Information</label>
            </a>
        </div>
            
        <div class="col-3">
            <a href="#" class="stepActive">
                <span>3</span>
                <label>Payment</label>
            </a>
        </div>
                
        <div class="col-2">
            <a href="#" class="stepProcess">
                <span>4</span>
                <label>Status</label>
            </a>
        </div>

        <!-- <div class="col-2">
            <a href="#">
                <span>5</span>
                <label>Renewed Professional License</label>
            </a>
        </div> -->

    </div>
</div>
    
<!-- steps end -->


<div class="bg-light py-4">
    <div class="col-md-8 mx-auto">
        <div class="bg-light-main-content">
            <h4 class="mb-4 text-uppercase text-center"><?php echo $title; ?></h4>
        </div>
        <?php //print_r($receipient); ?>
        <div class="bg-light py-12">
            <div class="col-md-12">
            <?php
				//print_r($unvdetls); exit;
				if($receipient->reviewer_status < 1){
					$date = $receipient->added_on;
					$newdate = strtotime ( '30 day' , strtotime ( $date ) ) ;
					$ndate = date ( 'Y-m-j' , $newdate );
					 
					$date1 = new DateTime($ndate);
					$date2 = new DateTime(date('Y-m-d'));
					$interval = $date1->diff($date2);
					echo '<div class="verification-div-content"><div class="card">
					  <div class="card-header">Your Request for verification of registration will be reviewed <br> by our team within 30 days.</div>
					  <div class="card-body text-center"><span style="font-size: 120px; color:#f12302; ">'.$interval->days.'</span><br> Remaining days <br>(PORCESSING PERIOD COUNTDOWN).</div>
					  <div class="card-footer">You will receive an email if your Request for <br> VERIFICATION of REGISTRATION was approve or disapprove.</div>
					</div><p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-info btn-lg">PENDING</span></p></div>'; 
				}
                if($receipient->reviewer_status == 2){
                    echo '<p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-danger btn-lg">REJECTED</span></p>';
                }
                if($receipient->reviewer_status == 1){
                    echo '<p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-success btn-lg">APPROVED</span></p>';
                }
            ?>
            </div>
        </div>
    </div>
</div>



