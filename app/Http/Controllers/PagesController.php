<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        return view('index');
    }

    public function about () {
        $name = 'Phuc';
        $names = array('Phuc', 'Peter', "Messi", 'David');
        return view('about', [
            'names' => $names
        ]);
    }
}
