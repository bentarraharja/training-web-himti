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

    public function insertData($data) {
        // query database memasukan data atau tambah data
        $query = "INSERT INTO ".$this->table." VALUES (null, :nama, :npm, :email)";

        // menjalankan tambah data
        $this->db->query($query);

        // melakukan binding
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);

        // mengeksekusi tambah data
        $this->db->execute();

        // mengembalikan nilai, yaitu rowCount() yg ada di file Database.php di folder core
        return $this->db->rowCount();
    }

}