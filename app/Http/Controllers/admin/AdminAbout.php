<?php
/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;



class AdminAbout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen About',
            'about' => About::first(),
            'content' => 'operator/about/index'
        ];
    return view ('operator.about.index', $data ); 
   }




public function update(Request $request)
{   
    $about = About::first();

    $data = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi gambar

    ]);

             // upload file
        if ($request -> hasFile('logo')) {
              if($about->logo  != null){
                unlink($about->logo);
            }

            $logo = $request->file('logo');
            $file_name = time ().'-'. $logo -> getClientOriginalName ();

            $storage = 'uploads/about/';
            $logo->move ($storage, $file_name);
            $data ['logo'] =$storage .$file_name;
        }else {
            $data ['logo'] = null;
        }

                // upload gambar
        if ($request -> hasFile('gambar')) {
              if($about->gambar  != null){
                unlink($about->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/about/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

  

    Alert::success('sukses', 'Data berhasil diupdate');
    $about->update($data);
    return redirect('/operator/about');
}


}
