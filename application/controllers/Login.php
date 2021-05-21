<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('M_admin', 'model');
        $this->load->model('M_model', 'models');
    }
    public function index($data = null)
    {
        $data = [
            'data' => $data
        ];
        $this->pages('login/login', $data);
    }

    public function login()
    {
        $run = false;
        $email = $this->input->post('email');
        $pass = md5($this->input->post('pass'));
        $akun = $this->model->cek_akun($email, $pass);
        if ($akun->num_rows() != 0) {
            foreach ($akun->result() as $a) {
                $em = $a->email;
            }
            foreach ($akun->result() as $p) {
                $pa = $p->pass;
            }
            foreach ($akun->result() as $id) {
                $sek = $id->id;
            }
            foreach ($akun->result() as $na) {
                $veri = $na->verified_at;
            }

            if (($email == $em) && ($pass == $pa)) {

                $run = true;
            }
        }

        if ($run == true) {
            if (isset($veri)) {
                $data = [
                    'email' => $em,
                    'user' => $sek,
                    'token' => md5($sek . date('H:i:s')),
                    'status' => 'login'
                ];
                $this->model->add('keys', $data);
                $data_session = $this->model->token($data['token']);
                $this->session->set_userdata($data_session[0]);
                echo "<pre>";
                var_dump($data_session);
                echo "</pre>";
                echo PHP_EOL . PHP_EOL;
                echo $this->session->userdata('status');
                // die();
                redirect(base_url());
                // echo "masuk";
            } else {
                $data = "<div class='container text-center'>
            <span class='text-danger'>
                Email belum ter-verifikasi
            </span>
        </div>";
                $this->index($data);
            }
        } else {
            $data = "<div class='container text-center'>
            <span class='text-danger'>
                Email atau Password salah!
            </span>
        </div>";
            $this->index($data);
        }
    }

    public function forgotPass($mess = null)
    {
        $data = [
            'data' => $mess
        ];
        $this->pages('login/forgotPass', $data);
    }

    public function forgotAct()
    {
        $email = $this->input->post('email');
        $data = $this->models->cekemail($email);
        if ($data) {
            $mess = "<div class='container text-center'>
            <span class='text-secondary'>
                Periksa Email Anda
            </span>
        </div>";
            $this->forgotPass($mess);
            $this->kirimEmail(($mess));
        } else {
            $mess = "<div class='container text-center'>
            <span class='text-danger'>
                Email Anda Belum Terdaftar
            </span>
        </div>";
            $this->forgotPass($mess);
        }
    }

    public function updatePass($id, $mess = null)
    {
        $data = ['data' => $id, 'mess' => $mess,];
        $this->pages('login/updatePass', $data);
    }

    public function updateAct()
    {
        $config = array(

            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                )
            ),
            array(
                'field' => 'repass',
                'label' => 'Re-Entry Password',
                'rules' => 'required|matches[pass]'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->updatePass($this->input->post('email'));
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'pass' => md5($this->input->post('pass'))
            ];
            $this->models->updatePass('akun', $data['pass'], $data['email']);
            $message = "<div class='container text-center text-info'>
            <span class='text-success'>
                resset password berhasil
            </span>
        </div>";
            $this->updatePass($data['email'], $message);
        }
    }
    public function kirimEmail($data)
    {
        $this->models->kirimEmail($data);
    }

    public function logout()
    {
        $token = $this->session->userdata('token');
        $this->model->destroy($token);
        $this->session->sess_destroy();
    }

    public function pages($view, $data = true)
    {
        $this->load->view('login/header');
        $this->load->view($view, $data);
        $this->load->view('login/footer');
    }
}
