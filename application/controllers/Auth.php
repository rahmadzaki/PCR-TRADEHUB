<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }
    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Admin');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Please enter a valid email',
            'required' => 'Please enter your email'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Please enter your password'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view('auth/login');
            $this->load->view("layout/auth_footer");
        } else {
            $this->cek_login();
        }
    }
//     function register()
// {
//     if ($this->session->userdata('email')) {
//         redirect('Admin');
//     }

//     $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
//     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
//         'is_unique' => 'This email is already registered',
//         'valid_email' => 'Please enter a valid email',
//         'required' => 'Please enter your email'
//     ]);
//     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password2]', [
//         'matches' => 'Re-enter the correct password',
//         'min_length' => 'Password is too short',
//         'required' => 'Please enter your password'
//     ]);
//     $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password]');
//     $this->form_validation->set_rules('gambar', 'Image', 'callback_validate_image_upload');

//     if ($this->form_validation->run() == false) {
//         $data['title'] = 'Registration';
//         $this->load->view("layout/auth_header");
//         $this->load->view('auth/register', $data);
//         $this->load->view("layout/auth_footer");
//     } else {
//         $config['upload_path'] = './foto_profil/';
//         $config['allowed_types'] = 'gif|jpg|jpeg|png';
//         $config['max_size'] = 2048; // in kilobytes

//         $this->load->library('upload', $config);

//         if ($this->upload->do_upload('gambar')) {
//             $data = [
//                 'nama' => htmlspecialchars($this->input->post('nama', true)),
//                 'email' => htmlspecialchars($this->input->post('email', true)),
//                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
//                 'gambar' => $this->upload->data('file_name'), // Ambil nama file setelah upload
//                 'role' => 'User',
//             ];

//             $this->userrole->insert($data);

//             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
//             redirect('Auth');
//         } else {
//             // Jika upload gagal, tampilkan pesan kesalahan upload gambar
//             $data['title'] = 'Registration';
//             $data['upload_error'] = $this->upload->display_errors();
//             $this->load->view("layout/auth_header");
//             $this->load->view('auth/register', $data);
//             $this->load->view("layout/auth_footer");
//         }
//     }
// }

    function register()
    {
        if ($this->session->userdata('email')) {
            redirect('Admin');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Re-enter the correct password',
            'min_length' => 'Password is too short',
            'required' => 'Please enter your password'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]',);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view("layout/auth_header");
            $this->load->view('auth/register', $data);
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'User'
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
        redirect('Auth');
        }
    }
    public function validate_image_upload($gambar)
    {
        // Cek apakah ada file yang diunggah
        if (!empty($_FILES['gambar']['name'])) {
            // Validasi gambar di sini
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

            $file_extension = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);

            if (!in_array($file_extension, $allowed_types)) {
                $this->form_validation->set_message('validate_image_upload', 'Please upload a valid image file.');
                return false; // File yang diunggah bukan file gambar yang valid
            }
        }

        return true; // File gambar valid atau tidak ada file yang diunggah
    }


    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('Admin');
                } else {
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Email tidak terdaftar!</div>');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}