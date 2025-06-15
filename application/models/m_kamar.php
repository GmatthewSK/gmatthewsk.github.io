<?php
class m_kamar extends CI_model 

{
	public function getAll()
	{
    	return $this->db->get('t_kamar'); 
	}

	public function delete($id)
	{
		$this->db->where('kamar_id', $id);
		$this->db->delete('t_kamar');
	}
}
