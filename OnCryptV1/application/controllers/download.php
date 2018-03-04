<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

  $this->load->helper('download');
    $this->load->model('download_model');
  }
  public function hash($hash)
  {
     $file = $this->download_model->get_file($hash);
     $name = $file[2];
     $filepath =  "application/files/".$name;
     $data = file_get_contents($filepath);
     force_download($name, $data);
  }
}
