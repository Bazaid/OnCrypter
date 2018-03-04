<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cron_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

    public function get_users()
    {
    $date =  date('Y-m-d');
    $query = $this->db->query("SELECT * FROM `users` WHERE `expires` >='$date'");
while ($result = $query->fetch(PDO::FETCH_ASSOC))
{
    $return[] = $result;
}

return $return;
    }

    public function rest_user($id)
    {
      $query = $this->db->query("UPDATE `users` SET `used`='0' WHERE `id`='$id'");
      return TRUE;
    }
}
