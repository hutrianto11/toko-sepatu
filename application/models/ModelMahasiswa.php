<?php
class ModelMahasiswa extends CI_Model
{
    public $merk, $harga_sepatu;

    public function getBiaya($prodi = null)
    {
        $this->merk = $prodi;
        if ($this->merk == "Nike") {
            $this->harga_sepatu = 375000;
        } elseif ($this->merk == "Adidas") {
            $this->harga_sepatu = 3000000;
        } elseif ($this->merk == "Kicker") {
            $this->harga_sepatu = 250000;
        } elseif ($this->merk == "Eiger") {
            $this->harga_sepatu = 275000;
        } elseif ($this->merk == "Bucherri") {
            $this->harga_sepatu = 400000;
        }


        return $this->harga_sepatu;
    }
}
