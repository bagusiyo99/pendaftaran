<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class HomeJurusan extends Controller
{
    public function index()
{
    $jurusan = Jurusan::latest()->paginate(10); 

    $data = [
        'title' => 'Daftar Jurusan',
        'jurusan' => $jurusan,
        'content' => 'home/jurusan/index'
    ];

    return view('home.layouts.wrapper', $data);
}


        function detail ($id)
    {
    $data = [
        'jurusan' => Jurusan::find($id),
        'content'=> 'home/jurusan/show'
    ];
    return view('home.layouts.wrapper',$data);
    }

    
}

