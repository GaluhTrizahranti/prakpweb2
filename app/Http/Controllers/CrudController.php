<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;

class CrudController extends Controller
{
    // public function index(Request $request)
    // {
    //     $katakunci = $request->katakunci;
    //     $jumlahbaris = 4;
    //     if(strlen($katakunci)){
    //         $data = mahasiswa::where('nim','like',"%$katakunci%")
    //         ->orwhere('nama','like',"%$katakunci%")
    //         ->orwhere('jurusan','like',"%$katakunci%")
    //         ->orwhere('semester','like',"%$katakunci%")
    //         ->orwhere('nohp','like',"%$katakunci%")
    //         ->orwhere('alamat','like',"%$katakunci%")
    //         ->paginate($jumlahbaris);
    //     }else{
    //         $data = mahasiswa::orderBy('nim','desc')->paginate($jumlahbaris);
    //     }
    //     return view('mahasiswa.manage')->with('data', $data);
    // }
    
    public function create()
    {
        return view('sneat.html.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       \Illuminate\Support\Facades\Session::flash('id_pesan',$request->id_pesan);
       \Illuminate\Support\Facades\Session::flash('nama_cust',$request->nama_cust);
       \Illuminate\Support\Facades\Session::flash('alamat',$request->alamat);
       \Illuminate\Support\Facades\Session::flash('no_iden',$request->no_iden);
       \Illuminate\Support\Facades\Session::flash('jenis_pesan',$request->jenis_pesan);
       \Illuminate\Support\Facades\Session::flash('Harga',$request->Harga);

        $request->validate([
            'id_pesan'=>'required|numeric|unique:mahasiswa,id_pesan',
            'nama_cust'=>'required',
            'alamat'=>'required',
            'no_iden'=>'required|numeric',
            'jenis_pesan'=>'required',
            'Harga'=>'required',
        ],[
            'id_pesan.required'=>'ID Pesan wajib diisi',
            'id_pesan.numeric'=>'ID Pesan wajib dalam angka',
            'id_pesan.unique'=>'ID Pesan yang diisikan sudah ada',
            'nama_cust.required'=>'Nama Customer wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
            'no_iden.required'=>'no_iden wajib diisi',
            'no_iden.numeric'=>'no_iden wajib dalam angka',
            'jenis_pesan.required'=>'No.Hp wajib diisi',
            'Harga.required'=>'Alamat wajib diisi',
        ]);
        $data = [
            'id_pesan'=>$request->id_pesan,
            'nama_cust'=>$request->nama_cust,
            'alamat'=>$request->alamat,
            'no_iden'=>$request->no_iden,
            'jenis_pesan'=>$request->jenis_pesan,
            'Harga'=>$request->Harga,
        ];
        tambah::create($data);
        return redirect()->to('tambah')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $data = p::where('nim',$id)->first();
    //     return view('mahasiswa.edit')->with('data', $data);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'nama'=>'required',
    //         'jurusan'=>'required',
    //         'semester'=>'required|numeric',
    //         'nohp'=>'required|numeric',
    //         'alamat'=>'required',
    //     ],[
    //         'nama.required'=>'Nama wajib diisi',
    //         'jurusan.required'=>'Jurusan wajib diisi',
    //         'semester.required'=>'Semester wajib diisi',
    //         'semester.numeric'=>'Semester wajib dalam angka',
    //         'nohp.required'=>'No.Hp wajib diisi',
    //         'nohp.numeric'=>'No.Hp wajib dalam angka',
    //         'alamat.required'=>'Alamat wajib diisi',
    //     ]);
    //     $data = [
    //         'nama'=>$request->nama,
    //         'jurusan'=>$request->jurusan,
    //         'semester'=>$request->semester,
    //         'nohp'=>$request->nohp,
    //         'alamat'=>$request->alamat,
    //     ];
    //     mahasiswa::where('nim',$id)->update($data);
    //     return redirect()->to('manage')->with('success','Berhasil melakukan update data');
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     mahasiswa::where('nim', $id)->delete();
    //     return redirect()->to('manage')->with('success', 'Berhasil menghapus data');
    // }
}
