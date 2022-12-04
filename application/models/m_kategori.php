<?php

class M_kategori extends CI_Model{

    public function data_bread()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'bread'));
    }

    public function data_doughnuts()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'doughnuts'));
    }

    public function data_pastry()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'pastry'));
    }

    public function data_cookies()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'cookies'));
    }

    public function data_pudding()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'pudding'));
    }
}
?>