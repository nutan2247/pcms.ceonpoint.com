<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">
    .error {
        color: #ce2b2b;
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
            if(!empty($user_view))
            {
            ?>
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
            if(!empty($user_view))
            {
            ?>
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
            if(!empty($user_view))
            {
            ?>
            <a href="<?php echo base_url('license/landing/verificatiom_of_contiuning?user_id='.$user_id.'&user_view='.base64_encode($user_id)) ?>" class="stepActive">
                <span>
                    <strong>3</strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <label>CE Certificates <br>Verification</label>
            </a>
        <?php }else{ ?>
            <a href="javasacript:void(0);" class="stepActive">
                <span>
                <strong>3 </strong>

                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>

                <label>CE Certificates Verification</label>

            </a>
            <?php } ?>
        </div>
        <div class="col-2">
            <?php
            if(!empty($user_view))
            {
            ?>
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
            if(!empty($user_view))
            {
            ?>
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
    <div class="col-md-8 mx-auto">
        <div class="my-5">

            <div class="required-box p-4 rounded mb-5">
                <div class="col-md-6 mx-auto">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>
                                <td class="text-center">PAYMENT</td>
                            </tr>
                            <tr>
                                <td>Processing Fees</td>
                                <td><?php echo $amount_to_pay->amount; ?></td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td><?php echo $amount_to_pay->tax; ?></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td><?php echo $total_amount; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
            if(empty($user_view))
            {
            ?>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="text-center">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="sb-5bkfq4152106@business.example.com">
                    <input type="hidden" name="item_name" value="<?php echo $user_details->pro_name; ?>">
                    <input type="hidden" name="item_number" value="<?php echo $user_details->item_number; ?>">
                    <input type="hidden" name="amount" value="<?php echo $total_amount; ?>">
                    <input type="hidden" name="tax" value="<?php echo $amount_to_pay->tax; ?>">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency_code" value="USD">


                    <input type="hidden" name="address_override" value="1">

                    <input type="hidden" name="first_name" value="<?php echo $user_details->name; ?>">
                    <input type="hidden" name="last_name" value="Doe">
                    <input type="hidden" name="address1" value="<?php echo $user_details->address; ?>">
                    <input type="hidden" name="city" value="San Jose">
                    <input type="hidden" name="state" value="CA">
                    <input type="hidden" name="zip" value="95121">
                    <input type="hidden" name="country" value="US">
                    <INPUT TYPE="hidden" NAME="return" value="https://ceonpointllc.com/rboard/license/landing/payment?user_id=1">
                    <input type="image" name="submit"
                        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                        alt="PayPal - The safer, easier way to pay online">
                </form>


                <?php } ?>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <!-- <button type="submit" class="btn btn-success text-uppercase" name="submit" value="submit">NEXT</button> -->

                    
                    
                </div>
            </div>

        </div>
    </div>
</div>



<!-------------------- POP MODAL ------------------------------------------------->




<?php

    if($payment_success=="success")
    {

?>




 <div class="modal fade" id="thanku_pop" data-backdrop="static" data-keyboard="false" tabindex="-1"

    aria-labelledby="thanku_pop" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="thanku_pop">Thanku you!</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                

                <div id="body" class="col-md-8 mx-auto">

                    <div class="bs-example">

                        <p class="mb-4 mt-4 text-uppercase">Payment was successful</p>

                        <p class="mt-4">Please allow <?php echo $amount_to_pay->count_down; ?> days to verify your Unverified certificates</p>

                        <p class="mb-4 mt-4">Upon successful verification your digital Professional License will be ready.</p>

                        <p class="mt-4">

                           
                        <a class="btn btn-success text-uppercase"
                        href="<?php echo base_url()?>license/landing/digital_professional?user_id=1">Check Status</a>

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
<script type="text/javascript">
    
    $(document).ready(function(){
            $('#thanku_pop').modal('show');
    });



    $(document).on("click","#add_comments",function(){

    var license_comments = $("#license_comments").val();
    var user_id = $("#user_id").val();
    var step_id = 4;

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