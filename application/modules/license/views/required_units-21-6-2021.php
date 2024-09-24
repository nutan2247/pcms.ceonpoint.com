<div id="banner-grid" class="py-5 px-2 bg-red mb-5">

    <h2 class="text-center text-uppercase text-white">Professional License Renewal</h2>
    <!-- <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->session->userdata('user_ID'); ?>"> -->
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $this->uri->segment(4); ?>">

</div>

<div class="container">

    <div class="row pro-steps">
        <div class="col-2">
            <a href="javasacript:void(0);" class="stepActive">
                <span>
                    <strong>1</strong>
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                <label>Personal & Professional Verification</label>
            </a>
        </div>

        <div class="col-2">
            <a href="#" class="stepProcess">
                <span>
                    <strong>2</strong>
                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>
        </div>

        <div class="col-2">
            <a href="#">
            <span>3</span>
            <label>CE Certificates <br>Verification</label>
            </a>
        </div>

        <div class="col-2">
            <a href="#">
                <span>4</span>
                <label>Payment</label>
            </a>
        </div>

        <div class="col-2">
            <a href="#">
                <span>5</span>
                <label>Digital Professional License</label>
            </a>
        </div>
    </div>

<?php
    if($profession->required_units !=''){ $required_units = $profession->required_units; }else{ $required_units = 0;}
    if($profession->general_units !=''){ $general_units = $profession->general_units; }else{ $general_units = 0;}
    if($profession->specific_units !=''){ $specific_units = $profession->specific_units; }else{ $specific_units = 0;}

    if(!empty($unit_obtain->certificate_unit_count)){ $reported_units = $unit_obtain->certificate_unit_count; }else{ $reported_units = 0; }
    if(!empty($gernal_obtain->certificate_unit_count)){ $reported_general_units = $gernal_obtain->certificate_unit_count; }else{ $reported_general_units = 0;}
    if(!empty($specific_obtain->certificate_unit_count)){ $reported_specific_units = $specific_obtain->certificate_unit_count; }else{ $reported_specific_units = 0;}

    if($balanced !=''){ $balanced = $balanced; }else{ $balanced = 0;}
    if($gernal_balanced !=''){ $gernal_balanced = $gernal_balanced; }else{ $gernal_balanced = 0;}
    if($specific_balanced !=''){ $specific_balanced = $specific_balanced; }else{ $specific_balanced = 0;}
?>

    <div class="col-md-10 mx-auto">

        <div class="my-5">

            <h4 class="mb-4 mt-4 text-uppercase text-center">Required CE Units Verification</h4>

           <div class="col-md-8">

                <p><b>Name:</b>
                <?php echo (!empty($udetails)?$udetails->fullname:""); ?>
                <br>
                <b>Profession:</b>

                    <?php echo (!empty($udetails)?$udetails->profession_name:""); ?><br><b>License No:</b>

                    <?php echo (!empty($udetails)?$udetails->license_no:""); ?><br><b>Validity:</b>

                    <?php echo (!empty($udetails)?date('M,d,Y',strtotime($udetails->license_validity_date)):""); ?>

                </p>
            </div>
            <?php echo $this->session->flashdata('response'); ?>
            <div class="required-box p-4 rounded">

                <h4 class="text-center">PROFESSION : <?php echo !empty($profession)?$profession->name:""; ?></h4>

                <h6 class="text-center mb-4">

                    <?php

                        $sdate = date('d F Y',strtotime($profession->start_date)); 

                        $edate = date('d F Y',strtotime($profession->end_date)); 

                    ?>

                Period Covered : <b><?php echo $sdate.' to '.$edate; ?></b>

                </h6>

                <div class="row">

                    <div class="col-md-3">

                        <div class="dbox bg-danger rounded py-3 mb-2">

                            <h4 class="m-0"><?php echo $required_units; ?></h4>

                            <p class="m-0">Units</p>

                        </div>

                        <h6 class="text-center">Required CE Units</h6>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="abox"><?php echo $general_units; ?></div>

                                <p class="text-center">General</p>

                            </div>

                            <div class="col-md-6">

                                <div class="abox"><?php echo $specific_units; ?></div>

                                <p class="text-center">Specific</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="dbox bg-danger rounded py-3 mb-2">

                            <h4 class="m-0"><?php echo $reported_units; ?></h4>

                            <p class="m-0">Units</p>

                        </div>

                        <h6 class="text-center">Reported CE Units</h6>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="abox"><?php echo $reported_general_units; ?></div>

                                <p class="text-center">General</p>

                            </div>

                            <div class="col-md-6">

                                <div class="abox"><?php echo $reported_specific_units; ?></div>

                                <p class="text-center">Specific</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="dbox bg-danger rounded py-3 mb-2">

                            <h4 class="m-0"><?php echo $balanced; ?></h4>

                            <p class="m-0">Units</p>

                        </div>

                        <h6 class="text-center">Needed CE Units</h6>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="abox"><?php echo $gernal_balanced; ?></div>

                                <p class="text-center">General</p>

                            </div>

                            <div class="col-md-6">

                                <div class="abox"><?php echo $specific_balanced; ?></div>

                                <p class="text-center">Specific</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="cbox">
                            <?php if($required_units <= $reported_units && $balanced < 1 ) { ?>
                                <h4 style="color:red">Completed</h4>
                            <?php }else{ ?>
                                <h4>On Completion</h4>
                            <?php } ?>
                        </div>
                        <h5 class="text-center">Status</h5>

                    </div>

                </div>

            </div>


            <?php if(!isset($user_view)) { ?>
                <div class="col-md-12 text-center">
                    <a href="javascript:void(0);" class="bg-warning rounded d-inline-block my-3 px-5 py-1 add_certificate">
                        <h6 class="text-danger mt-2">ADD CERTIFICATES</h6>
                    </a>
                </div>
            <?php } ?>


            <div class="table-div bg-primary p-4 rounded my-1">
                <h4 class="text-light mb-3">MY CERTIFICATES RECORD</h4>
                <div class="bg-white p-3">
                    <ul class="nav nav-tabs pb-3">
                        <li class="active"><a class="btn btn-primary mr-1" data-toggle="tab" href="#home">ALL</a></li>
                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu1">SPECIFIC</a></li>
                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu2">GENERAL</a></li>
                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu3">ONLINE COURSE</a></li>
                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu4">TRAINING</a></li>
                    </ul>

                    <div class="tab-content pt-2">
                        <div id="home" class="tab-pane fade in active show">
                            <h5>ALL</h5>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Course/Traning Name</th>
                                    <th>Units</th>
                                    <th>Issued By</th>
                                    <th>Issued From</th>
                                    <th>Category</th>
                                    <th>Certificate No</th>
                                    <!-- <th>Status</th> -->
                                </tr>
                                <?php if(!empty($get_all_certificate)) { 
                                    $s_no = 1;
                                    $total_units = 0;
                                    foreach ($get_all_certificate as $key => $value) { 
                                        $total_units += $value['units']; ?>

                                <tr>
                                    <td><?php echo $s_no; ?></td>
                                    <td><?php echo $value['course_name']; ?></td>
                                    <td><?php echo $value['units']; ?></td>
                                    <td><?php echo $value['issue_date']; ?></td>
                                    <td><?php echo $value['issue_from']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['certificate_id']; ?></td>
                                    <!-- <td><?php echo ($value['certificate_identify']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?></td> -->
                                </tr>
                                <?php $s_no++; } ?>
                                <tr>
                                    <td></td>
                                    <th>Total Units</th>
                                    <th><?php echo $total_units; ?> unit/s</th>
                                    <td colspan="4"></td>
                                </tr>
                                <?php } ?>

                            </table>
                        </div>

                        <div id="menu1" class="tab-pane fade">
                            <h3>SPECIFIC</h3>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Course/Traning Name</th>
                                    <th>Units</th>
                                    <th>Issued By</th>
                                    <th>Issued From</th>
                                    <th>Category</th>
                                    <th>Certificate No</th>
                                    <th>Status</th>
                                </tr>
                                <?php if(!empty($get_specific_certificate)) { 
                                    $s_no = 1;
                                    foreach ($get_specific_certificate as $key => $value) { ?>

                                <tr>
                                    <td><?php echo $s_no; ?></td>
                                    <td><?php echo $value['course_name']; ?></td>
                                    <td><?php echo $value['units']; ?></td>
                                    <td><?php echo $value['issue_date']; ?></td>
                                    <td><?php echo $value['issue_from']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['certificate_id']; ?></td>
                                    <td><?php echo ($value['certificate_identify']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?></td>
                                </tr>
                                <?php $s_no++; } } ?>
                            </table>
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <h3>GENERAL</h3>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Course/Traning Name</th>
                                    <th>Units</th>
                                    <th>Issued By</th>
                                    <th>Issued From</th>
                                    <th>Category</th>
                                    <th>Certificate No</th>
                                    <th>Status</th>
                                </tr>
                                <?php if(!empty($get_general_certificate)){
                                    $s_no = 1;
                                    foreach ($get_general_certificate as $key => $value) { ?>

                                <tr>
                                    <td><?php echo $s_no; ?></td>
                                    <td><?php echo $value['course_name']; ?></td>
                                    <td><?php echo $value['units']; ?></td>
                                    <td><?php echo $value['issue_date']; ?></td>
                                    <td><?php echo $value['issue_from']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['certificate_id']; ?></td>
                                    <td><?php echo ($value['certificate_identify']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?></td>
                                </tr>
                                <?php $s_no++; } } ?>
                            </table>
                        </div>

                        <div id="menu3" class="tab-pane fade">
                            <h3>ONLINE COURSE</h3>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Course/Traning Name</th>
                                    <th>Units</th>
                                    <th>Issued By</th>
                                    <th>Issued From</th>
                                    <th>Category</th>
                                    <th>Certificate No</th>
                                    <th>Status</th>
                                </tr>
                                <?php if(!empty($get_online_certificate)){
                                    $s_no = 1;
                                    foreach ($get_online_certificate as $key => $value) {?>

                                <tr>
                                    <td><?php echo $s_no; ?></td>
                                    <td><?php echo $value['course_name']; ?></td>
                                    <td><?php echo $value['units']; ?></td>
                                    <td><?php echo $value['issue_date']; ?></td>
                                    <td><?php echo $value['issue_from']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['certificate_id']; ?></td>
                                    <td><?php echo ($value['certificate_identify']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?></td>
                                </tr>
                                <?php $s_no++; } } ?>
                            </table>
                        </div>

                        <div id="menu4" class="tab-pane fade">
                            <h3>TRAINING</h3>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Course/Traning Name</th>
                                    <th>Units</th>
                                    <th>Issued By</th>
                                    <th>Issued From</th>
                                    <th>Category</th>
                                    <th>Certificate No</th>
                                    <th>Status</th>
                                </tr>
                                <?php if(!empty($get_traning_certificate)) {
                                    $s_no = 1;
                                    foreach ($get_traning_certificate as $key => $value) { ?>

                                <tr>
                                    <td><?php echo $s_no; ?></td>
                                    <td><?php echo $value['course_name']; ?></td>
                                    <td><?php echo $value['units']; ?></td>
                                    <td><?php echo $value['issue_date']; ?></td>
                                    <td><?php echo $value['issue_from']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['certificate_id']; ?></td>
                                    <td><?php echo ($value['certificate_identify']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?></td>
                                </tr>
                                <?php $s_no++; } } ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

   

            <div class="col-12 text-center mt-4">
                <?php if(count($get_all_certificate)==0) { $disabled = 'disabled'; }else{  $disabled = ''; } ?>

                <?php if(!isset($user_view)) { ?>
                    <button <?php echo $disabled; ?> id="required_units_submit" class="btn btn-success btn-lg">Submit</button>
                <?php } ?>
            </div>

        </div>

    </div>
</div>











    <!----------------------- POPUP MODAL FOR ADD CERTIFICATE -------------------------->



    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload Certificate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open_multipart('license/landing/add_certificate',array('id'=>'add_certificate')); ?>
                    <div class="modal-body">
                        <input type="hidden" name="user_id" value="<?php echo base64_decode($this->uri->segment(4)); ?>">
                        <p>
                            <label>Certificate No </label>
                            <input name="certi_no" value="" size="20" type="text" class="form-control">
                            <span class="error"></span>
                        </p>

                        <p>
                            <label>Course Title <span class="required text-danger"> * </span> </label>
                            <input name="course_name" value="" size="20" type="text" class="form-control" required="">
                            <span class="error"></span>
                        </p>

                        <p>
                            <label>Course Units <span class="required text-danger"> * </span> </label>
                            <input name="course_unit" value="" size="20" type="number" class="form-control" required="">
                            <span class="error"></span>
                        </p>

                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <label>Date Issued <span class="required text-danger"> * </span> </label>
                                    <input name="course_start_date" value=""  type="date" class="form-control" required="">
                                    <span class="error"></span>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <label>Category</label>
                                    <select name="category" id="category1" class="form-control">
                                        <option value="" selected="">Please Select</option>
                                        <option value="general">General</option>
                                        <option value="specific">Specific</option>
                                    </select>
                                    <span class="error"></span>
                                </p>
                            </div>

                            <div class="col-md-6">
                                <p>
                                    <label>Issued From<span class="required text-danger"> * </span> </label>
                                    <select name="issue_from" id="issue_from" class="form-control" required="">
                                        <option value="" selected="">Please Select</option>
                                        <option value="Online Course">Online Course</option>
                                        <option value="Training">Training</option>
                                    </select>
                                    <span class="error"></span>
                                </p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <label>Issued By<span class="required text-danger"> * </span> </label>
                                    <input name="issue_by" value="" type="text" class="form-control" required="">
                                    <span class="error"></span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <label>Certificate <span class="required text-danger"> * </span> </label>
                                    <input name="certificate" value="" size="20" type="file" class="form-control">
                                    <span class="error"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <label>Website link to verify certificates:<span class="required text-danger"></span> </label>
                                    <input name="web_link" value="" type="text" class="form-control" required="">
                                    <span class="error"></span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <input class="btn btn-primary" value="SAVE" type="submit" name="save">
                    </div>
                    </form>

                </div>

            </div>

        </div>

    </div>





    <!------------------------- POPUP MODAL FOR REQUIRED UNIT CONFIRMATION -------------->

    <div class="modal fade green-bg-heading" id="conformation_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="conformation_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="conformation_modal">Congratulations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="">
                        <p>You have completed the required CE Units/Contacts Hours for License Renewal</p>
                        <table class="table table-border">
                            <tr>
                                <th>VARIABLES</th>
                                <th>REQUIRED</th>
                                <th>SUBMITTED</th>
                                <th>STATUS</th>
                            </tr>
                            
                            <tr>
                                <th>Total Units</th>
                                <td><?php echo $required_units; ?></td>
                                <td><?php echo $reported_units; ?> </td>
                                <td><?php if($required_units <= $reported_units && $balanced < 1) { echo 'COMPLETE'; }else{ echo 'INCOMPLETE'; } ?></strong> </td>
                            </tr>
                            <tr>
                                <th>Specific Units</th>
                                <td><?php echo $specific_units; ?></td>
                                <td><?php echo $reported_specific_units; ?> </td>
                                <!-- <td><?php echo ($specific_balanced < 1) ? 'COMPLETE' : 'INCOMPLETE' ?></strong> </td> -->
                                <td><?php if($specific_units <= $reported_specific_units && $specific_balanced < 1) { echo 'COMPLETE'; }else{ echo 'INCOMPLETE'; } ?></strong> </td>
                            </tr>
                            <tr>
                                <th>Genral Units</th>
                                <td><?php echo $general_units; ?></td>
                                <td><?php echo $reported_general_units; ?> </td>
                                <!-- <td><?php echo ($gernal_balanced < 1) ? 'COMPLETE' : 'INCOMPLETE' ?></strong> </td> -->
                                <td><?php if($general_units <= $reported_general_units && $gernal_balanced < 1) { echo 'COMPLETE'; }else{ echo 'INCOMPLETE'; } ?></strong> </td>
                            </tr>
                        </table>
                        
                        <div class="mt-2 text-center">
                            <p>Please proced to validate your certificates</p>
                            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning/').$this->uri->segment(4); ?>" class="btn btn-success text-uppercase">NEXT</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade red-bg-heading" id="retry_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="retry_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="retry_modal">INCOMPLETE UNITS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="">
                        <p>You can not proceed to next step because of the following</p>
                        <p>Result:</p>
                        <table class="table table-border">
                            <tr>
                                <th>VARIABLES</th>
                                <th>REQUIRED</th>
                                <th>SUBMITTED</th>
                                