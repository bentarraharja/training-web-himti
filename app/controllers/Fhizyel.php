<?php

class Fhizyel extends Controller {

    public function index(){
        $data['title'] = "Halaman Data Orang";
        $data['orang'] = $this->model('Fhizyel_model')->getAllOrang();


        $this->view('layouts/header', $data);
        $this->view('fhizyel/orang', $data);
        $this->view('layouts/footer');
    }


    public function nazareta(){
        $data['title'] = "Halaman Beranda";

        $this->view('layouts/header', $data);
        $this->view('fhizyel/beranda');
        $this->view('layouts/footer');
    }


    public function insert() {
        // function tambahDataOrang ada di file Mahasiswa_model.php di folder models
        if ($this->model('Fhizyel_model')->insertData($_POST) > 0) {
            // flasher
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/fhizyel');
            exit;
        } else {
            // flasher
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/fhizyel');
            exit;
        }
    }
}