<script type="text/javascript">
    
    var base_url = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/revewier/revewer.js'); ?>"></script>
<style>
    #myTabContent {
        border: 1px solid #efefef;
        margin-top: -1px;
    }

    .nav-tabs .nav-link.active {
        color: #fff !important;
        background-color: #007bff;
        border-color: #007bff !important;
    }

    #o-all .nav-link.active {
        color: #fff !important;
        background-color: #000;
        border-color: #000 !important;
    }
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4 mb-3"><?php echo $page_title; ?></h4>
            <input type="hidden" name="reviewer_id" id="reviewer_id" value="<?php echo $this->session->userdata('user_ID'); ?>">
            <div>
                <ul class="nav nav-tabs mt-4 border-0" id="myTab" role="tablist">
                    <!-- <li class="nav-item mx-1">
                        <a class="nav-link active border border-secondary text-center rounded text-dark"
                            data-toggle="tab" href="#o-all"><small>ALL(<?php echo !empty($all_row_count)?$all_row_count:"";?>)</small></a>
                    </li> -->
                    <li class="nav-item mx-1">
                        <a class="nav-link active border border-secondary text-center rounded text-dark"
                            data-toggle="tab" href="#o-all"><small>ALL(<?php 
                                if(!empty($all_row_count) && !empty($ce_provider_all_row_count)) {
                                    echo ($all_row_count + $ce_provider_all_row_count + $foreign_application_count);
                                }else if(!empty($all_row_count) && empty($ce_provider_all_row_count)){
                                    echo ($all_row_count + $foreign_application_count);
                                }else if(empty($all_row_count) && !empty($ce_provider_all_row_count)){
                                    echo ($ce_provider_all_row_count + $foreign_application_count);
                                }
                                     ?>)</small></a>
                                
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link border border-secondary text-center rounded text-uppercase text-dark"
                            data-toggle="tab" href="#fpapplication"><small>Foreign Professional Application (<?php echo !empty($foreign_application_count)?$foreign_application_count:"";?>)</small></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link border border-secondary text-center rounded text-uppercase text-dark"
                            data-toggle="tab" href="#profile"><small>Professional License (<?php echo !empty($all_row_count)?$all_row_count:"";?>)</small></a>
                    </li>
                    <li class="nav-item mx-1">  
                        <a class="nav-link border border-secondary text-center rounded text-uppercase text-dark"
                            data-toggle="tab" href="#contact"><small>CE Providers Accreditation
                                (<?php echo !empty($ce_provider_all_row_count)?$ce_provider_all_row_count:"";?>)</small></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link border border-secondary text-center rounded text-uppercase text-dark"
                            data-toggle="tab" href="#online-c"><small>Online Course
                                Accreditation(0)</small></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link border border-secondary text-center rounded text-uppercase text-dark"
                            data-toggle="tab" href="#training-c"><small>Traning Acceditation (0)</small></a>
                    </li>
                </ul>
                <div class="tab-content mt-1" id="myTabContent" style="background:#f5f0ea; padding: 20px;">
                    <div class="tab-pane fade show active" id="o-all">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item border border-secondary rounded mx-1">
                                <a class="nav-link active text-dark" data-toggle="tab"
                                    href="#all"><small>ALL</small></a>
                            </li>
                            <li class="nav-item border border-secondary rounded mx-1">
                                <a class="nav-link text-dark" data-toggle="tab"
                                    href="#approval"><small>Approved(<?php echo !empty($approved_row_count)?$approved_row_count:"";?>)</small></a>
                            </li>
                            <li class="nav-item border border-secondary rounded mx-1">
                                <a class="nav-link text-dark" data-toggle="tab"
                                    href="#pending"><small>Pending(<?php echo !empty($pending_row_count)?$pending_row_count:"";?>)</small></a>
                            </li>
                            <li class="nav-item border border-secondary rounded mx-1">
                                <a class="nav-link text-dark" data-toggle="tab"
                                    href="#disapproval"><small>Disapproval(0)</small></a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="all">
                                <div class="card mb-4">

                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <form>
                                            <div class="form-row mt-3">
                                                <div class="col-2 border border-secondary p-0 mx-2 rounded">
                                                    <input type="text" class="form-control" placeholder="Month">
                                                </div>
                                                <div class="col-2 border border-secondary p-0 mx-2 rounded">
                                                    <input type="text" class="form-control" placeholder="Date">
                                                </div>
                                                <div class="col-2 border border-secondary p-0 mx-2 rounded">
                                                    <input type="text" class="form-control" placeholder="Year">
                                                </div>
                                                <button type="submit"
                                                    class="border border-secondary rounded">Search</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" 
                                                cellspacing="0">




                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Profession</th>
                                                        <th>Application Number.</th>
                                                        <th>Validity</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Receipt</th>
                                                        <th>Status</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($payment_details))
                                                    {
                                                        $i = 1;
                                                        foreach ($payment_details as $key => $value) {
                                                          
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $value['user_name']; ?></td>
                                                        <td><?php echo $value['category']; ?></td>
                                                        <td><?php echo $value['profession_name']; ?></td>
                                                        <td><?php echo $value['license_no']; ?></td>
                                                        <td><?php echo $value['license_validity_date']; ?></td>
                                                        <td><?php echo $value['issue_date']; ?></td>
                                                        <td><?php echo $value['amount']; ?></td>
                                                        <td><?php echo $value['tax']; ?></td>
                                                        <td><button type="button" data-id="<?php echo $value['user_certificate_id']; ?>" id="revewier_accept" class="btn btn-primary px-5">Accept</button></td>
                                                        
                                                    </tr>

                                                    <?php $i++; } } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="approval">
                               <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable_2" width="100%"
                                                cellspacing="0">




                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Profession</th>
                                                        <th>Application Number.</th>
                                                        <th>Validity</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Receipt</th>
                                                        <th>Status</th>
                                                        <th>Reviewer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($approved_details))
                                                    {
                                                        $i = 1;
                                                        foreach ($approved_details as $key => $value) {
                                                          
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $value['user_name']; ?></td>
                                                        <td><?php echo $value['category']; ?></td>
                                                        <td><?php echo $value['profession_name']; ?></td>
                                                        <td><?php echo $value['license_no']; ?></td>
                                                        <td><?php echo $value['license_validity_date']; ?></td>
                                                        <td><?php echo $value['issue_date']; ?></td>
                                                        <td><?php echo $value['amount']; ?></td>
                                                        <td><?php echo $value['tax']; ?></td>
                                                        <td>Approved</td>
                                                        <td></td>
                                                        <td><a target="_blank" href="<?php echo site_url('license/landing/professional_license?user_view=').base64_encode($value['user_ID']);?>" title="View">
                                        <i class="fas fa-eye"></i> </a></td>
                                                    </tr>

                                                    <?php $i++; } } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="pending">
                                
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable_3" width="100%"
                                                cellspacing="0">




                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Profession</th>
                                                        <th>Application Number.</th>
                                                        <th>Validity</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Receipt</th>
                                                        <th>Status</th>
                                                        <th>Reviewer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($pending_details))
                                                    {
                                                        $i = 1;
                                                        foreach ($pending_details as $key => $value) {
                                                          
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $value['user_name']; ?></td>
                                                        <td><?php echo $value['category']; ?></td>
                                                        <td><?php echo $value['profession_name']; ?></td>
                                                        <td><?php echo $value['license_no']; ?></td>
                                                        <td><?php echo $value['license_validity_date']; ?></td>
                                                        <td><?php echo $value['issue_date']; ?></td>
                                                        <td><?php echo $value['amount']; ?></td>
                                                        <td><?php echo $value['tax']; ?></td>
                                                        <td>Pending</td>
                                                        <td></td>
                                                        <td><a target="_blank" href="<?php echo site_url('license/landing/professional_license?user_view=').base64_encode($value['user_ID']);?>" title="View">
                                        <i class="fas fa-eye"></i> </a></td>
                                                    </tr>

                                                    <?php $i++; } } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>


                            </div>
                            <div class="tab-pane fade" id="disapproval">
                                No Content
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="fpapplication">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable_4" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Date of birth</th>
                                            <th>Gender</th>
                                            <th>Profession</th>
                                            <th>Email</th>
                                            <th>License No</th>
                                            <th>Validity</th>
                                            <th>Amount</th>
                                            <th>Receipt</th>
                                            <th>Status</th>
                                            <th>Reviewer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($foreign_application)){
                                            $i = 1;
                                            foreach ($foreign_application as $key => $value) {
                                                if($value->reviewer_id==0){
                                                    $review = '<button class="btn btn-primary" onclick="acceptApplication('.$value->user_ID.');"> Accept </button>';
                                                    $style = 'Display:none';
                                                }else{
                                                    $review = $value->reviewer_id;
                                                    $style = '';
                                                }
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo date('F d Y',strtotime($value->dob)); ?></td>
                                            <td><?php echo $value->gender; ?></td>
                                            <td><?php echo $value->profession_name; ?></td>
                                            <td><?php echo $value->email; ?></td>
                                            <td><?php echo $value->license_no; ?></td>
                                            <td><?php echo $value->license_validity_date; ?></td>
                                            <!-- <td><?php echo $value->issue_date; ?></td> -->
                                            <td><?php echo $value->amount; ?></td>
                                            <td><?php echo $value->txn_id; ?></td>
                                            <td><?php echo $value->payment_status; ?></td>
                                            <td><?php echo $review; ?></td>
                                            <td>
                                                <!-- <a target="_blank" href="<?php echo site_url('license/landing/professional_license?user_view=').base64_encode($value->user_ID);?>" title="View"><i class="fas fa-eye"></i> </a> -->
                                                
                                                <a target="_blank" style="<?php echo $style;?>" href="<?php echo site_url('reviewer/reviewer/verify_document/').$value->user_ID;?>" title="Verify Documents">Verify</a>

                                            </td>
                                        </tr>

                                        <?php $i++; } } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable_4" width="100%"
                                                cellspacing="0">




                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Profession</th>
                                                        <th>Application Number.</th>
                                                        <th>Validity</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Receipt</th>
                                                        <th>Status</th>
                                                        <th>Reviewer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($payment_details))
                                                    {
                                                        $i = 1;
                                                        foreach ($payment_details as $key => $value) {
                                                          
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $value['user_name']; ?></td>
                                                        <td><?php echo $value['category']; ?></td>
                                                        <td><?php echo $value['profession_name']; ?></td>
                                                        <td><?php echo $value['license_no']; ?></td>
                                                        <td><?php echo $value['license_validity_date']; ?></td>
                                                        <td><?php echo $value['issue_date']; ?></td>
                                                        <td><?php echo $value['amount']; ?></td>
                                                        <td><?php echo $value['tax']; ?></td>
                                                        <td><?php echo ($value['verified_certificate']==1)?"Approved":"Pending"; ?></td>
                                                        <td></td>
                                                        <td><a target="_blank" href="<?php echo site_url('license/landing/professional_license?user_view=').base64_encode($value['user_ID']);?>" title="View">
                                        <i class="fas fa-eye"></i> </a></td>
                                                    </tr>

                                                    <?php $i++; } } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                    </div>
                    <div class="tab-pane fade" id="contact">
                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable_5" 
                                                cellspacing="0">




                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Application Number.</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Receipt</th>
                                                        <th>Status</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(!empty($ce_provider_payment_details))
                                                    {
                                                        $i = 1;
                                                        foreach ($ce_provider_payment_details as $key => $value) {
                                                          
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $value['user_name']; ?></td>
                                                        <td><?php echo $value['business_no']; ?></td>
                                                        <td><?php echo $value['issue_date']; ?></td>
                                                        <td><?php echo $value['amount']; ?></td>
                                                        <td><?php echo $value['tax']; ?></td>
                                                        <td class="ce_provider_status"><?php echo ($value['ce_status']==1)?"Approved":"Pending"; ?></td>
                                                        <td><button type="button" data-id="<?php echo $value['provider_id']; ?>" id="ce_provider_revewier_accept" class="btn btn-primary px-5">Accept</button></td>
                                                        
                                                    </tr>

                                                    <?php $i++; } } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                    </div>
                    <div class="tab-pane fade" id="online-c">
                        No Content
                    </div>
                    <div class="tab-pane fade" id="training-c">
                        No Content
                    </div>
                </div>
            </div>

        </div>

    </main>


    <script>
        function acceptApplication(appid){
            var reviewer_id = <?php echo $this->session->userdata('log-in')['user_ID'];?>;
           
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>reviewer/reviewer/reviewer_took_fapp",
                data: { appid : appid,reviewer_id:reviewer_id },
                success: function(data) {
                    if(data>0){
                        alert('reviewer assigned for the application.');
                        location.reload();
                    }   
                }
            });
         }
    </script>