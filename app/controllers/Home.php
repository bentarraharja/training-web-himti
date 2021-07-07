<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Halaman Home";


        $this->view('layouts/header', $data);
        $this->view('home/index');
        $this->view('layouts/footer');
        
    }

    public function coba(){
        echo "controller home method coba";
    }
}
