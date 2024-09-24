<div id="banner-grid" class="py-5 px-2 bg-red mb-5">

    <h2 class="text-center text-uppercase text-white">Professional License Renewal</h2>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">

</div>

<div class="container">

    <div class="row pro-steps">
        <div class="col-2">
            <?php
            if(!empty($user_view) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/professional_license?view=1&user_view='.base64_encode($user_id)) ?>" class="stepActive">
            <span>
                
                <strong>1</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>                

            </span>
                <label>Personal & Professional Verification</label>
            </a>
        <?php }else if(!empty($user_view) && !isset($view)){ ?>
               <a href="<?php echo base_url('license/landing/professional_license?user_view='.base64_encode($user_id)) ?>" class="stepActive">
            <span>
                
                <strong>1</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>                

            </span>
                <label>Personal & Professional Verification</label>
            </a>
        <?php }else{ ?>
            <a href="javasacript:void(0);" class="stepActive">

                <span>

                    <strong>1</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>

                </span>

                <label>Personal & Professional Verification</label>

            </a>


        <?php } ?>
         
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_view) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/required_units?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>2</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>
        <?php }else if(!empty($user_view) && !isset($view)) { ?>
               
               <a href="<?php echo base_url('license/landing/required_units?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>2</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>

        <?php }else{ ?>
            <a href="javasacript:void(0);" class="stepActive">

                <span>

                    <strong>2</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>

                </span>

                <label>Required CE Units Verification</label>

            </a>
        <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_view) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>3</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>CE Certificates <br>Verification</label>
            </a>
        <?php }else if(!empty($user_view) && !isset($view)){ ?>
            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>3</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>CE Certificates <br>Verification</label>
            </a>
            <?php }else{ ?>

                <a href="javasacript:void(0);" class="stepProcess">

                <span>3</span>

                <label>CE Certificates Verification</label>

            </a>


            <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_view) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/payment?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>4</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Payment</label>
            </a>
        <?php }else if (!empty($user_view) && !isset($view)) {
            # code...
        ?>
            <a href="<?php echo base_url('license/landing/payment?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>4</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Payment</label>
            </a>
        <?php }else{ ?>
            <a href="#">
                <span>4</span>
                <label>Payment</label>
            </a>
        <?php }?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_view) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/digital_professional?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span><strong>5</strong><i class="fa fa-check" aria-hidden="true"></i></span>
                 <label>Digital Professional License</label>
            </a>
        <?php }else if(!empty($user_view) && !isset($view)){ ?>
                <a href="<?php echo base_url('license/landing/digital_professional?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span><strong>5</strong><i class="fa fa-check" aria-hidden="true"></i></span>
                 <label>Digital Professional License</label>
            </a>
        <?php }else{ ?>
            <a href="#">
                <span>5</span>
                <label>Digital Professional License</label>
            </a>
        <?php } ?>
        </div>
    </div>

    <div class="col-md-10 mx-auto">

        <div class="my-5">

            <h4 class="mb-4 mt-4 text-uppercase text-center">CE Certificates Verification</h4>

            <div class="table-div bg-primary p-4 rounded my-1">

                <h4 class="text-light mb-3 text-uppercase">Reported CERTIFICATES</h4>

                <div class="bg-white p-3">

                    <!-- <ul class="nav nav-tabs pb-3">

                        <li class="active"><a class="btn btn-primary mr-1" data-toggle="tab" href="#home">ALL</a></li>

                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu1">SPECIFIC</a></li>

                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu2">GENERAL</a></li>

                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu3">ONLINE COURSE</a></li>

                        <li><a class="btn btn-primary mr-1" data-toggle="tab" href="#menu4">TRAINING</a></li>

                    </ul> -->



                    <div class="tab-content pt-2">

                        <div id="home" class="tab-pane fade in active show">

                            <!-- <h3>ALL</h3> -->

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

                                <?php

		      	if(!empty($get_all_certificate))

		      	{

		      		$s_no = 1;

		      	foreach ($get_all_certificate as $key => $value) {

		      		

		      	

		      	?>

                                <tr>

                                    <!-- 	 -->

                                    <td><?php echo $s_no; ?></td>

                                    <td><?php echo $value['course_name']; ?></td>

                                    <td><?php echo $value['units']; ?></td>

                                    <td><?php echo $value['issue_date']; ?></td>

                                    <td><?php echo $value['issue_from']; ?></td>

                                    <td><?php echo $value['category']; ?></td>

                                    <td><?php echo $value['certificate_id']; ?></td>

                                    <td><?php echo ($value['verified_certificate']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?>

                                    </td>

                                </tr>

                                <?php $s_no++; } } ?>

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

                                <?php

		      	if(!empty($get_specific_certificate))

		      	{

		      		$s_no = 1;

		      	foreach ($get_specific_certificate as $key => $value) {

		      		

		      	

		      	?>

                                <tr>



                                    <td><?php echo $s_no; ?></td>

                                    <td><?php echo $value['course_name']; ?></td>

                                    <td><?php echo $value['units']; ?></td>

                                    <td><?php echo $value['issue_date']; ?></td>

                                    <td><?php echo $value['issue_from']; ?></td>

                                    <td><?php echo $value['category']; ?></td>

                                    <td><?php echo $value['certificate_id']; ?></td>

                                    <td><?php echo ($value['verified_certificate']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?>

                                    </td>

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

                                <?php

		      	if(!empty($get_general_certificate))

		      	{

		      		$s_no = 1;

		      	foreach ($get_general_certificate as $key => $value) {

		      		

		      	

		      	?>

                                <tr>



                                    <td><?php echo $s_no; ?></td>

                                    <td><?php echo $value['course_name']; ?></td>

                                    <td><?php echo $value['units']; ?></td>

                                    <td><?php echo $value['issue_date']; ?></td>

                                    <td><?php echo $value['issue_from']; ?></td>

                                    <td><?php echo $value['category']; ?></td>

                                    <td><?php echo $value['certificate_id']; ?></td>

                                    <td><?php echo ($value['verified_certificate']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?>

                                    </td>

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

                                <?php

		      	if(!empty($get_online_certificate))

		      	{

		      		$s_no = 1;

		      	foreach ($get_online_certificate as $key => $value) {

		      		

		      	

		      	?>

                                <tr>



                                    <td><?php echo $s_no; ?></td>

                                    <td><?php echo $value['course_name']; ?></td>

                                    <td><?php echo $value['units']; ?></td>

                                    <td><?php echo $value['issue_date']; ?></td>

                                    <td><?php echo $value['issue_from']; ?></td>

                                    <td><?php echo $value['category']; ?></td>

                                    <td><?php echo $value['certificate_id']; ?></td>

                                    <td><?php echo ($value['verified_certificate']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?>

                                    </td>

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

                                <?php

		      	if(!empty($get_traning_certificate))

		      	{

		      		$s_no = 1;

		      	foreach ($get_traning_certificate as $key => $value) {

		      		

		      	

		      	?>

                                <tr>



                                    <td><?php echo $s_no; ?></td>

                                    <td><?php echo $value['course_name']; ?></td>

                                    <td><?php echo $value['units']; ?></td>

                                    <td><?php echo $value['issue_date']; ?></td>

                                    <td><?php echo $value['issue_from']; ?></td>

                                    <td><?php echo $value['category']; ?></td>

                                    <td><?php echo $value['certificate_id']; ?></td>

                                    <td><?php echo ($value['verified_certificate']==0)?'<i style="color:red" class="icon-remove-sign"></i>':'<i style="color:green" class="icon-ok-sign"></i>'; ?>

                                    </td>

                                </tr>

                                <?php $s_no++; } } ?>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            <?php
                if(!isset($user_view))
                {
            ?>
            <div class="col-12 text-center mt-4">

                <button id="verified_certificate_now" class="btn btn-success">VERIFIED CERTIFICATE

                    NOW</button>

            </div>
        <?php } ?>

        </div>
        <?php
            if(isset($user_view) && !isset($view))
            {

             ?>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <?php
                        if(!empty($user_comments))
                        {
                            $i = 1;
                            foreach ($user_comments as $key => $value) {
                                # code...
                            
                    ?>
                        <p><span><?php echo date('d ,M,Y',strtotime($value['added_on'])); ?> - </span><?php echo $value['comments'] ?></p>
                    <?php $i++; } } ?>    
                   
                </div>
                <label for="inputEmail" class="col-sm-2 col-form-label">Comments</label>
                <div class="col-sm-10">
                    
                   
                    <textarea class="form-control" id="license_comments"></textarea>
                     


                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    
                    <button  class="btn btn-success text-uppercase" id="add_comments" >Add</button>


                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2" id="comment_msg">
                    
                  


                </div>
            </div>

        <?php } ?>

    </div>

</div>





<?php

	

	if($get_total_verified_certified!=0 && $get_total_not_verified_certified==0)

	{



?>

<!-----------------------   POPUP  VERIFIED CERTIFICATE    ---------------------->



<div class="modal fade" id="thanku_pop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="thanku_pop" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title text-uppercase" id="thanku_pop">Congratulations</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">



                <div id="body">

                    <div class="bs-example">
                        <p class="">Your digital certificates are verified 100%</p>

                        <p class=""><i style="color:green" class="icon-ok-sign"></i> DIGITAL VERIFIED

                            <?php echo $get_total_verified_certified; ?> CERTIFICATES</p>



                        <p class="">Please proceed to payment to get your renewed professional license.</p>







                        <p class="mt-4">

                            <!-- <a href="#" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#confirmData">Confirm</a> -->

                            <a href="<?php echo base_url() ?>license/landing/payment"
                                class="btn btn-success text-uppercase">PROCEED FOR PAYMENT</a>

                        </p>

                    </div>

                </div>



            </div>



        </div>

    </div>

</div>



<?php }else{ ?>











<!---------------------   POPUP  VERIFIED AND NOT VERIFIED CERTIFICATE    ----------->







<div class="modal fade" id="thanku_pop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="thanku_pop" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="thanku_pop"></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">



                <div id="body" class="col-md-8 mx-auto">

                    <div class="bs-example">

                        <p class="h4 mb-4 mt-4 text-uppercase">Congratulations</p>



                        <p class="">Your digital certificates are verified 80%</p>

                        <p class="">Please allow 30 days to review your unverified certificates.</p>



                        <p class=""><i style="color:green" class="icon-ok-sign"></i> DIGITAL VERIFIED

                            (<?php echo ($get_total_verified_certified!="")?$get_total_verified_certified:0; ?> CERTIFICATES)</p>



                        <p class=""><i style="color:red" class="icon-remove-sign"></i> DIGITAL UNVERIFIED

                            (<?php echo ($get_total_not_verified_certified!="")?$get_total_not_verified_certified:0; ?> CERTIFICATES)</p>



                        <p class="">Please proceed to payment to get your renewed professional license.</p>







                        <p class="mt-4">

                            <!-- <a href="#" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#confirmData">Confirm</a> -->

                            <a href="<?php echo base_url() ?>/license/landing/payment"
                                class="btn btn-success text-uppercase">PROCEED FOR PAYMENT</a>

                        </p>

                    </div>

                </div>



            </div>



        </div>

    </div>

</div>



<?php } ?>



<script type="text/javascript">
    $(document).on("click", "#verified_certificate_now", function () {





        $('#thanku_pop').modal('show');







    });


    $(document).on("click","#add_comments",function(){

    var license_comments = $("#license_comments").val();
    var user_id = $("#user_id").val();
    var step_id = 3;

    $.ajax({

        url:base_url+'license/landing/add_comments',
        type:'post',
        data:{license_comments,step_id,user_id},
        beforeSend:function(){
            $("#add_comments").html('WAIT...');
            $("#add_comments").prop('disabled',true);

        },
        success:function(){
            location.reload();
            /*$("#license_comments").val("");
            $("#add_comments").html('Add');
            $("#add_comments").prop('disabled',false);
            $("#comment_msg").html("Comments Added Successfully");*/
        }

    });

});
</script>