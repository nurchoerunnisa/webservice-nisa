<?php

namespace App\Controllers;

use App\Models\PetshopModel;

class petshop extends BaeController
{
    public function index()
    {...
    }
    
    //Function sederhana untuk menampilkan data array dalam format JSON
    public function showSimpleJson()
    {
        //Data array sederhana
        $data = [
            'id => 1',
            'nama' => 'safira'
            'no_telepon' => '08599999'
            'email' => 'safira@example.com'
        ];

    //Mengembalikan response dalam format JSON
    return $this->response->setJSON($data);
    }

    //Method untuk menampilkan data admin dalam bentuk JSON
    public function getPetshopDataJson()
    {
        //Memanggil model PetshopModel
        $petshopModel = new PetshopModel();

        //Mengambil data dari tabel petshop
        $petshops = $petshopModel->getPetshopData();

        //Memanggil data dalam format JSON
        return $this->response->setJSON($petshop);
    }


}