<?php


	class Db_m extends CI_Model
	{
		
			function getAll()
			{
			
				$query = $this->db->query("SELECT * FROM sample_db.user");
				
				return $query->result();
			}
			
		
			function insert1($data)
			{
			
				$query = $this->db->insert("user",$data);
				
				
			}
			
			function insert_multiple($data)
			{
			
				$query = $this->db->insert_batch("user",$data);
				
				
			}
			
			function update1($data)
			{
			
			//eger string olursa bu şekilde     "id = 'cumba'"
				$query = $this->db->update("user",$data, "id = 1");
				
				
			}
			
			function update_multiple($data)
			{
			
				$query = $this->db->update_batch("user",$data, "id");
				
			}
			
			function delete1($data)
			{
			
				$query = $this->db->delete("user",$data);
				
			}


	}



?>