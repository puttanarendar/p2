<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Uploadmodel extends CI_model
   {
	   public function save($data)
	   {
		   
		   $this->db->insert('member',$data);
	   }
	   public function check($data)
	   {
		  return $this->db->get_where("member", $data)->result();
		}
		public function display()
		{

		return $this->db->query("select * from member")->result();
		}
	   
	   
   }
?>
