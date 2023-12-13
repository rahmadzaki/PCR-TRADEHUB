<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }
    public function index()
    {
        $data['judul'] = "Home Page";
        $this->load->view("layout/header");
        $this->load->view("home/vw_home", $data);
        $this->load->view("layout/footer");
    }
    // public function tambah()
    // {
    //     $data['judul'] = "Ayo Promosikan Barang mu Sekarang";
    //     $this->load->view("layout/header");
    //     $this->load->view("home/vw_tambah", $data);
    //     $this->load->view("layout/footer");
    // }
    // function upload()
    // {
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'harga' => $this->input->post('harga'),
    //         'gambar' => $this->input->post('gambar'),
    //         'detail' => $this->input->post('nama'),
    //     ];
    //     $this->Home_model->insert($data);
    //     redirect('Home');
    // }
}