<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Barang;

class BarangController extends Controller
{
   public function index()
    {
    	$barang = DB::table('barang')->paginate(10);
    	return view('barang',['barang' => $barang]);

    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'berat' => $request->berat
        ]);
        return redirect('/barang');

    }
	public function edit($id)
	{
		$barang = DB::table('barang')->where('id',$id)->get();
		return view('edit',['barang' => $barang]);

	}

	public function update(Request $request)
	{
		DB::table('barang')->where('id',$request->id)->update([
			'kode' => $request->kode,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'berat' => $request->berat
		]);
		return redirect('/barang');
	}

    public function hapus($id)
    {
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/barang');
    }
}
