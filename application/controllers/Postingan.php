<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Postingan_model');
    }
    public function index()
    {
        $data['judul'] = "Lihat Postingan anda";
        $this->load->view("layout/header");
        $data['postingan'] = $this->Postingan_model->get();
        $this->load->view("postingan/vw_postingan", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Promosikan Barang anda Sekarang!";
        $this->load->view("layout/header");
        $this->load->view("postingan/vw_tambah", $data);
        $this->load->view("layout/footer");
    }
    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'detail' => $this->input->post('detail'),
        ];
        $this->Postingan_model->insert($data);
        redirect('Postingan');
    }
}