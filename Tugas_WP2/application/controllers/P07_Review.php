<?php 
class P07_Review extends CI_Controller 
{ 
 
    public function index() 
    { 
 
        $this->load->view('Form-Input-Sepatu'); 
    } 
 
    public function cetak() 
    { 
        $data = [ 
            'nama' => $this->input->post('nama'), 
            'nhp' => $this->input->post('nhp'), 
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga')
        ];
        if ($this->input->post('merk') == "Adidas"){
            $data['harga'] = 300000;
        }elseif ($this->input->post('merk') == "Nike"){
            $data['harga'] = 375000;
        }elseif ($this->input->post('merk') == "Kickers"){
            $data['harga'] = 250000;
        }elseif ($this->input->post('merk') == "Eiger"){
            $data['harga'] = 275000;
        }elseif ($this->input->post('merk') == "Nike"){
            $data['harga'] = 375000;
        }else{
            $data['harga'] = 400000;
        }
 
        $this->load->view('Form-Output-Sepatu', $data);
    } 
}