<?php
class M_masa_khidnat extends CI_Model{
    public function SemuaData()
    {
    return $this->db->get('tbl_masa_khidnat')->result_array();
    }
    public function proses_tambah_data()
    {
       $data = [
          "nama_ketua"    => $this->input->post('nama_ketua'),
          "nama_wakil"    => $this->input->post('nama_wakil'),
          "masa_khidnat"  => $this->input->post('masa_khidnat'),
       ];
       $this->db->insert('tbl_masa_khidnat',$data);
    }
    public function hapus_data($id_masa_khidnat)
    {
       $this->db->where('id_masa_khidnat', $id_masa_khidnat);
       $this->db->delete('tbl_masa_khidnat');
    }
    public function ambil_id_masa_khidnat($id_masa_khidnat)
    {
       return $this->db->get_where('tbl_masa_khidnat', ['id_masa_khidnat' => $id_masa_khidnat])->row_array();
    }
    public function proses_edit_data()
    {
       $data = [
        "nama_ketua"    => $this->input->post('nama_ketua'),
        "nama_wakil"    => $this->input->post('nama_wakil'),
        "masa_khidnat"  => $this->input->post('masa_khidnat'),
       ];
       $this->db->where('id_masa_khidnat', $this->input->post('id_masa_khidnat'));
       $this->db->update('tbl_masa_khidnat', $data);
    }
    public function lihat_data($id_masa_khidnat)
    {
      return $this->db->get_where('tbl_masa_khidnat', ['id_masa_khidnat' => $id_masa_khidnat])->row_array();
    }

}
?>