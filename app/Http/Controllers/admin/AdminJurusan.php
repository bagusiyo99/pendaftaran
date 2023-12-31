<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Models\Jurusan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class AdminJurusan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Infromasi',
            'jurusan' => Jurusan::get(),
            'content' => 'operator/jurusan/index'
        ];
        return view ('operator.jurusan.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Infromasi',
            'content' => 'operator/jurusan/add'
        ];
        
        return view ('operator.jurusan.add', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            ], [
        'judul.required' => 'Nama Lengkap WAJIB DIISI',
        'deskripsi.required' => 'Deskripsi WAJIB DIISI',
        'gambar.required' => 'gambar WAJIB DIISI',
        'gambar.mimes' => 'Hanya menerima gambar PDF, Word, atau Excel',
        'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB',
        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/jurusan/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Jurusan::create ($data);
                    return redirect ('/operator/jurusan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Infromasi',
            'jurusan' => Jurusan::find ($id),
            'content' => 'operator/jurusan/add'
        ];
        return view ('operator.jurusan.add', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $jurusan = Jurusan::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',

        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($jurusan->gambar  != null){
                unlink($jurusan->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/jurusan/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $jurusan ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $jurusan->update($data);
                    return redirect ('/operator/jurusan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find ($id);

            if($jurusan->gambar != null){
            unlink($jurusan->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $jurusan->delete();
        return redirect ('/operator/jurusan');
        
    }
}

