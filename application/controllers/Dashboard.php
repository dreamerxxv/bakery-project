<?php 

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function keranjang($id)
    {
        $barang = $this->m_barang->find($id);

        $data = array(
            'id'    => $barang->id,
            'qty'   => 1,
            'price' => $barang->harga,
            'name'  => $barang->nama_brg
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_cart()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_cart()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_buy()
    {
        $is_processed = $this->m_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('buy');
            $this->load->view('templates/footer');
        }else{
            echo "Your Check Out is Error!";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->m_barang->detail_brg($id_brg);
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}

?>