<?php
class My_Model extends CI_Model {

	 protected $table = '';
	 protected $primary_key = '';
	 function __construct() 
	 {
 		parent::__construct();
 	 }

	function insert($data) // Create
	 {
		 $this->db->insert($this->table, $data);
		 return $this->db->insert_id();
	 }

	 function validate_id($id)
	 {
		 $where = array($this->primary_key => $id);
		 $query = $this->db->get_where($this->table, $where);
		 if ($query->num_rows() > 0)
		 return TRUE;
		 else
		 return FALSE;
	 }

	 function like($fields, $like_field, $keyword, $length, $start) 
	 {
		 $this->db->like($like_field, $keyword, 'both');
		 $query=$this->db->get($this->table, $length, $start);
		 if ($query->num_rows() > 0)
		 return $query->result();
		 else
		 return NULL;
	 }

	 function select($fields, $where = array(), $length, $start) // Read
	 {
		 $this->db->select($fields);
		 $query = $this->db->get_where($this->table, $where, $length, $start);
		 if ($query->num_rows() > 0)
		 return $query->result();
		 else
		 return NULL;
	 }
	 
	 function update($id, $data) // Update
	 {
		 $this->db->where($this->primary_key, $id);
		 $this->db->update($this->table, $data);
		 return TRUE;
	 }

	 function delete($id) // Delete
	 {
		 $this->db->where($this->primary_key, $id);
		 $this->db->delete($this->table);
		 if ($this->db->affected_rows() == 1)
		 return TRUE;
		 else
		 return FALSE;
	 }
}
?>
