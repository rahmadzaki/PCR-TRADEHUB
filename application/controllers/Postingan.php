<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        $config['max_size'] = 2048;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal meng-upload Gambar!";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama = $this->input->post('nama', TRUE);
            $harga = $this->input->post('harga', TRUE);
            $detail = $this->input->post('detail', TRUE);

            $data = array(
                'nama' => $nama,
                'harga' => $harga,
                'gambar' => $gambar,
                'detail' => $detail,
            );
            $this->db->insert('postingan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
            Barang Berhasil Diposting!</div>');
            redirect('Postingan');

        }
    }
    function hapus($id)
    {
        $this->Postingan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
        Postingan Berhasil Dihapus!</div>');
        redirect('Postingan');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Barang";
        $data['detail_barang'] = $this->Home_model->getDetail($id); // Sesuaikan dengan metode yang sesuai di model
        $this->load->view("layout/header");
        $this->load->view("postingan/vw_detail", $data); // Buat file vw_detail_produk.php
        $this->load->view("layout/footer");
    }

}