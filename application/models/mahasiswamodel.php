<?php
class Mahasiswamodel extends CI_Model {
	public function getMahasiswaList() {
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}
	
	public function deleteMahasiswa($npm) {
		$this->db->delete('mahasiswa', array('npm' => $npm));
	}
	
	public function getMahasiswaDetail($npm) {
		$query = $this->db->get_where('mahasiswa', array('npm' => $npm));
		$result = $query->result();
		return $result[0];
	}
	
	public function addMahasiswa($npm, $nama) {
		$data = array(
			'npm' => $npm,
			'nama' => $nama
		);
		$this->db->insert('mahasiswa', $data);
	}
}
?>