<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('cron_model');

  }
  public function rest($key)
  {
    if ($key == $this->config->item('encryption_key'))
    {
      $users_info = $this->cron_model->get_users();
      if ($users_info)
      {
        foreach($users_info as  $user)
        {
          if ($user['accountType'] != 'Trial' ){
            $this->cron_model->rest_user($user['id']);
          }
        }
      }
    }else{
      exit(0);
    }
  }
}
