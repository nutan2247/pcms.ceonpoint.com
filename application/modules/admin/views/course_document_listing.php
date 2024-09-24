
<div id="layoutSidenav_content">
<main>

    <div class="container-fluid">
        <h4 class="mt-4 mb-3"><?php echo $page_title; ?>
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="btn btn-primary float-right">Back</a></h4>
        <div class="card mb-4">
            <div class="card-header">
                <form name="searchForm" method="get" >
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="month" id="month" class="form-control">
                                            <option value="">Month</option>
                                            <option value="1" <?php echo (isset($_GET['month']) && $_GET['month']== 1)?'selected':'';?>>January</option>
                                            <option value="2" <?php echo (isset($_GET['month']) && $_GET['month']== 2)?'selected':'';?>>February</option>
                                            <option value="3" <?php echo (isset($_GET['month']) && $_GET['month']== 3)?'selected':'';?>>March</option>
                                            <option value="4" <?php echo (isset($_GET['month']) && $_GET['month']== 4)?'selected':'';?>>April</option>
                                            <option value="5" <?php echo (isset($_GET['month']) && $_GET['month']== 5)?'selected':'';?>>May</option>
                                            <option value="6" <?php echo (isset($_GET['month']) && $_GET['month']== 6)?'selected':'';?>>June</option>
                                            <option value="7" <?php echo (isset($_GET['month']) && $_GET['month']== 7)?'selected':'';?>>July</option>
                                            <option value="8" <?php echo (isset($_GET['month']) && $_GET['month']== 8)?'selected':'';?>>August</option>
                                            <option value="9" <?php echo (isset($_GET['month']) && $_GET['month']== 9)?'selected':'';?>>September</option>
                                            <option value="10" <?php echo (isset($_GET['month']) && $_GET['month']== 10)?'selected':'';?>>October</option>
                                            <option value="11" <?php echo (isset($_GET['month']) && $_GET['month']== 11)?'selected':'';?>>November</option>
                                            <option value="12" <?php echo (isset($_GET['month']) && $_GET['month']== 12)?'selected':'';?>>December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">  
                                        <input type="number" name="day" id="day" class="form-control" placeholder="Day" value="<?php echo (isset($_GET['day']))?$_GET['day']:'';?>" min="1" max="31"/>
                                    </div>
                                    <div class="col-md-3">  
                                        <input type="number" name="year" id="year" value="<?php echo (isset($_GET['year']))?$_GET['year']:'';?>" class="form-control" placeholder="Year" />
                                    </div>
                                    <div class="col-md-3">  
                                        <button type="submit" value="search" class="btn btn-primary">Search</button>
                                    </div>
                                </div></form>
            </div>

            <div class="card-body">
                <?php echo $this->session->flashdata('item');?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Photo</th>
                                <th>Course Title</th>
                                <th>Course Unit</th>
                                <!-- <th>Course Price</th> -->
                                <th>Course PDF</th>
                                <th>CEP Name</th>
                                <th>Accreditation Number</th>
                                <th>Validity Date</th>
                                <th>Date Issued</th>
                                <th>Duration</th>
                                <th>Reviewer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if($listing){?>
                        <tbody>
                        <?php $count = 1; 
                                foreach($listing as $key => $list){ 
                            $applied_date = date('F d,Y',strtotime($list->applied_date));
                            if($list->reviewer_status == 2){
                                $status= 'Rejected';
                            }else if($list->reviewer_status == 1){
                                $status= 'Approved';
                            }else{
                                $status= 'Pending';
                            }
                             $reviewerName = ($list->reviewer_id > 0)?$list->rev_firsname:'';
                            if($list->reviewer_status == '1'){ $status = '<span class="text-success">Approved</span>'; }elseif($list->reviewer_status=='2'){ $status = '<span class="text-danger">Rejected</span>'; }else{ $status = '<span class="text-warning">Pending</span>'; }
                            if($list->course_pdf){ $pdf = '<i class="fas fa-file-pdf"></i> '.$list->course_pdf; $pdfpath = base_url('assets/images/ce_provider/').$list->course_pdf; }else{ $pdf = 'No pdf found!'; $pdfpath = '#'; } 
                            $photo = ($list->course_image !="" && file_exists('./assets/images/ce_provider/'.$list->course_image))?'<img class="img-fluid img-rounded d-block mx-auto" src="'.base_url('assets/images/ce_provider/'.$list->course_image).'" width="250">':'<img class="img-fluid img-rounded d-block mx-auto" src="'.base_url('assets/images/ce_provider/default-logo.jpg').'" width="200px" height="200px">'; ?>
                            <tr>

                                <td><?=$count;?></td>
                                <td><?=$photo;?></td>
                                <td><?=$list->course_title;?></td>
                                <td><?=$list->course_units;?></td>
                                <!-- <td>$<?=$list->course_price;?></td> -->
                                <td><a href="<?=$pdfpath;?>"><?=$pdf;?></a></td>
                                <td><?=$list->provider_name;?></td>
                                <td><?=$list->accreditation_no;?></td>
                                <td><?=$list->expiry_at;?></td>
                                <td><?=date("Y-m-d", strtotime($list->review_accept_date));?></td>
                                <td><?=$list->renew_for;?>year/s</td>
                                <td><?=$reviewerName;?></td>
                                <td><?=$status;?></td>
                                <td><a href="<?php echo base_url('admin/course_document_details/'.$list->cor_doc_id); ?>"><i class="fas fa-eye"></i> </a>
                                    <a class="viewcertificate" href="javascript:void(0);" data-id="<?php echo $list->cor_doc_id; ?>"><i class="fas fa-id-card"></i></a></td>
                            </tr>
                            <?php $count++; } ?>
                        </tbody>

                        <?php }else{ echo'<tr colspan="7"><td>No Data Found!<td></tr>'; }?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade certificate-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- body -->
       
        <div id="crtdetials"></div>
      <!-- end body -->
    </div>
  </div>
</div>

<script>
    $( ".viewcertificate" ).click(function() {
    var docid = $(this).data("id");
    if(docid > 0){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>admin/coursecertificate",
            data: { docid : docid},
            success: function(data) {
                //alert(data);
                $('#crtdetials').html(data); 
            }
        });
        $('.certificate-modal').modal('show'); 
    }
  
});
</script>