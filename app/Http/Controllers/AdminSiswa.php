<?php

namespace App\Http\Controllers;

use App\Models\SiswaBaru;
use Illuminate\Http\Request;

class AdminSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Daftar',
            'siswa1' => SiswaBaru::get(),
            'content' => 'admin/siswa1/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

       public function show ($id)
    {
    $data = [
        'siswa1' => SiswaBaru::find($id),
        'content'=> 'admin/siswa1/show'
    ];
    return view('admin.layouts.wrapper',$data);
    }


    //     public function export() 
    // {
    //     return Excel::download(new PendaftaransExport ,'pendaftaran-'.Carbon::now()->timestamp. '.xlsx');
    // }


}