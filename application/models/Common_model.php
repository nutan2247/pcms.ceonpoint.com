<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Common_model extends CI_Model {

	function __construct() {
		$this->certificatepriceTbl 		= 'tbl_certificate_price';
		$this->paymenttransactionlTbl 	= 'tbl_payment_transaction';
		$this->settingTbl 				= 'tbl_setting';
		$this->incomeresourcesTbl 		= 'tbl_income_resources';
		$this->universityTbl    		= 'tbl_university';
		$this->userTbl    				= 'tbl_users';
		$this->usercertificateTbl    	= 'tbl_user_certificate';
		$this->graduatesTbl    			= 'graduates';
		$this->professionTbl 			= 'tbl_profession';
		$this->schoolsTbl 				= 'tbl_schools';
		$this->countriesTbl 			= 'tbl_countries';
		$this->newscategoriesTbl 		= 'tbl_newscategories';		
		$this->professional_documentsTbl= 'tbl_professional_documents';	 
		$this->examscheduleTbl 			= 'tbl_examination_schedule';
		$this->exam_resultTbl 			= 'tbl_exam_result';
		$this->book_examTbl 			= 'tbl_book_exam';	
		$this->cepdocumentsTbl 			= 'tbl_cep_documents';	
		$this->websiteinformationTbl 	= 'tbl_website_information';	
		$this->contactTbl 				= 'tbl_contact';	
		$this->professionallicenseTbl	= 'tbl_professional_license';	
		$this->applicationlogTbl		= 'tbl_application_log';	
		$this->adminSubscriptionDetailsTbl	= 'tbl_admin_subscription_details';	
		$this->plicenseTbl 		= 'tbl_professional_license';
		$this->adminTbl    		= 'tbl_admin';
		$this->cepTbl    		= 'tbl_ce_provider';
		$this->cmsTbl    		= 'cms';
		$this->coursedocTbl 	= 'tbl_course_documents';
		$this->trainingdocTbl 	= 'tbl_training_documents';
		$this->stripeLogTbl 	= 'stripe_log';
	}	

	function get_professional_renewal_application($arr){ 
		$this->db->select('doc.*, doc.pd_id doc_id,doc.user_id user_ID,u.image, l.name, l.username email, pt.payment_gross amount, pt.payment_status, pt.txn_id, rev.first_name rev_firsname,rev.last_name rev_lastname');
		$this->db->from($this->paymenttransactionlTbl.' pt');	
		$this->db->join($this->professional_documentsTbl.' doc', 'pt.doc_refrence_id = doc.pd_id');
		$this->db->join($this->userTbl.' u','doc.user_id = u.user_ID','left');
		$this->db->join($this->plicenseTbl.' l', 'doc.user_id = l.user_id','left');
		$this->db->join($this->adminTbl.' rev', 'doc.reviewer_id=rev.user_ID','left');
		$this->db->where_in('pt.doc_refrence_id',$arr);
		$this->db->where('pt.txn_id!=','');
		// $this->db->where('pt.payment_type','R');
		// $this->db->where_in('pt.payment_for',array('PR','PRG'));
		// $this->db->where('doc.under_subscription','y');
		$this->db->where('doc.reviewer_status <','1');
		// $this->db->group_by('doc.pd_id');
		$this->db->order_by('pt.payment_date', 'desc');
		$q = $this->db->get();
		// echo $this->db->last_query(); exit;
		if($q->num_rows() > 0){
				return $q->result();
		}
		return false;				
	}

	function get_professional_registration_count($where_array = null){
		$this->db->from($this->paymenttransactionlTbl.' pt');
		$this->db->join($this->professional_documentsTbl.' pd','pt.doc_refrence_id=pd.pd_id');
		$this->db->join($this->userTbl.' u', 'pd.user_id=u.user_ID');
		if(is_array($where_array)){
			$this->db->where($where_array);
		}
		$this->db->where_in('pt.payment_for', array('PR','PRG'));
		$query = $this->db->get();	
		$result = $query->num_rows();
		return $result;
	}
	
	function get_professional_licence_count($where_array = null){
		$this->db->from($this->professionallicenseTbl.' pl');
		$this->db->join($this->userTbl.' u', 'pl.user_id=u.user_ID');
		if(is_array($where_array)){
			$this->db->where($where_array);
		}
		$this->db->group_by('pl.user_id');
		$query = $this->db->get();	
		$result = $query->num_rows();
		return $result;
	}

	function get_professional_count($where_array = null){
		$this->db->from($this->professional_documentsTbl.' pd');
		$this->db->join($this->userTbl.' u', 'pd.user_id=u.user_ID');
		if(is_array($where_array)){
			$this->db->where($where_array);
		}
		$query = $this->db->get();	
		$result = $query->num_rows();
		return $result;
	}
	function get_count_record($table,$where_array = null){
		//print_r($where_array);
		if(is_array($where_array)){
			$this->db->where($where_array);
			$query = $this->db->count_all_results($table);
		}else{
			$query = $this->db->count_all_results($table);
		}
		
		//echo $this->db->last_query(); 
		//exit;
		return $query;
	}
	function get_count_licensse_renewal_record(){
		//print_r($where_array);
		$this->db->from($this->professional_documentsTbl.' pd');
		$this->db->join($this->userTbl.' u','pd.user_id=u.user_ID');
		$this->db->where('pd.document_for', 'r');
		$query = $this->db->get();		
		//$result = $query->result();
		$result = $query->num_rows();
		return $result;
	}
	function newscategoryarr(){
		$this->db->from($this->newscategoriesTbl);
		$this->db->where('news_status', '1');
		$this->db->order_by("news_category_name", "asc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	function professionarr(){
		$this->db->from($this->professionTbl);
		$this->db->where('status', '1');
		$this->db->order_by("name", "asc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	function notificationListings(){
		$this->db->from($this->contactTbl);
		$this->db->order_by("query_at", "desc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	function countrylistarr(){
		$this->db->from($this->countriesTbl);
		$this->db->where('status', '1');
		$this->db->order_by("countries_name", "asc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	function certificatechargesarr($chargefor){
		$this->db->select('*');
		$this->db->from($this->certificatepriceTbl);
		$this->db->where('charges_for', $chargefor);
		$this->db->order_by("display_position ", "asc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	
	function get_websiteinformation(){		
		$this->db->select('*');
		$this->db->from($this->websiteinformationTbl);
		$this->db->where('web_id', 1);
		$query = $this->db->get();
		$result = $query->row_object();
		return $result;
	}
	function get_certificatechargedetails($id){		
		$this->db->select('*');
		$this->db->from($this->certificatepriceTbl);
		$this->db->where('pri_id', $id);
		$query = $this->db->get();
		$result = $query->row_object();
		return $result;
	}
	function get_setting($id){		
		$this->db->select('*');
		$this->db->from($this->settingTbl);
		$this->db->where('setting_id', $id);
		$query = $this->db->get();
		$result = $query->row_object();
		return $result;
	}
	public function getcharges($chargeid,$charges_for){
		//$this->db->select('g.*,p.name collegeofname');
		$this->db->from($this->certificatepriceTbl);
		$this->db->where('pri_id', $chargeid);
		$this->db->where('charges_for', $charges_for);
		$query = $this->db->get();
		$result = $query->row_object();
		//echo $this->db->last_query(); exit;
		return $result;		
	}
	public function insert_payment($data){
		$this->db->insert($this->paymenttransactionlTbl, $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function update_payment($data, $id){		
		$this->db->where('payment_id', $id);
		$this->db->update($this->paymenttransactionlTbl, $data);
		// echo $this->db->last_query(); die;	
		return true;
	}
	public function get_one_receipt_details($id)
	{
		$result=$this->db->where('payment_id', $id)->get($this->paymenttransactionlTbl)->row();
		return $result;
	}
	public function update_payment_multipule($data, $id){		
		$this->db->where('doc_refrence_id', $id);
		$this->db->update($this->paymenttransactionlTbl, $data);
		// echo $this->db->last_query(); die;	
		return true;
	}
	public function getuserids($id){		
		$this->db->select('*');
		$this->db->from($this->paymenttransactionlTbl);
		$this->db->where('payment_id', $id);
		$query = $this->db->get();
		$result = $query->row_object();
		return $result;
	}
	public function getuserids_temppaymentid($id){		
		$this->db->select('*');
		$this->db->from($this->paymenttransactionlTbl);
		$this->db->where('doc_refrence_id', $id);
		$query = $this->db->get();
		$result = $query->row_object();
		return $result;
	}
	function incomeresourcesesarr($chargefor){
		$this->db->from($this->incomeresourcesTbl);
		$this->db->order_by("res_id ", "asc");
		//echo $this->db->last_query(); exit;
		$query = $this->db->get();		
		$result = $query->result();
		return $result; 
	}
	function getuniversityArr(){ 
		$this->db->select('uniid,university_name');
		$this->db->from($this->universityTbl);
		$this->db->order_by("university_name", "asc");
		$query = $this->db->get();		
		$result = $query->result();
		//$result = $query->result_array();
		return $result;
	}
	function getschoolArr(){ 
		$this->db->select('sch_id,school_name');
		$this->db->from($this->schoolsTbl);
		$this->db->order_by("school_name", "asc");
		$query = $this->db->get();		
		$result = $query->result();
		//$result = $query->result_array();
		return $result;
	}
	function all_income_report_listing($payment_for= null){
		//echo $payment_for;
		//$this->db->select("pt.*,u.university_name as name");
		
		$this->db->from($this->paymenttransactionlTbl.' pt');
		$this->db->where('txn_id !=','');
		//$this->db->join($this->universityTbl.' u','pt.user_id = u.uniid');
		
		if(isset($_GET['modules']) && $_GET['modules'] !=""){ 
			$this->db->where('user_id',$_GET['modules']);	
		}
		
		if(isset($_GET['income_sources']) && $_GET['income_sources'] !="" || $payment_for !=""){
			
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'professional_registration' || $payment_for == 'professional_registration'){
				$this->db->where('payment_for','PR');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'professional_license_renewal' || $payment_for == 'professional_license_renewal'){
				//$this->db->where('payment_for','PR');
				$this->db->where_in('payment_for',array('PR','PRG'));	
				$this->db->where('payment_type','R'); 
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'school_accreditaion' || $payment_for == 'school_accreditaion'){
				//echo 'sdfs'; exit;
				$this->db->where('payment_for','U');
				$this->db->where_in('payment_type',array('N','R')); 
			}
			
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'submission_of_graduates' || $payment_for == 'submission_of_graduates'){
				$this->db->where('payment_for','G');
				$this->db->where('payment_type','S');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'booking_for_exam_graduates' || $payment_for == 'booking_for_exam_graduates'){
				$this->db->where('payment_for','G');
				$this->db->where('payment_type','E');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'foreign_professional_registration' || $payment_for == 'foreign_professional_registration'){
				$this->db->where('payment_for','P');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'foreign_professional_examination' || $payment_for == 'foreign_professional_examination'){
				$this->db->where('payment_for','PP');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'booking_for_exam_foreign_professionals' || $payment_for == 'booking_for_exam_foreign_professionals'){
				$this->db->where('payment_for','PP');
				$this->db->where('payment_type','E');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'cep_accreditation' || $payment_for == 'cep_accreditation'){
				$this->db->where('payment_for','CEP');
				//$this->db->where('payment_type','E');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'online_course_accreditation' || $payment_for == 'online_course_accreditation'){
				$this->db->where('payment_for','C');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'training_course_accreditation' || $payment_for == 'training_course_accreditation'){
				$this->db->where('payment_for','T');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'verification_of_registration' || $payment_for == 'verification_of_registration'){
				$this->db->where('payment_for','VR');
				$this->db->where('payment_type','N');
			}
			if(isset($_GET['income_sources']) && $_GET['income_sources'] == 'certificate_of_good_standing' || $payment_for == 'certificate_of_good_standing'){
				$this->db->where('payment_for','GS');
				$this->db->where('payment_type','N');
			}
			
				
		}
		if(isset($_GET['user_role']) && $_GET['user_role'] !=""){
			$this->db->where('payment_for',$_GET['user_role']);	
		}
		if(isset($_GET['day']) && $_GET['day'] !=""){
			$this->db->where('day(payment_date)',$_GET['day']);	
		}
		if(isset($_GET['mouth']) && $_GET['mouth'] !=""){
			$this->db->where('month(payment_date)',$_GET['mouth']);			
		}
		
		if(isset($_GET['year']) && $_GET['year'] !=""){
			$this->db->where('year(payment_date)',$_GET['year']);	
		}
		$this->db->order_by("pt.payment_id", "desc");
		
		$query = $this->db->get();
		//echo $this->db->last_query(); 
		//die;		
		$result = $query->result();
		return $result;
	}
	function sumincomereport($payment_for="",$reportfor='', $payment_type=null){
		$this->db->select("sum(pt.payment_gross) totalincome");
		$this->db->from($this->paymenttransactionlTbl.' pt');
		//$this->db->join($this->universityTbl.' u','pt.user_id = u.uniid');
		$this->db->where('txn_id !=','');
		//if($payment_for !=""){
		if(is_array($payment_for)){
			$this->db->where_in('pt.payment_for',$payment_for);
		}if(!is_array($payment_for) && $payment_for !=""){
			$this->db->where('pt.payment_for',$payment_for);
		}
		if($payment_type !=""){
		$this->db->where('pt.payment_type',$payment_type);
		}
		if($reportfor == 'today'){
		$this->db->where('date(pt.payment_date)',date('Y-m-d'));
		}
		if($reportfor == 'monthly'){
		$this->db->where('month(pt.payment_date)',date('m'));
		$this->db->where('year(pt.payment_date)',date('Y'));
		}
		if($reportfor == 'anual'){
		$this->db->where('year(pt.payment_date)',date('Y'));
		}
		$query = $this->db->get();	
		//echo $this->db->last_query(); 
		//die;	
		$result = $query->row_object();
		return $result;
	}
	public function getsectionname($id,$section){
		
		if($section == 'P' || $section == 'PP' || $section == 'PR'){
			$this->db->select('concat(fname," ",lname," ",name) section_name');
			$this->db->from($this->userTbl);
			$this->db->where('user_ID', $id);
		}
		if($section == 'U'){
			$this->db->select('university_name section_name');
			$this->db->from($this->universityTbl);
			$this->db->where('uniid', $id);
		}
		if($section == 'C'){
			$this->db->select('name section_name');
			$this->db->from($this->userTbl);
			$this->db->where('user_ID', $id);
		}
		if($section == 'G' || $section == 'PRG'){
			//$this->db->select('name_of_school section_name');
			$this->db->select('concat(student_name," ",middle_name," ",surname) section_name');
			$this->db->from($this->graduatesTbl);
			$this->db->where('grad_id', $id);
		}
		
		if($section == 'T'){
			$this->db->select('name section_name');
			$this->db->from($this->userTbl);
			$this->db->where('user_ID', $id);
		}
		
		if($section == 'CEPC'){
			$this->db->select('cdoc.course_title section_name');
			$this->db->from($this->paymenttransactionlTbl.' p');
			$this->db->join($this->coursedocTbl.' cdoc','cdoc.cor_doc_id=p.doc_refrence_id','left');
			$this->db->where('cdoc.cor_doc_id', $id);
		}
		if($section == 'CEPT'){
			$this->db->select('tdoc.training_title section_name');
			$this->db->from($this->paymenttransactionlTbl.' p');
			$this->db->join($this->trainingdocTbl.' tdoc','tdoc.train_doc_id=p.doc_refrence_id','left');
			$this->db->where('tdoc.train_doc_id', $id);
		}
		if($section == 'CEP'){
			$this->db->select('cep.business_name section_name');
			$this->db->from($this->cepTbl.' cep');
			//$this->db->join($this->trainingdocTbl.' tdoc','tdoc.provider_id=cep.provider_id','left');
			$this->db->where('cep.provider_id', $id);
		}
		if($section == 'VR' || $section == 'GS'){
			$this->db->select('concat(fname," ",lname," ",name) section_name');
			$this->db->from($this->userTbl);
			$this->db->where('user_ID', $id);
		}
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->row_object();
		return $result;
	}
	
	function is_pexam_booked($uid){
		$this->db->select('b.*,es.es_id, es.name_of_exam exam_name, es.date exam_date, es.start_time exam_start_time, es.end_time exam_end_time,es.venue exam_venue');
		$this->db->from($this->book_examTbl.' b');
		$this->db->join($this->userTbl.' u','b.user_id = u.user_ID');
		$this->db->join($this->examscheduleTbl.' es','b.examination_id = es.es_id');
		$this->db->where('b.booking_for', 'pp');
		$this->db->where('b.payment', '1');
		$this->db->where('b.user_id', $uid);
		$this->db->order_by("b.be_id", "desc");
		$query = $this->db->get();		
		$result = $query->row_object();
		return $result;
	}

	function is_gexam_booked($uid){
		$this->db->select('b.*,es.es_id,es.name_of_exam exam_name, es.date exam_date, es.start_time exam_start_time, es.end_time exam_end_time,es.venue exam_venue');
		$this->db->from($this->book_examTbl.' b');
		$this->db->join($this->graduatesTbl.' u','b.user_id = u.grad_id');
		$this->db->join($this->examscheduleTbl.' es','b.examination_id = es.es_id');
		$this->db->where('b.booking_for', 'p');
		$this->db->where('b.payment', '1');
		$this->db->where('b.user_id', $uid);
		$this->db->order_by("b.be_id", "desc");
		$query = $this->db->get();		
		$result = $query->row_object();
		return $result;
	}
	function is_gexam_present($examination_id){
		//$this->db->select('b.*,es.es_id,es.name_of_exam exam_name, es.date exam_date, es.start_time exam_start_time, es.end_time exam_end_time,es.venue exam_venue');
		$this->db->select('count(g.grad_id) total_present');
		$this->db->from($this->graduatesTbl.' g');
		$this->db->join($this->book_examTbl.' b','g.grad_id = b.user_id');
		$this->db->where('g.attendance', '1');
		$this->db->where('b.booking_for', 'p');
		$this->db->where('b.examination_id', $examination_id);
		$query = $this->db->get();		
		$result = $query->row_object();
		return $result;
	}
	function is_pexam_present($examination_id){
		//$this->db->select('b.*,es.es_id,es.name_of_exam exam_name, es.date exam_date, es.start_time exam_start_time, es.end_time exam_end_time,es.venue exam_venue');
		$this->db->select('count(u.user_ID) total_present');
		$this->db->from($this->userTbl.' u');
		$this->db->join($this->book_examTbl.' b','u.user_ID = b.user_id');
		$this->db->where('u.attendance', '1');
		$this->db->where('b.booking_for', 'pp');
		$this->db->where('b.examination_id', $examination_id);
		$query = $this->db->get();		
		$result = $query->row_object();
		return $result;
	}
	function get_examschedule($exam_for){
		/* $this->db->from($this->examscheduleTbl.' es');
		$this->db->join($this->book_examTbl.' b','es.es_id = b.examination_id');
		$this->db->join($this->userTbl.' u','b.user_id=u.user_ID');
		$this->db->where('es.exam_for', $exam_for);
		$this->db->where('es.status', '1');
		//$this->db->where('date >=', date('Y-m-d'));
		$this->db->order_by("es.date", "desc");
		$this->db->group_by("es.es_id"); */
		
		$this->db->from($this->examscheduleTbl);
		$this->db->where('exam_for', $exam_for);
		$this->db->where('status', '1');
		//$this->db->where('date >=', date('Y-m-d'));
		$this->db->order_by("date", "desc");
		$query = $this->db->get();		
		$result = $query->result();
		return $result;
	}
	function get_bookedexam($booking_for){
		$this->db->select("b.*");
		$this->db->from($this->book_examTbl.' b');
		 $this->db->join($this->userTbl.' u', 'b.user_id=u.user_ID');
		$this->db->join($this->paymenttransactionlTbl.' pt','u.user_ID = pt.user_id');
		$this->db->where('pt.payment_type','E');// That means payment for exam booking 
		//$this->db->where('b.booking_for','PP');// That means Exam Booking for forigen professional  
		$this->db->where('b.booking_for',$booking_for);// That means Exam Booking for forigen professional  
		$this->db->where('u.exam_code !=',''); 
		//$this->db->where('status', '1');
		//$this->db->order_by("exam_for", "desc");
		$query = $this->db->get();		
		$result = $query->result();
		return $result;
	}
	function get_passedexam(){ 
		$this->db->select("er.*,e.*");
		$this->db->from($this->exam_resultTbl.' er');
		$this->db->join($this->book_examTbl.' e','er.user_id=e.user_id');
		$this->db->where('er.status', 'Pass');
		//$this->db->order_by("exam_for", "desc");
		$query = $this->db->get();		
		$result = $query->result();
		return $result;
	}

	function exam_result($id)
	{
		$this->db->select("*");
		$this->db->from($this->exam_resultTbl);
		$this->db->where('id',$id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;	

	}

	public function profcertificate($doc_id){
		$this->db->select("*");
		$this->db->from($this->professional_documentsTbl);
		$this->db->where('pd_id',$doc_id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;	
	}

	function cep_deatils($provider_id){
		$this->db->from($this->cepdocumentsTbl);
		$this->db->where('provider_id',$provider_id);
		$this->db->where('accreditation_no !=','');
		$this->db->where('expiry_at !=','0000-00-00');
		$this->db->order_by('id','Desc');
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();
		//$result = $query->result();
		return $result;
	}
	function insertnotifications($table,$memberdata){
		//print_r($memberdata); exit;
		return $this->db->insert($table, $memberdata);
		// echo $this->db->last_query(); die;
		//$last_id = $this->db->insert_id();
		//return (isset($id)) ? $id : FALSE;
	
	}

	function get_online_application_count(){
		$this->db->from($this->applicationlogTbl);
		$query = $this->db->get();	
		$result = $query->num_rows();
		return $result;
	}

	public function insert_onlineapplication_log($data){
		$this->db->insert($this->applicationlogTbl, $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	function get_one_online_application_log($resourse_id){
		$this->db->from($this->applicationlogTbl);
		$this->db->where('res_id',$resourse_id);
		$query = $this->db->get();	
		$result = $query->num_rows();
		return $result;
	}

	function get_admin_subscription_details(){
		$this->db->select('asd.*, SUM(asd.no_of_application) total_application');
		$this->db->from($this->adminSubscriptionDetailsTbl.' asd');
		// $this->db->where('admin_email',1);
		$query = $this->db->get();	
		$result = $query->row();
		return $result;
	}

	function contactus_details(){
		$this->db->select('*');
		$this->db->from($this->cmsTbl);
		$this->db->where('cms_url','contactus');
		$query = $this->db->get();	
		$result = $query->row_object();
		return $result;
	}
	public function get_count_accreditation($table, $wherearr=null){
		$this->db->select('*');
		$this->db->from($table);
		if($wherearr != null){
			$this->db->where($wherearr);
		}
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
	}
	
	public function insert_stripe_log($data){
		$this->db->insert($this->stripeLogTbl, $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
}
?>