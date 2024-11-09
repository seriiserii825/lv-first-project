<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            'PHP',
            'Laravel',
            'JavaScript',
            'Vue.js',
            'React.js',
            'Angular.js',
        ];
        return view('index', compact('categories'));
    }
}
