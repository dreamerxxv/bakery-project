<?php

class M_barang extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function tambah_barang($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit($where,$table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_barang');
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

    public function find($id)
    {
        $result = $this->db->where('id', $id)
                           ->limit(1)
                           ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
    
    public function detail_brg($id)
    {
        $result = $this->db->where('id',$id)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}
?>