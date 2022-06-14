<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CabangController extends Controller
{
    public function index()
    {
        $outlet = Cabang::all();
        return view('cabang', compact('outlet'));
    }
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'kode' => 'required',
            'nama' => 'required',
            'kota' => 'required'
        ]);
        if($validator->fails()){
            return back()->with('toast_error', $validator->messages()->all());
        }
        Cabang::create([
            'kode_cabang' => strtoupper($request->kode),
            'nama_cabang' => strtoupper($request->nama),
            'lokasi_kota' => strtoupper($request->kota)
        ]);

    return back()->with('success', 'Data Berhasil ditambahkan!');
    }
}
