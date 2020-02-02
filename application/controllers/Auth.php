<?php

class Auth extends CI_Controller{

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("auth/login","refresh");
	}
	
	public function login(){
		//echo "Login Page";
		if(isset($_POST['login'])){
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('pass','Password','required|min_length[5]');


			if($this->form_validation->run() == TRUE){
				//echo "Form Validated";

				$email = $_POST['email'];
				$password = md5($_POST['pass']);

				$this->db->select('*');
				$this->db->from('recievers');
				$this->db->where(array('email' => $email,'password' => $password));

				$query=$this->db->get();

				$user=$query->row();

				if($user->email){
					//temp msg
					$this->session->set_flashdata("success","You are logged in !");

					//Setting Session variables

					$_SESSION['user_logged'] = TRUE;
					$_SESSION['username'] = $user->name;
					$_SESSION['email'] = $user->email;
					$_SESSION['phno'] = $user->phno;
					$_SESSION['gender'] = $user->gender;
					$_SESSION['age'] = $user->age;
					$_SESSION['bg'] = $user->bg;

					//redirecting to receiver profile page
					redirect("Reciever/profile","refresh");
				}
				else{
					$this->session->set_flashdata("error","No Such account exist in database !");
					redirect("auth/login","refresh");
				}

			}

		}
		
		//Loading View
		$this->load->view('header');
		$this->load->view('reciever/login');

	}

	public function register(){
		//echo "Register Page";

		if(isset($_POST['register'])){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('phno','Phone','required|min_length[10]');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('age','Age','required');
			$this->form_validation->set_rules('pass','Password','required|min_length[5]');
			$this->form_validation->set_rules('pass2','Confirm Password','required|min_length[5]|matches[pass]');


			if($this->form_validation->run() == TRUE){
				echo "Form Validated";

				//adding reciever in bloodbank db

				$data = array(
					'name' => $_POST['name'],
					'phno' => $_POST['phno'],
					'email' => $_POST['email'],
					'password' =>md5($_POST['pass']),
					'bg' => $_POST['bg'],
					'age' => $_POST['age'],
					'gender' => $_POST['gender']
					);
				$this->db->insert('recievers',$data);

				$this->session->set_flashdata("success","Your Account has been registered. You can login now !");

				redirect("auth/register","refresh");

			}

		}
		//Loading View
		$this->load->view('header');
		$this->load->view('reciever/register');
	}

}

?>