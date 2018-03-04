<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer extends CI_Controller {
  public function __construct()
  {
    $this->load->library('developer');
  }
  public function index()
  {
    $this->load->view('developer/home';
  }
}
