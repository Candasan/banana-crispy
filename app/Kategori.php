<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "penjualan";
    protected $primarykey = "id";
    protected $fillable = ['nama_pel', 'nama_topp', 'harga', 'quantity', 'total'];


    
}
