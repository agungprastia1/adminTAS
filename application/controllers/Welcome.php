<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model('M_model', 'model');
		$this->load->model('M_admin', 'models');
	}
	public function index()
	{
		$data = [
			'user' => $this->models->admin($this->session->userdata('user')),
			'data' => $this->model->getUser(),
			'title' => 'Verifikasi User'
		];
		$this->pages('conten/dasboard', $data);
	}

	public function verifiEmail($id)
	{
		$this->model->verifiAkun($id);
		$data = [
			'data' => $this->model->getUser(),
			'title' => 'Verifikasi User'
		];
		$this->pages('conten/dasboard', $data);
	}

	public function akunverifi()
	{
		$data = [
			'data' => $this->model->akunverifi(),
			'title' => 'user Terverifikasi'
		];
		$this->pages('conten/email', $data);
	}
	public function pages($views, $data = null)
	{
		$this->load->view('header', $data);
		$this->load->view('conten/menu');
		$this->load->view($views, $data);
		$this->load->view('footer');
	}
}
