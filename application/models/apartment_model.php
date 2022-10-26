<?php

class apartment_model extends CI_model{

  public function id_apartment(){
    $this->db->select('RIGHT(apartment.id_apartment, 3) as code', FALSE);
    $this->db->order_by('id_apartment', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('apartment');

    if($query->num_rows() > 0){
      $data = $query->row();
      $code = intval($data->code) + 1;
    }
    else{
      $code = 1;
    }

    $codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
    $coderesult = "AG" . $codemax;
    return $coderesult;
  }

  public function edit($id){
    $this->db->where('id_apartment', $id);
    return $this->db->get('apartment')->row_array();
  }

  public function update($id_apartment, $data){
    $this->db->where('id_apartment', $id_apartment);
    $this->db->update('apartment', $data);
  }

  public function delete($id){
    $this->db->where('id_apartment', $id);
    $this->db->delete('apartment');
  }





}
