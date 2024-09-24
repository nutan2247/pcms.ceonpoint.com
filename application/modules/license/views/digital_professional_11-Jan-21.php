<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">
    
    .error{
        color:#ce2b2b;
    }
</style>
<div id="banner-grid" class="py-5 px-2 bg-red mb-5">
    <h2 class="text-center text-uppercase text-white"></h2>
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
        <?php }else if(!empty($user_view) && !isset($view)){ ?>
            <a href="<?php echo base_url('license/landing/payment?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>4</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>Payment</label>
            </a>
        <?php }else{ ?>
            <a href="#" class="stepProcess">
                <span>4</span>
                <label>Payment</label>
            </a>

        <?php } ?>
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
    
    

<?php
    if($unverified_certified!=0)
    {
?>
    <div class="form-group row">
        <div class="col-md-8 mx-auto">
            <div class="my-5">
            
                <h4 class="mb-4 mt-4 text-uppercase text-center">DIGITAL PROFESSIONAL LICENSE</h4>
                <P class="mb-4 mt-4 text-uppercase text-center">30-DAY</P>
                <P class="mb-4 mt-4 text-uppercase text-center">CERTIFICATE VERIFICATION COUNTDOWN</P>

                <h1 class="mb-4 mt-4 text-uppercase text-center">24</h1>
                <p class="mb-4 mt-4 text-uppercase text-center">REMANING DAYS</p>    
            </div>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-md-8 mx-auto">
            <div class="my-5">
                    <p class="text-center">This section will be activated after 30 days<br>
                        if you did not  receive a notice of License Renewal after  the 30<br>
                        days verification period, please click the button to contact us
                    </p> 
                    <?php
                    if(empty($user_view))
                    {
                    ?>
                    <p class="text-center"><a href="<?php echo base_url('contact_us')?>" class="btn btn-success text-uppercase">Contact Us</a></p>
                    <?php } ?>   
            </div>
        </div>

    </div>

     


<?php }else{ ?>

        <div class="form-group row">
        <div class="col-md-8 mx-auto">
            <div class="my-5">
            
                <div class="col-sm-10">
                    <table class="table">
                        
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href="<?php echo base_url('landing/certificate_pdf?user_id='.$user_details->user_ID) ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </a></td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <th>Profession</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Address</td>
                        </tr>
                        <?php
                            if(!empty($user_details))
                            {
                        ?>
                        <tr>
                            <td><?php echo $user_details->name; ?></td>
                            <td><?php echo $user_details->pro_name; ?></td>
                            <td><?php  echo $user_details->phone; ?></td>
                            <td><?php echo $user_details->dob; ?></td>
                            <td><?php echo $user_details->gender; ?></td>
                            <td><?php echo $user_details->address; ?></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<?php

            if(isset($user_view) && !isset($view))
            {
            ?>
            <div class="form-group row">
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

<script type="text/javascript">
    
 $(document).on("click","#add_comments",function(){

    var license_comments = $("#license_comments").val();
    var user_id = $("#user_id").val();
    var step_id = 5;

    $.ajax({

        url:base_url+'license/landing/add_comments',
        type:'post',
        data:{license_comments,step_id,user_id},
        beforeSend:function(){
            $("#add_comments").html('WAIT...');
            $("#add_comments").prop('disabled',true);

        },
        success:function(){

            $("#license_comments").val("");
            $("#add_comments").html('Add');
            $("#add_comments").prop('disabled',false);
            $("#comment_msg").html("Comments Added Successfully");
        }

    });

});


</script>






