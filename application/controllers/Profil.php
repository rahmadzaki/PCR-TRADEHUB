<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model('User_model','userrole');
       
	}
    function index()
	{
        $data['judul'] = "Profil"; 
        $data['user'] = $this->userrole->getBy(); 
        $this->load->view("layout/header", $data); 
        $this->load->view("profil/vw_profil", $data); 
        $this->load->view("layout/footer", $data); 
    }
}