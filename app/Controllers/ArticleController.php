<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class ArticleController
{
    public function index()
    {
        return view('index');
    }
}
