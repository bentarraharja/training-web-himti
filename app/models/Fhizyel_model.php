<?php


class Fhizyel_model {
     // menginisialisasikan nama tabel dan db
     private $table = 'orang';
     private $db;

      // menginstansiasikan class Database yang ada di folder core
    public function __construct()
    {
        $this->db = new Database;
    }

    // melakakukan query mengambil Seluruh data orang untuk ditampilkan
    public function getAllOrang(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

}