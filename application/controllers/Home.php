<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    public function index()
    {
        $data['judul'] = "Lihat Apa yang sedang dijual";
        $this->load->view("layout/header");
        $data['home'] = $this->Home_model->get();
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
   // application/controllers/Home.php

public function detail($id)
{
    $data['judul'] = "Detail Barang";
    $data['detail_barang'] = $this->Home_model->getDetail($id); // Sesuaikan dengan metode yang sesuai di model
    $this->load->view("layout/header");
    $this->load->view("home/detail", $data); // Buat file vw_detail_produk.php
    $this->load->view("layout/footer");
}


}