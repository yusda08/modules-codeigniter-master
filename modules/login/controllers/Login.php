<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    var $a;

    public function __construct() {
        parent::__construct();
        $this->a = aksesLog();
    }

    public function index() {
        if ($this->a) {
            redirect('backend/Home');
        } else {
            $this->load->view('form_login', TRUE);
        }
    }

    public function validasi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $url = $this->input->post('url');
        $row = $this->Model_Auth->validate_login($username, $password);
        if ($row) {
            $is_active = $row->is_active;
            if ($is_active == 1) {
                $data = array(
                    'kd_user' => $row->kd_user,
                    'username' => $row->username,
                    'password' => $row->password,
                    'nama_user' => $row->nama_user,
                    'foto' => $row->foto,
                    'kd_level' => $row->kd_level,
                    'last_login_dt' => $row->last_login_dt,
                    'last_login_tm' => $row->last_login_tm,
                    'ket_level' => $row->ket_level,
                    'email' => $row->email,
                    'no_telpon' => $row->no_telpon,
                    'is_login' => true
                );

                $this->session->set_userdata('is_logined', $data);
                $d['is_login'] = 1;
                $this->update('kd_user', $row->kd_user, 'user', $d);
                $ket = 'Login';
                $this->aktifitas($ket);
                echo "true";
            } else {
                echo "false";
            }
        } else {  //username atau password salah
            return false;
        }
    }

    function logout($kd_user) {
        $ket = 'Logout';
        $this->aktifitas($ket);
        $data['last_login_dt'] = date('Y-m-d');
        $data['last_login_tm'] = date('H:i:s');
        $data['is_login'] = 0;
        $this->update('kd_user', $kd_user, 'user', $data);
        $this->session->unset_userdata('is_logined');
        redirect('login');
    }

    function lock_screen($kd_user) {
        if ($this->a) {
            $ket = 'Lock Screen';
            $this->aktifitas($ket);
        }
        $data['is_login'] = 0;
        $this->update('kd_user', $kd_user, 'user', $data);
        $req['kd_user'] = $kd_user;
        $req['row_user'] = $this->Model_Auth->get_setUserWhereKd($kd_user);
        $this->session->unset_userdata('is_logined');
        $this->load->view('back/lock_screen', $req);
    }

}
