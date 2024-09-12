<?php

namespace App\Models;

use CodeIgniter\Model;

class petshopModel extend Model
{
    protected $table = 'tb_petshop'
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama', 'no_telepon', 'alamat'];

    //Method untuk mengambil data admin 
    public function getPetshopData()
    {
        //Mengambil semua data dari tabel tb_petshop
        return $this->findAll();
    }

    //Method untuk mengambil data petshop berdasarkan id
    public function getPetshopData($id)
    {
        //Mengambil data admin berdasarkan id
        return $this->find($id);
    }

    //Method untuk menyimpan data baru atau memperbarui data yang sudah ada
    public function savePetshopData ($data)
    {
        //Menyompan data baru atau memperbarui data yang ada jika primary key sudah ada
        return $this->save($data);
    }

    //method untuk memperbarui data admin berdasarkan id
    public function updatePetshopData($id, $data)
    {
        //Menggunakan method update() daei codeIgniter model untuk mengupdate data
        return $this->update($id, $data);
    }

    //Method untuk menghapus data petshop berdasarkan id
    public function deletePetshop($id)
    {
        //Menggunakan method delete() untuk menghapus data admin berdasarkan id
        return $this->delete($id);
    }
    
}
