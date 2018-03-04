<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

    public function get_info($userid)
    {
        $query = $this->db->query("SELECT * FROM `users` WHERE `id` ='$userid'");
		$result = $query->fetch(PDO::FETCH_ASSOC);
	
    return $result;
    }
	
	public function get_files($user_id)
    {
		$return = array();
        $query = $this->db->query("SELECT * FROM `files` WHERE `user_id` ='$user_id'");
		
        while ($result = $query->fetch(PDO::FETCH_ASSOC))
        {
            $return[] = $result;
        }
     
        return $return;

    }
	
	public function get_crypts($acType)
    {
		$return = array();
        $query = $this->db->query("SELECT * FROM `crypts` WHERE `accountType` ='$acType'");
		
        while ($result = $query->fetch(PDO::FETCH_ASSOC))
        {
            $return[] = $result;
        }
     
        return $return;

    }
}
