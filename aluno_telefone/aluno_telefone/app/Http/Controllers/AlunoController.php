<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function add(Request $request)
    {
        return view('add');
    }
}
