<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class produk extends CI_Controller
{
    
    /**
     * Ini merupakan Sebuah controller untuk menghubungkan view produk dan model produk

     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('produk_model');
        $this->load->library('session');
        $this->load->model('komentar_model');
        $this->load->model('artikel_model');
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }
        
        
        
    }
    public function index()
    {
        
        redirect('produk/daftar_produk');
    }
    
    //fungsi ini digunakan untuk menampilkan daftar produk
    
    public function daftar_produk()
    {
        
        $data['menu']   = 'produk';
        $content['isi'] = 'string';
        
        $data['sub_menu'] = 'daftar_produk';
        $data['isi']      = $this->load->view('daftar_produk', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    //fungsi ini digunakan untuk menampilkan data produk
    public function tambah_produk()
    {
        $data['menu']         = 'produk';
        $data['sub_menu']     = 'tambah_produk';
        //$content['produk']      = $this->produk_model->get_data_produk();
        //$content['negara']    = $this->negara_model->get_data_m_negara();
        //$content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
		 //$content['inang']    = $this->inang_model->get_data_m_inang();
       // $content['produk']      = $this->produk_model->get_data_m_produk();
        //$content['organisme'] = $this->organisme_model->get_data_m_organisme();
        //$content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'new';
        $data['isi']          = $this->load->view('form_produk', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan penambahn data produk baru
    public function tambah()
    { 
        $data = array(
            
            'nama_produk' => $this->input->post('nama_produk'),
        );
        
        
        $this->produk_model->insert($data);
        
        redirect('produk');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan terhadap data inang baru
    
    public function edit_produk($id)
    {
        $data['menu']         = 'produk';
        $data['sub_menu']     = 'tambah_produk';
        $content['produk']      = $this->produk_model->get_data_produk();
        $content['negara']    = $this->negara_model->get_data_m_negara();
        $content['wilayah']   = $this->wilayah_model->get_data_m_wilayah();
        $content['organisme'] = $this->organisme_model->get_data_m_organisme();
        $content['produk']      = $this->produk_model->get_data_m_produk();
        $content['pengujian'] = $this->uji_model->get_data_m_uji();
        $content['status']    = 'edit';
        $data['isi']          = $this->load->view('form_produk', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        $data['disable']      = true;
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan data produk
    public function update($id)
    {
        
        $data = array(
        
            'nama_produk' => $this->input->post('nama_produk')
        );
        
        
        $this->produk_model->update($data, $id);
        
        redirect('produk');
        
        
    }
    
    //fungsi ini digunakan untuk melakukan penghapusan data produk
    
    public function delete($id)
    {
        $this->produk_model->delete($id);
        $data['menu'] = 'produk';
        
        $content['isi']    = $this->produk_model->get_data_produk();
        $content['delete'] = 'Data Berhasil Dihapus';
        $data['sub_menu']  = 'daftar_produk';
        $data['isi']       = $this->load->view('daftar_produk', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
