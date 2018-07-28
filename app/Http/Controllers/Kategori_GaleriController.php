<?php

namespace App\Http\Controllers;

use App\Kategori_Galeri;
use Illuminate\Http\Request;

class Kategori_GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_galeris = Kategori_Galeri::all();
        return view('admin.kategori_galeri.index', compact('kategori_galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
        ]);

        $kategori_galeris = new Kategori_Galeri();
        $kategori_galeris->nama_kategori_galeri = $request->nama;

        $kategori_galeris->save();

        session()->flash('message', 'Sukses Memasukkan Kategori Galeri, ' . $request->nama);
        return redirect('/admin/master-kategori-galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori_Galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Galeri $kategori_galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori_Galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_galeri = Kategori_Galeri::find($id);
        return view('admin.kategori_galeri.update', compact('kategori_galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori_Galeri $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
        ]);

        $kategori_galeris = Kategori_Galeri::find($id);
        $kategori_galeris->nama_kategori = $request->nama;

        $kategori_galeris->save();

        session()->flash('message', 'Sukses Mengupdate Kategori_Galeri Kegiatan, ' . $request->nama);
        return redirect('/admin/master-kategori-galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori_Galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_galeri = Kategori_Galeri::find($id);
        $kategori_galeri->delete();

        session()->flash('delete', 'Sukses Menghapus Data Kegiatan');
        return redirect('/admin/master-kategori-galeri');
    }
}
