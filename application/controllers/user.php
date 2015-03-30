<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    
    /**
     * Ini merupakan Sebuah controller untuk menghubungkan view user dan model user
     * Semua CRUD yang berhubungan dengan user memanggil controller ini
     * Created by Mukhamad Faiz Fanani dan Idam Pradana Mahmudah (Jurusan Sistem Informasi ITS)
     * V.1.0
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('user_model');
        $this->load->library('session');
        if ($this->session->userdata('username') == NULL) {
            redirect('login');
        }
    }
    public function index()
    {
        
        redirect('user/daftar_user');
    }
    
    
    //fungsi ini digunkan untuk menampilkan daftar user
    
    public function daftar_user()
    {
        
        $data['menu']     = 'user';
        $content['isi']   = $this->user_model->get_data_user();
        $data['sub_menu'] = 'daftar_user';
        $data['isi']      = $this->load->view('daftar_user', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    //fungsi ini digunakan untuk menampilkan form tambah user baru
    public function tambah_user()
    {
        
        $data['menu']      = 'user';
        $content['status'] = 'new';
        $data['sub_menu']  = 'tambah_user';
        $data['isi']       = $this->load->view('form_user', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk menambahkan data user kedalam database
    public function tambah()
    {
        
        $field_name              = 'fotouser';
        $config['upload_path']   = "img/user";
        $config['allowed_types'] = '*';
        $config['max_size']      = '10000';
        
        //$config['allowed_types'] ='jpg';
        
        //create folder
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777);
            //mkdir($config['upload_path2'], 0777);
        }
        
        $this->load->library('upload', $config);
        $files = $this->upload->do_upload($field_name);
        
        $data = $this->upload->data(); //get file_name
        
        if (!$files) {
            $file_name = 'default.jpg';
            $gagal     = $this->upload->display_errors();
        } else {
            $file_name = $data['file_name'];
        }
        
        $path[0] = 'img/user/' . $file_name;
        $path[1] = $file_name;
        //return $path;
        
        
        $data = array(
            'nama' => $this->input->post('user'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => $this->input->post('role'),
            'url_foto' => $path[0]
        );
        
        
        $this->user_model->insert($data);
        
        redirect('user');
        
        
    }
    //fungsi ini digunakan untuk melakukan pengubahan terhadap data user
    
    public function edit_user($id)
    {
        
        $data['menu']     = 'user';
        $data['sub_menu'] = 'tambah_user';
        
        $content['isi']    = $this->user_model->selectone($id);
        $content['status'] = 'edit';
        $data['isi']       = $this->load->view('form_user', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
    
    //fungsi ini digunakan untuk melakukan pengubahan data user yang ada di database
    
    public function update($id)
    {
        
        $field_name              = 'fotouser';
        $config['upload_path']   = "img/user";
        $config['allowed_types'] = '*';
        $config['max_size']      = '10000';
        
        //$config['allowed_types'] ='jpg';
        
        //create folder
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777);
            //mkdir($config['upload_path2'], 0777);
        }
        
        $this->load->library('upload', $config);
        $files = $this->upload->do_upload($field_name);
        
        $data = $this->upload->data(); //get file_name
        
        if (!$files) {
            $file_name = 'default.jpg';
            $gagal     = $this->upload->display_errors();
        } else {
            $file_name = $data['file_name'];
        }
        
        $path[0] = 'img/user/' . $file_name;
        $path[1] = $file_name;
        //return $path;
        
        
        $data = array(
            'nama' => $this->input->post('user'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => $this->input->post('role'),
            'url_foto' => $path[0]
        );
        
        
        $this->user_model->update($data, $id);
        
        redirect('user');
        
        
    }
    
    
    //fungsi ini digunakan untuk melakukan penghapusan terhadap data user
    
    public function delete($id)
    {
        $this->user_model->delete($id);
        $data['menu'] = 'user';
        
        $content['isi']    = $this->user_model->get_data_user();
        $content['delete'] = 'Data Berhasil Dihapus';
        $data['sub_menu']  = 'daftar_user';
        $data['isi']       = $this->load->view('daftar_user', $content, true); // null itu digunakan kalau tidak ada data, kalau ada data menggunkaan array yang nantinya datanya dipanggil di view
        
        $this->load->view('main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
