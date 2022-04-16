<?php
class T_tahun extends CI_Model{
    public function SemuaData()
    {
    return $this->db->get('tbl_tahun')->result_array();
    }
    public function proses_tambah_data()
    {
       $data = [
          "nama_tahun" => $this->input->post('nama_tahun'),
       ];
       $this->db->insert('tbl_tahun',$data);
    }
    public function hapus_data($id_tahun)
    {
       $this->db->where('id_tahun', $id_tahun);
       $this->db->delete('tbl_tahun');
    }
    public function ambil_id_tahun($id_tahun)
    {
       return $this->db->get_where('tbl_tahun', ['id_tahun' => $id_tahun])->row_array();
    }
    public function proses_edit_data()
    {
       $data = [
          "nama_tahun" => $this->input->post('nama_tahun'),
       ];
       $this->db->where('id_tahun', $this->input->post('id_tahun'));
       $this->db->update('tbl_tahun', $data);
    }
}
?>