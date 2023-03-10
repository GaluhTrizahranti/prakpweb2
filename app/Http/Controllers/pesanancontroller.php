<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;

class pesanancontroller extends Controller
{
    public function index(){
        return view('sneat.html.tambah');
    }

}

