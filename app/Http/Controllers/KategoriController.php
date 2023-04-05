<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();
        return view('kategori.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_kategori' => 'required'
        ]);
        $insert = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        if ($insert) {
            return redirect('kategori')->with('success', 'Berhasil menambah kategori');
        }else{
            return redirect('create')->withErrors('Gagal menambahkan kategori');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::where(['id' => $id])->first();
        // dd($data);
        return view('kategori/edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama_kategori' => 'required'
        ]);
        $update = Kategori::where(['id'=> $id])->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        if ($update) {
            return redirect('kategori')->with('success', 'Berhasil edit kategori');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $delete = Kategori::find($id)->delete();
        return redirect('kategori')->with('success', 'Berhasil menghapus kategori');
    }
}
