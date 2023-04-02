<?php 


class home_model extends CI_Model
{
     public function listing()
      {


		$q = $this->db->select()
		             ->from('articles')
			         ->get();
			         return $q->result();
	  }

}