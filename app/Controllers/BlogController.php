<?php

namespace App\Controllers;

class BlogController{

    public function index()
    {
        echo "Home page";
    }

    public function show(int $id)
    {
        echo "page Post " . $id;
    }

}