<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User
{

  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('user_model');
    $this->CI->load->library('session');
  }

	
    public function get_info()
    {
      return $this->CI->user_model->get_info($this->CI->session->userdata('user_id'));
    }
	
    public function get_crypts()
    {
		$results = $this->CI->user_model->get_info($this->CI->session->userdata('user_id'));
		return $this->CI->user_model->get_crypts($results['accountType']);
    }
	
	public function get_files()
    {
		return $this->CI->user_model->get_files($this->CI->session->userdata('user_id'));
    }
	

}
