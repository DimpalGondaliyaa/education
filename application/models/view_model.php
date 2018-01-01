<?php

class view_model extends CI_Model
{
	public function fetch_view_data($id)
	{
		$data = $this->db->query("select * from register where user_reg_id='$id' ");
		$sql = $data->row_array();
		return $sql;
	}
	
}

?>