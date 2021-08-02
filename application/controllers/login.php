<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        //echo "ini".$this->session->userdata('status');

        if ($this->session->userdata('status') == 'login') {
            redirect(base_url("admin"));
        } else {
            $this->load->view('v_login');
        }
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("login", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            //echo "INI".$this->session;
            redirect(base_url("admin"));
        } else {
            echo "username dan password salah!";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function home()
    {
        $this->load->view('home');
    }
    function menu()
    {
        $this->load->view('menu');
    }
    function meja()
    {
        $this->load->view('meja');
    }

    function transaksi()
    {
        $this->load->view('pesanan');
    }
    function insertmeja()
    {
        $nama = $this->input->post('nama');
        $data = array(

            'nama_meja' => $nama,

        );
        $chek = $this->m_login->insertmeja($data);

        if ($chek > 0) {
            redirect(base_url("login/meja"));
        } else {
            redirect(base_url("login/meja"));
        }
    }
    // function editmeja()
    // {
    //     if (isset($_POST['Hapus'])) {
    //         $data = [
    //             'id_meja' => $_POST['id']
    //         ];
    //         if ($this->m_login->deletemeja($data)) {
    //             redirect(base_url("login"));
    //         } else {
    //             redirect(base_url("login"));
    //             die;
    //         }
    //     } else {
    //         redirect(base_url("login"));
    //         die;
    //     }
    // }


    function insertmenu()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');
        $data = array(

            'nama_menu' => $nama,
            'harga' => $harga,
            'kategori' => $kategori,

        );
        $chek = $this->m_login->insertmenu($data);

        if ($chek > 0) {
            redirect(base_url('login/menu'));
        } else {
            redirect(base_url('login/menu'));
        }
    }
    // function editmenu()
    // {
    //     if (isset($_POST['Hapus'])) {
    //         $data = [
    //             'id_menu' => $_POST['id']
    //         ];
    //         if ($this->m_login->deletemenu($data)) {
    //             redirect(base_url("login"));
    //         } else {
    //             redirect(base_url("login"));
    //             die;
    //         }
    //         if (isset($_POST['Update'])) {
    //         }
    //     } else {
    //         redirect(base_url("login"));
    //         die;
    //     }
    // }

    public function edit($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $data['menu'] = $this->m_login->edit_data($where, 'menu')->result();
        // var_dump($data);
        // die;

        $this->load->view('edit_menu', $data);
    }
    public function hapus($id_menu)
    {
        $this->m_login->hapus_menu($id_menu);
        redirect('login/menu');
    }


    public function update()
    {
        $id_menu = $this->input->post('id_menu');
        $nama_menu = $this->input->post('nama_menu');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');



        $data = array(

            'nama_menu'        => $nama_menu,
            'harga'              => $harga,
            'kategori'       => $kategori
        );

        $where = array(
            'id_menu'  => $id_menu

        );
        // var_dump($where);
        // die;
        $this->m_login->update_data($where, $data, 'menu');
        redirect('login/menu');
    }

    public function editmeja($id_meja)
    {
        $where = array('id_meja' => $id_meja);
        $data['meja'] = $this->m_login->edit_datameja($where, 'meja')->result();
        // var_dump($data);
        // die;

        $this->load->view('edit_meja', $data);
    }

    public function hapusmeja($id_meja)
    {
        $this->m_login->hapus_meja($id_meja);
        redirect('login/meja');
    }


    public function updatemeja()
    {
        $id_meja = $this->input->post('id_meja');
        $nama_meja = $this->input->post('nama_meja');




        $data = array(

            'nama_meja'        => $nama_meja

        );
        $where = array(
            'id_meja'  => $id_meja

        );
        // var_dump($where);
        // die;
        $this->m_login->update_datameja($where, $data, 'meja');
        redirect('login/meja');
    }

    function insertTransaksi()
    {
        $namaCus = $this->input->post('nama_customer');
        $nama = $this->input->post('nama_pesanan');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $total = $this->input->post('total_harga');
        $data = array(
            'nama_customer' => $namaCus,
            'nama_pesanan' => $nama,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'total_harga' => $total,

        );
        $chek = $this->m_login->insert_datatransaksi($data);

        if ($chek > 0) {
            redirect(base_url('login/transaksi'));
        } else {
            redirect(base_url('login/transaksi'));
        }
    }
    public function editTransaksi($id_pesanan)
    {
        $where = array('id_pesanan' => $id_pesanan);
        $data['transaksi'] = $this->m_login->edit_datatransaksi($where, 'transaksi')->result();
        // var_dump($data);
        // die;

        $this->load->view('pesanan', $data);
    }

    public function hapusTransaksi($id_pesanan)
    {
        $this->m_login->hapus_transaksi($id_pesanan);
        redirect('login/transaksi');
    }
}
