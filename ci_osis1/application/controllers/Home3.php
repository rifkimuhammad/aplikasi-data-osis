<?php
class Home3 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_masa_khidnat');
    }
    public function index()
    {
        $data['title'] = 'Halaman Data Masa Khidnat';
        $data['masa_khidnat'] = $this->M_masa_khidnat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index3', $data);
        $this->load->view('templates/footer');
    }
    public function masa_khidnat()
    {
        $data['title'] = 'Halaman Data Masa Khidnat';
        $data['masa_khidnat'] = $this->M_masa_khidnat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index3', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Masa Khidnat';
        $data['masa_khidnat'] = $this->M_masa_khidnat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home3/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->M_masa_khidnat->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Baru Berhasil Ditambahkan!
      </div>');
        redirect('Home3');
    }
    public function hapus_data($id_masa_khidnat)
    {
        $this->load->model('M_masa_khidnat');
        $this->M_masa_khidnat->hapus_data($id_masa_khidnat);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home3');
    }
    public function edit_data($id_masa_khidnat)
    {
        $data['title'] = 'Halaman Edit Masa Khidnat';
        $data['tbl_masa_khidnat'] = $this->M_masa_khidnat->ambil_id_masa_khidnat($id_masa_khidnat);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home3/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function lihat_data($id_masa_khidnat)
    {
        $data['title'] = 'Halaman Lihat Masa Khidnat';
        $data['tbl_masa_khidnat'] = $this->M_masa_khidnat->lihat_data($id_masa_khidnat);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home3/struktur_organisasi', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->M_masa_khidnat->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home3');
    }
    
    public function editdata($id_masa_khidnat)
    {
        $this->load->model('M_masa_khidnat');
        $this->M_masa_khidnat->edit_data($id_masa_khidnat);
        redirect('Home3');
    }
}
?>