<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index()
{
    $data = pesan::all();
    return view('sneat.html.pesan', ['data' => $data])->with([
        'user' => Auth::user(),
    ]);
}
public function edit (string $id)
    {
        $data = pesan::where('id_pesan', $id)->first();
        return view('sneat.html.edit')->with('data', $data);
    }

public function update(Request $request, string $id)
    {
        $request->validate([
            'id_pesan'=>'required',
            'nama_cust'=>'required',
            'alamat'=>'required',
            'no_iden'=>'required|numeric',
            'jenis_pesan'=>'required',
            'Harga'=>'required|numeric',
        ],[
            'id_pesan.required'=>'id_pesan wajib diisi',
            'nama_cust.required'=>'nama_cust wajib diisi',
            'alamat.required'=>'jenis_pesan wajib diisi',
            'no_iden.numeric'=>'jenis_pesan wajib dalam angka',
            'jenis_pesan.required'=>'No.Hp wajib diisi',
            'Harga.numeric'=>'No.Hp wajib dalam angka',
        ]);
        $data = [
            'id_pesan'=>$request->id_pesan,
            'nama_cust'=>$request->nama_cust,
            'alamat'=>$request->alamat,
            'no_iden'=>$request->no_iden,
            'jenis_pesan'=>$request->jenis_pesan,
            'Harga'=>$request->Harga,
        ];
        pesan::where('id_pesan',$id)->update($data);
        return redirect()->to('sneat.html.pesan')->with('success','Berhasil melakukan update data');
    }

public function destroy(string $id)
    {
        pesan::where('id_pesan', $id)->delete();
        return redirect('pesan')->with('flash_massage','Data Terhapus');
    }
}
