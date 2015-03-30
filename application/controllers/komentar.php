<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class komentar extends CI_Controller
{
    
    /**
     * Ini merupakan Sebuah controller untuk menghubungkan view komentar dan model komentar

     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('komentar_model');
        $this->load->library('session');
        $this->load->model('komentar_model');
        $this->load->model('artikel_model');
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }
        
        
        
    }
    public function index()
    {
        
        redirect('komentar/daftar_komentar');
    }
    
    //fungsi ini digunakan untuk menampilkan daftar komentar
    
    public function daftar_komentar()
    {
        
        $data['menu']   = 'komentar';
        $content['isi'] = 'string';
        
        $data['sub_menu'] = 'daftar_komentar';
        $data['isi']      = $this->load->view('daftar_komentar', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    //fungsi ini digunakan untuk menampilkan data komentar
    public function tambah_komentar()
    {
        $data['menu']         = 'komentar';
        $data['sub_menu']     = 'tambah_komentar';
        //$content['komentar']      = $this->komentar_model->get_data_komentar();
        //$content['negara']    = $this->negara_model->get_data_m_negara();
        //$content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
		 //$content['inang']    = $this->inang_model->get_data_m_inang();
       // $content['komentar']      = $this->komentar_model->get_data_m_komentar();
        //$content['organisme'] = $this->organisme_model->get_data_m_organisme();
        //$content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'new';
        $data['isi']          = $this->load->view('form_komentar', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan penambahn data komentar baru
    public function tambah()
    { 
        $data = array(
            
            'nama_komentar' => $this->input->post('nama_komentar'),
        );
        
        
        $this->komentar_model->insert($data);
        
        redirect('komentar');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan terhadap data inang baru
    
    public function edit_komentar($id)
    {
        $data['menu']         = 'komentar';
        $data['sub_menu']     = 'tambah_komentar';
        $content['komentar']      = $this->komentar_model->get_data_komentar();
        $content['negara']    = $this->negara_model->get_data_m_negara();
        $content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
        $content['organisme'] = $this->organisme_model->get_data_m_organisme();
        $content['komentar']      = $this->komentar_model->get_data_m_komentar();
        $content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'edit';
        $data['isi']          = $this->load->view('form_komentar', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan data komentar
    public function update($id)
    {
        
        $data = array(
        
            'nama_komentar' => $this->input->post('nama_komentar')
        );
        
        
        $this->komentar_model->update($data, $id);
        
        redirect('komentar');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan penghapusan data komentar
    
    public function delete($id)
    {
        $this->komentar_model->delete($id);
        $data['menu'] = 'komentar';
        
        $content['isi']    = $this->komentar_model->get_data_komentar();
        $content['delete'] = 'Data Berhasil Dihapus';
        $data['sub_menu']  = 'daftar_komentar';
        $data['isi']       = $this->load->view('daftar_komentar', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
