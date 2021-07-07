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
}