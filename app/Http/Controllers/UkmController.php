<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function about() {
        
            $name = 'ABC UKM';
            $tahun = 2015;
            $pendiri = 'Salsabilla Adisty';
    
        return view('ukms.about', compact('name', 'tahun', 'pendiri'), 
        [
            "title"=>"ABOUT"
        ]
    );
    }

    
    public function register () {
        return view('ukms.registrasi', 
        [
            "title" => "REGISTRASI"
        ]);
    }

    public function detail(Request $request) {
        $request->name;
        $request->npm;
        $request->ttl;
        $request->handphone;
        $request->email;
        $request->prodi;

        return view('ukms.detail', compact('request'),
        [
            "title"=>"DETAIL"
        ]);
        
    }
}