<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	//Fungsi Sistem Admin
    public function index(){
    	return view('admin');
    }

    public function list(){
    	$tambah = DB::table('tambah')->get();
    	return view('list',['tambah'=>$tambah]);
	}

    public function tambah(){
    	return view('tambah');
    }

    public function simpan(Request $req){
    	DB::table('tambah')->insert(
    		['judul'=> $req->judul,
    		 'deskripsi'=> $req->deskripsi,
             'kategori' => $req->kategori
    		]
    	);

    	return redirect('/list');
    }

    public function hapus($id){
    	DB::table('tambah')->where('id',$id)->delete();
    	return redirect('/list');
    }

    public function edit($id){
    	$tambah=DB::table('tambah')->where('id',$id)->get();
    	return view('edit',['tambah'=>$tambah]);
    }

    public function updet(Request $req){
    	DB::table('tambah')->where('id',$req->id)->update(
    		['judul'=> $req->judul,
    		 'deskripsi'=> $req->deskripsi
    		]
    	);

    	return redirect('/list');
    }

    public function daftar(){
    	$users = DB::table('users')->get();
    	return view('daftar',['users'=>$users]);
    }

    public function hapusdaf($id){
    	DB::table('users')->where('id',$id)->delete();
    	return redirect('/daftar');
    }

    public function editdaf($id){
    	$users=DB::table('users')->where('id',$id)->get();
    	return view('editdaf',['users'=>$users]);
    }

    public function updetdaf(Request $req){
    	DB::table('users')->where('id',$req->id)->update(
    		['name'=> $req->name,
    		'email'=> $req->email
    		]
    	);

    	return redirect('/daftar');
    }
}
