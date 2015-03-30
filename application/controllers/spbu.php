<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class spbu extends CI_Controller
{
    
    /**
     * Ini merupakan Sebuah controller untuk menghubungkan view spbu dan model spbu

     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('spbu_model');
        $this->load->library('session');
        $this->load->model('komentar_model');
        $this->load->model('artikel_model');
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }
        
        
        
    }
    public function index()
    {
        
        redirect('spbu/daftar_spbu');
    }
    
    //fungsi ini digunakan untuk menampilkan daftar spbu
    
    public function daftar_spbu()
    {
        
        $data['menu']   = 'spbu';
        $content['isi'] = 'string';
        $content['spbu']      = $this->spbu_model->get_spbu();
        $data['sub_menu'] = 'daftar_spbu';
        $data['isi']      = $this->load->view('daftar_spbu', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    //fungsi ini digunakan untuk menampilkan data spbu
    public function tambah_spbu()
    {
        $data['menu']         = 'spbu';
        $data['sub_menu']     = 'tambah_spbu';
        //$content['spbu']      = $this->spbu_model->get_data_spbu();
        //$content['negara']    = $this->negara_model->get_data_m_negara();
        //$content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
		 //$content['inang']    = $this->inang_model->get_data_m_inang();
        
        //$content['organisme'] = $this->organisme_model->get_data_m_organisme();
        //$content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'new';
        $data['isi']          = $this->load->view('form_spbu', $content); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan penambahn data spbu baru
    public function tambah()
    { 
        $data = array(
            
           'kode_SPBU' => $this->input->post('kode_SPBU'),
            'lokasi_SPBU' => $this->input->post('lokasi_SPBU'),
            'fasilitas_SPBU' => $this->input->post('fasilitas_SPBU'),
            'produk_SPBU' => $this->input->post('produk_SPBU'),
			'jam_operasional' => $this->input->post('jam_operasional'),
			'rekomendasi' => $this->input->post('rekomendasi'),
            'url_gambar_SPBU' => $this->input->post('url_gambar_SPBU')
        );
        
        
        $this->spbu_model->insert($data);
        
        redirect('spbu');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan terhadap data inang baru
    
    public function edit_spbu($id)
    {
        $data['menu']         = 'spbu';
        $data['sub_menu']     = 'tambah_spbu';
        $content['spbu']      = $this->spbu_model->get_data_spbu();
        $content['negara']    = $this->negara_model->get_data_m_negara();
        $content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
        $content['organisme'] = $this->organisme_model->get_data_m_organisme();
        $content['spbu']      = $this->spbu_model->get_data_m_spbu();
        $content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'edit';
        $data['isi']          = $this->load->view('form_spbu', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan data spbu
    public function update($id)
    {
        
        $data = array(
            
            'kode_SPBU' => $this->input->post('kode_SPBU'),
            'lokasi_SPBU' => $this->input->post('lokasi_SPBU'),
            'fasilitas_SPBU' => $this->input->post('fasilitas_SPBU'),
            'proudk_SPBU' => $this->input->post('proudk_SPBU'),
            'url_gambar_SPBU' => $this->input->post('url_gambar_SPBU')
        );
        
        
        $this->spbu_model->update($data, $id);
        
        redirect('spbu');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan penghapusan data spbu
    
    public function delete($id)
    {
        $this->spbu_model->delete($id);
        $data['menu'] = 'spbu';
        
        $content['isi']    = $this->spbu_model->get_data_spbu();
        $content['delete'] = 'Data Berhasil Dihapus';
        $data['sub_menu']  = 'daftar_spbu';
        $data['isi']       = $this->load->view('daftar_spbu', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
