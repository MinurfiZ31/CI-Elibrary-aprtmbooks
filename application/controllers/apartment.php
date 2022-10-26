<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class apartment extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('apartment_model');
  }

  public function index(){
    $data['content'] = 'apartment/apartment';
    $data['title'] = 'Daftar Data Apartment';
    $data['apartment'] = $this->db->get('apartment')->result();

    $this->load->view('dashboard', $data);
  }
  
  public function tambahapartment(){
    $data['content'] = 'apartment/tambah_apartment';
    $data['title'] = 'Form Tambah apartment';
    $data['id_apartment'] = $this->apartment_model->id_apartment();

    $this->load->view('dashboard', $data);
  }

  public function simpan(){
    $data = array(
      'id_apartment'    => $this->input->post('id_apartment'),
      'nama_apartment'  => $this->input->post('nama_apartment'),
      'alamat'        => $this->input->post('alamat'),
      'no_telp'       => $this->input->post('no_telepon'),
    );
    $query = $this->db->insert('apartment', $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil disimpan');
      redirect('apartment');
    }
  }

  public function edit($id){
    $data['content'] = 'apartment/edit_apartment';
    $data['title'] = 'Form Edit apartment';
    $data['apartment'] = $this->apartment_model->edit($id);

    $this->load->view('dashboard', $data);
  }

  public function update(){
    $id_apartment = $this->input->post('id_apartment');
    $data = array(
      'id_apartment'    => $this->input->post('id_apartment'),
      'nama_apartment'  => $this->input->post('nama_apartment'),
      'alamat'        => $this->input->post('alamat'),
      'no_telp'       => $this->input->post('no_telepon'),
    );

    $query = $this->apartment_model->update($id_apartment, $data);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil di-update');
      redirect('apartment');
    }
  }

  public function delete($id){
    $query = $this->apartment_model->delete($id);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil dihapus');
      redirect('apartment');
    }
  }


}