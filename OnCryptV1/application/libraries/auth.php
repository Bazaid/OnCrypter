<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth
{

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('auth_model');
		$this->CI->load->library('session');
	}


    public function check_login()
    {
		if ($this->CI->session->userdata('logged_in'))
		{
			return TRUE;
		} else { return FALSE; }

    }

    public function login($username,$password,$ip)
    {

		$num = $this->CI->auth_model->check_user($username,$password,$ip);

		if ($num > 0)
		{

			if($num == 3)
			{
				return 5; // not activated
			}
			
			
			if($num == 4)
			{
				return 6; // closed
			}
			
			if($num == 5)
			{
				return 7; // baned
			}
			
			if($num == 1 || $num == 2) // if ip not equalt should be edited
			{
				$id = $this->CI->auth_model->get_id($username);

				   $newdata = array(
                   'username'  => $username,
                   'user_id' => $id,
                   'logged_in' => TRUE
                );

				$this->CI->session->set_userdata($newdata);
				return 1; // every thing is okey

			}
			else
			{
				// IP's not equal
				return 3;
			}

		} else { return 2; } // password or username incoreect
    }

	
	public function trial($username,$password,$passwordc,$email)
    {

		$num = $this->CI->auth_model->check_register($username);

		if( $password != $passwordc)
		{
			return 3;
		}
		
		if ($num == 1)
		{
			return 2;
		}
		
		if($num == 0)
		{
			
			 return $this->CI->auth_model->register($username,$email,$password,"Trial","working");
			// register new account
		}

		
    }
	
	public function update_status($username,$status)
	{
		$this->CI->auth_model->update_status($username,$status);
	}
	
	public function register($username,$password,$passwordc,$email,$acType)
    {

		$num = $this->CI->auth_model->check_register($username);

		if( $password != $passwordc)
		{
			return 3;
		}
		
		if ($num == 1)
		{
			return 2;
		}
		
		if($num == 0)
		{
			
			 return $this->CI->auth_model->register($username,$email,$password,$acType,"notworking");
			// register new account
		}

		
    }

}
