<?php
class Mahasiswa extends CI_Controller {
	public function index() {
		$data = array('title' => 'Daftar Mahasiswa');
		$this->load->view('view_header', $data);

		$this->load->model('Mahasiswamodel', '', TRUE);
		$data = array('list' => $this->Mahasiswamodel->getMahasiswaList());
		$this->load->view('view_mahasiswalist', $data);

		$this->load->view('view_footer');
	}
	public function add() {
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		
		$data = array('title' => 'Tambah Mahasiswa');
		$this->load->view('view_header', $data);

		$this->load->model('Mahasiswamodel', '', TRUE);
		$this->Mahasiswamodel->addMahasiswa($npm, $nama);
		$data = array('message' => "Mahasiswa dengan NPM $npm telah telah ditambahkan");
		$this->load->view('view_message', $data);

		$this->load->view('view_footer');
	}
	public function view($npm) {
		$data = array('title' => 'Detail Mahasiswa');
		$this->load->view('view_header', $data);

		$this->load->model('Mahasiswamodel', '', TRUE);
		$data = array('mahasiswa' => $this->Mahasiswamodel->getMahasiswaDetail($npm));
		$this->load->view('view_mahasiswadetail', $data);

		$this->load->view('view_footer');		
	}
	public function delete($npm) {
		$data = array('title' => 'Hapus Mahasiswa');
		$this->load->view('view_header', $data);

		$this->load->model('Mahasiswamodel', '', TRUE);
		$this->Mahasiswamodel->deleteMahasiswa($npm);
		$data = array('message' => "Mahasiswa dengan NPM $npm telah terhapus");
		$this->load->view('view_message', $data);

		$this->load->view('view_footer');
	}
}
?>