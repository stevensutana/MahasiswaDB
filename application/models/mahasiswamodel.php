<?php

class MahasiswaModel extends CI_Model {

    var $npm     = '';
    var $nama    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_mahasiswa_list()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function get_mahasiswa($npm)
    {
        $query = $this->db->get_where('mahasiswa', array('npm' => $npm));
        return $query->row();
    }    
    
    function add_mahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
    
    function delete_mahasiswa($npm)
    {
        $this->db->delete('mahasiswa', array('npm' => $npm));
    }
}
?>