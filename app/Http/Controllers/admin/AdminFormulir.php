<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Formulir;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFormulir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Formulir',
            'formulir' => Formulir::get(),
            'content' => 'operator/formulir/index'
        ];
        return view ('operator.formulir.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Formulir',
            'content' => 'operator/formulir/add'
        ];
        
        return view ('operator.formulir.add', $data );
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
            // 'icon' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:5120', // Hanya menerima PDF, Word, dan Excel dengan ukuran maksimal 5 MB (5120 KB)
          ], [
        'judul.required' => 'Nama Lengkap WAJIB DIISI',
        'deskripsi.required' => 'Deskripsi WAJIB DIISI',
        'file.required' => 'File WAJIB DIISI',
        'file.mimes' => 'Hanya menerima file PDF, Word, atau Excel',
        'file.max' => 'Ukuran file tidak boleh lebih dari 5 MB',
        ]);

        // upload file
        if ($request -> hasFile('file')) {
            $file = $request->file('file');
            $file_name = time ().'-'. $file -> getClientOriginalName ();

            $storage = 'uploads/formulir/';
            $file->move ($storage, $file_name);
            $data ['file'] =$storage .$file_name;
        }else {
            $data ['file'] = null;
        }

                    Alert::alert('Sukses', 'Data Berhasil Ditambah');
                    Formulir::create ($data);
                    return redirect ('/operator/formulir');

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
            'title' => 'Edit Formulir',
            'formulir' => Formulir::find ($id),
            'content' => 'operator/formulir/add'
        ];
        return view ('operator.formulir.add', $data ); 
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
        $formulir = Formulir::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',

        ]);

        // upload file
        if ($request -> hasFile('file')) {
            if($formulir->file  != null){
                unlink($formulir->file);
            }


            $file = $request->file('file');
            $file_name = time ().'-'. $file -> getClientOriginalName ();

            $storage = 'uploads/formulir/';
            $file->move ($storage, $file_name);
            $data ['file'] =$storage .$file_name;
        }else {
            $data ['file'] = $formulir ->file;
        }

                    $formulir->update($data);
                    return redirect ('/operator/formulir');
                    Alert::alert('Sukses', 'Data Berhasil Diedit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulir = Formulir::find ($id);

            if($formulir->file != null){
            unlink($formulir->file);
                }

        $formulir->delete();
        Alert::alert('Sukses', 'Data Berhasil Dihapus');
        return redirect ('/operator/formulir');

    }
}

