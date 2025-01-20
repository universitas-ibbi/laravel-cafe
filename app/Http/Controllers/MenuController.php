<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view("menu.index");
    }

    public function simpan(Request $request){

        $request->file('gambar')->store('images','public');

        \App\Models\Menu::create([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "harga" => $request->harga,
            "gambar" => $request->file('gambar')->hashName()
        ]);

        return redirect()->route("menu.index");
    }
}
