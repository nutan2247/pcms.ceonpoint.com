<?php //echo print_r($universitydetails); exit; ?>
<style type="text/css">
    
    .error{
        color:red;
    }
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4"></div>
            <div class="row border-bottom border-primary">
                <div class="col-md-12 mx-auto v-div">
                    <div class="row mt-3 pb-3">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <?php
                                        if(!empty($cep_details->company_logo))
                                        {
                                    ?>
                                    <div class="border border-primary"><img
                                            src="<?php echo base_url('assets/images/ce_provider/').$cep_details->company_logo; ?>"
                                            width="100%"></div>
                                        <?php } ?>
                                </div>
                                <div class="col-md-8">
                                    <h4><?php //echo (!empty($application)?$universitydetails->university_name:""); ?>
                                    </h4>
                                </div>
                            </div>

                            <div class="card">
            <div class="card-body">
                <form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo base_url('reviewer/reviewer/cep_details/'.$cep_details->provider_id);?>">
                
                    <!-- <h4>Uploaded Documents</h4>   -->
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Business Name :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->business_name; ?>
                            </div>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Business Number :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->business_no; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Address :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->address; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Country. :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->co_name; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Contact Person:</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->contact_person; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Designation :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->designation; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">E-mail   :</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->email; ?>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Tell. No</label>
                            </div>
                            <div class="col-sm-8">
                                <?php echo $cep_details->phone; ?>
                            </div>                           
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Issued by</label>
                            </div>
                            <div class="col-sm-8">
                                <?php //echo $cep_details->issued_by; ?>
                            </div>                           
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Validity Date</label>
                            </div>
                            <div class="col-sm-8">
                                <?php //echo $universitydetails->accreditation_validity_date; ?>
                            </div>                           
                        </div>
                    </div> -->
                    
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label"><h3>New</h3></label>
                            </div>
                            <div class="col-sm-8">
                               
                            </div>                           
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Business License</label>
                            </div>  
                            <div class="col-sm-8">
                                <a target="_blank" href="<?php echo base_url('assets/images/ce_provider/').$cep_details->license_image; ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-download-alt"></span> View Document
        </a>
                            </div>                                                   
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Accreditation Attached</label>
                            </div>  
                            <div class="col-sm-8">
                               <a target="_blank" href="<?php echo base_url('assets/images/ce_provider/').$cep_details->accreditation_image; ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-download-alt"></span> View Document
        </a>
                            </div>                                                   
                        </div>
                    </div>


                    <!---------------------- RENEWAL CEP PROVIDER DOCUMENT-------------------------->

                    <?php
                        if(!empty($cep_renewal_details))
                        {
                    ?>
                    <!-- <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label"><h3>RENEWAL</h3></label>
                            </div>
                            <div class="col-sm-8">
                               
                            </div>                           
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Business License</label>
                            </div>  
                            <div class="col-sm-8">
                                <a target="_blank" href="<?php echo base_url('assets/images/ce_provider/').$cep_renewal_details->license_image; ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-download-alt"></span> View Download
        </a>
                            </div>                                                   
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Accreditation Attached</label>
                            </div>  
                            <div class="col-sm-8">
                               <a target="_blank" href="<?php echo base_url('assets/images/ce_provider/').$cep_renewal_details->accreditation_image; ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </a>
                            </div>                                                   
                        </div>
                    </div> -->
                <?php } ?>

                    <?php //if($cep_details->reviewer_id!=0){ 
                    
                    
                    ?>
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Comment:</label>
                            </div>
                            <div class="col-sm-8">
                                <textarea name="comment" class="form-control" placeholder="Please add your all comments here..."><?php echo set_value('comment');?></textarea>
                                <?php echo form_error('comment', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="row">
                           <div class="col-sm-4">
                                <label for="field-1" class="control-label">Status:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="radio" <?php echo ($cep_details->status==1)?"checked":""; ?> name="status" value="1" required> Approve |
                                <input type="radio" <?php echo ($cep_details->status==2)?"checked":""; ?> name="status" value="2" required> Reject
                            <br><?php echo form_error('status', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-5">
                            <input type="hidden" name="uniid" id="uniid" value="<?php echo $cep_details->provider_id;?>">
                            <input type="submit" class="btn btn-success" name="Submit" value="Submit">
                        </div>
                    </div>

                    
                    <?php //}
                    //else{
                    //      echo '<p><b>Already commented.</b></p>';
                    //  }
                    
                    //} ?>
                </form>             
            </div>              
        </div>
                        </div>
                    </div>
                </div>
                        <?php //echo'<pre>';print_r($universitydetails); ?>

        

            </div>
          
            <div>
            </div>
        </div>
</div>
</div>
</div>

</main>

<!-- View Documnet Modal Start-->

<div class="modal fade r-board-modal" id="viewDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Document</h5>
            </div>

        <div class="modal-body">
            <div class="r-board-modal-heading d-flex  align-items-center justify-content-center">
                <img src="" id="viewImageDoc" width="750">
            </div>
        </div>
             
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="close();" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>

<!-- View Documnet Modal End-->

<script>
    function viewDoc(url){
        $('#viewImageDoc').attr('src',url);
        $('#viewDocModal').modal('show');
    }
        
    function close(){
        $('#viewImageDoc').attr('src','');
    }
</script>