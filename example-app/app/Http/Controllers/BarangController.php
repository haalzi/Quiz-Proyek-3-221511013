<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('dataBarang', compact('data'));

    }
    public function insertBarang(Request $request){
        $NamaDiri = ' Hafidzon';
        $id = 1;
        Barang::create([
            'KodeBarang'=> 'BRG221511013 ' . $id,
            'NamaBarang'=> $request->input('NamaBarang') . $NamaDiri,
            'Satuan'=> $request->input('Satuan'),
            'HargaSatuan'=> $request->input('HargaSatuan'),
            'Stok'=> $request->input('Stok'),
        ]);
        return redirect()->route('barang.index');
    }
    public function tampilBarang($KodeBarang){

        $data = Barang::find($KodeBarang);
        return view('barang', compact('data'));
    }
    public function editdata(Request $request, $KodeBarang){
        $data = Barang::find($KodeBarang);
        $data->update($request->all());

        return redirect()->route('barang')->with('success', 'Data berhasil di update');
    }


}