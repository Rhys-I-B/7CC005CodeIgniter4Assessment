<?php

namespace App\Controllers;

// Add this line to import the class.
use CodeIgniter\Exceptions\PageNotFoundException;

class React extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('react/index.js')
            . view('templates/footer');
    }
}