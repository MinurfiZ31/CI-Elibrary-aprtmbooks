<?php

class Peminjaman_model extends CI_model{

  public function id_pm(){
    $this->db->select('RIGHT(peminjaman.id_pm, 3) as code', FALSE);
    $this->db->order_by('id_pm', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('peminjaman');

    if($query->num_rows() > 0){
      $data = $query->row();
      $code = intval($data->code) + 1;
    }
    else{
      $code = 1;
    }

    $codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
    $coderesult = "PM" . $codemax;
    return $coderesult;
  }

  public function get_data_peminjaman(){
    $this->db->select('peminjaman.*, apartment.nama_apartment as nama_apartment, buku.judul_buku as judul_buku');
    $this->db->from('peminjaman');
    $this->db->join('apartment', 'apartment.id_apartment = peminjaman.id_apartment');
    $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
    // $this->db->order_by('id_pm', 'DESC');
    $result = $this->db->get();
    return $result;
  }

  public function get_data_by_id($id){
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('apartment', 'apartment.id_apartment = peminjaman.id_apartment');
    $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
    $this->db->where('peminjaman.id_pm', $id);
    return $this->db->get()->row_array();
  }

  public function delete($id){
    $this->db->where('id_pm', $id);
    $this->db->delete('peminjaman');
  }




}