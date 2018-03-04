<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class download_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

    public function get_file($hash)
    {
    $query = $this->db->query("SELECT * FROM `files` WHERE `hash` ='$hash'");
		$result = $query->fetch(PDO::FETCH_NUM);
		return $result;
    }

}
