<!-- Harel Surya Darma -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Home Page";
        $this->load->view("layout/header");
        $this->load->view("home/vw_home", $data);
        $this->load->view("layout/footer");
    }
    
}