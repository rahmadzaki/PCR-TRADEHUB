<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function index()
    {
        $keyword = urldecode($this->input->get('q'));

        // Lakukan logika pencarian sesuai dengan kebutuhan Anda
        // Contoh: Ambil data dari database berdasarkan keyword
        $this->load->model('Search_model'); // Gantilah 'Your_model' dengan nama model Anda
        $data['search_results'] = $this->Search_model->searchData($keyword);

        $data['keyword'] = $keyword;

        $this->load->view('layout/header');
        $this->load->view('home/search_results', $data);
        $this->load->view('layout/footer');
    }
}
