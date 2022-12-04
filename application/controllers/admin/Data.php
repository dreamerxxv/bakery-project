<?php

class Data extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
           $this->session->set_flashdata('Can not be Reached');
           redirect('auth/login');
        }
    }

    public function index()
    {
        $data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];

        if($gambar = ''){
    
        }else{
            $config ['upload_path']   = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if( ! $this->upload->do_upload('gambar')){
                echo "Gambar Gagal diupload";
            }else{
                $gambar  = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'   => $nama_brg,
            'keterangan' => $keterangan,
            'kategori'   => $kategori,
            'harga'      => $harga,
            'stok'       => $stok,
            'gambar'     => $gambar,
        );

        $this->m_barang->tambah_barang($data, 'tb_barang');
        redirect('admin/data/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['barang'] = $this->m_barang->edit($where, 'tb_barang')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id         = $this->input->post('id');
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');

        $data = array(
            'nama_brg'   => $nama_brg,
            'keterangan' => $keterangan,
            'kategori'   => $kategori,
            'harga'      => $harga,
            'stok'       => $stok,
        );

        $where  = array(
            'id' => $id
        );

        $this->m_barang->update($where,$data,'tb_barang');
        redirect('admin/data/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_barang->hapus($where, 'tb_barang');
        redirect('admin/data/index');
    }
}
?>