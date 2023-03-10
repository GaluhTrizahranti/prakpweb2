<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;



class TambahController extends Controller
{
    public function tambah ()
    {
        return view('sneat.html.tambah');
    }
    
    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        pesan::create($request->except(['_token', 'submit']));
        return redirect('/pesan');
    }
    
}
