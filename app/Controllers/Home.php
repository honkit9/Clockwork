<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function main()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT id,name FROM main');
        $results = $query->getResult();
       
        return view('main',compact('results'));
    }
}
