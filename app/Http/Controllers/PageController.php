<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function showuser(string $id)
    {
        return view('about', compact('id'));
    }
}
