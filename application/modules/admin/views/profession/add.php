<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>    

		

<div id="layoutSidenav_content">

    <main>

    <div class="container-fluid">
        <div class="clearfix">
            <h4 class="float-left mt-4 mb-3"><?php echo $page_title; ?></h4>
            <a class="btn btn-primary float-right  mt-4 mb-3" href="<?php echo base_url('admin/profession_listing');?>"> Back</a>
        </div>

    <div class="card">

        <!-- <div class="card-header">

            <i class="fas fa-table mr-1"></i>

            <?php echo $table_name; ?>

        </div> -->

        <div class="card-body">

        <div class="row">

            <div class="col-md-12">

                <div class="box">

                    <div class="box-body"> 



                    <?php echo form_open_multipart(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_profession')); //echo "<pre>"; print_r($profession); echo "</pre>";  ?>

                    <?php echo form_hidden('profession_id', isset($profession->id)?$profession->id:'');?>

                    <?php echo form_hidden('role', 2);?> <!-- role 2 means Professional -->

                            

                    <div class="row form-group">

                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">

                            <input name="name" value="<?php echo isset($profession->name)?$profession->name:''; ?>" id="name" class="form-control" type="text" required>

                        </div>

                    </div>    

                    

                    <div class="row form-group">

                        <label for="required_units" class="col-sm-2 control-label">Required Units</label>

                        <div class="col-sm-10">

                            <input name="required_units" value="<?php echo isset($profession->required_units)?$profession->required_units:''; ?>" id="required_units" class="form-control" type="number" required>

                        </div>

                    </div>

                    <div class="row form-group">

                        <label for="general_units" class="col-sm-2 control-label">General Units</label>

                        <div class="col-sm-4">

                            <input name="general_units" value="<?php echo isset($profession->general_units)?$profession->general_units:''; ?>" id="general_units" class="form-control" type="number" required>

                        </div>

                    <!-- </div>


                    <div class="form-group"> -->

                        <label for="specific_units" class="col-sm-2 control-label">Specific Units</label>

                        <div class="col-sm-4">

                            <input name="specific_units" value="<?php echo isset($profession->specific_units)?$profession->specific_units:''; ?>" id="specific_units" class="form-control" type="number" required>

                        </div>

                    </div>



                    <div class="row form-group">

                        <label for="start_date" class="col-sm-2 control-label">Start Date</label>

                        <div class="col-sm-4">

                            <input name="start_date" value="<?php echo isset($profession->start_date)?$profession->start_date:''; ?>" id="start_date" class="form-control" type="date" required>

                        </div>
<!-- 
                    </div>



                    <div class="form-group"> -->

                        <label for="end_date" class="col-sm-2 control-label">End Date</label>

                        <div class="col-sm-4">

                            <input name="end_date" value="<?php echo isset($profession->end_date)?$profession->end_date:''; ?>" id="end_date" class="form-control" type="date" required>

                        </div>

                    </div>

                                       

                    <div class="row form-group">

                        <label for="status" class="col-sm-2 control-label">Status</label>

                         <div class="col-sm-10">

                            <label class="radio-inline">

                                <input type="radio" name="status" id="status1" value="1" <?php echo (isset($profession->status) && $profession->status==1)? 'checked="checked"':''; ?>> Active

                            </label>

                            <label class="radio-inline">

                                <input type="radio" name="status" id="status0" value="0" <?php echo (isset($profession->status) && $profession->status !=1)? 'checked="checked"':''; ?>> Inactive

                            </label>    
                       

                        </div> 



                    </div>

                            

                    <div class="row form-group">

                        <div class="col-sm-offset-2 col-sm-10">

                            <div class="btn-group">

                                <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => 'Submit')); ?>

                                <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => 'Reset')); ?>

                                <?php echo anchor('admin/profession_listing', 'Cancel', array('class' => 'btn btn-secondary btn-flat')); ?>

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

                





