<?php

namespace App\Http\Controllers;
use App\Models\penjual;


class PenjualController extends Controller {
    function index(){
        $data['list_penjual'] = Penjual::all();
        return view('penjual.index', $data);

    }
    function create(){
        return view('penjual.create');
    }

    function store(){
        $penjual = new Penjual;
        $penjual->nama = request('nama');
        $penjual->username = request('username');
        $penjual->email = request('email');
        $penjual->password = request('password');
        $penjual->save();

        return redirect('admin/pembeli')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Penjual $penjual){
        $data['penjual'] = $penjual;
        return view('penjual.show', $data);
    }

    function edit(Penjual $penjual){
        $data['penjual'] = $penjual;
        return view('penjual.edit', $data);
        
    }
    function update(Penjual $penjual){
        $penjual->nama = request('nama');
        $penjual->username = request('username');
        $penjual->email = request('email');
        if(request('password')) $penjual->password = request('password');
        $penjual->save();
        
        return redirect('admin/penjual')->with('warning', 'Data Berhasil Diedit');
    }

    function destroy(Penjual $penjual){
        $penjual->delete();

        return redirect('admin/penjual')->with('danger', 'Data Berhasil Dihapus');
    }
}