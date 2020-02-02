<?php

class Reciever extends CI_Controller{

	public function __construct(){

		parent::__construct();
		if ($_SESSION['user_logged'] == FALSE) {
			$this->session->set_flashdata("error"," Please Login First to view this page !");
			redirect("auth/login");
		}
	}


	public function confirmrequest(){
	

				//Saving Blood Request in bloodbank db

					$data = array(  
					'hid' => $_REQUEST['hid'], 
					'rid' => $_REQUEST['rid'],
					'bg' => $_REQUEST['bg'],
					'qty' => $_REQUEST['qty'],
					);  

					$this->db->insert('bloodrequests',$data);
				
				$this->session->set_flashdata("success","Blood Request Succesfull");

				redirect("reciever/profile","refresh");


		//Loading View

		$this->load->view('reciever/profile');

}
	public function bloodrequest(){
	
		$this->load->view('reciever/bloodrequest');
	}

	public function profile(){
	
		$this->load->view('reciever/profile');
	}

	public function requestblood()
	{
		$this->load->view('header');
		$this->load->view('requestblood');
	}

}
?>