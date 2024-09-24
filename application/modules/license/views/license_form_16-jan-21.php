<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">
    
    .error{
        color:#ce2b2b;
    }
</style>
<div id="banner-grid" class="py-5 px-2 bg-red mb-5">
    <h2 class="text-center text-uppercase text-white">Professional License Renewal</h2>
</div>



<div class="container">
    <div class="row pro-steps">
        <div class="col-2">
            <?php
            if(!empty($user_id) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/professional_license?view=1&user_view='.base64_encode($user_id)) ?>" class="stepActive">
            <span>
                
                <strong>1</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>                

            </span>
                <label>Personal & Professional Verification</label>
            </a>
        <?php }else if(!empty($user_id) && !isset($view)){ ?>
            <a href="<?php echo base_url('license/landing/professional_license?user_view='.base64_encode($user_id)) ?>" class="stepActive">
            <span>
                
                <strong>1</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>                

            </span>
                <label>Personal & Professional Verification</label>
            </a>
        <?php }else{ ?>

            <a href="#" class="stepProcess">
                <span>1</span>
                <label>Personal & Professional Verification</label>
            </a>

        <?php } ?>
         
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_id) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/required_units?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>2</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>
        <?php }else if(!empty($user_id) && !isset($view)){ ?>
            <a href="<?php echo base_url('license/landing/required_units?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>2</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>

        <?php }else{ ?>
            <a href="#">
                <span>
                    <strong>2</strong><i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Required CE Units <br>Verification</label>
            </a>
        <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_id) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>3</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>CE Certificates <br>Verification</label>
            </a>
        <?php }else if(!empty($user_id) && !isset($view)) { ?>
            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>3</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>CE Certificates <br>Verification</label>
            </a>

            <?php }else{ ?>
                <a href="#">
                    <span>3</span>
                    <label>CE Certificates <br>Verification</label>
                </a>
            <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_id) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/payment?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>4</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Payment</label>
            </a>
        <?php }else if(!empty($user_id) && !isset($view)) { ?>
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
        <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_id) && isset($view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/digital_professional?view=1&user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span><strong>5</strong><i class="fa fa-check" aria-hidden="true"></i></span>
                 <label>Digital Professional License</label>
            </a>
        <?php }else if(!empty($user_id) && !isset($view)){ ?>
            
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

    <?php
        if(empty($user_details))
        {
    ?>

    <div class="col-md-8 mx-auto">
        <div class="my-5">
            <h4 class="mb-4 mt-4 text-uppercase text-center">Personal &amp; Professional Information Verification</h4>
            <?php echo $this->session->flashdata('error'); ?>
            <?php echo form_open_multipart('',array('id'=>'commentForm')); ?>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Name<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo set_value('name'); ?>" >
                    <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Birthday<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo set_value('birthday'); ?>">
                     <?php echo form_error('birthday', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Citizenship</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Enter Country" value="india" >
                     
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Sex<span class="error">*</span></label>
                <div class="col-sm-10">
                    <select name="gender" id="gender" class="form-control">
	            		<option value="">Please select one</option>
	            		<option <?php echo set_select('gender', 'male', TRUE); ?> value="male" selected>Male</option>
	            		<option <?php echo set_select('gender', 'female', TRUE); ?> value="female">Female</option>
	            	</select>
                     <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="address" name="address" placeholder="Enter Address"><?php echo set_value('address'); ?> 
                    </textarea>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo set_value('email'); ?>" >
                     <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Tel.No</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Telephone Number" pattern="[1-9]{1}[0-9]{9}" value="<?php echo set_value('phone'); ?>" >
                     <?php echo form_error('phone', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Profession<span class="error">*</span></label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter Profession" value="<?php echo set_value('profession'); ?>" >
                     <?php //echo form_error('profession', '<div class="error">', '</div>'); ?> -->

                     <select class="form-control" id="profession" name="profession"> 
                        <option value="">--Select Profession--</option>
                        <?php
                            if(!empty($profession))
                            {
                                foreach ($profession as $key => $value) {
                                    # code...
                                
                        ?>
                         <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                     <?php } } ?>
                     </select>

                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">License Number<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="license_number" name="license_number" placeholder="Enter License Number" value="<?php echo set_value('license_number'); ?>" >
                     <?php echo form_error('license_number', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Date Issued<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_issued" name="date_issued" value="<?php echo set_value('date_issued'); ?>">
                     <?php echo form_error('date_issued', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Validity<span class="error">*</span></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="validity" name="validity" value="<?php echo set_value('validity'); ?>">
                     <?php echo form_error('validity', '<div class="error">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success text-uppercase" name="submit" value="submit">Submit for Verification</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

<?php }else{ ?>


    <div class="col-md-8 mx-auto">
        <div class="my-5">
            <h4 class="mb-4 mt-4 text-uppercase text-center">Personal &amp; Professional Information Verification</h4>
            
            
            <div class="form-group row">

                <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details->user_ID; ?>">

                <label for="inputEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <?php echo $user_details->name; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <?php echo date('M d,Y',strtotime($user_details->dob)); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Citizenship</label>
                <div class="col-sm-10">
                    <?php echo $user_details->co_name; ?>
                     
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Sex</label>
                <div class="col-sm-10">
                    <?php echo $user_details->gender; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <?php echo $user_details->address; ?>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <?php echo $user_details->email; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Tel.No</label>
                <div class="col-sm-10">
                    <?php echo $user_details->phone; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Profession</label>
                <div class="col-sm-10">
                    <?php echo $user_details->pro_name; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">License Number</label>
                <div class="col-sm-10">
                    <?php echo $user_details->license_no; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Date Issued</label>
                <div class="col-sm-10">
                    <?php echo date('M d,Y',strtotime($user_details->added_on)); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Validity</label>
                <div class="col-sm-10">
                    <?php echo date('M d,Y',$user_details->license_validity_date); ?>
                </div>
            </div>

            <?php
                if(!isset($view))
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


<?php } ?>
</div>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button>
 -->
<!-- Modal -->

<?php
    
    if(!empty($udetails))
    {
    
    
?>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Personal and Professional Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <div>
            <p>Your data is match in our database. please review and click the button to confirm</p>
            <p>Please call or message us if this is not you.</p>
        </div> -->
        <div id="body" class="col-md-8 mx-auto">
        <div class="bs-example">
       <!--  <p class="h4 mb-4 mt-4 text-uppercase">Verification</p> -->
        <?php echo $this->session->flashdata('error'); ?>
          <p>Your data is match in our database. please review and click the button to confirm</p>
            <p>Please call or message us if this is not you.</p>
            <table>
                <tr><th>License :</th><td><?php echo $udetails->name; ?></td></tr>
                <tr><th>Date of Birthday :</th><td><?php echo date('M j,Y',strtotime($udetails->dob)); ?></td></tr>
                <tr><th>Citizenship :</th><td><?php echo $udetails->country; ?></td></tr>
                <tr><th>Sex :</th><td><?php echo $udetails->gender; ?></td></tr>
                <tr><th>Address :</th><td><?php echo $udetails->address; ?></td></tr>
                <tr><th>Email :</th><td><?php echo $udetails->email; ?></td></tr>
                <tr><th>Tel.No :</th><td><?php echo $udetails->phone; ?></td></tr>
                <tr><th>Profession :</th><td><?php echo $udetails->profession; ?></td></tr>
            </table>
            <table>
                <tr><th>License Number : </th><td><?php echo $udetails->license_no; ?></td></tr>
                <tr><th>Date Issued : </th><td><?php echo date('M j,Y',strtotime($udetails->license_validity_date)); ?></td></tr>
                <tr><th>Validity : </th><td><?php echo date('M j,Y',strtotime($udetails->license_validity_date)); ?></td></tr>
            </table>
                
            <p class="mt-4">
                <!-- <a href="#" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#confirmData">Confirm</a> -->
                <a href="<?php echo base_url('license/landing/update_photo?user_id='.$udetails->user_ID) ?>" class="btn btn-success text-uppercase">Confirm</a>
            </p>
        </div>
    </div>

      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>

<?php

    }
?>

<?php if(!empty($udetails_not_match)) { ?>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Personal and Professional Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <div>
            <p>Your data is match in our database. please review and click the button to confirm</p>
            <p>Please call or message us if this is not you.</p>
        </div> -->
        <div id="body" class="col-md-8 mx-auto">
        <div class="bs-example">
       <!--  <p class="h4 mb-4 mt-4 text-uppercase">Verification</p> -->
       
        <p class="error">DATA DID NOT MATCH</p>
        <p>Please contact us to verify your status.</p>
          
          
            <p class="mt-4">
                <!-- <a href="#" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#confirmData">Confirm</a> -->
                <a href="<?php echo base_url('license/contact_us')?>" class="btn btn-success text-uppercase">Contact Us</a>
            </p>
        </div>
    </div>

      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
<?php } ?>




<script>
    $(document).ready(function(){
      $('#staticBackdrop').modal('show');
    });


$(document).on("click","#add_comments",function(){

    var license_comments = $("#license_comments").val();
    var user_id = $("#user_id").val();
    var step_id = 1;

    $.ajax({

        url:base_url+'license/landing/add_comments',
        type:'post',
        data:{license_comments,step_id,user_id},
        beforeSend:function(){
            $("#add_comments").html('WAIT...');
            $("#add_comments").prop('disabled',true);

        },
        success:function(){

            /*$("#license_comments").val("");
            $("#add_comments").html('Add');
            $("#add_comments").prop('disabled',false);
            $("#comment_msg").html("Comments Added Successfully");*/

            location.reload();
        }

    });

});
</script>