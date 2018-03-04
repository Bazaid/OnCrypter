<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  private $data;
  public function __construct(){
      parent::__construct();
      $this->load->library('auth');

      $this->load->library('user');
      if (!$this->auth->check_login()){
      redirect('home');
      }
      $this->data['user_info'] = $this->user->get_info();
   }
   public function index()
   {

		$this->data['crypts'] = $this->user->get_crypts();
		$this->load->view('panel',$this->data);

   }
   public function rootkits()
   {
//		$this->load->view('panel',$this->data);
   }
   public function logout()
   {
    $this->session->sess_destroy();
	redirect('home');
   }
   public function add()
   {
  //   $this->load->view('panel',$this->data);
   }

   public function Myfiles()
   {
	 $this->data['files'] = $this->user->get_files();
     $this->load->view('Myfiles',$this->data);
   }

   public function news()
   {
     $this->load->view('news',$this->data);
   }

   public function settings()
   {
     $this->load->view('settings',$this->data);
   }


}
