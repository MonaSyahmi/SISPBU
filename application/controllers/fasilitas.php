<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class fasilitas extends CI_Controller
{
    
    /**
     * Ini merupakan Sebuah controller untuk menghubungkan view fasilitas dan model fasilitas

     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('fasilitas_model');
        $this->load->library('session');
        $this->load->model('komentar_model');
        $this->load->model('artikel_model');
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }
        
        
        
    }
    public function index()
    {
        
        redirect('fasilitas/daftar_fasilitas');
    }
    
    //fungsi ini digunakan untuk menampilkan daftar fasilitas
    
    public function daftar_fasilitas()
    {
        
        $data['menu']   = 'fasilitas';
        $content['isi'] = 'string';
        
        $data['sub_menu'] = 'daftar_fasilitas';
        $data['isi']      = $this->load->view('daftar_fasilitas', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    //fungsi ini digunakan untuk menampilkan data fasilitas
    public function tambah_fasilitas()
    {
        $data['menu']         = 'fasilitas';
        $data['sub_menu']     = 'tambah_fasilitas';
        //$content['fasilitas']      = $this->fasilitas_model->get_data_fasilitas();
        //$content['negara']    = $this->negara_model->get_data_m_negara();
        //$content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
		 //$content['inang']    = $this->inang_model->get_data_m_inang();
       // $content['fasilitas']      = $this->fasilitas_model->get_data_m_fasilitas();
        //$content['organisme'] = $this->organisme_model->get_data_m_organisme();
        //$content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'new';
        $data['isi']          = $this->load->view('form_fasilitas', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan penambahn data fasilitas baru
    public function tambah()
    { 
        $data = array(
            
            'nama_fasilitas' => $this->input->post('nama_fasilitas'),
        );
        
        
        $this->fasilitas_model->insert($data);
        
        redirect('fasilitas');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan terhadap data inang baru
    
    public function edit_fasilitas($id)
    {
        $data['menu']         = 'fasilitas';
        $data['sub_menu']     = 'tambah_fasilitas';
        $content['fasilitas']      = $this->fasilitas_model->get_data_fasilitas();
        $content['negara']    = $this->negara_model->get_data_m_negara();
        $content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
        $content['organisme'] = $this->organisme_model->get_data_m_organisme();
        $content['fasilitas']      = $this->fasilitas_model->get_data_m_fasilitas();
        $content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'edit';
        $data['isi']          = $this->load->view('form_fasilitas', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan data fasilitas
    public function update($id)
    {
        
        $data = array(
        
            'nama_fasilitas' => $this->input->post('nama_fasilitas')
        );
        
        
        $this->fasilitas_model->update($data, $id);
        
        redirect('fasilitas');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan penghapusan data fasilitas
    
    public function delete($id)
    {
        $this->fasilitas_model->delete($id);
        $data['menu'] = 'fasilitas';
        
        $content['isi']    = $this->fasilitas_model->get_data_fasilitas();
        $content['delete'] = 'Data Berhasil Dihapus';
        $data['sub_menu']  = 'daftar_fasilitas';
        $data['isi']       = $this->load->view('daftar_fasilitas', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
