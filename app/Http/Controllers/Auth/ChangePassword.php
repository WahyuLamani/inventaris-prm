<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePassword extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'passwordLama' => 'required',
            'passwordBaru' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all());
        }
        $user = Auth::user();
        if (Hash::check($request->passwordLama, $user->password)) { 
           $user->fill([
            'password' => Hash::make($request->passwordBaru)
            ])->save();
            return back()->with('success', 'Password Berhasil Di ubah');
        } else {
            return back()->with('errors', 'Password Lama Salah');
        }
    }
}
