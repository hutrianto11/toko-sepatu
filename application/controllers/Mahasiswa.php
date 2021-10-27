<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->load->view('FormInput');
    }

    public function proses()
    {
        $this->load->model(['ModelMahasiswa']);
        $data = [
            'nama' => $this->input->post('nama'),
            'no hp' => $this->input->post('no hp'),
            'merk' => $this->input->post('merk'),
            'harga_sepatu' => $this->ModelMahasiswa->getBiaya($this->input->post('merk'))
        ];

        $this->load->view('FormOutout', $data);
    }
}
