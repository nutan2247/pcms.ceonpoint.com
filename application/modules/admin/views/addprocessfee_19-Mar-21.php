<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>    

		

<div id="layoutSidenav_content">

    <main>

    <div class="container-fluid">

    <h2 class="mt-4"><?php echo $page_title; ?></h2>

    <div class="card mb-4">

        <div class="card-header">

            <i class="fas fa-table mr-1"></i>

            <?php echo $table_name; ?>

        </div>

        <div class="card-body">

        <div class="row">

            <div class="col-md-12">

                <div class="box">

                    <div class="box-body"> 



                    <?php echo form_open_multipart(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_listing')); //echo "<pre>"; print_r($listing); echo "</pre>";  ?>

                    <?php echo form_hidden('pri_id', isset($listing->pri_id)?$listing->pri_id:'');?>
                    <div class="form-group">
                        <label for="charges_for" class="col-sm-2 control-label">Module Name</label>
                        <div class="col-sm-10">
							<select name="charges_for" id="charges_for" class="form-control">
								<option value="university" <?php echo (isset($listing->charges_for) && $listing->charges_for=='university')?'selected':'';?>>University</option>
								<option value="professional" <?php echo (isset($listing->charges_for) && $listing->charges_for=='professional')?'selected':'';?>>professional</option>
								<option value="foreign professional" <?php echo (isset($listing->charges_for) && $listing->charges_for=='foreign professional')?'selected':'';?>>Foreign Professional</option>
								
								<option value="exam" <?php echo (isset($listing->charges_for) && $listing->charges_for=='exam')?'selected':'';?>>Exam</option>
								<option value="course" <?php echo (isset($listing->charges_for) && $listing->charges_for=='course')?'selected':'';?>>Course</option>
								<option value="graduate" <?php echo (isset($listing->charges_for) && $listing->charges_for=='graduate')?'selected':'';?>>Graduate</option>
							</select>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="duration" class="col-sm-2 control-label">Duration (Year)</label>
                        <div class="col-sm-10">
                            <input name="duration" value="<?php echo isset($listing->duration)?$listing->duration:''; ?>" id="duration" class="form-control" type="number" required>
                        </div>
                    </div>  
					<div class="form-group">

                        <label for="duration_title" class="col-sm-2 control-label">Duration Title</label>

                        <div class="col-sm-10">

                            <input name="duration_title" value="<?php echo isset($listing->duration_title)?$listing->duration_title:''; ?>" id="duration_title" class="form-control" type="text" required>

                        </div>

                    </div> 
					<div class="form-group">

                        <label for="charge" class="col-sm-2 control-label">Fee</label>

                        <div class="col-sm-10">

                            <input name="charge" value="<?php echo isset($listing->charge)?$listing->charge:''; ?>" id="charge" class="form-control" type="text" required>

                        </div>

                    </div> 
					<div class="form-group">

                        <label for="tax" class="col-sm-2 control-label">Tax</label>

                        <div class="col-sm-10">

                            <input name="tax" value="<?php echo isset($listing->tax)?$listing->tax:''; ?>" id="tax" class="form-control" type="text" required>

                        </div>

                    </div> 
					<div class="form-group">

                        <label for="tax_amount" class="col-sm-2 control-label">Tax Amount</label>

                        <div class="col-sm-10">

                            <input name="tax_amount" value="<?php echo isset($listing->tax_amount)?$listing->tax_amount:''; ?>" id="tax_amount" class="form-control" type="text" required>

                        </div>

                    </div> 
					<div class="form-group">

                        <label for="display_position" class="col-sm-2 control-label">Display Position</label>

                        <div class="col-sm-10">

                            <input name="display_position" value="<?php echo isset($listing->display_position)?$listing->display_position:''; ?>" id="display_position" class="form-control" type="text" required>

                        </div>

                    </div> 

                            

                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">

                            <div class="btn-group">

                                <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => 'Submit')); ?>

                                <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => 'Reset')); ?>

                                <?php echo anchor('admin/processingfee', 'Cancel', array('class' => 'btn btn-secondary btn-flat')); ?>

                            </div>

                        </div>

                    </div>

                    <?php echo form_close();?>

                    </div>

                </div>

            </div>

        </div>



        </div>

    </div> 

</div>

</main>

                





