<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarPesanan extends Model
{
    protected $table = "penjualan";
    //protected $primarykey = "";
    protected $fillable = ['nama_pel', 'nama_topp', 'harga', 'quantity', 'total'];
}
