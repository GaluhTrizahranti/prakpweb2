<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    // protected $fillable = ['id_pesan','nama_cust','alamat','no_iden','jenis_pesan','Harga'];
    protected $table = 'tb_pesanan';
    public $timestamps = false;
}
