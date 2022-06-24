<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        return view('ruangan');
    }

    public function create(Request $request)
    {
        dd('oke');
    }
}
