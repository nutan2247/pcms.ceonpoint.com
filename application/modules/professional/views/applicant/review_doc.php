
<?php  $this->load->view('professional/include/professional_banner');  ?>
		
    <div class="container mb-5">
        <div class="row pro-steps">
            <div class="col-2">
                <a href="javascript:void(0);" class="stepActive">
                    <span>
                        <strong>1</strong>
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <label>Foreign Professional Profile</label>
                </a>
            </div>
            <div class="col-2">
                <a href="javascript:void(0);" class="stepActive">
                    <span>
                        <strong>2</strong>
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <label>Upload Documents</label>
                </a>
            </div>
            <div class="col-2">
                <a href="javascript:void(0);" class="stepActive">
                    <span>
                        <strong>3</strong>
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <label>Payment</label>
                </a>
            </div>
            <div class="col-2">
                <a href="javascript:void(0);" class="stepProcess">
                    <span>
                        <strong>4</strong>
                    </span>
                    <label>Review of Documents</label>
                </a>
            </div>
            <div class="col-2">
                <a href="javascript:void(0);">
                    <span>
                        <strong>5</strong>
                    </span>
                    <!--<label>Professional Certificate of Eligiblity</label>-->
                    <label>Certificate of Eligibility & Registration Code</label>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-light py-4">
        <div class="col-md-8 mx-auto">
            <div class="bg-light-main-content">
                <h4 class="mb-4 text-uppercase text-center"><?php echo $title; ?></h4>
            </div>  
                  
            <div class="bg-light py-12">
                <div class="col-md-12 text-center">
					<?php
						//print_r($profes_details); exit;
						if($profes_details->reviewer_status < 1){
							$date = $profes_details->added_on;
							$newdate = strtotime ( '30 day' , strtotime ( $date ) ) ;
							$ndate = date ( 'Y-m-j' , $newdate );
							 
							$date1 = new DateTime($ndate);
							$date2 = new DateTime(date('Y-m-d'));
							$interval = $date1->diff($date2);
							echo '<div class="verification-div-content"><div class="card">
							  <div class="card-header">Your document submitted will be reviewed <br> by our agents within 30 days.</div>
							  <div class="card-body text-center"><span style="font-size: 120px;color:#f12302">'.$interval->days.'</span><br> Remaining days <br>(PROCESSING PERIOD COUNTDOWN). </div>
							  <div class="card-footer">You will receive an email if your application for <br> FOREIGN PROFESSIONAL REVIEW FOR PROFESSIONAL REGISTRATION was approve or disapprove.</div>
							</div><p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-info btn-lg">PENDING</span></p></div>'; 
							 
							//echo '--'.$unvdetls->added_date;
							//echo $unvdetls->added_date;
							//echo 'Count Down';
						}
						if($profes_details->reviewer_status == 2){
							echo '<p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-danger btn-lg">REJECTED</span></p>';
						}
						if($profes_details->reviewer_status == 1){
							echo '<p style="text-align:center;font-weight:bold;">YOUR APPLICATION IS <span class="btn btn-success btn-lg">APPROVED</span></p>';
                            echo'<br><a style="font-weight:bold;"class="btn btn-info" href="'.base_url('professional/applicant/digital_license/').base64_encode($profes_details->user_ID).'">Go to next step</a>';
						}
					?>
                </div>
            </div>

 
        </div>
    </div>


<style type="text/css">
   .error{color:#ce2b2b}.statusbtn{color:#fff;background-color:#17a2b8;padding:8px;display:block;text-align:center;width:22%;margin:9px auto;border-radius:5px;font-size:24px;font-weight:500}.rejectedbtn{color:#fff;background-color:#f12302;padding:8px;display:block;text-align:center;width:22%;margin:9px auto;border-radius:5px;font-size:24px;font-weight:500}.headersection{text-align:center;background-color:#00b0f0;font-size:18px;font-weight:500}
</style>