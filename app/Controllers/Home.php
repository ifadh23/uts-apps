<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function prodi(): string
    {
        return view('pages/data-prodi');
    }

    public function mahasiswa(): string
    {
        return view('pages/data-mahasiswa');
    }

    public function dosen(): string
    {
        return view('pages/data-dosen');
    }
}
