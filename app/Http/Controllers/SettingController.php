<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Settings;

class SettingController extends Controller
{
    public function create ()
    {
        return view('operator.setting_form');
    }

    public function store  (Request $request)
    {
        $dataSettings = $request->except('_token');


        // if ($request->hasFile('app_logo')){
        //     $request->validate([
        //         'app_logo' => 'required|mimes:jpg,png,jpeg|max:5000'
        //     ]);
        //     $dataSettings['app_logo'] = $request->file('app_logo')->store('public');
        // }

        // if ($request->hasFile('app_gambar')){
        //     $request->validate([
        //         'app_gambar' => 'required|mimes:jpg,png,jpeg|max:5000'
        //     ]);
        //     $dataSettings['app_gambar'] = $request->file('app_gambar')->store('public');
        // }


        // if ($request->hasFile('foto')){
        //     $dataSettings['foto'] = $request->file('foto')->store('public');
        // }

            if ($request -> hasFile('foto')) {
                $foto = $request->file('foto');
                $file_name = time ().'-'. $foto -> getClientOriginalName ();

                $storage = 'uploads/logo/';
                $foto->move ($storage, $file_name);
                $dataSettings ['foto'] =$storage .$file_name;
            }else {
                $dataSettings ['foto'] = null;
            }

            if ($request -> hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $file_name = time ().'-'. $gambar -> getClientOriginalName ();

                $storage = 'uploads/logo/';
                $gambar->move ($storage, $file_name);
                $dataSettings ['gambar'] =$storage .$file_name;
            }else {
                $dataSettings ['gambar'] = null;
            }

            
        settings()->set($dataSettings);
        flash ('Data Berhasil Disimpan');
        return back();
    }
}

// {{-- 109 tutor --}}
