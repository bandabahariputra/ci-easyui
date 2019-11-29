<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model', 'mahasiswa');
	}

	public function index()
	{
		$data['title'] = 'Mahasiswa';
		$this->load->view('mahasiswa/index', $data);
	}

	public function getMahasiswa()
	{
		$this->mahasiswa->getMahasiswa();
	}

	public function createMahasiswa()
	{
		$this->mahasiswa->createMahasiswa();
	}

	public function updateMahasiswa($id)
	{
		$this->mahasiswa->updateMahasiswa($id);
	}

	public function deleteMahasiswa()
	{
		$id = intval($_REQUEST['id']);
		$this->mahasiswa->deleteMahasiswa($id);
	}

}