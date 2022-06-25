<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('ruangan', compact('ruangan'));
    }

    public function create(Request $request)
    {
        dd('oke');
    }
}
