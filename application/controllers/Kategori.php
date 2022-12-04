<?php

class Kategori extends CI_Controller{
    public function bread()
    {
        $data['bread'] = $this->m_kategori->data_bread()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bread',$data);
        $this->load->view('templates/footer');
    }

    public function doughnuts()
    {
        $data['doughnuts'] = $this->m_kategori->data_doughnuts()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('doughnuts',$data);
        $this->load->view('templates/footer');
    }

    public function pastry()
    {
        $data['pastry'] = $this->m_kategori->data_pastry()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pastry',$data);
        $this->load->view('templates/footer');
    }

    public function cookies()
    {
        $data['cookies'] = $this->m_kategori->data_cookies()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cookies',$data);
        $this->load->view('templates/footer');
    }

    public function pudding()
    {
        $data['pudding'] = $this->m_kategori->data_pudding()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pudding',$data);
        $this->load->view('templates/footer');
    }
}
?>