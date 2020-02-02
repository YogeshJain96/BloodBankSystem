<?php

class Hospital extends CI_Controller{

public function showbloodrequests(){
		if ($_SESSION['hospital_logged'] == FALSE) {
			$this->session->set_flashdata("error"," Please Login First to view this page !");
			redirect("hospital/login");
		}
		
		$this->load->view('hospital/bloodrequest');
	}
	public function profile(){
		if ($_SESSION['hospital_logged'] == FALSE) {
			$this->session->set_flashdata("error"," Please Login First to view this page !");
			redirect("hospital/login");
		}
				$h=$_SESSION['hid'];
				$this->db->select('*');
				$this->db->from('bloodrecords');
				$this->db->where(array('hid' => $h));
				
				$query2 = $this->db->get();
				$blood = $query2->row();

				$_SESSION['A+'] = $blood->Ap;
				$_SESSION['A-'] = $blood->An;
				$_SESSION['B+'] = $blood->Bp;
				$_SESSION['B-'] = $blood->Bn;
				$_SESSION['AB+'] = $blood->ABp;
				$_SESSION['AB-'] = $blood->ABn;
				$_SESSION['O+'] = $blood->Op;
				$_SESSION['O-'] = $blood->Onn;


		$this->load->view('hospital/profile');
	}

	public function updateblood(){
		if ($_SESSION['hospital_logged'] == FALSE) {
			$this->session->set_flashdata("error"," Please Login First to view this page !");
			redirect("hospital/login");
		}

		if(isset($_POST['bregister'])){
			$this->form_validation->set_rules('A+','A+','required');
			$this->form_validation->set_rules('A-','A-','required');
			$this->form_validation->set_rules('B+','B+','required');
			$this->form_validation->set_rules('B-','B-','required');
			$this->form_validation->set_rules('AB+','AB+','required');
			$this->form_validation->set_rules('AB-','AB-','required');
			$this->form_validation->set_rules('O+','O+','required');
			$this->form_validation->set_rules('O-','O-','required');
			

			if($this->form_validation->run() == TRUE){
				echo "Form Validated";

				//Updataing Blood Samples in bloodbank db
					$hid = $_SESSION['hid']; 

					$data3 = array(  
					'Ap' => $_POST['A+'], 
					'An' => $_POST['A-'], 
					'Bp' => $_POST['B+'], 
					'Bn' => $_POST['B-'], 
					'ABp' => $_POST['AB+'], 
					'ABn' => $_POST['AB-'], 
					'Op' => $_POST['O+'], 
					'Onn' => $_POST['O-']
					);  

					$this->db->where('hid', $hid);  
					$this->db->update('bloodrecords', $data3); 

				$this->session->set_flashdata("success","Data Updated");

				redirect("hospital/profile","refresh");

			}

		}

		//Loading View

		$this->load->view('hospital/updateblood');
	}

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("hospital/login","refresh");
	}
	
	public function login(){

		if(isset($_POST['hlogin'])){
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('pass','Password','required|min_length[5]');


			if($this->form_validation->run() == TRUE){
				echo "Form Validated";

				$email = $_POST['email'];
				$password = md5($_POST['pass']);

				$this->db->select('*');
				$this->db->from('hospitals');
				$this->db->where(array('email' => $email,'password' => $password));

				$query=$this->db->get();

				$user=$query->row();

				if($user->email){
					//temp msg
					$this->session->set_flashdata("success","You are logged in !");

					//Setting Session variables

					$_SESSION['hospital_logged'] = TRUE;
					$_SESSION['username'] = $user->name;
					$_SESSION['email'] = $user->email;
					$_SESSION['phno'] = $user->phno;
					$_SESSION['address'] = $user->address;
					$_SESSION['hid'] = $user->id;

				


					//redirecting to hospital profile page
					redirect("hospital/profile","refresh");
				}
				else{
					$this->session->set_flashdata("error","No Such account exist in database !");
					redirect("hospital/login","refresh");
				}

			}

		}
		
		//Loading View
		$this->load->view('header');
		$this->load->view('hospital/login');

	}

	public function register(){
		//echo "Register Page";

		if(isset($_POST['hregister'])){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('phno','Phone','required|min_length[10]');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('pass','Password','required|min_length[5]');
			$this->form_validation->set_rules('pass2','Confirm Password','required|min_length[5]|matches[pass]');


			if($this->form_validation->run() == TRUE){
				echo "Form Validated";

				//adding Hospital in bloodbank db

				$data = array(
					'name' => $_POST['name'],
					'phno' => $_POST['phno'],
					'email' => $_POST['email'],
					'password' =>md5($_POST['pass']),
					'address' => $_POST['add']
					);
				$this->db->insert('hospitals',$data);

				//Initializing Blood Records

				$data2 = array(
					'hname' => $_POST['name'],
					'Ap' => "0",
					'An' => "0",
					'Bp' => "0",
					'Bn' => "0",
					'ABp' => "0",
					'ABn' => "0",
					'Op' => "0",
					'Onn' => "0",
					);
				$this->db->insert('bloodrecords',$data2);
				
				
				$this->session->set_flashdata("success","Your Account has been registered. You can login now !");

				redirect("hospital/register","refresh");

			}

		}
		//Loading View`
		$this->load->view('header');
		$this->load->view('hospital/register');
	}

}


?>