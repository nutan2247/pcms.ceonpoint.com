<?php 
	if($details->payment_for == 'U' && $details->payment_type == 'N'){
									$payment_type = 'School Accreditation Fee';
								}
								else if($details->payment_for == 'U' && $details->payment_type == 'R'){
									$payment_type = 'Renewal of School Accreditation Fee';
								}
								else if($details->payment_for == 'PR' && $details->payment_type == 'N'){
									$payment_type = 'Professional Registration Fee';
								}
								else if($details->payment_for == 'PR' && $details->payment_type == 'R'){
									$payment_type = 'Renewal of Professional Registration Fee';
								}
								else if($details->payment_for == 'CEP' && $details->payment_type == 'N'){
									$payment_type = 'CEP Accreditation Fee';
								}
								else if($details->payment_for == 'CEP' && $details->payment_type == 'R'){
									$payment_type = 'Renewal of CEP Accreditation Fee';
								}
								else if($details->payment_for == 'T'){
									$payment_type = 'Training Course Accreditation Fee';
								}
								else if($details->payment_for == 'C'){
									$payment_type = 'Online Course Accreditation Fee';
								}
								else if($details->payment_for == 'G'){
									$payment_type = 'Submission of Graduates for licensure Examination Fee';
								}
								else if($details->payment_for == 'P'){
									$payment_type = 'Professional Registration';
								}
								else if($details->payment_for == 'F'){
									$payment_type = 'Foreign Professional';
								}
								else{
									$payment_type =($details->payment_type == 'R')?'Renew':'New';
								}
	 ?>
     <div class="row">
            <div class="col-md-8">
                <p><strong>Bill To:</strong> <?php echo $details->payer_email; ?></p>
                <?php $date = explode('-',$details->payment_date);?>
                <p>Receipt Number: <strong>#<?=$details->payment_id.'-'.$date[0];?></strong> </p>
            </div>
            <div class="col-md-4">
                <p>Invoice Date : <strong> <?php echo date('F d,Y',strtotime($details->payment_date)); ?></strong></p>
            </div>
        </div>
    </div>



    <div class="container mt-md-3 mt-2">
        <div class="invoice-content">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description </th>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Amount </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $payment_type; ?></td>
                        <td><?php echo $details->txn_id; ?></td>
                        <td>$<?php echo $details->payment_amout; ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="container mt-md-4 mt-2">
        <div class="total">
            <div class="col-md-4 offset-8">
                <table class="table">

                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>$<?php echo $details->payment_amout; ?></td>
                        </tr>
                        <tr>
                            <td>Sales tex</td>
                            <td>$<?php echo $details->payment_tax; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>$<?php echo $details->payment_gross; ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>