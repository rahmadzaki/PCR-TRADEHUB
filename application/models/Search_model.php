<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model
{
    public function searchData($keyword)
    {
        // Lakukan logika pencarian pada database
        // Contoh: Ambil data dari tabel 'your_table' berdasarkan kolom 'your_column'
        $this->db->like('nama', $keyword);
        $query = $this->db->get('postingan'); // Gantilah 'your_table' dengan nama tabel Anda

        return $query->result_array();
    }
}
