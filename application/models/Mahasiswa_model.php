<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function getMahasiswa()
	{
		$mahasiswa = $this->db->get('mahasiswa')->result_array();
		echo json_encode($mahasiswa);
	}

	public function createMahasiswa()
	{
		$data = [
      'nama'	=> $this->input->post('nama'),
      'email'	=> $this->input->post('email'),
      'telp'	=> $this->input->post('telp'),
      'kota'	=> $this->input->post('kota')
    ];

    $input = $this->db->insert('mahasiswa', $data);

    if ($input) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['Msg'=>'Some Error occured!.']);
		}
	}

	public function updateMahasiswa($id)
	{
		$data = [
      'nama'	=> $this->input->post('nama'),
      'email'	=> $this->input->post('email'),
      'telp'	=> $this->input->post('telp'),
      'kota'	=> $this->input->post('kota'),
    ];

    $this->db->set($data);
    $this->db->where('id', $id);
    $update = $this->db->update('mahasiswa');

    if ($update) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['Msg'=>'Some Error occured!.']);
		}
	}

	public function deleteMahasiswa($id) {
		$this->db->where('id', $id);
		$delete = $this->db->delete('mahasiswa');

		if ($delete) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['Msg'=>'Some Error occured!.']);
		}
	}

}