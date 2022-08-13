<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user(){
    	$tambah=DB::table('tambah')->select('kategori')->groupBy('kategori')->get();
    	return view('user',['tambah'=>$tambah]);
	}

	public function kategori($kategori){
    	$tambah=DB::table('tambah')->where('kategori',$kategori)->get();
    	return view('kategori',['tambah'=>$tambah]);
	}
}
