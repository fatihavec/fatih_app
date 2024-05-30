<?php

namespace app\controllers;

class beranda extends basecontroller
{
    public function index()
    {
        echo view('part/header');
        echo view('part/topbar')
        echo view('part/navbar');
        echo view('beranda');
        echo view('part/footer');
    }
}