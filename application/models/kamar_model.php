<?php
class Kamar_model extends CI_Model 
{
    public function get_all()
    {
        return $this->db->get('t_kamar')->result();
    }

    public function delete($id)
    {
        $this->db->where('kamar_id', $id);
        $this->db->delete('t_kamar');
    }

    public function get_by_tipe($tipe_kamar)
    {
        return $this->db->get_where('t_kamar', ['tipe_kamar' => $tipe_kamar])->row();
    }
}
