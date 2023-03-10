<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pesanan;

class CreatePesanan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            [
            'id_pesan' => '101',
            'nama_cust' => 'lala',
            'alamat' => 'jl.ayam',
             'no_iden' => '112233',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
             [
            'id_pesan' => '102',
            'nama_cust' => 'Annisa',
            'alamat' => 'jl.jawa',
             'no_iden' => '444666',
              'jenis_pesan' => 'VVIP room',
               'Harga' => '100000'
            ],
             [
            'id_pesan' => '103',
            'nama_cust' => 'Cabay',
            'alamat' => 'jl.Sawo',
             'no_iden' => '334455',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
             [
            'id_pesan' => '104',
            'nama_cust' => 'Ega',
            'alamat' => 'jl.ikan',
             'no_iden' => '334455',
              'jenis_pesan' => 'vip room',
               'Harga' => '125000'
            ],
             [
            'id_pesan' => '105',
            'nama_cust' => 'Dinda',
            'alamat' => 'jl.ikan',
             'no_iden' => '766777',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
             [
            'id_pesan' => '106',
            'nama_cust' => 'Kiran',
            'alamat' => 'jl.palem',
             'no_iden' => '888999',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
             [
            'id_pesan' => '107',
            'nama_cust' => 'Kire',
            'alamat' => 'jl.Durian',
             'no_iden' => '112233',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
             [
            'id_pesan' => '108',
            'nama_cust' => 'Kire',
            'alamat' => 'jl.Cerme',
             'no_iden' => '5566678',
              'jenis_pesan' => 'standart room',
               'Harga' => '50000'
            ],
        ];
        foreach($pesanan as $key => $value){
            Pesanan::create($value);
        }
    }        
    
}
