<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model', 'model');
        $this->load->model('M_admin', 'models');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function addAkun($mes = null)
    {
        $data = [
            'data' => $mes
        ];
        $this->pages('login/addAkun', $data);
    }

    public function addAct()
    {
        $config = array(
            array(
                'field' => 'user',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'emai',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'nohp',
                'label' => 'NO HP',
                'rules' => 'required|numeric'
            ),
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
            $this->addAkun();
        } else {
            $data = [
                'username' => $this->input->post('user'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('nohp'),
                'pass' => md5($this->input->post('pass'))
            ];
            $cek = $this->model->veriEmail($data['email'], $data['username'], $data['no_hp']);
            if ($cek) {
                $message = "<div class='container text-center'>
                <span class='text-success'>
                silahkan hubungi admin untuk proses verifikasi
                </span>
                </div>";
                $this->models->add('akun', $data);
                $this->addAkun($message);
            } else {
                $message = "<div class='container text-center'>
                <span class='text-success'>
                mohon periksa kembali email yang anda gunakan
                </span>
                </div>";
                $this->addAkun($message);
            }
        }
    }

    public function updateAkun($name, $hp)
    {
        $this->model->updateAkun($name, $hp);
        $this->load->view('conten/verifi');
    }

    public function pages($view, $data = true)
    {
        $this->load->view('login/header');
        $this->load->view($view, $data);
        $this->load->view('login/footer');
    }
}
