<div class="rbd-courses">
    <div id="banner-grid" class="py-5 px-2 bg-red mb-5">
        <h2 class="text-center text-uppercase text-white">Accredited Coutinuing Education (CE) Courses</h2>
    </div>
    <div class="container">
        <div class="row mt-md-5 mt-3">
            <div class="col-md-8">
							<h2>Latest Accredited CE Courses:</h2>

                <div class="row">
                <div class="col-md-12">
                

				<?php echo form_open('',array('id'=>'courseForm','method'=>'get')); ?>
				<div class="row pt-1">
                    <!--<div class="form-group col-md-3">
                        <select name="category" class="form-control">
                            <option value="">Category</option>
                            <?php foreach($category as $inti){
                                if($inti['insititution_id']=='')
                                { continue; } ?>
                               <option value="<?php echo $inti['insititution_id']; ?>" <?php if($_GET['institution']==$inti['insititution_id']){echo'selected';} ?> ><?php echo $inti['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>-->

                    <div class="form-group col-md-4">
                        <select name="profession" class="form-control">
                            <option value="" >Profession</option>
                            <?php foreach($profession as $cp){ ?>
                                <option value="<?php echo $cp->id; ?>" <?php if(isset($_GET['profession']) && $_GET['profession']==$cp->id){echo'selected';} ?> ><?php echo $cp->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
					<div class="form-group col-md-4">
							<input type="text" name="course_title" class="form-control" value="<?php echo (isset($_GET['course_title']) && $_GET['course_title'])?$_GET['course_title']:''; ?>" placeholder="Enter Course Title" >
					</div>

					<div class="form-group col-md-4">
						<input type="submit" class="btn btn-primary" name="submit" id="sbbtn" value="Search">
					</div>
				</div>
				</form>
            </div>
                    <?php 
		
							//echo '<pre>'; print_r($courselisting); exit;
							if(count($courselisting)>0){
							foreach($courselisting as $cour){
									$banner = '';
								if(file_exists('./assets/images/ce_provider/'.$cour->course_image)){
									$banner = '<img src="'.base_url().'assets/images/ce_provider/'.$cour->course_image.'" style="height:179px;">';
								}
								echo '<div class="col-4">
											<div class="newdate-main-box">
												<a class="newdate-img" href="'.base_url('course/'.$cour->cor_doc_id).'"><div class="news-img">'.$banner.'</div></a>
												<!--<h1><a href="'.base_url('course/'.$cour->cor_doc_id).'">'.ucwords($cour->course_title).'</a></h1>
                                                <p>CE Units :'.$cour->course_units.'-->
												<div class="disp-hover">'.ucwords($cour->course_title).'<br>CE Units :'.$cour->course_units.'</div>
											</div>
										</div>';
							
						}
						}else{
					echo '<p style="padding: 35px 150px;">Record not found.</p>';
				} ?>
                </div>
            </div>
            <?php $this->view('right_section'); ?>
        </div>
    </div>
</div>