<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pesanan extends Model
{
    use HasFactory;
    
    protected $table = 'pesanan';
    protected $guarded = [];
}
