<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	
	// helper functions
	public function isToday($time) 
	{
		return (strtotime($time) === strtotime('today'));
	}
	
	public function isPast($time)
	{
		return (strtotime($time) < time());
	}

	
	
	public function update_status($username,$status)
	{
		$query = $this->db->query("UPDATE `users` SET `status`='$status' WHERE `user`='$username'");
		return TRUE;
	}
	
	 public function check_user($username,$password,$ip)
    {
        $epassword = md5($password);
        $query = $this->db->query("SELECT count(*) FROM `users` WHERE `user` ='$username' AND `pass` = '$epassword'");
		$result = $query->fetch(PDO::FETCH_NUM);
		if ($result[0] > 0)
		{
			$query = $this->db->query("SELECT * from `users` WHERE `user` = '$username'");
			$result_2 = $query->fetch(PDO::FETCH_ASSOC);

			
			if($this->isToday($result_2['expires']) or $this->isPast($result_2['expires']))
			{
				$this->update_status($username,"closed");
				return 4;
			}
			
			if($result_2['status'] == "notworking")
			{
				return 3;
			}
			
			if($result_2['status'] == "closed")
			{
				return 4;
			}
			
			if($result_2['status'] == "baned")
			{
				return 4;
			}
			
			if($ip == $result_2['ip'])
			{
				return 1;
			} else
			{
				return 2;
			}

		} else { return 0; }
    }

	
	public function check_register($username)
    {
        $query = $this->db->query("SELECT count(*) FROM `users` WHERE `user` ='$username'");
		$result = $query->fetch(PDO::FETCH_NUM);
		if ($result[0] > 0)
		{
			return 1;

		} else { 
		return 0; }
    }

	public function register($username,$email,$password,$accounttype,$status)
	{
	
		$password = md5($password);
		$expires = date('Y-m-d H:i:s');
		
		if($accounttype == "Trial") { $expires = date('Y-m-d H:i:s', strtotime("+1 day")); }
		if($accounttype == "Basic") { $expires = date('Y-m-d H:i:s', strtotime("+1 month")); }
		if($accounttype == "Ultimate") { $expires = date('Y-m-d H:i:s', strtotime("+1 month")); }
		
		$daate = date('Y-m-d H:i:s');
		$ip = $_SERVER['SERVER_ADDR'];
		$hwid = " ";
		$total = 0;
		if ($accounttype == "Trial")  { $total = 1; }
		if ($accounttype == "Basic")  { $total = 5; }
		if ($accounttype == "Ultimate")    { $total = 15;}
		
		$query = $this->db->query("INSERT INTO users VALUES (0,'$username', '$password', '$email', '$daate', 0, '$accounttype', '$hwid', '$ip', '$expires', '$total', '$status');");
		
		return 1;
		
	}
	
    public function get_id($username)
    {
        $query = $this->db->query("SELECT id FROM `users` WHERE `user` ='$username'");
		$result = $query->fetch(PDO::FETCH_NUM);
		var_dump($result);
		return $result[0];
    }

}
