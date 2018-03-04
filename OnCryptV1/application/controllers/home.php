<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
		$this->load->library('form_validation');
		if ($this->auth->check_login())
			redirect('dashboard');
	}
	
		public function index($error = '')
	{
		$data['error'] = $error;
		 $this->load->view('home',$this->data);
	}

	public function acActiveON()
	{
		$secret = "unC0der_Baz4id#OnCrypt";
		// blockchain.info recive payments api's inputs
		$transaction_hash = $this->input->get('transaction_hash');
		$input_transaction_hash = $this->input->get('input_transaction_hash');
		$input_address = $this->input->get('input_address');
		$value_in_satoshi = $this->input->get('value');
		$value_in_btc = $value_in_satoshi / 100000000;
		
		// info
		$username = $this->input->get('user');
		$acType = $this->input->get('actype');
		$secret_get = $this->input->get('secret');
		
		// getting the price
		$acValue = 0;
		if($acType == "Basic") { $acValue = 0.03140; }
		if($acType == "Ultimate") { $acValue = 0.07066; }
		
	if ($secret == $secret_get)
	{
		if($value_in_btc >= $acValue)
		{
			// activate the account
			$this->auth->update_status($username,"working");
			
		}
	}
		
		echo "*ok*";
		
	}


	public function trial()
	{
		$username = $this->input->post('inputUser');
		$email = $this->input->post('inputEmail');
	    $password = $this->input->post('inputPassword');
		$passwordc = $this->input->post('inputPasswordc');
		
		if ($username == "" or $password == "" or $passwordc == "" or $email == "")
		{
			$data['loged'] = "0";
			$this->load->view("trial",$data);
		}
		else
		{

			$data['loged'] = $this->auth->trial($username,$password,$passwordc,$email);

			if ($data['loged'] == "1")
			{
				$data['loged'] = "4";
				$this->load->view("login",$data);
			}
			else
			{
				$this->load->view("trial",$data);
			}
			
		}
	}
	
	public function register()
	{
		$username = $this->input->post('inputUser');
		$email = $this->input->post('inputEmail');
	    $password = $this->input->post('inputPassword');
		$passwordc = $this->input->post('inputPasswordc');
		$acType = $this->input->post('AccountType');
		
		if($acType == "")
		{
			redirect('home');
		}
		
		if ($username == "" or $password == "" or $passwordc == "" or $email == "")
		{
			$data['loged'] = "0";
			$data['acType'] = $acType;
			$this->load->view("register",$data);
		}
		else
		{

			$data['acType'] = $acType;
			$data['loged'] = $this->auth->register($username,$password,$passwordc,$email,$acType);

			if ($data['loged'] == "1")
			{
				$data['user'] = $username;
				$this->load->view("register",$data);
			}
			else
			{
				$this->load->view("register",$data);
			}
			
		}
	}



	
	public function login()
	{
		$username = $this->input->post('inputUser');
	    $password = $this->input->post('inputPassword');
		if ($username == "" or $password == "")
		{
			$data['loged'] = "0";
			$this->load->view("login",$data);
		}
		else
		{

			$data['loged'] = $this->auth->login($username,$password,$_SERVER['REMOTE_ADDR']);

			if ($data['loged'] == "1")
			{
				redirect('dashboard');
			}

			$data['loged'] = $this->auth->login($username,$password,$_SERVER['SERVER_ADDR']);
			$data['user'] = $username;
			$data['pass'] = $password;
			$this->load->view("login",$data);
		}

	}

}


/* End of file main.php */
/* Location: ./application/controllers/main.php */
