<?php

class M_login extends CI_Model
{
    private $table = "menu";
    private $tables = "meja";
    private $tablec = "transaksi";
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function getdata($table)
    {
        return  $this->db->get($table);
    }
    function insertmenu($data)
    {
        return  $this->db->insert($this->table, $data);
    }

    function deletemenu($data)
    {
        return  $this->db->delete($this->table, $data);
    }


    function insertmeja($data)
    {
        return  $this->db->insert($this->tables, $data);
    }

    function deletemeja($data)
    {
        return  $this->db->delete($this->tables, $data);
    }


    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function hapus_menu($id_menu)
    {
        $this->db->where('id_menu', $id_menu);
        $this->db->delete('menu');
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    public function edit_datameja($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function hapus_meja($id_meja)
    {
        $this->db->where('id_meja', $id_meja);
        $this->db->delete('meja');
    }

    public function update_datameja($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    public function edit_datatransaksi($where, $tablec)
    {
        return $this->db->get_where($tablec, $where);
    }
    public function hapus_transaksi($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->delete('transaksi');
    }

    public function update_datatransaksi($where, $data, $tablec)
    {
        $this->db->where($where);
        $this->db->update($tablec, $data);
    }

    function insert_datatransaksi($data)
    {
        return  $this->db->insert($this->tablec, $data);
    }
}
