<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutorial extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth'); // Redirect ke halaman login jika tidak ada session email
        }
        $data['title'] = 'Tutorial';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tutorial/index', $data);
        $this->load->view('templates/footer');
    }
}
