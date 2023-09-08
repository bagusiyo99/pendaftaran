<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Response;

class HomePendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        // 'pendaftaran' => Pendaftaran::max(1)->get(),
        'content'=> 'home/pendaftaran/index'
        
    ];
    return view('home.layouts.wrapper',$data);
    }

         function send  (Request $request)
    {
        $data = $request -> validate ([
            'nama' => 'required',
            'email' => 'required ',
            'alamat' => 'required',
            'telpon' => 'required ',
            'pesan' => 'required ',
            // 'gambar' => 'required',
        ],
      [
                'nama.required'=> 'Nama Lengkap WAJIB DIISI',
                'email.required'=> 'Email WAJIB DIISI',
                'alamat.required'=> 'Alamat WAJIB DIISI',
                'pesan.required'=> 'Deskripsi WAJIB DIISI',
                'gambar.required'=> 'Bulti Pembayaran WAJIB DIISI',
                'telpon.required'=> 'No Telpon Atau Whatsaap WAJIB DIISI',

            ]);
       

        //         // upload gambar
        // if ($request -> hasFile('gambar')) {
        //     $gambar = $request->file('gambar');
        //     $file_name = time ().'-'. $gambar -> getClientOriginalName ();

        //     $storage = 'uploads/pendaftaran/';
        //     $gambar->move ($storage, $file_name);
        //     $data ['gambar'] =$storage .$file_name;
        // }else {
        //     $data ['gambar'] = null;
        // }

        // cara manual 
                // $pendaf = new Pendaftaran();
                // $pendaf->nama = $request->input('nama');
                // $pendaf->jenis_kelamin = $request->input('eam');
                // $pendaf->nomor_telepon = $request->input('alamat');
            $pendaftaran = Pendaftaran::count('id');

            if ($pendaftaran >= 5) {
                // return redirect()->back()->with('error', 'Pendaftaran Di tutup.');
                        Alert::error ('Gagal', 'Pendaftaran Gagal');
                        return redirect('/penuh');
            }
        Pendaftaran::create($data);
    //     $pdf = PDF::loadView('kwitansi', ['pendaftaran' => $pendaftaran]);
    // return $pdf->download('kwitansi_' . $pendaftaran->id . '.pdf');
        Alert::success('sukses', 'Pendaftaran Sukses');
return redirect('/sukses')->with('nama', $request->input('nama'));
        

    }

public function downloadKwitansi($nama)
{
   
    // Make sure the variable $nama is correctly defined as a method parameter

    $namax = $nama; // Use the provided $nama parameter

    $pendaftaran = Pendaftaran::where('nama', $namax)->first();


      $pdf = PDF::loadView('home.pendaftaran.kwitansi', compact('pendaftaran'));

  $pdfPath = storage_path('app/public/kwitansi_' . $pendaftaran->namax . '.pdf');
  $pdf->save($pdfPath);

 $downloadFileName = 'kwitansi_' . $pendaftaran->namax . '.pdf';
// return view('home.pendaftaran.kwitansi');
    return response()->download($pdfPath, $downloadFileName)->deleteFileAfterSend(true);
}

}
