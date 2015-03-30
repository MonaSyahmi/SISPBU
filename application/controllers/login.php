<?php


 /**
     * Ini merupakan Sebuah controller untuk menghubungkan view login dan model login
     * Semua CRUD yang berhubungan dengan login memanggil controller ini
     * Created by Mukhamad Faiz Fanani dan Idam Pradana Mahmudah (Jurusan Sistem Informasi ITS)
	 * V.1.0
     */
	 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user_model');

    }

    function index()
    {
        $this->load->view('login');
    }

    function auth_false()
    {
        $this->load->view('login_salah');
    }

	
	//fungsi ini diguakan untuk melakukan autentifikasi user yang akan melakukan login
    function auth()
    {
        $this->session->sess_destroy();
        $valid = false;
        $users = $this->user_model->get_user();

        $name = $this->input->post('username');
        $password = $this->input->post('password');

        //kondisi pengecekan apakah username dan password yang dimasukkan telah sesuai dengan benar atau tidak
        foreach ($users->result() as $row) {
            if ($name == $row->username && md5($password) == $row->password) {
                $valid = true;
				//mengcreate session baru
				$this->session->sess_create();

                //setting session terhadap data user
                $newdata = array(
                    'username' => $name,
                    'password' => $password,
					'foto' => $row->url_foto,
                    'id_user' => $row->id_user,
					'nama' => $row->nama);
                $this->session->set_userdata($newdata);
				
                break;
            }
        } //end foreach
        //apabila login telah sesuai dengan username dan password maka user akan masuk halaman utama
        if ($valid) {

    redirect('dashboard');
        }
        //apabila login tidak sesuai dengan username dan password maka user akan masuk halaman login
        else {
            redirect('login/auth_false');
        }
    }

    //end if
//fungsi ini digunakan  untuk melakukan logout
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file deabakery.php */
/* Location: ./application/controllers/deabakery.php */
