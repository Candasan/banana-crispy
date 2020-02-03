<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
        $nama_pel = $req->input('nama_pel');
        $nama_topp = $req->input('nama_topp');
        $harga = $req->input('harga');
        $quantity = $req->input('quantity');
        $total = $req->input('total');

        $data = array('nama_pel'=>$nama_pel, 
                        "nama_topp"=>$nama_topp,
                        "harga"=>$harga,
                        "quantity"=>$quantity,
                        "total"=>$total);

        DB::table('penjualan')->insert($data);
        
    }

}
