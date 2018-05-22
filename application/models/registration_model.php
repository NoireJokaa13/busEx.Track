<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration_Model extends My_Model {
	 protected $table = 'bet_registration';
	 protected $primary_key = 'ticket_no';

	 function login($data)
	{
		$condition = "ticket_no =" . "'" . $data['ticket_no'] . "'";
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
}
?>
