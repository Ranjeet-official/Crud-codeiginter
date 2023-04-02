<?php

class loginmodel extends CI_model
{
	public function isvalidate($username,$password)
	{
		$q = $this->db->where(['username'=>$username,'password'=>$password])
		              ->get('ci3');

			if ($q->num_rows()) 
			{
			   return $q->row()->id;  	
			}
			else
			{
		       return FALSE;
			}
	}


	public function articlelist()
	{
        $this->load->library('session');
		$id = $this->session->userdata('id');
		$q = $this->db->select()
		             ->from('articles')
			         ->where(['user_id' => $id])
			         ->get();
			         return $q->result();
	}

	public function add_article($array)
       {
         return $this->db->insert('articles',$array);
       }

       public function add_user($array)
       {
         return $this->db->insert('ci3',$array);
       }

       public function del($id)
       {
       	  return $this->db->delete('articles',['id' => $id]);
       	  
       }

       public function  find_article($articleid)
				 {
				   $q=$this->db->select(['article_title','article_boby','id'])
				    ->where('id',$articleid)
				   ->get('articles');
				   return $q->row();
				 }

				 public function update_article($articleid,Array $article)
		           {
							return $this->db->where('id',$articleid)
							                ->update('articles',$article);
							 }
}