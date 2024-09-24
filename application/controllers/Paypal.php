<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends MX_Controller{
	
	function  __construct(){
		parent::__construct();
		$this->load->library('paypal_lib');
		$this->load->model('professional/Applicant_model','applicant');
	}
	 
	function success(){
		
		// Get the transaction data
		$paypalInfo = $this->input->post();

		$data['item_name']		= $paypalInfo['item_name'];
		$data['item_number']	= $paypalInfo['item_number'];
		$data['txn_id'] 		= $paypalInfo["txn_id"];
		$data['payment_amt'] 	= $paypalInfo["payment_gross"];
		$data['currency_code'] 	= $paypalInfo["mc_currency"];
		$data['status'] 		= $paypalInfo["payment_status"];
		
		// Pass the transaction data to view
		$this->load->view('paypal/success', $data);
	}
	 
	function cancel(){
		// Load payment failed view
		$this->load->view('paypal/cancel');
	 }
	 
	function ipn(){
		// Paypal posts the transaction data
		$paypalInfo = $this->input->post();
		
		if(!empty($paypalInfo)){
			// Validate and get the ipn response
			$ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

			// Check whether the transaction is valid
			if($ipnCheck){
				// Insert the transaction data in the database
				$data['user_id']		= $paypalInfo["custom"];
				$data['payment_for']	= $paypalInfo["item_number"];
				$data['txn_id']			= $paypalInfo["txn_id"];
				$data['payment_gross']	= $paypalInfo["mc_gross"];
				$data['currency_code']	= $paypalInfo["mc_currency"];
				$data['payer_email']	= $paypalInfo["payer_email"];
				$data['payment_status'] = $paypalInfo["payment_status"];
				$data['payment_type'] 	= 'N';
				$data['payment_date'] 	= date('Y-m-d H:i:s',strtotime($paypalInfo["payment_date"]));
				
				$res = $this->applicant->insertTransaction($data);
				if($res==true){
					$update = array(
						'account_type'=> 'P',
						'status'=> 1
					);
					$res = $this->applicant->update('tbl_users',$update,'user_ID',$data['user_id']);
				}

			}
		}
    }
}