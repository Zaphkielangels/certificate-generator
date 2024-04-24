<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth
{
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('session');
    }

    public function check_login()
    {
        if (!$this->CI->session->userdata('email')) {
            redirect('auth'); // Redirect ke halaman login jika tidak ada session email
        }
    }
}
