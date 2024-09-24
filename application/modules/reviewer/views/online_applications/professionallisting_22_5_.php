<script type="text/javascript">   var base_url = "<?php echo base_url(); ?>"; </script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revewier/revewer.js'); ?>"></script>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4 mb-3"><?php echo $page_title.'('.count($foreign_application).')'; ?></h4>
            <input type="hidden" name="reviewer_id" id="reviewer_id" value="<?php echo $this->session->userdata('log-in')['user_ID']; ?>">
            <div>
			<?php 
                if(count($foreign_application) > 0){
                // echo '<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                //  <li class="nav-item border border-secondary rounded mx-1">
                //   <a class="nav-link active text-dark" data-toggle="tab" href="#all"><small>ALL('.count($foreign_application).')</small></a>
                //    </li>
                // <li class="nav-item border border-secondary rounded mx-1">
                //     <a class="nav-link text-dark" data-toggle="tab"
                //         href="#approval"><small>Approved('.$application_count_approved.')</small></a>
                // </li>
                // <li class="nav-item border border-secondary rounded mx-1">
                //     <a class="nav-link text-dark" data-toggle="tab"
                //         href="#pending"><small>Pending('.$application_count_pending.')</small></a>
                // </li>
                // <li class="nav-item border border-secondary rounded mx-1">
                //     <a class="nav-link text-dark" data-toggle="tab"
                //         href="#disapproval"><small>Disapproval('.$application_count_rejected.')</small></a>
                // </li>
                // </ul>
					echo '<div class="card-body">
                            <div class="table-responsive">'; ?>
								<table class="table table-bordered" id="dataTable_4" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Refrence Number</th>
                                            <th>Type</th>
                                            <th>Date of birth</th>
                                            <th>Gender</th>
                                            <th>Profession</th>
                                            <th>Email</th>
                                            <th>License No</th>
                                            <th>Validity</th>
                                            <!-- <th>Amount</th>
                                            <th>Receipt</th> -->
                                            <th>Status</th>
                                            <th>Reviewer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($foreign_application)){
                                            $i = 1;
                                            foreach ($foreign_application as $key => $value) {
                                                if($value->reviewer_status==1){
                                                    $appstatus = '<span class="text-success">Approved</span>';
                                                }elseif($value->reviewer_status==2){
                                                    $appstatus = '<span class="text-danger">Rejected</span>';
                                                }else{
                                                    $appstatus = '<span class="text-primary">Pending</span>';
                                                }

                                                if($value->role == 'P'){
                                                    $type = 'Exam';
                                                    $verify_url = site_url('reviewer/reviewer/profexam_verify_document/').$value->user_ID.'/'.$value->doc_id;
                                                }else{
                                                    $type = 'Non-Exam';
                                                    $verify_url = site_url('reviewer/reviewer/verify_document/').$value->user_ID;
                                                }
												$reviewerName = ($value->reviewer_id > 0)?$value->rev_firsname:'--';
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo $value->refrence_code; ?></td>
                                            <td><?php echo $type; ?></td>
                                            <td><?php echo date('F d Y',strtotime($value->dob)); ?></td>
                                            <td><?php echo $value->gender; ?></td>
                                            <td><?php echo $value->profession_name; ?></td>
                                            <td><?php echo $value->email; ?></td>
                                            <td><?php echo $value->license_no; ?></td>
                                            <td><?php echo $value->license_validity_date; ?></td>
                                            <!-- <td><?php echo $value->issue_date; ?></td> -->
                                            <!-- <td><?php echo $value->amount; ?></td>
                                            <td><?php echo $value->txn_id; ?></td> -->
                                            <td><?php echo $appstatus; ?></td>
                                            <td><?php echo $reviewerName; ?></td>
                                            <td>
                                                <!-- <a target="_blank" href="<?php echo site_url('license/landing/professional_license?user_view=').base64_encode($value->user_ID);?>" title="View"><i class="fas fa-eye"></i> </a> -->
                                                 <a target="_blank" href="<?php echo $verify_url;?>" title="View Documents">View</a> 
                                                <!--<a href="javascript:void(0);" data-id="<?=$value['doc_id']?>" class="viewdetails"><i class="fas fa-eye"></i></a>-->

                                            </td>
                                        </tr>

                                        <?php $i++; } } ?>
                                    </tbody>

                                </table>
							
							<?php echo '</div></div>'; 
									
								
							}else{
								echo 'No professional available.';
							}
						?>
					
               
            </div>

        </div>

    </main>
<script>


function acceptprofessionalApplication(appid){
	var reviewer_id = <?php echo $this->session->userdata('login')['user_ID'];?>;
   // alert(appid+' * '+reviewer_id)
	$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>reviewer/reviewer/professionalassignedreviewer",
		data: { appid : appid,reviewer_id:reviewer_id },
		success: function(data) {
			//alert(data);
			if(data>0){
				alert('Reviewer assigned for professional.');
				location.reload();
			}   
		}
	});
 }

 $(document).ready(function() {
        $('#dataTable_4').DataTable();
    });


 </script>	
