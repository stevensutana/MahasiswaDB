<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index() {
        $this->load->model('MahasiswaModel');
        $data['mahasiswa_list'] = $this->MahasiswaModel->get_mahasiswa_list();
        $this->load->view('mahasiswa/list', $data);
    }

    public function add() {
        $this->load->model('MahasiswaModel');
        $data = array(
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama')
        );
        $this->MahasiswaModel->add_mahasiswa($data);
        $this->load->helper('url');
        redirect('/mahasiswa', 'location');
    }

    public function view($npm) {
        $this->load->model('MahasiswaModel');
        $data['mahasiswa'] = $this->MahasiswaModel->get_mahasiswa($npm);
        $this->load->view('mahasiswa/view', $data);
    }
    
    public function delete($npm) {
        $this->load->model('MahasiswaModel');
        $this->MahasiswaModel->delete_mahasiswa($npm);
        $this->load->helper('url');        
        redirect('/mahasiswa', 'location');
    }

}